<?php
//Sense emprar Exception
function discountCalculation_sense($discount,$percentatge,$price){
  if($percentatge != 0){
    $discountCalculation=($price * $discount)/$percentatge;
    return $price - $discountCalculation;
  }
  return "ha de ser major de 0";
}
echo discountCalculation_sense(10,0,50);
echo "<br>";
//Emprant expection

function discountCalculation($discount,$percentatge,$price){
  if($percentatge == 0){
    throw new Exception('Percentatge 0');
  }else{
    $discountCalculation=($price * $discount)/$percentatge;
    return $price - $discountCalculation;
  }
}

try{
  $discount = 10;
  $percentatge = 0;
  $price = 50;
  echo discountCalculation($discount,$percentatge,$price);
}
catch (Exception $e){
  echo "S'ha capturat l'excepció: ". $e->getMessage() . "<br>";
}


?>
