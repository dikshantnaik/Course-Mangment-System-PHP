
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
<h1>Course You have Enrolled </h1>

</div>

  <div class="course_cont">
    <h1>Available Course </h1>
<?php 
       include("./config.php");
       if($_SESSION["error"]){
        echo '<script>alert(\"".$_SESSION["error"]."\")</script>';

       }
       $sql = "SELECT * FROM available_course ;";
       if($result =mysqli_query($conn,$sql)){
         if(mysqli_num_rows($result) > 0){
            
           
             echo "<form action=\"index.php\" method=\"post\">";
           while($row = mysqli_fetch_array($result)){
             echo "<div class=\"course\">";
             echo "<h4>" . $row["course_name"]."</h4>";
             echo "<h7> Prize :" .$row["course_prize"]." Rs</h7>";
             echo "<h7>Discription</h7>";
             echo "<button class=\"course_button\" type=\"submit\" name=\"enrol_course\" value=\"".$row["course_id"]."\" />Enroll This</button>";
             echo "</div>";
            }
            echo "</select>";
          }
        }
        else{
          echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        ?>
        </div>
</body>
</html>