<HTML>
<head>
<title>OOD_1: Student class: setters and getters</title>
</head>
<body>

<?php
class Student
{
//Properties
var $name;
var $dni;
var $surname_1;
var $surname_2;
var $age;

// setters
public function setName($name)
{
$this->name=$name;
}

public function setDni($dni)
{
$this->dni=$dni;
}

public function setSurname_1($surname_1)
{
$this->surname_1=$surname_1;
}

public function setSurname_2($surname_2)
{
$this->surname_2=$surname_2;
}

public function setAge($age)
{
$this->age=$age;
}
// getters
public function getName()
{
return $this->name;
}

public function getDni()
{
return $this->dni;
}

public function getSurname_1()
{
return $this->surname_1;
}

public function getSurname_2()
{
return $this->surname_2;
}

public function getAge()
{
return $this->age;
}

public function print()
{
echo "Name: $this->name <br>";
echo "Dni: $this->dni <br><br>";
echo "Surname 1: ". $this->getSurname_1() ."<br><br>";
echo "Surname 2: ". $this->getSurname_2() ."<br><br>";
echo "Age: ". $this->getAge() ."<br><br>";
}

}//end class Student

$alumne1=new Student();//creating object using a default constructor
$alumne1->setName('Adrian');
$alumne1->setDni('23344556D');
$alumne1->setSurname_1('Cuevas');
$alumne1->setSurname_2('de la Cruz');
$alumne1->setAge(21);
$alumne1->print();

?>
</body>
</HTML>
