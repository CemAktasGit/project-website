<?php

        if (isset($_POST['submit'])) {
            
            require 'dbh.php';
        
            $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
            $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
            $username = mysqli_real_escape_string($conn, $_POST['user_name']);
            $mail = mysqli_real_escape_string($conn, $_POST['mail']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $passwordCheck = mysqli_real_escape_string($conn, $_POST['password-check']);   

            if (empty($firstname) || empty($lastname) || empty($username) || empty($mail) || empty($password) || empty($passwordCheck)) {
                header("Location: ../html/signup.php?signup=missing&first=$firstname&last=$lastname&user=$username&mail=$mail");
            }
            
            elseif (!preg_match("/^[a-zA-Z]*$/", $firstname) || !preg_match("/^[a-zA-Z]*$/", $lastname) || !preg_match("/^[a-zA-Z0-9]*$/", $username)){
                header("Location: ../html/signup.php?signup=char&first=$firstname&last=$lastname&user=$username&mail=$mail");
            }
            
            elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)){
                header("Location: ../html/signup.php?signup=mail&first=$firstname&last=$lastname&user=$username");
            }
            
            elseif ($password !== $passwordCheck) {
                header("Location: ../html/signup.php?signup=pwd&first=$firstname&last=$lastname&user=$username&mail=$mail");
            }
            
            else {
                
                /* check if username and email already exist in databse */
                $sql = "SELECT username FROM users WHERE username=?";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: ../html/signup.php?signup=sql");
                    exit();
                }
                else {
                    mysqli_stmt_bind_param($stmt, "s", $username);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    $result = mysqli_stmt_num_rows($stmt);
                    if ($result > 0) {
                        header("Location: ../html/signup.php?signup=usertaken");
                        exit();
                    }
                    else {
                        $sql= "INSERT INTO users (firstname, lastname, username, mail, pwd) VALUES (?, ?, ?, ?, ?);";
                        $stmt = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($stmt, $sql)) {
                            header("Location: ../html/signup.php?signup=sql");
                            exit();
                        } 
                        else {
                            $pwdhash = password_hash($password, PASSWORD_DEFAULT);
                            mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $username, $mail, $pwdhash);
                            mysqli_stmt_execute($stmt);
                            
                        
                            $result= mysqli_query($conn, $sql);
                            header("Location: ../html/signup.php?signup=success");
                            
                        }
                    }
                }
            
            }
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
        }
        else {
            header("Location: ../html/signup.php?signup=problem");
            exit();    
        }

      ?>