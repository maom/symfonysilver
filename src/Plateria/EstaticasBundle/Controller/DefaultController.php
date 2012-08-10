<?php

namespace Plateria\EstaticasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('EstaticasBundle:Default:index.html.twig', array('name' => $name));
    }
}
