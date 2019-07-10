
  </head> <!-----------END-HEAD------------>
    
    
  <body>  <!----------BODY--------------> <!-- Visible part of the webpage -->      
      
<!---------------------------NAVIGATE--------------------------------------------------->        
      
      <header class="container0">
        <div class="box1">


        <!--    <img class="logo" src="./img/logo2.png" alt="logo"> -->
            <a href="./index.php">Random School</a>
        </div>
        <div class="box2">
            <ul class="nav-links">
                <li>    <a href="./html/courses.php">Courses</a> </li>
                <li>    <a href="./html/registration.php">Registration</a> </li>
                <li>    <a href="./html/contact.php">Contact</a> </li>
            </ul> 
        </div>
        <div class="box3">

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
                <li>    <a href="../index.php">Random School</a> </li>
                <li>    <a href="./courses.php">Courses</a> </li>
                <li>    <a href="./registration.php">Registration</a> </li>
                <li>    <a href="./contact.php">Contact</a> </li>
            </ul> 
        </div>
            
      </header>    

<!----------------------------END-NAVIGATE-------------------------------------------------->  

