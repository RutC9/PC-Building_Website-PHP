<?php
session_start();
include 'connect_database.php';
$total_price=$cabinet=$cpu=$gpu=$ram=$mb=$ssd=$hdd=$ps=$cpu_cooler=$userid='';
if (isset($_POST['submit-order']))
{
   
        
            $total_price=$_SESSION['total_price'];
            $cabinet=$_SESSION['cabinet_full_name'];
            $cpu=$_SESSION['cpu_full_name'];
            $gpu=$_SESSION['gpu_full_name'];
            $ram=$_SESSION['ram_full_name'];
            $mb=$_SESSION['mb_full_name'];
            $ssd=$_SESSION['ssd_full_name'];
            $hdd=$_SESSION['hdd_full_name'];
            $ps=$_SESSION['power_supply_full_name'];
            $cpu_cooler=$_SESSION['cpu_cooler_full_name'];
            $userid=$_SESSION['customer'];
            $mode_of_payment=$_POST['payment'];
            $sql="INSERT INTO `product_details`(`userid`, `model_name`,`cpu_id`,`gpu_id`,`ram_id`,`mb_id`,`ssd_id`,`hdd_id`,`ps_id`,`cooler_id`,`total_price`,`mode_of_payment`) VALUES ('$userid','$cabinet','$cpu','$gpu','$ram','$mb','$ssd','$hdd','$ps','cpu_cooler','$total_price','$mode_of_payment')";

            
            if ($database->query($sql) === TRUE) {
            echo "New record created successfully";
            echo '<script> window.location.href = "order_success.php";
            alert("Ordered Successfully");
                        </script>';
            } else {
            echo "Error: " . $sql . "<br>" . $database->error;
            }
        }
    

?>