<?php
    require "meta.php";
?>

<link rel="stylesheet" href="contact.css">

<?php
    require "header.php";
?>

<main>


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