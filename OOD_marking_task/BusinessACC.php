<?php

class BusinessACC extends Accommodation {
  // Constants de clase
  const SALES = array('reunions','audio visuals','internet','no');

  // Propietats
  private $sales;

  // Setters
  protected function setSales($sales){
    $this->sales = $sales;
  }

  // Getters
  protected function getSales(){
    return $this->sales;
  }

  // Metodes
  public function checkIn(){
    $numHabit = $this->numHabit;

    if ($numHabit == 0) {
      throw new Exception("check-in Error: Hotel complet. Operació no permesa");
    }

    $numHabit = --$numHabit;
    $this->numHabit = $numHabit;
    echo "check-in successful<br>";
  }

  public function __construct($numHabit,$menjador){
    parent::__construct($numHabit,$menjador);
  }



}
 ?>
