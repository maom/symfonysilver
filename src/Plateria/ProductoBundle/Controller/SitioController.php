 <?php
 
   namespace Plateria\ProductoBundle\Controller;
   
   use Symfony\Bundle\FrameworkBundle\Controller\Controller;
   
   class SitioController extends Controller
   {
       public function estaticaAction($pagina)
       {
           return $this->render('ProductoBundle:Sitio:'.$pagina.'.html.twig');
       }
       
   }