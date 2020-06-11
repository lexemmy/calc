<?php
include('../process/indexDB.php');
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
$q="select email, password from admin where email ='$email'";

    $result=$conn->query($q);


    if (mysqli_num_rows($result) > 0){
        
        $row= mysqli_fetch_array($result,MYSQLI_ASSOC);
        $passwordFromDB = $row['password'];
        $passwordFromUser = password_verify($password, $passwordFromDB);
         if($passwordFromDB == $passwordFromUser)
        {   
            $_SESSION['user'] = "Admin";

                header('Location: admin.php');
                $conn->close();
            
          
            
        }
        else
        {
            $_SESSION['error'] = "invalid password";
            header('Location: index.php');
            $conn->close();
        }

    } else{

         $_SESSION['error'] =  "invalid email";
        header('Location: index.php');
    $conn->close();
    }

?>