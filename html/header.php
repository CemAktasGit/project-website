
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
          <form action="../connect/login.php" method="post">
            <input type="text" name="username" placeholder="Username"> 
            <input type="password" name="password" placeholder="Password">
            <br>
            <button type="submit" name="button-login" >Login</button>
          </form>
        </div>
        <div class=logout>
          <a href="./signup.php">SignUp</a>
          <form action="../connect/logout.php" method="post">
            <button type="submit" name="button-logout" >Logout</button>
          </form>  
        </div>
      </header> 

<!----------------------------END-NAVIGATE-------------------------------------------------->  

