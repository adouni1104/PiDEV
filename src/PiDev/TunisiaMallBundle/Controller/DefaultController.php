<?php

namespace PiDev\TunisiaMallBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TunisiaMallBundle:Default:index.html.twig');
    }
}
