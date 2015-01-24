<?php
   
namespace MyShop\WebsiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use MyShop\CommonBundle\Controller\AbstractController;

/**
 * @Route(service="myshop.website.index")
 */
class IndexController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function indexAction() 
    {
        return $this->render('WebsiteBundle:Index:index.html.twig');
    }
}
