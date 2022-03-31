<?php
session_start();
include 'connect_database.php';
$firstname=$lastname=$contact=$address=$city=$state=$country=$zipcode=$user='';
if(isset($_POST['submit']))
{
    if(!empty($_POST['first_name']))
    {
        $firstname=$_POST['first_name'];
    }   
    if(!empty($_POST['last_name']))
    {
        $lastname=$_POST['last_name'];
    }
    if(!empty($_POST['contact_number']))
    {
        $contact=$_POST['contact_number'];
    }
    if(!empty($_POST['address']))
    {
        $address=$_POST['address'];
    }
    if(!empty($_POST['city']))
    {
        $city=$_POST['city'];
    }
    if(!empty($_POST['state']))
    {
        $state=$_POST['state'];
    }
    if(!empty($_POST['country']))
    {
        $country=$_POST['country'];
    }
    if(!empty($_POST['zip-code']))
    {
        $zipcode=$_POST['zip-code'];
    }
    $user=$_SESSION['customer'];

    $search="SELECT user_id FROM user_data where user_id='$user'";

    $result = $database->query($search);

    if ($result->num_rows > 0) 
    {
        $delete="DELETE FROM `user_data` WHERE user_id='$user'";
        if ($database->query($delete) === TRUE) 
        {
            echo 'deleted successfully';
        }
        else
        {
            echo "error: ".$database->error;
        }
    } 
    
    
    $insert="INSERT INTO `user_data`(`user_id`, `firstname`,`lastname`,`address`,`city`,`state`,`country`,`zip_code`,`mobile-number`) VALUES ('$user','$firstname','$lastname','$address','$city','$state','$country','$zipcode','$contact')";

    if ($database->query($insert) === TRUE) 
    {
        echo "New record created successfully";
        $_SESSION['update']='Details updated successfully';
        echo '<script> window.location.href = "myaccount.php";</script>';
    }
    else 
    {
        echo "Error: " . $insert . "<br>" . $database->error;
    }
}

    



?>