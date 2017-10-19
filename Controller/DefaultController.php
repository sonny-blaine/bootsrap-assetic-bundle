<?php

namespace SonnyBlaine\BootstrapAsseticBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('SonnyBlaineBootstrapAsseticBundle:Default:index.html.twig');
    }
}
