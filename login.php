<?php
include("./dbms_connect.php");

if(isset($_POST["Login"])){
    $email = $_POST["email"];
    $input_password = $_POST["password"];
    $sql = "Select * FROM student WHERE student_email=\"".$email."\"";
    
    if($result = mysqli_query($conn,$sql)){
      if(mysqli_num_rows($result)==0){
        echo "No user";
      }
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
              if ($input_password === $row["student_password"]) {
                alert_box("Logedin");
                $_SESSION['email'] = $email;
                $_SESSION["name"] = $row["student_name"];
                header("location: ./EnrolCourse.php");
              }
              else {
                alert_box("Wrong Password");
              }
         
            }
        }
    }
    else{
        alert_box(mysqli_error($conn));
    }
}
?> 


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Enrol for a Course</title>
    <link rel="stylesheet" href="reg_css.css" />
  </head>
  <body>
    <div class="bg-image home-bg"></div>
    <div class="container form cont_login"><br>
      <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOGIN</h2>

      <!-- <div style="font-size: 1.5em"> -->
      <form action="login.php" method="post"><br><br>
         <input name = "email" type="text" class="field_log" placeholder="ENTER YOUR EMAIL"> <br><br>
         <input type="password" name="password" id="password "class="field_log"  placeholder="ENTER YOUR PASSWORD" /> <br>
        <input type="submit" value="Login" name="Login" class="button5 button5_log">
      </form>
      <!-- </div> -->
    </div>
  </body>
</html>
