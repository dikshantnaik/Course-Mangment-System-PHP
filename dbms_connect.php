<?php
session_start();
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "test3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql1 = "CREATE TABLE IF NOT EXISTS available_course(course_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,course_name VARCHAR(50) NOT NULL ,course_duaration VARCHAR(100),course_prize INT);";
$sql2 = "CREATE TABLE IF NOT EXISTS student(student_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,student_name VARCHAR(50) ,student_email VARCHAR(100) UNIQUE,student_password VARCHAR(100),roll_no INT,college VARCHAR(50),degree VARCHAR(50),degree_year VARCHAR(50),stream VARCHAR(50));";
$sql3 = "CREATE TABLE IF NOT EXISTS enroled_course(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,student_id INT,avail_course_id INT,FOREIGN KEY(student_id) REFERENCES student(student_id),FOREIGN KEY(avail_course_id) REFERENCES available_course(course_id),enrol_date date DEFAULT CURRENT_DATE())";
if(!mysqli_query($conn,$sql1) || !mysqli_query($conn,$sql2) || !mysqli_query($conn,$sql3))
{
  
  echo "Error" . mysqli_error($conn);
}

function alert_box($msg)
{
  echo "<script>alert(\"".$msg."\")</script>";

}
?>
