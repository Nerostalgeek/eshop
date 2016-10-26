<?php

namespace Eshop\EshopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EshopBundle:Default:index.html.twig');
    }

    public function helloAction()
    {
        return $this->render('EshopBundle:Default:hello.html.twig');
    }
}
