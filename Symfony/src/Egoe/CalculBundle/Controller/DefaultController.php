<?php

namespace Egoe\CalculBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EgoeCalculBundle:Default:index.html.twig', array('name' => $name));
    }
}
