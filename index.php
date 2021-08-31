<?php
include("./config.php");

if(isset($_POST["register"])) {
  
  // if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql1 = sprintf("INSERT INTO `student` (`student_name`, `student_email`, `student_password`, `roll_no`, `college`, `degree`, `degree_year`, `stream`) 
    VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s');",$_POST["name"],$_POST["email"],$_POST["password"],$_POST["rollno"],$_POST["college"],$_POST["degree"],$_POST["degree_year"],$_POST["stream"])  ;
    if(mysqli_query($conn,$sql1)){
      alert_box("Registered Succes \nPlease Login to continue");
      header("location: ./login.php");
    }
    else {
      alert_box(mysqli_error($conn));
    }

// }
}

if(isset($_POST["enrol_course"])){
  echo $_SESSION["email"];
  $sql1 = sprintf("Insert INTO enroled_course(student_id,avail_course_id) VALUE((SELECT student.student_id FROM student WHERE student.student_email= \"%s\"),%s)",$_SESSION["email"],$_POST["enrol_course"]);
  if(mysqli_query($conn,$sql1)){
    alert_box("Registered Succes \nPlease Login to continue");
    header("location: ./login.php");
  }
  else{
    alert_box(mysqli_error($conn));
  }
}

?>