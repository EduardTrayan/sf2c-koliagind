<?php

namespace MyShop\WebsiteBundle\Controller;

use Sensio\Bundle\FramworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return new Response("<html><head></head><body>Hello, world</body></html>");
    }
}
