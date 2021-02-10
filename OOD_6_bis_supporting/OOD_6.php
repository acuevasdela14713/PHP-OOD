<?php

include "LivingBeing.php";
include "PersonOOD6.php";
include "cat.php";

$cat = new Cat(51);

echo $cat->print();
echo $cat->printNextBirthday();

 ?>
