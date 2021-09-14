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
    foreach($this->courses as $c){
        echo "$c <br>";
    }
  }
}
$student1 = new student("John","01","19-10-99"); 
echo $student1->show_info(). "<br>";
$student1->AddCourse("ATP3");
echo $student1->showallcourses();
$student1->AddCourse("HCI");
echo $student1->showallcourses();

?>



