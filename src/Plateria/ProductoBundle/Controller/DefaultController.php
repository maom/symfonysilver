<?php

namespace Plateria\ProductoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    
    public function ayudaAction()
    {
        return $this->render('ProductoBundle:Default:ayuda.html.twig');
    }
}
