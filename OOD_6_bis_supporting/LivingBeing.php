<?php

//Constant Globals
define ('SPEAKING_CAPABILTIY',array('guau','miau','language'));
define ('EATING_CAPABILTIY',array('meat','vegs','meat and vegs'));
define ('MOVING_CAPABILTIY',array('walk','fly'));
define ('HEALTH_CONDITION',array('excellent','good','need of treatment'));

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
  Const BEST_SENSE = array('eyesight','smell','hearing','touch');

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

  public function oneYearOlder(){
    $age=$this->getAge();

    if ($age > 50){
      try {
        throw new Exception("Error: Age value too high");
      } catch (Exception $e) {
        echo "Exception message is: ".$e->getMessage();
      }
    }else{
      $newAge = $age * 2;
      return "I'm a cat, I'll be <b>".$newAge."</b> my next birthday";
    }
  }

} // End class



 ?>
