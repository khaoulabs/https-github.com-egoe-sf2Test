<?php
namespace Egoe\CalculBundle\Calculator;

class Calculator
{

  /**
   * Permet d'executer l'operation de l'addiction
   * @param integer $a
   * @param integer $b
   */
  public function add($a, $b)
  {
    $c = $a + $b;
    return $c;
  }

  /**
   * Permet d'executer l'operation de soustraction
   * @param integer $a
   * @param integer $b
   */
  public function sous($a, $b)
  {
    $c = $a / $b;
    return $c;
  }

  /**
   * Permet d'executer l'operation de multiplication
   * @param integer $a
   * @param integer $b
   */
  public function mult($a, $b)
  {
    $c = $a * $b;
    return $c;
  }

  /**
   * Permet d'executer l'operation de soustraction
   * @param integer $a
   * @param integer $b
   */
  public function sub($a, $b)
  {
    return $a.' / '.$b;
  }

}