<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./css/sign_up.css">
</head>
<body>
    <form action="index.php" method="post">
       <div id="textbox">   
          <h1>Registration</h1>   
          <div>
              </hr>
              <input type="text" name="email" id="email" placeholder="Email" required/ ></br>
              <input type="text" name="name" id="name" placeholder="Name" required/ ></br>
              <input type="password" name="password" id="pass" placeholder="Password" required/ ></br>
          </div>
          <div class="gender">
              <input type="radio" value="male" id="male" name="gender" checked/>
              <label for="male" class="radio"  >Male</label>
              <input type="radio" value="female" id="female" name="gender" />  
              <label for="female" class="radio">Female</label>
         </div>  
         <p>By clicking Register, you agree on our <a href="#">terms and condition</a>.</p>
         <input type="submit" value="Sign Up" name="submit" id="button"> 
       </div> 
    </form>
</body>
</html>


<?php
    $server = "localhost";
    $name   = "root";
    $pass   = "";

    mysql_connect($server,$name,$pass);
    mysql_select_db("database");
     if(isset($_POST['submit'])){
         $user_email = $_POST['email'];
         $user_name = $_POST['name'];
         $user_pass = $_POST['password']; 
         $gender = $_POST['gender'];

        $query = "INSERT into sign_up (user_email','user_name','user_pass','gender') value($user_email,$user_name,$user_pass,$gender)";
     }
   



    


?>