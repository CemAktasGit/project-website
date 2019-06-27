<?php
    require "header.php";
?>
    
 
 <main>
      <div class="container1">
        <img src="./img/slide1.png" alt="group">
      </div>
      
      <div class="container2">
        <h2>Welcome to this example website</h2>
        <p>Originally, this website was an exercise to learn and apply my current knowledge gained from various online sources on development. The "home page" and "Courses" demonstrate the use of HTML and CSS. In "Registration" and "Contact Us" PHP and MySQL are used to process the inputs and save them on a database. More information on the individual parts of this website can be found in "readme.txt". Of course, this is not a fully completed website since there are many more possibilities and options to add. The whole website was developed in less than three weeks, including an introduction to HTML, CSS and PHP (also first experiments with javascript, which are not inlcuded right now). </p>
      </div>
     
       <div class="container2b">
        <img src="./img/slide3.png" alt="group">
      </div>
         
      
      <div class="container3">
          <h2>Get Informed!</h2>
          <div class="subcontainer3">
              <div class="box2">
                  In <a href="./html/courses.html">Courses</a> you can find random courses. This page is created with HTML and CSS.
              </div>
          
              <div class="box4">
                  <a href="./html/registration.php">Registration</a>
                  contains a form to register for a certain course. Using PHP, the input is saved on a local MySQL database.  
              </div>
          
              <div class="box5">
                  In <a href="./html/contact.php">Contact Us</a> you can find a basic contact form. The input is also saved on a local database using php.  
              </div>
        </div>
      </div>

      <div class="container4">
        <h2>Upcoming Random Events</h2>
        <ul>
            <li>Random Event 1 - yyyy-mm-dd</li>  
            <li>Random Event 2 - yyyy-mm-dd</li>  
            <li>Random Event 3 - yyyy-mm-dd</li>  
            <li>Random Event 4 - yyyy-mm-dd</li>  
        </ul>
      </div>
     

<?php
    require "footer.php";
?>
    

