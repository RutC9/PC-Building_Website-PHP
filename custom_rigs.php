<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Custom Rigs</title>
    <link rel="stylesheet" href="./styles/custom_rig.css" />
  </head>
  <body>
    <!-- header -->
    <?php 
      include 'navigation.php';
      include 'connect_database.php';//$database connection
      
      $total=0;
      $cabinet=$cpu=$gpu=$ram=$mb=$ssd=$hdd=$power_supply=$cpu_cooler="";

      if (isset($_POST['submit'])) // fetching values
      {
         if(!empty($_POST['cabinet']))
         {
           $cabinet=$_POST['cabinet'];
         }
         if(!empty($_POST['cpu']))
         {
           $cpu=$_POST['cpu'];
         }
         if(!empty($_POST['gpu']))
         {
           $gpu=$_POST['gpu'];
         }
         if(!empty($_POST['ram']))
         {
           $ram=$_POST['ram'];
         }
         if(!empty($_POST['mb']))
         {
           $mb=$_POST['mb'];
         }
         if(!empty($_POST['ssd']))
         {
           $ssd=$_POST['ssd'];
         }
         if(!empty($_POST['hdd']))
         {
           $hdd=$_POST['hdd'];
         }
         if(!empty($_POST['power_supply']))
         {
           $power_supply=$_POST['power_supply'];
         }
         if(!empty($_POST['cpu_cooler']))
         {
           $cpu_cooler=$_POST['cpu_cooler'];
         }
              
        //  setting $_SESSION['cabinet_price'] and $_SESSION['cabinet_full_name']
         $new1=(int)$cabinet;
         $_SESSION['cabinet_price']=$new1;
         $res1=mysqli_query($database, "select full_name from cabinet where price= $new1");
         $data1=mysqli_fetch_assoc($res1);
         $_SESSION['cabinet_full_name'] = $data1['full_name'];
         echo $_SESSION['cabinet_full_name'];
          
        //  setting $_SESSION['cpu_price'] and $_SESSION['cpu_full_name']
         $new2=(int)$cpu;
         $_SESSION['cpu_price']=$new2;
         $res2=mysqli_query($database, "select cpu_full_name from processor where price= $new2");
         $data2=mysqli_fetch_assoc($res2);
         $_SESSION['cpu_full_name'] = $data2['cpu_full_name'];
         
        //  setting $_SESSION['gpu_price'] and $_SESSION['gpu_full_name']
         $new3=(int)$gpu;
         $_SESSION['gpu_price']=$new3;
         $res3=mysqli_query($database, "select gpu_full_name from gpu where price= $new3");
         $data3=mysqli_fetch_assoc($res3);
         $_SESSION['gpu_full_name'] = $data3['gpu_full_name'];
         
        //  setting $_SESSION['ram_price'] and $_SESSION['ram_full_name']
         $new4=(int)$ram;
         $_SESSION['ram_price']=$new4;
         $res4=mysqli_query($database, "select ram_full_name from ram where price= $new4");
         $data4=mysqli_fetch_assoc($res4);
         $_SESSION['ram_full_name'] = $data4['ram_full_name'];
         
        //  setting $_SESSION['mb_price'] and $_SESSION['mb_full_name']
         $new5=(int)$mb;
         $_SESSION['mb_price']=$new5;
         $res5=mysqli_query($database, "select mb_full_name from motherboard where price= $new5");
         $data5=mysqli_fetch_assoc($res5);
         $_SESSION['mb_full_name'] = $data5['mb_full_name'];
         
        //  setting $_SESSION['ssd_price'] and $_SESSION['ssd_full_name']
         $new6=(int)$ssd;
         $_SESSION['ssd_price']=$new6;
         $res6=mysqli_query($database, "select ssd_full_name from ssd where price= $new6");
         $data6=mysqli_fetch_assoc($res6);
         $_SESSION['ssd_full_name'] = $data6['ssd_full_name'];
         
        //  setting $_SESSION['hdd_price'] and $_SESSION['hdd_full_name']
         $new7=(int)$hdd;
         $_SESSION['hdd_price']=$new7;
         $res7=mysqli_query($database, "select hdd_full_name from hdd where price= $new7");
         $data7=mysqli_fetch_assoc($res7);
         $_SESSION['hdd_full_name'] = $data7['hdd_full_name'];
         
        //  setting $_SESSION['power_supply_price'] and $_SESSION['power_supply_full_name']
         $new8=(int)$power_supply;
         $_SESSION['power_supply_price']=$new8;
         $res8=mysqli_query($database, "select ps_full_name from power_supply where price= $new8");
         $data8=mysqli_fetch_assoc($res8);
         $_SESSION['power_supply_full_name'] = $data8['ps_full_name'];
         
        //  setting $_SESSION['cpu_cooler_price'] and $_SESSION['cpu_cooler_full_name']
         $new9=(int)$cpu_cooler;
         $_SESSION['cpu_cooler_price']=$new9;
         $res9=mysqli_query($database, "select cooler_full_name from cpu_cooler where price= $new9");
         $data9=mysqli_fetch_assoc($res9);
         $_SESSION['cpu_cooler_full_name'] = $data9['cooler_full_name'];

        //  redirecting
         echo '<script>
                window.location.href = "cart.php";
              </script>';
        }
       

    ?>

    <!-- header end -->

    <!-- main content -->
    <div class="customrig-main">

      <div class="build_image"> <!-- cabinet images -->
        <img id='cabinet_image' src="" alt="Please select a cabinet" style="width: 250px;">
      </div>

      <div class="build_inputs"> <!-- form inputs -->
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          
          <select required name="cabinet" id="cabinet_select" onchange="input_entered(this.name);calc_total(this.value);display(this.text)">
            <option disabled selected value='0'>-- Select Your Cabinet --</option>
              <?php
                
                $res=mysqli_query($database, "select * from cabinet");
                while($data=mysqli_fetch_array($res))
                { 
                  echo "<option value='". $data['price'] ."'>" .$data['full_name'] ."</option>";
                  // echo "<option value='". $data['price'] ."'>" .$data['full_name'] ."</option>";
                  
                  
                }
              ?>
            
          </select>
          
          <!-- PROCESSOR -->
          <select  name="cpu" id="cpu_select" onchange="input_entered(this.name);calc_total(this.value);"> 
            <option disabled selected value='0'>-- Select Your Processor --</option>
              <?php
                // $sql = "select company from cabinet where company='Corsair'";
                $res=mysqli_query($database, "select * from processor");
                while($data=mysqli_fetch_array($res))
                { 
                  echo "<option value='". $data['price'] ."'>" .$data['cpu_full_name'] ."</option>";
                  
                }
              ?>
            
          </select>

          <!-- GPU -->
          <select  name="gpu" id="gpu_select" onchange="input_entered(this.name);calc_total(this.value);">
            <option disabled selected value='0'>-- Select Your Graphic Card --</option>
              <?php
                // $sql = "select company from cabinet where company='Corsair'";
                $res=mysqli_query($database, "select * from gpu");
                while($data=mysqli_fetch_array($res))
                { 
                  echo "<option value='". $data['price'] ."'>" .$data['gpu_full_name'] ."</option>";
                  
                }
              ?>
            
          </select>

          <!-- RAM -->
          <select  name="ram" id="ram_select" onchange="input_entered(this.name);calc_total(this.value);">
            <option disabled selected value='0'>-- Select Your RAM --</option>
              <?php
                // $sql = "select company from cabinet where company='Corsair'";
                $res=mysqli_query($database, "select * from ram");
                while($data=mysqli_fetch_array($res))
                { 
                  echo "<option value='". $data['price'] ."'>" .$data['ram_full_name'] ."</option>";
                  
                }
              ?>
            
          </select>

          <!-- MOTHERBOARD -->
          <select  name="mb" id="mb_select" onchange="input_entered(this.name);calc_total(this.value);">
            <option disabled selected value='0'>-- Select Your Motherboard --</option>
              <?php
                // $sql = "select company from cabinet where company='Corsair'";
                $res=mysqli_query($database, "select * from motherboard");
                while($data=mysqli_fetch_array($res))
                { 
                  echo "<option value='". $data['price'] ."'>" .$data['mb_full_name'] ."</option>";
                  
                }
              ?>
            
          </select>

          <!-- SSD -->
          <select  name="ssd" id="ssd_select" onchange="input_entered(this.name);calc_total(this.value);">
            <option disabled selected value='0'>-- Select Your SSD --</option>
              <?php
                // $sql = "select company from cabinet where company='Corsair'";
                $res=mysqli_query($database, "select * from ssd");
                while($data=mysqli_fetch_array($res))
                { 
                  echo "<option value='". $data['price'] ."'>" .$data['ssd_full_name'] ."</option>";
                  
                }
              ?>
            
          </select>

          <!-- HDD -->
          <select  name="hdd" id="hdd_select" onchange="input_entered(this.name);calc_total(this.value);">
            <option disabled selected value='0'>-- Select Your HDD --</option>
              <?php
                // $sql = "select company from cabinet where company='Corsair'";
                $res=mysqli_query($database, "select * from hdd");
                while($data=mysqli_fetch_array($res))
                { 
                  echo "<option value='". $data['price'] ."'>" .$data['hdd_full_name'] ."</option>";
                  
                }
              ?>
            
          </select>

          <!-- POWER SUPPLY -->
          <select  name="power_supply" id="psu_select" onchange="input_entered(this.name);calc_total(this.value);">
            <option disabled selected value='0'>-- Select Your Power Supply --</option>
              <?php
                // $sql = "select company from cabinet where company='Corsair'";
                $res=mysqli_query($database, "select * from power_supply");
                while($data=mysqli_fetch_array($res))
                { 
                  echo "<option value='". $data['price'] ."'>" .$data['ps_full_name'] ."</option>";
                  
                }
              ?>
            
          </select>

          <!-- CPU COOLER -->
          <select  name="cpu_cooler" id="cpu_cooler_select" onchange="input_entered(this.name);calc_total(this.value);">
            <option disabled selected value='0'>-- Select Your CPU Cooler --</option>
              <?php
                // $sql = "select company from cabinet where company='Corsair'";
                $res=mysqli_query($database, "select * from cpu_cooler");
                while($data=mysqli_fetch_array($res))
                { 
                  echo "<option value='". $data['price'] ."'>" .$data['cooler_full_name'] ."</option>";
                  
                }
              ?>
            
          </select>
          
          

          <label for="" id="total_label">Total: 0</label>
          
          <button class="button-inp" onclick="reset_selection()" style="margin: 20px;
  padding: 10px;background-color: rgb(51, 1, 109);border:none;color:white;border-radius:15px;font-size:1em;cursor: pointer;">Reset</button>
          <input class="button-inp" type="submit" name="submit" value="Place Order" onclick="submit_redirect()" style="margin: 20px;
  padding: 10px;background-color: rgb(51, 1, 109);border:none;color:white;border-radius:15px;font-size:1em;cursor: pointer;">
        </form>
      </div>
        
    </div>
    
    <!-- main content end -->
    
    <!-- footer -->
    <?php include 'footer.php' ?>

    <script src="./script/custom-rigs.js"></script>
    
  </body>
</html>
