<?php
 require "meta.php";
?>

<link rel="stylesheet" href="./contact.css">
 
<?php
 require "header.php";
?>

<!-----------------------------MAIN------------------------------------------------->  
 <main>
      
      <div class="container2">
        <h2>Contact us!</h2>
        <p>This is a simple contact form. The inputs are again saved on a local database using PHP and MySQL.</p>
      </div>
      
      <div class="container3">
          
          <?php
              /*      $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                    if (strpos($fullUrl, "submit=missing") == true) {
                        echo "<p> You have not filled in all fields! Please repeat registration. </p>";
                        exit();
                    }
                    elseif (strpos($fullUrl, "submit=char") == true) {
                        echo "<p> You have used invalid characters! Only 'a-z' and capital letters are allowed. Please repeat registration again. </p>";
                        exit();
                    } 
                    elseif (strpos($fullUrl, "submit=mail") == true) {
                        echo "<p> Invalid E-mail. Please register again using a valid E-mail address. </p>";
                        exit();
                    }   */
          
            if (isset($_GET['submit'])) {
                $submit = $_GET['submit'];   
                
                if ($submit == "missing") {
                    echo "<p class='error'> You have not filled in all fields! Please repeat registration. </p>";
                }
                elseif ($submit == "char") {
                        echo "<p class='error'> You have used invalid characters! Only 'a-z' and capital letters are allowed. Please repeat registration. </p>";
                }
                elseif ($submit == "mail") {
                        echo "<p> Invalid E-mail. Please register again using a valid E-mail address. </p>";
                }
            }
           ?>
          
          <form action="../connect/sendmessage.php" method="post">
            <?php 
                if (isset($_GET['firstname'])) {
                    $first = $_GET['firstname'];
                    echo '<input id="firstname" name="firstname" type="text" placeholder="First Name" value="'.$first.'">' ;  
                }
                else {
                    echo '<input id="firstname" name="firstname" type="text" placeholder="First Name">';
                }
            ?>
            <?php 
                if (isset($_GET['lastname'])) {
                    $last = $_GET['lastname'];
                    echo '<input id="lastname" name="lastname" type="text" placeholder="Last Name" value="'.$last.'">' ;  
                }
                else {
                    echo '<input id="lastname" name="lastname" type="text" placeholder="Last Name">';
                }
            ?>
            <?php 
                if (isset($_GET['mail'])) {
                    $mail = $_GET['mail'];
                    echo '<input id="mail" name="mail" type="email" placeholder="abc@mail.com" value="'.$mail.'">' ;  
                }
                else {
                    echo '<input id="mail" name="mail" type="email" placeholder="abc@mail.com">';
                }
            ?>
            <?php 
                if (isset($_GET['subject'])) {
                    $subject = $_GET['subject'];
                    echo '<input id="subject" name="subject" type="text" placeholder="Subject" value="'.$subject.'">' ;  
                }
                else {
                    echo '<input id="subject" name="subject" type="text" placeholder="Subject">';
                }
            ?>
            <?php 
                    if (isset($_GET['message'])) {
                        $message = $_GET['message'];
                        echo '<textarea id="message" name="message" placeholder="Add your message here...">'.$message.'</textarea>' ;  
                    }
                    else {
                        echo '<textarea id="message" name="message" placeholder="Add your message here..."></textarea>';
                    }
            ?>
            <button type="submit" name="submit" value="submit" >Submit</button>
          </form>
          
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
