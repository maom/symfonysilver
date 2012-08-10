<?php

namespace Plateria\NotasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('NotasBundle:Default:index.html.twig', array('name' => $name));
    }
}
