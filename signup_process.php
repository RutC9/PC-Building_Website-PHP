<?php
    include 'connect_database.php';
    session_start();

    if(isset($_POST['submit']))
    {
        $user_name = mysqli_real_escape_string($database, $_POST['user_name']);
        $pass1=$_POST['password'];
        $pass2=$_POST['confirm-password'];

        if (filter_var($_POST['user_name'], FILTER_VALIDATE_EMAIL) && $_POST['password']==$_POST['confirm-password'] && strlen($_POST['password'])>7) 
        {
            $_SESSION['error_message']='';
            $_SESSION['success']="Success";
            $password =  password_hash($_POST['password'], PASSWORD_DEFAULT); 
        

            $sql = "INSERT INTO user (email, password ) VALUES ('$user_name', '$password' )";

            if (mysqli_query($database, $sql)) 
            {
                $_SESSION['customer'] = $email;
                header('location:cart.php');
            } 
            else 
            {
                $_SESSION['error_message']=mysqli_error($database);
            }
        }
        else
        {
            $_SESSION['email_error']='';
            $_SESSION['password_error']='';
            $_SESSION['pass_length_error']='';
            if(!filter_var($_POST['user_name'], FILTER_VALIDATE_EMAIL))
            {
                $_SESSION['email_error']='Invalid Email';
            }
            if($_POST['password']!=$_POST['confirm-password']){

                $_SESSION['password_error']='Passwords do not match';
                
            }
            else if(strlen($_POST['password'])<7)
            {
                $_SESSION['pass_length_error']='Passowrd should be more than 7 characters';
            }
            header('location:signup.php');
        }
        
        
    }

?>