<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\News;
use AppBundle\Entity\BlacklistIp;

class AdminController extends Controller {

    /**
     * @Route("/admin", name="adminpage")
     */
    public function indexAction(Request $request) {
        $user = $this->getUser();
        return $this->render('AppBundle:Admin:index.html.twig', array(''
                    . 'user' => $user));
    }

    /**
     * @Route("/admin/users", name="users")
     */
    public function listUsersAction() {
        $userManager = $this->get('fos_user.user_manager');
        $user = $this->getUser();
        $users = $userManager->findUsers();
        return $this->render('AppBundle:Admin:users.html.twig', array(''
                    . 'users' => $users));
    }

    /**
     * @Route("/admin/registration", name="registration")
     */
    public function registerAction(Request $request) {
        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->get('fos_user.registration.form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->createUser();
        $user->setEnabled(true);
        $user->addRole('ROLE_ADMIN');

        $form = $formFactory->createForm();
        $form->setData($user);


        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $userManager->updateUser($user);
            }
        }

        return $this->render('AppBundle:Admin:register.html.twig', array(''
                    . 'form' => $form->createView()));
    }

    /**
     * @Route("/admin/addnews/", name="createNews")
     */
    public function addNewsAction(Request $request) {
        $current_logged_in = $this->getUser();
        $news = new News();
        $news->setUpdatedAt(new \DateTime('now'));
        $news->setCreatedAt(new \DateTime('now'));
        $news->setAuthor($current_logged_in);
        $form = $this->createFormBuilder($news)
                ->add('title', 'text', array('label' => "Заголовок"))
                ->add('text', 'textarea', array('label' => "Текст новости"))
                ->add('picture', 'text', array('label' => 'Картинка(url)'))
                ->add('author', 'hidden')
                ->add('submit', 'submit', array('label' => 'Добавить'))
                ->getForm();
        $form->setData($news);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($news);
                $em->flush();
                $msg = "Новость была успешно добавлена!";
                return $this->render("AppBundle:Admin:createnews.html.twig", array(''
                            . 'message' => $msg));
            }
        }
        return $this->render("AppBundle:Admin:createnews.html.twig", array(''
                    . 'form' => $form->createView()));
    }

    /**
     * @Route("/admin/users/edit/{id}", name ="edit")
     */
    public function editAction(Request $request, $id) {
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserBy(array('id' => $id));
        $current_logged_in = $this->getUser();
        if ($user->hasRole('ROLE_SUPER_ADMIN')) {
            $error = "У вас нет прав сделать это";
            return $this->render('AppBundle:Admin:error.html.twig', array(''
                        . 'error' => $error));
        }
        if (!$user) {
            $error = "Пользователь не найден";
            return $this->render('AppBundle:Admin:error.html.twig', array(''
                        . 'error' => $error));
        }
        $form = $this->createFormBuilder($user)
                ->add('username', 'text', array('label' => 'Имя пользователя'))
                ->add('email', 'email', array('label' => 'Электронный адрес'))
                ->add('submit', 'submit', array('label' => 'Сохранить'))
                ->getForm();
        $form->setData($user);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $userManager->updateUser($user);
                $message = \Swift_Message::newInstance()
                        ->setSubject('Администрация embodycode')
                        ->setFrom('admin@embodycode.com')
                        ->setTo($user->getEmail())
                        ->setBody(
                        '<h2>Добрый день!</h2> Вас приветствует администрация портала. '
                        . 'Уважаемый пользователь, ваши данные были обновлены '
                        . 'администратором ' . $current_logged_in->getUsername(), 'text/html'
                );
                $this->get('mailer')->send($message);
                return $this->redirectToRoute('adminpage');
            }
        }
        return $this->render('AppBundle:Admin:edit.html.twig', array(
                    'form' => $form->createView(),
                    'id' => $id));
    }

    /**
     * @Route("/admin/delete/{username}", name="delete")
     */
    public function deleteAction($username) {
        $userManager = $this->get('fos_user.user_manager');
        $current_logged_in = $this->getUser();

        $user = $userManager->findUserByUsername($username);
        if (!$user) {
            $error = "Пользователь не найден";
            return $this->render('AppBundle:Admin:error.html.twig', array(''
                        . 'error' => $error));
        }
        if ($user->hasRole('ROLE_SUPER_ADMIN')) {
            $error = "У вас нет прав сделать это";
            return $this->render('AppBundle:Admin:error.html.twig', array(''
                        . 'error' => $error));
        }

        if ($user == $current_logged_in) {
            $error = "Вы не можете удалить самого себя";
            return $this->render('AppBundle:Admin:error.html.twig', array(''
                        . 'error' => $error));
        } else
            $user = $userManager->deleteUser($user);
        return $this->redirectToRoute('adminpage');
    }

    /**
     * @Route("/admin/changepassword/{id}", name="changepass")
     */
    public function changePassAaction($id, Request $request) {
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserBy(array('id' => $id));
        $current_logged_in = $this->getUser();

        if (!$user) {
            $error = "Пользователь не найден";
            return $this->render('AppBundle:Admin:error.html.twig', array(''
                        . 'error' => $error));
        }

        if ($request->getMethod() == "POST") {
            if (($user->hasRole('ROLE_SUPER_ADMIN')) && ((!$current_logged_in->hasRole('ROLE_SUPER_ADMIN')))) {
                $error = "У вас нет прав сделать это";
                return $this->render('AppBundle:Admin:error.html.twig', array(''
                            . 'error' => $error));
            }
            $newpass = $request->get('newpass');
            $user->setPlainPassword($newpass);

            $userManager->updateUser($user);
            return $this->redirectToRoute('adminpage');
        }
        return $this->render('AppBundle:Admin:changepass.html.twig', array(''
                    . 'id' => $id, ''
                    . 'user' => $user));
    }

    /**
     * @Route("/admin/ban", name="banuser")
     */
    public function banAction(Request $request) {
        $userManager = $this->get('fos_user.user_manager');
        $current_logged_in = $this->getUser();
        if ($request->getMethod() == "POST") {
            $username = $request->get('username');
            $user = $userManager->findUserByUsername($username);
            if (!$user) {
                $error = "Пользователь с именем $username не найден";
                return $this->render("AppBundle:Admin:error.html.twig", array(''
                            . 'error' => $error));
            }
            if ($user->isLocked()) {
                $error = "Пользователь $user уже заблокирован!";
                return $this->render("AppBundle:Admin:error.html.twig", array(''
                            . 'error' => $error));
            }
            if (($user->hasRole('ROLE_SUPER_ADMIN')) && (!$current_logged_in->hasRole('ROLE_SUPER_ADMIN'))) {
                $error = "У вас нет прав сделать это";
                return $this->render('AppBundle:Admin:error.html.twig', array(''
                            . 'error' => $error));
            }
            $user->setLocked(1);
            $userManager->updateUser($user);
            $msg = "Вы заблокировали пользователя $user";
            return $this->render('AppBundle:Admin:ban.html.twig', array(''
                        . 'msg' => $msg));
        }
        return $this->render('AppBundle:Admin:ban.html.twig');
    }

    /**
     * @Route("/admin/banlist", name="banlist")
     */
    public function banlistAction() {
        $query = $this->getDoctrine()->getEntityManager()
                        ->createQuery(
                                'SELECT u FROM AppBundle:User u WHERE u.locked LIKE :locked'
                        )->setParameter('locked', 1);

        $users = $query->getResult();
        if (!$users) {
            $error = "Заблокированных пользователей нет";
            return $this->render('AppBundle:Admin:error.html.twig', array(''
                        . 'error' => $error));
        }
        return $this->render('AppBundle:Admin:banlist.html.twig', array(''
                    . 'users' => $users));
    }

    /**
     * @Route("/admin/unban/{id}", name="unban")
     */
    public function unbanAction($id) {
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserBy(array('id' => $id));
        if (!$user) {
            $error = "Пользователь не найден";
            return $this->render('AppBundle:Admin:error.html.twig', array(''
                        . 'error' => $error));
        }
        if (!$user->isLocked()) {
            $error = "Аккаунт не заблокирован";
            return $this->render('AppBundle:Admin:error.html.twig', array(''
                        . 'error' => $error));
        }
        $user->setLocked(0);
        $userManager->updateUser($user);

        return $this->render('AppBundle:Admin:unban.html.twig', array(''
                    . 'id' => $id, ''
                    . 'user' => $user));
    }

    /**
     * @Route("/admin/news/{id}", name="editnews")
     */
    public function editNewsAction($id, Request $request) {
        $current_logged_in = $this->getUser();
        $news_found = $this->getDoctrine()->getRepository("AppBundle:News")
                ->findOneBy(array('id' => $id));
        if (!$news_found) {
            $error = "Новость не найдена";
            return $this->render("AppBundle:Admin:error.html.twig", array(''
                        . 'error' => $error));
        }
        $form = $this->createFormBuilder($news_found)
                ->add('title', 'text', array('label' => 'Заголовок'))
                ->add('text', 'textarea', array('label' => 'Текст новости'))
                ->add('picture', 'text', array('label' => 'Картинка новости'))
                ->add('submit', 'submit', array('label' => 'Сохранить'))
                ->getForm();
        $form->setData($news_found);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $news_found->setUpdatedAt(new \DateTime('now'));
                $news_found->setLastUpdatedBy($current_logged_in);
                $news_found->setAuthor($news_found->getAuthor());
                $news_found->setCreatedAt($news_found->getCreatedAt());
                $em = $this->getDoctrine()->getManager();
                $em->persist($news_found);
                $em->flush();
                $msg = "Новость была обновлена!";

                return $this->redirectToRoute('homepage');
            }
        }

        return $this->render('AppBundle:Admin:newsedit.html.twig', array(''
                    . 'form' => $form->createView(), ''
                    . 'id' => $id));
    }

    /**
     * @Route("/admin/banip/", name="banip")
     */
    public function banIPAction(Request $request) {
        $current_logged_in = $this->getUser();
        $blackIp = new BlacklistIp();
        $form = $this->createFormBuilder($blackIp)
                ->add('ip', 'text', array('label' => "IP-адрес"))
                ->add('reason', 'text', array('label' => "Причина бана"))
                ->add('unbanDate', 'datetime', array('label' => 'Дата разбана'))
                ->add('submit', 'submit', array('label' => 'Добавить'))
                ->getForm();
        $form->setData($blackIp);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($blackIp);
                $em->flush();
                $msg = "IP адрес был успешно заблкирован";
                return $this->render("AppBundle:Admin:ipban.html.twig", array(''
                            . 'msg' => $msg));
            }
        }
        return $this->render("AppBundle:Admin:ipban.html.twig", array(''
                    . 'form' => $form->createView()));
    }

}
