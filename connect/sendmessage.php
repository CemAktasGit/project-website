<?php
        include_once 'dbh.php';

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $mail = $_POST['mail'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        if (empty($firstname) || empty($lastname) || empty($mail) || empty($subject) || empty($message)) {
           header("Location: ../html/contact.php?submit=missing&firstname=$firstname&lastname=$lastname&mail=$mail&subject=$subject&message=$message");    
        }
        elseif (!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $lastname)){
            header("Location: ../html/contact.php?submit=char&firstname=$firstname&lastname=$lastname&mail=$mail&subject=$subject&message=$message");   
        }
        elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../html/contact.php?submit=mail&firstname=$firstname&lastname=$lastname&mail=$mail&subject=$subject&message=$message");  
        }

        else {
        $sql= "insert into sendmessage (firstname, lastname, mail, subject, message) 
                values ('$firstname','$lastname','$mail','$subject', '$message');";
        $result= mysqli_query($conn, $sql);

        header("Location: ../html/contact2.php");
        }

      ?>