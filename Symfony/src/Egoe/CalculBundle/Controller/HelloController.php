<?php

namespace Egoe\CalculBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HelloController extends Controller
{
    public function indexAction()
    {
        return $this->render('EgoeCalculBundle:Hello:index.html.twig');
    }

    public function historiquesAction()
    {
        return $this->render('EgoeCalculBundle:Hello:historiques.html.twig');
    }

    public function calculerAction()
    {
        return $this->render('EgoeCalculBundle:Hello:calculer.html.twig');
    }

    public function calculAction()
    {
      $request = $this->get('request');
      if ('POST' == $request->getMethod()) {
        $var1 = $request->get("var1");
        $var2 = $request->get("var2");
        $operateur = $request->get("operateur");

        // On récupère le service
        $calculator = $this->container->get('egoe_calcul.calculator');
        if($operateur == 'add') {
          $result = $calculator->add($var1, $var2);
          return $var1. '+' .$var2 . '=' .$result;
        }
        if($operateur == 'sous') {
          $result = $calculator->sous($var1, $var2);
          return $var1. '/' .$var2 . '=' .$result;
        }
        if($operateur == 'mult') {
          $result = $calculator->mult($var1, $var2);
          return $var1. '*' .$var2 . '=' .$result;
        }
        if($operateur == 'sub') {
          $result = $calculator->sub($var1, $var2);
          return $result;
        }

      }
    }
}
