<?php

namespace ED\StraformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EDStraformBundle:Default:index.html.twig', array('name' => $name));
    }
}
