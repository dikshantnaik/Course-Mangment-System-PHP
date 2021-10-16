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
    <div class="container form">
      <!-- <div style="font-size: 1.5em"> -->
        <h2>REGISTRATION</h2><br><br>
      <form action="index.php" method="get">
        <input name= "name" type="text" class="field" placeholder="ENTER YOUR NAME" /> <br /><br>
       <input name = "email" type="email" class="field" placeholder="ENTER YOUR EMAIL" > <br><br>
       <input type="password" name="password" id="password " class="field" placeholder="ENTER YOUR PASSWORD" /><br>
        <br />
        <input name="rollno" type="text" class="field" placeholder="ENTER YOUR ROLLNO"/><br /><br>
        <input name="college" type="text" class="field" placeholder="ENTER YOUR COLLEGE" /> <br>
        <br><br><span>SELECT DEGREE :</span>
        <select name="degree" id="degree">
          <option value="B.sc">B.sc&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </option>
          <option value="B.Tech">B.Tech</option>
          <option value="B.Arts">B.Arts</option>
          <option value="B.com">B.com</option>
        </select><br>
        <br />
        <span>DEGREE YEAR :</span>&nbsp;&nbsp;&nbsp;&nbsp;
        <select name="degree_year" id="degree_year">
          <option value="First Year">First Year&nbsp;&nbsp;&nbsp;
          </option>
          <option value="Second Year">Second Year</option>
          <option value="Third Year">Third Year</option>
          <option value="Forth year">Forth year</option>
        </select>
        <br /><br>
         <span>STREAM :</span>
        <select name="stream" id="degree_year">
          <option value="Computer Science">Computer Science</option>
          <option value="Mecanical">Mecanical</option>
          <option value="Electrical">Electrical</option>
          <option value="Aeronotical">Aeronotical</option>
        </select><br>
        <br />
       
       
        <button type = "submit" id="login" href="index.php" class="button5" value="register" name = "register">Register </button>
      </form>
      <!-- </div> -->
    </div>
  </body>
</html>
