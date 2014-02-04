<?php

namespace Test\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TestBundle:Default:index.html.twig', array('name' => $name));
    }
	
	public function readmeAction()
    {
        return $this->render('TestBundle:Default:readme.html.twig');
    }
}
