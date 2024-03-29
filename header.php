<?php
    session_start();
?>

<!doctype html>
<html lang="de">
  <head> <!----------HEAD-------------->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Example Website</title>
    <meta name="description" content="Example Website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" sizes="192x192" href="img/logo2.png">
    <meta name="author" content="Max Mustermann">
    <meta name="date" content="2019-05-27T10:00:00+01:00">
    <meta name="keywords" lang="de" content="demo, test, lorem ipsum, beispielseite">
    <meta name="format-detection" content="telephone=yes"> <!-- ermöglicht das direkte Anrufen einer Tel.nummer im mobile Browser -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="formate.css">
  </head> <!-----------END-HEAD------------>
    
    
  <body>  <!----------BODY--------------> <!-- Visible part of the webpage -->      
      
<!---------------------------NAVIGATE--------------------------------------------------->        
      
      <header class="container0">
        <div class="box1">
            <?php
                if (isset($_SESSION['username'])){
                        echo "<p class='logintext'>Logged In</p>";
                        
                        echo "<div class=logout> ";
                        echo    "<form action='./connect/logout.php' method='post'>";
                        echo    "<button type='submit' name='button-logout' >Logout</button>";
                        echo "</div>";
                    }
                    else{
                        echo "<form action='./connect/login.php' method='post'>";
                        echo "<div class=entry>";
                        echo "<div class=entry-field1>";
                        echo "<input type='text' name='username' placeholder='Username'>";
                        echo "</div>";
                        echo "<div class=entry-field1>";
                        echo "<input type='password' name='password' placeholder='Password'>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class=entry-field1>";
                        echo "<button type='submit' name='button-login' >Login</button>";
                        echo "</div>";
                        echo "</form>";
                        
                        echo "<div class=signup> ";
                        echo    "<a href='./html/signup.php'>SignUp</a>";
                        echo "</div>";
                        
                    }
                
            ?>
          </div>     
        <div class="box2">
            <ul class="nav-links">
                <li>    <a href="./index.php">Random School</a> </li>
                <li>    <a href="./html/courses.php">Courses</a> </li>
                <li>    <a href="./html/registration.php">Registration</a> </li>
                <li>    <a href="./html/contact.php">Contact</a> </li>
            </ul> 
        </div>
            
      </header> 

<!----------------------------END-NAVIGATE-------------------------------------------------->  

