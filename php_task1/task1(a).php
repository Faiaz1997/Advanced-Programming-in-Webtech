<?php

class student {
  public $name;
  public $id;
  public $dob;
  public $courses=[];
  
  /*function __construct($name,$id,$dob)
  {
      $this->name = $name;
      $this->id=$id;
      $this->dob=$dob;
  }*/
  function show_info() {  
    echo"Name: $this->name<br>";
    echo"Id: $this->id <br>";
    echo"DOB: $this->dob <br>";
  }
  function AddCourse($coursename){
    array_push($this->courses,$coursename);
  }
  function showallcourses(){
    echo"Name: $this->name <br>";
    echo"Id: $this->id <br>";
    echo"Course name: ";
    foreach($this->courses as $c){
        echo "<br> $c";
    }
  }
}
$student1 = new student(); 
$student1->name="John";
$student1->id="001";
$student1->dob="19-10-99";
echo $student1->show_info(). "<br>";
$student1->AddCourse("ATP3");
echo $student1->showallcourses(). "<br>";
$student1->AddCourse("HCI");
echo $student1->showallcourses();

?>



