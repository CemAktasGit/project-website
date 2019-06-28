<?php
    require "meta.php";
?>

<link rel="stylesheet" href="contact.css">

<?php
    require "header.php";
?>

<main>

<?php
    if (isset($_GET['signup'])) {
        $submit=$_GET['signup'];
        
        if ($submit == 'missing') {
            echo "<p class='errormessage'> You have not filled in all fields! Please repeat and submit again. </p>";
        }
        elseif ($submit == 'char') {
            echo "<p class='errormessage'> You have used invalid characters! Only 'a-z' and capital letters, for UserName also '0-9' are allowed. Please repeat signup. </p>";
        }
        elseif ($submit == 'mail') {
            echo "<p class='errormessage'> Invalid E-mail! Please use a correct E-mail and signup again. </p>";
        }
        elseif ($submit == 'pwd') {
            echo "<p class='errormessage'> Password not identical! Please repeat password correctly. </p>";
        }
        elseif ($submit == 'sql') {
            echo "<p class='errormessage'> An SQL Error occurred!</p>";
        }
        elseif ($submit == 'problem') {
            echo "<p class='errormessage'> Something went wrong! Please contact the support or try again. </p>";
        }
        elseif ($submit == 'usertaken') {
            echo "<p class='errormessage'> Username is already taken. Please choose an other username. </p>";
        }
        elseif ($submit == 'success') {
            echo "<p class='successmessage'> SignUp Successful! You can login now.</p>";
        }

    }
?>

<div class="container3">
    <form action="../connect/signupsend.php" method="post">
    <legend>SignUp</legend>
<input type="text" name="firstname" placeholder="FirstName"> 
<input type="text" name="lastname" placeholder="LastName"> 
<input type="text" name="user_name" placeholder="UserName"> 
<input type="email" name="mail" placeholder="abc@gmail.com"> 
<input type="password" name="password" placeholder="Password"> 
<input type="password" name="password-check" placeholder="Repeat Password"> 
<button id="submit" type="submit" name="submit" value="submit">SignUp</button> 
    </form>    
</div>    


</main>


<?php
    require "footer.php";      
?>