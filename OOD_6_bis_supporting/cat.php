<?php

class Cat extends LivingBeing {
  //Properties
  private $healthCondition;
  private $bestSense;

  // Setters
  protected function setHealthCondition ($healthCondition){
    $this->healthCondition = $healthCondition;
  }

  protected function setBestSense ($bestSense){
    $this->bestSense = $bestSense;
  }

  // Getters
  protected function getHealthCondition (){
    return $this->healthCondition;
  }

  protected function getBestSense (){
    return $this->bestSense;
  }

  function __construct ($age){
    $this->healthCondition=(constant('HEALTH_CONDITION')[1]);
    $this->bestSense=(parent::BEST_SENSE[0]);
    parent::setAge($age);
  }

  public function print(){
    echo "I'm a cat in <b>".$this->healthCondition."</b> condition of health<br>";
    echo "and by best sense is <b>".$this->bestSense;
    echo "</b> my age is ".parent::getAge()."<br>";
  }

  public function printNextBirthday(){
    $newAge = parent::oneYearOlder(parent::getAge());
    echo $newAge;
  }

}

 ?>
