<?php

namespace Plateria\UsuariosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('UsuariosBundle:Default:index.html.twig', array('name' => $name));
    }
}
