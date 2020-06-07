<?php
include('indexDB.php');
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$q="select userid, email, password from users where email ='$email'";

    $result=$conn->query($q);
    if (mysqli_num_rows($result) > 0){
        $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
        $passwordFromDB = $row['password'];
        $passwordFromUser = password_verify($password, $passwordFromDB);
         if($passwordFromDB == $passwordFromUser)
        {   
            $_SESSION['userid'] = $row['userid'];
           header('Location: ../dashboard.php');
           $conn->close();
            
        }
        else
        {
            $_SESSION['error'] = "invalid password";
            header('Location: ../login.php');
            $conn->close();
        }

    } else{
         $_SESSION['error'] =  "invalid email";
        header("Location: ../login.php");
    $conn->close();
    }


?>