<?php

namespace RuslanSmyk\RectalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('RuslanSmykRectalBundle:Default:index.html.twig', array('name' => $name));
    }
}
