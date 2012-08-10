<?php

namespace Plateria\EstaticasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class SitioController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('EstaticasBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function estaticaAction($pagina)
    {
        return $this->render('EstaticasBundle:Sitio:'.$pagina.'.html.twig');
    }
}
