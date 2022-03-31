<?php
    if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<?php
        
        if(!isset($_SESSION['customer']) && empty($_SESSION['customer']) )
        {
            header('location:login.php');
        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="./styles/cart.css">
</head>

<body>
    <?php 
    include 'navigation.php';
    include 'connect_database.php';//$database  
    
    ?>


    <div class="main_cart">
        <?php
        $total_price=0;
            if(empty($_SESSION['cabinet_full_name']))
            {
                echo '<h1>Cart is Empty</h1>';
            }
        ?>
        <table class="order-table">

            <tr>
                <th>PRODUCTS</th>
                <th>PRODUCT DESCRIPTION</th>
                <th>PRICE</th>
            </tr>

            <tr>
                <td data-th="PRODUCTS">Cabinet</td>
                <td data-th="PRODUCT DESCRIPTION">
                    <?php
                        if(!empty($_SESSION["cabinet_full_name"])) 
                        {echo $_SESSION["cabinet_full_name"];} 
                        else
                        {
                            echo '';
                        }
                    
                    ?>
                </td>
                <td data-th="PRICE">
                    <?php 
                        if(!empty($_SESSION['cabinet_price']))
                        {
                            echo $_SESSION['cabinet_price'];
                            $total_price=$total_price+$_SESSION['cabinet_price'] ;
                        }
                        else
                        {
                            echo '';
                        }
                    ?>
                </td>
            </tr>

            <tr>
                <td data-th="PRODUCTS">CPU</td>
                <td data-th="PRODUCT DESCRIPTION">
                    <?php
                        if(!empty($_SESSION["cpu_full_name"])) 
                        {echo $_SESSION["cpu_full_name"];} 
                        else
                        {
                            echo '';
                        }
                    
                    ?>
                </td>
                <td data-th="PRICE">
                    <?php 
                        if(!empty($_SESSION['cpu_price']))
                        {
                            echo $_SESSION['cpu_price'];
                            $total_price=$total_price+$_SESSION['cpu_price'] ;
                        }
                        else
                        {
                            echo '';
                        }
                    ?>
                </td>
            </tr>

            <tr>
                <td data-th="PRODUCTS">GPU</td>
                <td data-th="PRODUCT DESCRIPTION">
                    <?php
                        if(!empty($_SESSION["gpu_full_name"])) 
                        {echo $_SESSION["gpu_full_name"];} 
                        else
                        {
                            echo '';
                        }
                    
                    ?>
                </td>
                <td data-th="PRICE">
                    <?php 
                        if(!empty($_SESSION['gpu_price']))
                        {
                            echo $_SESSION['gpu_price'];
                            $total_price=$total_price+$_SESSION['gpu_price'] ;
                        }
                        else
                        {
                            echo '';
                        }
                    ?>
                </td>
            </tr>

            <tr>
                <td data-th="PRODUCTS">Ram</td>
                <td data-th="PRODUCT DESCRIPTION">
                    <?php
                        if(!empty($_SESSION["ram_full_name"])) 
                        {echo $_SESSION["ram_full_name"];} 
                        else
                        {
                            echo '';
                        }
                    
                    ?>
                </td>
                <td data-th="PRICE">
                    <?php 
                        if(!empty($_SESSION['ram_price']))
                        {
                            echo $_SESSION['ram_price'];
                            $total_price=$total_price+$_SESSION['ram_price'] ;
                        }
                        else
                        {
                            echo '';
                        }
                    ?>
                </td>
            </tr>

            <tr>
                <td data-th="PRODUCTS">Motherboard</td>
                <td data-th="PRODUCT DESCRIPTION">
                    <?php
                        if(!empty($_SESSION["mb_full_name"])) 
                        {echo $_SESSION["mb_full_name"];} 
                        else
                        {
                            echo '';
                        }
                    
                    ?>
                </td>
                <td data-th="PRICE">
                    <?php 
                        if(!empty($_SESSION['mb_price']))
                        {
                            echo $_SESSION['mb_price'];
                            $total_price=$total_price+$_SESSION['mb_price'] ;
                        }
                        else
                        {
                            echo '';
                        }
                    ?>
                </td>
            </tr>

            <tr>
                <td data-th="PRODUCTS">SSD</td>
                <td data-th="PRODUCT DESCRIPTION">
                    <?php
                        if(!empty($_SESSION["ssd_full_name"])) 
                        {echo $_SESSION["ssd_full_name"];} 
                        else
                        {
                            echo '';
                        }
                    
                    ?>
                </td>
                <td data-th="PRICE">
                    <?php 
                        if(!empty($_SESSION['ssd_price']))
                        {
                            echo $_SESSION['ssd_price'];
                            $total_price=$total_price+$_SESSION['ssd_price'] ;
                        }
                        else
                        {
                            echo '';
                        }
                    ?>
                </td>
            </tr>

            <tr>
                <td data-th="PRODUCTS">HDD</td>
                <td data-th="PRODUCT DESCRIPTION">
                    <?php
                        if(!empty($_SESSION["hdd_full_name"])) 
                        {echo $_SESSION["hdd_full_name"];} 
                        else
                        {
                            echo '';
                        }
                    
                    ?>
                </td>
                <td data-th="PRICE">
                    <?php 
                        if(!empty($_SESSION['hdd_price']))
                        {
                            echo $_SESSION['hdd_price'];
                            $total_price=$total_price+$_SESSION['hdd_price'] ;
                        }
                        else
                        {
                            echo '';
                        }
                    ?>
                </td>
            </tr>

            <tr>
                <td data-th="PRODUCTS">Power Supply</td>
                <td data-th="PRODUCT DESCRIPTION">
                    <?php
                        if(!empty($_SESSION["power_supply_full_name"])) 
                        {echo $_SESSION["power_supply_full_name"];} 
                        else
                        {
                            echo '';
                        }
                    
                    ?>
                </td>
                <td data-th="PRICE">
                    <?php 
                        if(!empty($_SESSION['power_supply_price']))
                        {
                            echo $_SESSION['power_supply_price'];
                            $total_price=$total_price+$_SESSION['power_supply_price'] ;
                        }
                        else
                        {
                            echo '';
                        }
                    ?>
                </td>
            </tr>

            <tr>
                <td data-th="PRODUCTS">Cpu Cooler</td>
                <td data-th="PRODUCT DESCRIPTION">
                    <?php
                        if(!empty($_SESSION["cpu_cooler_full_name"])) 
                        {echo $_SESSION["cpu_cooler_full_name"];} 
                        else
                        {
                            echo '';
                        }
                    
                    ?>
                </td>
                <td data-th="PRICE">
                    <?php 
                        if(!empty($_SESSION['cpu_cooler_price']))
                        {
                            echo $_SESSION['cpu_cooler_price'];
                            $total_price=$total_price+$_SESSION['cpu_cooler_price'] ;
                        }
                        else
                        {
                            echo '';
                        }
                    ?>
                </td>
            </tr>

            <tr>
                <td>Total</td>
                <td>--</td>
                <td>
                    <?php 
                    if($total_price!=0)
                    {
                        $_SESSION['total_price']=$total_price;
                        echo $total_price;
                    }
                    else{
                        echo '';
                    }
                ?>
                </td>
            </tr>
        </table>

        <div class="payment-container">
            <h1>PAYMENT METHOD</h1>
            <form action="placeorder.php" method='post'>
                <div class="methods">
                    <div class="delivery-option">
                        <div class="cod">
                            <input type="radio" id="cod" name="payment" value="Cash On Delivery" checked>
                            <label for="cod">Cash on Delivery</label>
                        </div>
                        <img src="./images/cod.png" alt="" style='width:80px;"'>
                    </div>
                    <br>
                      <div class="delivery-option">
                        <div class="card-payment">
                            <input type="radio" id="online_payment" name="payment" value="Online Payment">
                            <label for="online_payment">Online Payment</label>
                        </div>
                        <img src="./images/credit-card.png" alt="" style="width:80px;">
                    </div>
                    <br>
                </div>
                <!-- <input type="button" value=""> -->
                <input id="place-order" type="submit" name='submit-order' value="Place Order">
            </form>

        </div>
    </div>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>