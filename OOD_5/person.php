<?php
class Person
{
public $name;
public $dni;

//getters
public function getName(){
  return $this->name;
}

public function getDni(){
  return $this->dni;
}

public function __construct($name,$dni)
{
$this->name=$name;
$this->dni=$dni;
}

public function print()
{
  echo $this->name.'<br>';
  echo $this->dni.'<br>';
}
}
?>
