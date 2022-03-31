<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact us</title>
    <link rel="stylesheet" href="styles/contact_us.css" />
  </head>
  <body>
    <!-- header -->
    <?php include 'navigation.php' ;
      
    ?>

    <!-- main content -->
    <div class="flex-container">
      <div class="contact">
        <h2 style='color:white;margin-bottom:30px;'>Contact Us</h2>
        <p>
          
          405/406/407, Manjusha Tower,Level 4, Nehru Place, New Delhi 110019,
          India<br />
          Email : <a href="#email">info@razer.in</a>
        </p>
        <br />
        <p>
          Office Timings : From 10Am - 6 Pm , MON-SAT. We follow strict Covid
          Guidelines to ensure a safe and a healthy environment for you
        </p>
        <br />
        <p>Contact Us</p>
        <br />
        <p>
          Phone Number: 0124-*******/0124-******* (From 10AM - 6PM) MON-SAT.
        </p>
        <p>
          <b>Bank Details</b><br />
          BANK NAME : SCAM BANK<br />
          ACCOUNT NUMBER : 0000000000000<br />
          ACCOUNT HOLDER NAME : RAZER RETAIL LLP<br />
          ACCOUNT TYPE : CURRENT <br />
          IFSC CODE: SCAN000****<br />
          BRANCH : NEHRU PLACE
        </p>
      </div>
      <div class="form">
        <h2 style='color:white;margin-bottom:30px;'>Feedback</h2>
        <label for="first_name"><b>Name</b></label>
        <input
          type="text"
          placeholder="Enter first name"
          name="first_name"
          id="first_name"
          required
        /><br />
        <label for="phone"><b>Phone Number</b></label>
        <input
          type="text"
          placeholder="Enter phone number"
          name="phone"
          id="phone"
          required
        /><br />
        <label for="email"><b>Email</b></label>
        <input
          type="text"
          placeholder="Enter Email"
          name="email"
          id="email"
          required
        /><br />
        <button type="button">Register</button>
        <p style='margin: 30px 0;'>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit
          exercitationem nam ratione veniam commodi, hic beatae sint eum nisi
          culpa alias itaque voluptas numquam rerum suscipit, in sunt obcaecati
          provident quaerat. Sed cupiditate sint, laudantium quis necessitatibus
          atque esse aliquam odio ut. Dicta, explicabo. Sint aut maxime quas!
          Placeat ex sit eos, perspiciatis dignissimos nemo fugiat neque soluta
          ipsa? Est facere quos sint! Voluptatum aut error esse velit
          perferendis, nostrum debitis quia corrupti consequuntur in sint neque
          nam exercitationem alias minus dolorum blanditiis consectetur eum amet
          tempora nulla molestiae! Earum reiciendis, inventore modi natus
          delectus quasi maiores fugiat reprehenderit molestias.
        </p>
      </div>
    </div>

    <!-- main content end -->

    <!-- footer -->
    <?php include 'footer.php' ?>
    
    </div>
  </body>
</html>
