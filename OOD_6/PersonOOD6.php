<?php

class PersonOOD6 extends LivingBeing{
  //Variables
  private $fullName;

  //Getters
  protected function getFullName(){
    return $this->fullName;
  }

  //Setters
  protected function setFullName($fullName){
    $this->fullName=$fullName;
  }

  //Funcions
  public function __construct($fullName){
    $this->fullName=$fullName;
    parent::setAge(20);
    parent::setStatus(parent::STATUS[1]);
    parent::setGender(parent::GENDER[1]);
    parent::setEatingCapability(constant('EATING_CAPABILTIY')[0]);
    parent::setMovingCapability(constant('MOVING_CAPABILTIY')[0]);
    parent::setSpeakingCapability(constant('SPEAKING_CAPABILTIY')[2]);
  }

  public function print(){
    echo "I'm ".$this->fullName."<br>";
    echo "I'm ".parent::getAge()." and<br>";
    echo "My status is ".parent::getStatus()."<br>";
    echo "My gender is ".parent::getGender()."<br>";
    echo "I eat ".parent::getEatingCapability()."<br>";
    echo "and ".parent::getMovingCapability()."<br>";
    echo "I can talk a ".parent::getSpeakingCapability()."<br>";
  }

}

 ?>
