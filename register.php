<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Enrol for a Course</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="bg-image home-bg"></div>
    <div class="container form">
      <!-- <div style="font-size: 1.5em"> -->
      <form action="index.php" method="post">
        Name : <input name= "name" type="text" /> <br />
        <input name = "email" type="email" > <br>
        password : <input type="password" name="password" id="password " />
        <br />
        Roll No: <input name="rollno" type="text" /><br />
        College <input name="college" type="text" /> <br />
        Degree :
        <select name="degree" id="degree">
          <option value="B.sc">B.sc</option>
          <option value="B.Tech">B.Tech</option>
          <option value="B.Arts">B.Arts</option>
          <option value="B.com">B.com</option>
        </select>
        <br />
        Degree Year
        <select name="degree_year" id="degree_year">
          <option value="First Year">First Year</option>
          <option value="Second Year">Second Year</option>
          <option value="Third Year">Third Year</option>
          <option value="Forth year">Forth year</option>
        </select>
        <br />
        Stream :
        <select name="stream" id="degree_year">
          <option value="Computer Science">Computer Science</option>
          <option value="Mecanical">Mecanical</option>
          <option value="Electrical">Electrical</option>
          <option value="Aeronotical">Aeronotical</option>
        </select>
        <br />
       
        <br><input class="button5" type="submit" name="register" value="Submit" />
        <a
          href="index.php"
          class="button5"
          style="background-color: rgba(0, 0, 0, 0.1)"
          >Register Now
        </a>
        <a id="login" href="login.php">Login </a>
      </form>
      <!-- </div> -->
    </div>
  </body>
</html>
