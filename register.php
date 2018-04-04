<?php
include "connection.php";


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
      function loadme()
      {
        var repass =  document.getElementById('re-password').value; //b
        var req;
        if(window.XMLHttpRequest)
        {
          req = new XMLHttpRequest();
          
        }
        else req = new ActiveXObject("Microsoft.XMLHTTP");
        req.onreadystatechange = function()
        {
          if(req.readyState==4)
          {
            document.getElementById('re-password').innerHTML = req.responseText;
          }
        }
      req.open("GET", "action.php?repass="+repass, true)
      req.send();
      }

</script>

  </head>
  <body>
    <div class="main_div">
          <div class="logo">
            <img src="image/sas.png" alt="Organization Logo" width="200px" height="80">
          </div>
          <div class="create_profile">
            <form action="action.php" method="post">

               <h2>Create Your Account</h2>
              <div class="style">
                <label>First Name</label>
               <input type="text" name="firstname" required >
               <label>Last Name</label>
               <input type="text" name="lastname" required>
              </div>

              <div class="style">
                <label>Birth Date </label>
                <input type="date" name="dob" max="2015-01-01" min="1980-01-01"required>
              </div>
              <div class="style">
                <label>Address</label>
                <input type="number" name="postal_address" placeholder="Postal address" required>
                <input type="text" name="city" placeholder="City" required>
                <input type="text" name="country"  placeholder="Country" required>
              </div>
              <div class="style">
                <label>Phone Number</label>
                <input type="number" name="phone" required>
              </div>
              <div class="gender">
                <label>Gender</label>
                <input type="radio" name="gender" value="male" checked> Male
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="other"> Other

              </div>

              <div class="style">
                <label>Email</label>
                <input type="email" name="email" required>
              </div>
              <div class="style" >
                <label>Password</label>
                <input type="password" name="password" required>
              </div>
              <div class="style">
                <label>Re-Enter Password</label>
                <input type="password" name="re-pass"  required>
              </div>
              <input class="create_button" type="submit" name="create_acount" value="Create Account">

            </form>
           <a href="login.php">Go Back To Sign Up Page</a>
          </div>

      </div>
    <div class="footer">
      <p>
        Copyright @ SAS Organization
      </p>
    </div>
  </body>
</html>
