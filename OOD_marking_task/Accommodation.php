<?php

// Constant global
define('MENJADOR',array('casa','a la carta','buffet','no'));

class Accommodation {
  // Propietats
  public $numHabit;
  private $menjador;

  // Setters
  protected function setNumHabit($numHabit){
    $this->numHabit = $numHabit;
  }

  protected function setMenjador($menjador){
    $this->menjador = $menjador;
  }

  // Getters
  protected function getNumHabit(){
    return $this->numHabit;
  }

  protected function getMenjador(){
    return $this->menjador;
  }

  // Constructor
  public function __construct($numHabit,$menjador){
    $this->numHabit = $numHabit;
    $this->menjador = $menjador;
  }

  // Metodes
  public function checkIn(){
    $numHabit = $this->numHabit;
    $numHabit = --$numHabit;
    $this->numHabit = $numHabit;
  }

  public function checkOut(){
    $numHabit = $this->numHabit;
    $numHabit = ++$numHabit;
    $this->numHabit = $numHabit;
  }
}
 ?>
