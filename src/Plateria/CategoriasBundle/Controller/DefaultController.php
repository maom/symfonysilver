<?php

namespace Plateria\CategoriasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('CategoriasBundle:Default:index.html.twig', array('name' => $name));
    }
}
