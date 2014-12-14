<?php
   
namespace MyShop\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller 
{
    /**
     * @Route("/")
     */
    public function indexAction() 
    {
        return new Response("<html><head></head><body>Hello, world</body></html>"); 
    }
    
}
