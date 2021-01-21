<HTML>
<head>
<title>OOD_2: Fruit class: constructor for initialising properties</title>
</head>
<body>
<?php
class Fruit {
  // Properties
  var $name;
  var $color;

  // Methods
  function set_name($name) {//snake vs camel case notation
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }

  function __construct($name,$color){
    $this->name=$name;
    $this->color=$color;
  }

}

$apple = new Fruit('Apple','Red');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
?>
</body>
</HTML>
