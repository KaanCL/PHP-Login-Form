<?php

include 'connectionDB.php';

if(isset($_POST['signUp'])){
    $name=$_POST['fname'];
    $surname=$_POST['lname'];
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $birthdate=$_POST['birthdate'];
    $gender=$_POST['gender'];

    if($gender=='men'){
        $gender=1;
    }else{
        $gender= 0;
    }   
    
    $checkEmail="SELECT * From users where email='$email'";
    $result=$conn->query($checkEmail);

    if($result->num_rows>0){
    echo "Email Address Already Exists !";
    }
    else{
        $insertQuery="INSERT INTO users(name,surname,email,password,birthdate,gender)
                       VALUES ('$name','$surname','$email','$password','$birthdate','$gender')";
            if($conn->query($insertQuery)==TRUE){
                header("location: users.php"); 
            }
            else{
                echo "Error:".$conn->error;
            }
     }

    }

  /*  if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=md5($_POST['password']);
   
   $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['email']=$row['email'];
        header("Location: users.php");
        exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }

}*/



?>

