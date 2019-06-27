<?php
        include_once 'dbh.php';
        
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $username = mysqli_real_escape_string($conn, $_POST['user_name']);
        $mail = mysqli_real_escape_string($conn, $_POST['mail']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $passwordCheck = mysqli_real_escape_string($conn, $_POST['password-check']);   

        $sql= "insert into users (firstname, lastname, username, mail, password) 
                values ('$firstname','$lastname','$username','$mail','$password');";
        $result= mysqli_query($conn, $sql);

        header("Location: ../index.php");
        

      ?>