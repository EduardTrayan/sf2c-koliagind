<?php

namespace MyShop\CommonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AbstractController
{
    protected $templating;
    
    public function setTemplating($templating)
    {
        $this->templating = $templating;
    }
    
    public function render($view, array $parameters = array())
    {
        return new Response($this->templating->render($view, $parameters));
    }
}
