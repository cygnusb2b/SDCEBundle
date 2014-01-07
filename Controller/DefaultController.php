<?php

namespace Cygnus\Sites\SDCEBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CygnusSitesSDCEBundle:Default:index.html.twig', array('name' => $name));
    }
}
