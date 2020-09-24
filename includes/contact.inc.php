
<?php include('Database.php'); ?>

<?php

if (isset($_POST['signup-submit'])){
        
        $username = $_POST['uid'];
        $email = $_POST['mail'];
        $password = $_POST['pwd'];
        $passwordRepeat = $_POST['pwd-repeat'];

        if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
            header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
            exit();
        }

        else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
            header("Location: ../signup.php?error=invalidmail&uid=");
            exit();

        }

        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("Location: ../signup.php?error=invalidmail&uid=".$username);
            exit();
        }
        else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
            header("Location: ../signup.php?error=invaliduid&mail=".$email);
            exit();
        }

        else if ($password !== $passwordRepeat){
            header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
            exit();
        }
        else{
            $sql = "SELECT uidUsers FROM users WHERE uidUsers='$username';";
            echo $sql;
            if (!$result=$database->query($sql)){
                header("Location: ../signup.php?error=sqlerror");
                exit();
            }

        else {
          
            $resultCheck = mysqli_num_rows($result);
            if($resultCheck > 0){
                header("Location: ../signup.php?error=usertaken&mail=".$email);
                exit();
            }
            else{
                $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES ('$username','$email','$hashedPwd')";
                if (!$result=$database->query($sql)){
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
            }
            else {
                header("Location: ../signup.php?signup=success");
                exit();
            }
        }

      }

    }

     mysqli_close($database->connection);

}

else {
    header("Location: ../signup.php");
    exit();
}


?>
