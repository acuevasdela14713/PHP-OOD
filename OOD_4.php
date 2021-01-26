<HTML>
<head>
<title>OOD_3: Currency Converter</title>
</head>
<body>

<?php
class CurrencyConverter
{
//Properties
var $euro;
var $rate;
var $pounds;

// setters
public function setEuro($euro)
{
$this->euro=$euro;
}

public function setRate($rate)
{
$this->rate=$rate;
}

public function setPounds($pounds)
{
$this->pounds=$pounds;
}

// getters
public function getEuro()
{
return $this->euro;
}

public function getRate()
{
return $this->rate;
}

public function getPounds()
{
return $this->pounds;
}

public function convertPoundsToEuros(){
  $this->pounds = $this->euro/$this->rate;
  return $this->pounds;
}

public function __construct($euro,$rate){
  $this->euro=$euro;
  $this->rate=$rate;
}

//print
public function print()
{
echo "Euros: " . $this->getEuro() . "<br>";
echo "Rate: " . $this->getRate() . "<br>";
echo "Pounds: ". $this->getPounds() ."<br>";
}

}//end class Student

$currency=new CurrencyConverter(123,0);//creating object using a default constructor
if ($currency->rate>0) {
  $currency->convertPoundsToEuros();
}else {
  echo "The exchange rate has to be greater than 0<br>";
}
$currency->print();

?>
</body>
</HTML>
