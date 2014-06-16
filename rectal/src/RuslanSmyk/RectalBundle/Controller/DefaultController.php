<?php

namespace RuslanSmyk\RectalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RuslanSmykRectalBundle:Default:index.html.twig', 
		array('fund' => $this->generateUrl('fund'),
				'reservist' => $this->generateUrl('reservist'),
				'unit' => $this->generateUrl('unit'),
				'draftee' => $this->generateUrl('draftee'),
			  ) );
    }
}
