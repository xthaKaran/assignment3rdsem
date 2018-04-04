
<?php
include "connection.php";
if(isset($_COOKIE['count']) &&  $_COOKIE['count']>3)
     {

     die('You are Blocked For 5 Minute');
     

   }
   
      ?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" type="text/css" href="assests/css/bootstrap.min.css"> -->
  </head>
  <body>

    <?php
      if(isset($_GET['msg']))
      {
        echo '<script> alert("'.$_GET['msg'].'")</script>';
      }

    ?>
      <div class="wrapper">
            <div class="logo">

              <img src="image/sas.png" alt="Organization Logo" width="200px" height="80">

            </div>

            <div class="form">
                <div class="tag">
                  <p>Already have a SAS Account</p>
                </div>
                <form action="action.php" method="post">
                    <?php 
                    if (isset($_GET['error'])) {
            echo "<div>Email or Password Donot Match</div>";
   } ?>

                 
                    <div class="style">
                      <label>Email</label>
                      <input type="text" name="email" >
                    </div>
                    <div class="style">
                      <label>Password</label>
                      <input type="password" name="password" required >
                    </div>
                    <input class="button" type="submit" name="sign_up" value="Sign in" required>
                </form>
            </div>

            <div class="new_profile">
            <div class="tag">
              <p>New User</p>
            </div>
              <div class="description">
                <p>
                  Spencer Animal Shelter (SAS) is a leading animal shelter and it looks after a range of
                  different animals of shapes and sizes.SAS aim to provide the best possible care for
                  animals and take in unwanted and lost animals and provide them with care and shelter
                  and look to find them new homes.
                </p>
              </div>
              <form  action="action.php" method="post">
                    <input class="cre_button" type="submit" name="create_profile" value="Create Account" >
              </form>

            </div>
      </div>
        <div class="footer">
          <p>
            Copyright @ SAS Organization
          </p>
        </div>

  </body>
</html>
