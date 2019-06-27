<?php
 require "meta.php";
?>

 <link rel="stylesheet" href="./registration.css">
 
<?php
 require "header.php";
?>

      
<!-----------------------------MAIN------------------------------------------------->  
 <main>
      
      <div class="container2">
        <h2>Registration for our courses!</h2>
        <p>The form on this page demonstrates the use of PHP and MySQL. The inputs are saved on a local database.</p>
      </div>
      
      <div class="container3">
        <?php
                /*    $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    if (strpos($fullUrl, "submit=missing") == true) {
                        echo "<p class='error'> You have not filled in all fields! Please repeat registration. </p>";
                        exit();
                    }
                    elseif (strpos($fullUrl, "submit=char") == true) {
                        echo "<p class='error'> You have used invalid characters! Only 'a-z' and capital letters are allowed. Please repeat registration again. </p>";
                    } */
          
            
         
                if (isset($_GET['submit'])) {
                
                    $submit = $_GET['submit'];
                
                    if ($submit == "missing") {
                        echo "<p class='error'> You have not filled in all fields! Please repeat registration. </p>";
                    }
                    elseif ($submit == "char") {
                            echo "<p class='error'> You have used invalid characters! Only 'a-z' and capital letters are allowed. Please repeat         registration. </p>";
                    }
            
                }
          
         ?>
        <form id="form1" action="../connect/submit.php" method="post"> 
           <fieldset> 
                <legend>Participant</legend>    
                        <ul class="box3b">
                            <li>
                                <label for="firstname">First Name</label>
                                <?php 
                                    if (isset($_GET['firstname'])) {
                                        $first = $_GET['firstname'];
                                        echo '<input id="firstname" name="firstname" type="text" placeholder="John" value="'.$first.'">' ;  
                                    }
                                    else {
                                        echo '<input id="firstname" name="firstname" type="text" placeholder="John">';
                                    }
                                ?>
                                
                            </li>
                            <li>
                                <label for="lastname">Last Name</label>
                                <?php 
                                    if (isset($_GET['lastname'])) {
                                        $last = $_GET['lastname'];
                                        echo '<input id="lastname" name="lastname" type="text" placeholder="Doe" value="'.$last.'">' ;  
                                    }
                                    else {
                                        echo '<input id="lastname" name="lastname" type="text" placeholder="Doe">';
                                    }
                                ?>
                                
                            </li>
                            <li>
                                <label for="age">Age</label>
                                <?php 
                                    if (isset($_GET['age'])) {
                                        $age = $_GET['age'];
                                        echo '<input id="age" name="age" type="number" placeholder="18" value="'.$age.'">' ;  
                                    }
                                    else {
                                        echo '<input id="age" name="age" type="number" placeholder="18">';
                                    }
                                ?>
                                
                            </li>
                        </ul>
            </fieldset>
            
            <fieldset> 
                <legend>Courses</legend>
                    <ul class="box3a">
                        <li>
                            <label for="courses">Courses</label>
                            <select id="courses" name="course" type=>
                                <option></option>
                                <option value="Course1">Course1</option>
                                <option value="Course2">Course2</option>
                                <option value="Course3">Course3</option>
                                <option value="Course4">Course4</option>
                            </select>   
                                    
                        
                        </li>
                    </ul>
            </fieldset>
            
            <fieldset> 
                <legend>Payment</legend>
                    <ul>
                        <li>
                            <label for="payment">Payment Method</label>
                            <select id="payment" name="payment" type=>
                                <option></option>
                                <option value="CreditCard">Kreditkarte</option>
                                <option value="Sofortueberweisung">Sofortüberweisung</option>
                                <option value="Nachzalung">Nachzahlung</option>
                            </select>
                        </li>
                    </ul>
            </fieldset>
            
            <fieldset>
                <legend>Additional Information</legend>
                <p>
                <?php 
                    if (isset($_GET['message'])) {
                        $message = $_GET['message'];
                        echo '<textarea id="message" name="message" placeholder="Add your message here">'.$message.'</textarea>' ;  
                    }
                    else {
                        echo '<textarea id="message" name="message" placeholder="Add your message here..."></textarea>';
                    }
                ?>
                </p>
            </fieldset>
            
            <button id="submit" type="submit" name="submit" value="submit" >Submit</button>    
          </form>
        
          
       </div>
      
<!------------------------------------------------------------------------->
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



