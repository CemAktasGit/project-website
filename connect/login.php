<?php
    if(isset($_POST['button-login'])) {
     
        require "dbh.php";
        
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        
        if (empty($username) || empty($password)) {
            header("Location: ../index.php?login=missingentry");
            exit();
        }
        
        else {
        
            $sql = "SELECT * FROM users WHERE username=?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../index.php?login=sqlerror");
                exit();
            }
            else {
                mysqli_stmt_bind_param($stmt, 's', $username);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($result)) {
                    $pwdcheck = password_verify($password, $row['pwd']);
                   if ($pwdcheck == false) {
                        header("Location: ../index.php?login=wrongpassword");
                        exit();
                    }
                    else if ($pwdcheck == true) {
                        session_start();
                        $_SESSION['username'] = $row['username'];
                            
                        header("Location: ../index.php?login=success");
                        exit();
                    }
                    else{
                        header("Location: ../index.php?login=failed");
                    }
                    
                }
                else {
                    header("Location: ../index.php?login=unknown");
                    exit();
                }
                
        
                
        

            }          
        }
    
    }
    else {
        header('Location: ../index.php');
        exit();
    }
?>