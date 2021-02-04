<?php

//Constant Globals
define ('SPEAKING_CAPABILTIY',array('guau','miau','language'));
define ('EATING_CAPABILTIY',array('meat','vegs','meat and vegs'));
define ('MOVING_CAPABILTIY',array('walk','fly'));

class LivingBeing {
  //Variables
  public $age;
  private $status;
  private $gender;
  private $eatingCapability;
  private $movingCapability;
  private $sepakingCapability;

  //Constants de clase
  Const GENDER = array('female','male');
  Const STATUS = array('awake','sleeping');

  //Getters
  protected function getAge(){
    return $this->age;
  }
  protected function getStatus(){
    return $this->status;
  }
  protected function getGender(){
    return $this->gender;
  }
  protected function getEatingCapability(){
    return $this->eatingCapability;
  }
  protected function getMovingCapability(){
    return $this->movingCapability;
  }
  protected function getSpeakingCapability(){
    return $this->sepakingCapability;
  }

  //Setters
  protected function setAge($age){
    $this->age=$age;
  }
  protected function setStatus($status){
    $this->status=$status;
  }
  protected function setGender($gender){
    $this->gender=$gender;
  }
  protected function setEatingCapability($eatingCapability){
    $this->eatingCapability=$eatingCapability;
  }
  protected function setMovingCapability($movingCapability){
    $this->movingCapability=$movingCapability;
  }
  protected function setSpeakingCapability($sepakingCapability){
    $this->sepakingCapability=$sepakingCapability;
  }

  //Funcions
  public function oneYearOlder(){
    $age=$this->getAge();
    $this->age=++$age;
  }

} // End class

 ?>
