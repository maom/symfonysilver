<?php

namespace Plateria\AyudaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{ 
    public function indexAction($name)
    {
        return $this->render('AyudaBundle:Default:index.html.twig', array('name' => $name));
    }
    public function ayudaAction()
    {
        //return new Response('Ayuda'); //Para utilizar Response necesitas agregar la clase use Symfony\Component\HttpFoundation\Response;
        return $this->render('AyudaBundle:Default:ayuda.html.twig');
    }
}
