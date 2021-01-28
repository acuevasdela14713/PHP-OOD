<?php
class Student extends Person
{
private $studyField;

//getters
public function getStudyFiled(){
  return $this->studyField;
}

public function setStudyField($studyField)
{
  $this->studyField=$studyField;
}

public function __construct($name,$dni,$studyField){
  parent::__construct($name,$dni);
  $this->studyField=$studyField;
}

public function print()//overriding print method from parent class Person
{
parent::print();//calling print method from parent class Person
echo $this->studyField.'<br>';
}
}
?>
