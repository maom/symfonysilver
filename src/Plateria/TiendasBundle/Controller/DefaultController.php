<?php

namespace Plateria\TiendasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('TiendasBundle:Default:index.html.twig', array('name' => $name));
    }
}
