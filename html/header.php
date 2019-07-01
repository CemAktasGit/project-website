
  </head> <!-----------END-HEAD------------>
    
    
  <body>  <!----------BODY--------------> <!-- Visible part of the webpage -->      
      
<!---------------------------NAVIGATE--------------------------------------------------->        
      
      <header class="container0">
        <div class="box1">
            <img class="logo" src="../img/logo2.png" alt="logo">
            <a href="../index.php">Random School</a>
        </div>
        <div class="box1b">
            <ul class="nav-links">
                <li>    <a href="./courses.php">Courses</a> </li>
                <li>    <a href="./registration.php">Registration</a> </li>
                <li>    <a href="./contact.php">Contact Us</a> </li>
            </ul> 
        </div>
            
          <div class="login">
            <?php
                if (isset($_SESSION['username'])){
                        echo "<p class='logintext'>Logged In</p>";
                        
                        echo     "<div class=logout> ";
                        echo    "<form action='../connect/logout.php' method='post'>";
                        echo    "<button type='submit' name='button-logout' >Logout</button>";
                        echo "</div>";
                    }
                    else{
                        echo "<form action='../connect/login.php' method='post'>";
                        echo "<input type='text' name='username' placeholder='Username'>";
                        echo "<input type='password' name='password' placeholder='Password'>";
                        echo "<br>";
                        echo "<button type='submit' name='button-login' >Login</button>";
                        echo "</form>";
                        
                        echo    "<div class=logout> ";
                        echo    "<a href='./html/signup.php'>SignUp</a>";
                        echo "</div>";
                        
                    }
                
            ?>
          </div>    
      </header>    

<!----------------------------END-NAVIGATE-------------------------------------------------->  

