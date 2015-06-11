<?php

//src/ED\FormBundle\Controller\FormationController.php

namespace ED\StraformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class FormationController extends controller
{
    public function indexAction()
	{
    $content = $this->get('templating')->render('EDStraformBundle:Formation:index.html.twig');
    return new Response($content);
	}
}

?>