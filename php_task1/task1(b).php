<?php
class car {
  public $engno;
  public $model;
  public $owner;

  function __construct($engno,$model,$owner)
  {
      $this->engno = $engno;
      $this->model=$model;
      $this->owner=$owner;
  }
  function show_info() {  
    echo"Engine No: $this->engno <br>";
    echo"Model: $this->model <br>";
    echo"Owner: $this->owner <br>";

  }
}
$car = new car("00112233","A8","Kane"); 
echo $car->show_info(). "<br>";
?>



