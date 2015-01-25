<?php

namespace MyShop\CommonBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Templating\EngineInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

abstract class AbstractController
{
    /**
     * @var EngineInterface
     */
    protected $templating;

    /**
     * @param EngineInterface $templating
     */
    public function setTemplating(EngineInterface $templating)
    {
        $this->templating = $templating;
    }
    
    public function render($view, array $parameters = array())
    {
       return new Response($this->templating->render($view, $parameters));
    }
}
