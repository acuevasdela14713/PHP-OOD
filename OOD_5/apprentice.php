<?php
class Apprentice extends Student
{
private $FCTBusinessName;

//setters
public function setFCTBusinessName($FCT){
  $this->FCTBusinessName=$FCT;
}

//getters
public function getFCTBusinessName(){
  return $this->FCTBusinessName;
}

public function __construct($name,$dni,$studyField,$FCTBusinessName){
  parent::__construct($name,$dni,$studyField);
  $this->FCTBusinessName=$FCTBusinessName;
}

public function print(){
  parent::print();
  echo $this->FCTBusinessName;
}
}
?>
