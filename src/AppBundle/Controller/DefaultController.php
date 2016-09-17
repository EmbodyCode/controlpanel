<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Description of DefaultController
 *
 * @author artur
 */
class DefaultController extends Controller {
    
    /**
     * @Route("/",name="homepage")
     */
    public function indexAction() {
        $news= $this->get('doctrine')
      ->getRepository('AppBundle:News')
      ->findBy(array(), array('id' => 'DESC'));
        
        return $this->render("AppBundle:Default:index.html.twig",array(''
            . 'news' => $news));
    }
}
