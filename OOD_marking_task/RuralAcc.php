<?php

// Constant global
define('TIPUS_ACTIVITATS',array('senderisme','equitació','ciclisme'));

class RuralAcc extends Accommodation {

  // Constant de clase
  const INST_AIRE_LLIURE = array('jardi','muntanya','platja');

  // Propietats
  private $orgActivitats = False;
  private $instAireLliure;

  // Setters
  protected function setOrgActivitats($orgActivitats){
    $this->orgActivitats = $orgActivitats;
  }

  protected function setInstAireLLiure($instAireLliure){
    $this->instAireLliure = $instAireLliure;
  }

  // Getters
  protected function getOrgActivitats(){
    return $this->orgActivitats;
  }

  protected function getInstAireLliure(){
    return $this->instAireLliure;
  }

  // Constructor
  public function __construct($numHabit,$menjador,$orgActivitats,$instAireLliure){
    parent::__construct($numHabit,$menjador);
    $this->orgActivitats = $orgActivitats;
    $this->instAireLliure = $instAireLliure;
  }
}
 ?>
