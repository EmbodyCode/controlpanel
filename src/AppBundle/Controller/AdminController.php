<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\News;

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
     * @Route("/admin/registration", name="reg")
     */
    public function regUserAction(Request $request) {
        if ($request->getMethod() == "POST") {
            $userManager = $this->get('fos_user.user_manager');
            $user = $userManager->createUser();
            $username = $request->get('username');
            $check_user_is_exist = $userManager->findUserByUsername($username);
            if ($check_user_is_exist) {
                throw $this->createAccessDeniedException('User is exist!');
            }
            $password = $request->get('password');
            $email = $request->get('email');
            $createdAt = new \DateTime('now');

            $user->setUsername($username);
            $user->setEmail($email);
            $user->setPlainPassword($password);
            $user->setCreatedAt($createdAt);
            $user->addRole('ROLE_ADMIN');
            $user->setEnabled(true);
            $dm = $this->getDoctrine()->getManager();
            $dm->persist($user);
            $dm->flush();
            $msg = "Вы зарегистрировали пользователя";
            return $this->render('AppBundle:Admin:registration.html.twig', array(''
                        . 'message' => $msg));
        }
        return $this->render('AppBundle:Admin:registration.html.twig');
    }

    /**
     * @Route("/admin/users/edit/{id}", name ="edit")
     */
    public function editAction(Request $request, $id) {
        $userManager = $this->get('fos_user.user_manager');
        $user = $userManager->findUserBy(array('id' => $id));
        $current_logged_user = $this->getUser();
        if (!$user) {
            throw $this->createNotFoundException('No user found');
        }

        if ($request->getMethod() == "POST") {
            /* Если выбранный юзер супер админ, а ты авторизован как не супер
             * админ, то выдать ошибку доступа
             */
            if (($user->hasRole('ROLE_SUPER_ADMIN')) &&
                    (!$current_logged_user->hasRole('ROLE_SUPER_ADMIN'))) {
                throw $this->createAccessDeniedException('You cant do that');
            }
            $username = $request->get('username');
            $email = $request->get('email');
            $user->setUsername($username);
            $user->setEmail($email);
            $userManager->updateUser($user);
            return $this->redirectToRoute('adminpage');
        }
        return $this->render('AppBundle:Admin:edit.html.twig', array(
                    'user' => $user,
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
            throw $this->createNotFoundException('User not found');
        }
        if ($user->hasRole('ROLE_SUPER_ADMIN')) {
            throw $this->createAccessDeniedException("You don't have permissions!");
        }

        if ($user == $current_logged_in) {
            throw $this->createAccessDeniedException("You can't remove yourself!");
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
            throw $this->createNotFoundException('User not found!');
        }

        if ($request->getMethod() == "POST") {
            if (($user->hasRole('ROLE_SUPER_ADMIN')) && ((!$current_logged_in->hasRole('ROLE_SUPER_ADMIN')))) {
                throw $this->createAccessDeniedException('You cant do that');
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
                throw $this->createNotFoundException('User not found');
            }
            if ($user->isLocked()) {
                throw $this->createAccessDeniedException('You cant lock this user '
                        . 'cause he already locked');
            }
            if (($user->hasRole('ROLE_SUPER_ADMIN')) && (!$current_logged_in->hasRole('ROLE_SUPER_ADMIN'))) {
                throw $this->createAccessDeniedException('You cant do that');
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
            throw $this->createNotFoundException('There are is no locked users');
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
            throw $this->createNotFoundException('User not found');
        }
        if (!$user->isLocked()) {
            throw $this->createNotFoundException('Error! Account is not locked');
        }
        $user->setLocked(0);
        $userManager->updateUser($user);

        return $this->render('AppBundle:Admin:unban.html.twig', array(''
                    . 'id' => $id, ''
                    . 'user' => $user));
    }

    /**
     * @Route("/admin/addnews/", name="createNews")
     */
    public function addNewsAction(Request $request) {
        $current_logged_in = $this->getUser();
        if ($request->getMethod() == "POST") {
            $title = $request->get('title');
            $text = $request->get('text');
            $author = $current_logged_in->getUsername();
            $createdAt = new \DateTime('now');
            $updatedAt = new \DateTime('now');
            $picture = $request->get('picture');

            $news = new News();
            $news->setTitle($title);
            $news->setText($text);
            $news->setAuthor($author);
            $news->setCreatedAt($createdAt);
            $news->setUpdatedAt($updatedAt);
            $news->setPicture($picture);
            $img = new \Imagick($picture);
            $img->adaptiveresizeimage(600, 400);
            $em = $this->getDoctrine()->getManager();
            $em->persist($news);
            $em->flush();
            $msg = "Новость была успешно добавлена!";
            return $this->render("AppBundle:Admin:createnews.html.twig", array(''
                        . 'message' => $msg));
        }
        return $this->render("AppBundle:Admin:createnews.html.twig");
    }

    /**
     * @Route("/admin/news/{id}", name="editnews")
     */
    public function editNewsAction($id, Request $request) {
        $current_logged_in = $this->getUser();
        $news_found = $this->getDoctrine()->getRepository("AppBundle:News")
                ->findOneBy(array('id' => $id));
        if(!$news_found)
        {
            throw $this->createNotFoundException("News not found!");
        }
        if($request->getMethod()=="POST")
        {
            $title = $request->get('title');
            $text = $request->get('text');
            $picture = $request->get('picture');
            $author = $request->get('author');
            $createdAt = $request->get('createdAt');
            $updatedAt = new \DateTime('now');
            
            $news_found->setTitle($title);
            $news_found->setText($text);
            $news_found->setPicture($picture);
            $news_found->setUpdatedAt($updatedAt);
            $news_found->setLastUpdatedBy($current_logged_in);
            $news_found->setAuthor($news_found->getAuthor());
            $news_found->setCreatedAt($news_found->getCreatedAt());
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($news_found);
            $em->flush();
            
            $msg = "Новость была обновлена!";
            
            return $this->redirectToRoute('homepage');
        }

        return $this->render('AppBundle:Admin:newsedit.html.twig', array(''
                    . 'id' => $id, ''
                    . 'user' => $current_logged_in,''
            . 'news' => $news_found));
    }

}
