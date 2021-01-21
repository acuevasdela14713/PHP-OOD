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

public function __construct($euro,$rate,$pounds){
  $this->euro=$euro;
  $this->rate=$rate;
  $this->pounds=$pounds;
}
//print
public function print()
{
echo "Euros: " . $this->getEuro() . "<br>";
echo "Rate: " . $this->getRate() . "<br>";
echo "Pounds: ". $this->getPounds() ."<br>";
}

}//end class Student

$alumne1=new CurrencyConverter(123,45,123);//creating object using a default constructor
$alumne1->print();

?>
</body>
</HTML>
