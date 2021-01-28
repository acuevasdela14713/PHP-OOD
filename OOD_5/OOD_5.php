<html>
<head>
<title>OOD_5: inheritance example</title>
</head>
<body>
<?php
require "person.php";//similar to include
require "student.php";
require "teacher.php";
require "apprentice.php";

$teacher1=new Teacher('Rose','12345678A',10);//using __construct from Person
$student1=new Student('Pauline','98765432S','ASIX');//using __construct from Person

$apprentice1=new Apprentice('Adrian','41622494S','ASIX','IESManacor');

echo $teacher1->print();//using method print implemented on Person class
echo "<br>";
echo $student1->print();//using method print implemented on Student class
echo "<br>";
echo $apprentice1->print();
 ?>
</body>
</html>
