<?php
        include_once 'dbh.php';

        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $age = mysqli_real_escape_string($conn, $_POST['age']);
        $course = mysqli_real_escape_string($conn, $_POST['course']);
        $payment = mysqli_real_escape_string($conn, $_POST['payment']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);

        if (empty($firstname) || empty($lastname) || empty($age) || empty($course) || empty($payment)) {
           header("Location: ../html/registration.php?submit=missing&firstname=$firstname&lastname=$lastname&age=$age&message=$message");    
        }
        elseif (!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $lastname)){
            header("Location: ../html/registration.php?submit=char&firstname=$firstname&lastname=$lastname&age=$age&message=$message");
            
        }

        else {
            $sql= "insert into registration (firstname, lastname, age, course, payment, message) 
                values ('$firstname','$lastname','$age','$course', '$payment', '$message');";
            $result= mysqli_query($conn, $sql);

            header("Location: ../html/registration2.php");
        }

      ?>