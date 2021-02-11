<?php

include 'Accommodation.php';
include 'RuralAcc.php';
include 'BusinessACC.php';

$rural = new RuralAcc(10,constant('MENJADOR')[0],True,RuralAcc::INST_AIRE_LLIURE[2]);

$buss = new BusinessACC(1,constant('MENJADOR')[1]);

try {
  $buss->checkIn();
  $buss->checkIn();
} catch (Exception $e) {
  echo "Exception message is: ".$e->getMessage();
}

 ?>
