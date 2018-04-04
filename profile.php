<?php
include'connection.php';
session_start();
if (!isset($_SESSION['ticket']) || $_SESSION['ticket']!='g')
{
header('location:index.php');
}

echo $id=$_SESSION['idd'];
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>SAS</title>
     <link rel="stylesheet" href="home.css">
   </head>
   <body>
      <div class="wrapper">
        <div class="header">
          <div class="wrap-container">
            <div class="header-image">
              <img src="image/sas.png" alt="Organization Logo" class="brand-image">

            </div>
            <div class="search">
              <a href="login.php">LogOut</a>
                <input class="search_text_field" type="text" name="search" placeholder="Search">
                <input  class="search_button" type="submit" name="submit_search" value="Search">
            </div>
            <div class="menu">
                <ul>
                  <a href="home_page_general.php"><li >Home</li></a>
                  <a href="profile.php"><li class="active">Pofile</li></a>
                  <a href=""><li>Forem</li></a>
                  <a href=""><li>Home</li></a>
                  <a href=""><li>About us</li></a>
                  <a href=""><li>Contact Us</li></a>
                </ul>
            </div>
          </div>

        </div>
        <div class="wrapper-content">

          <div style="overflow-x:auto;" class="table">
              <h2 >User Information</h2>
            <table>
              <?php
              $query_selete = "SELECT * FROM login where lid='$id';
              $data = $conn->query($query_selete);
              while ($result= $data->fetch_assoc()) {
              echo  "<tr>
                        <th>Name:</th>
                        <td>".$result['firstname']." ".$result['lastname']."</td>
                        <td><a href=''>Edit</a></td>
                      </tr>
                      <tr>
                        <th>Birth Date:</th>
                        <td>".$result['dob']."</td>
                      </tr>
                      <tr>
                        <th>Address:</th>
                        <td>".$result['postal_address'].",".$result['city'].",".$result['country']."</td>
                        <td><a href=''>Edit</a></td>
                      </tr>
                      <tr>
                        <th>Gender:</th>
                        <td>".$result['gender']."</td>
                      </tr>
                      <tr>
                        <th>Email:</th>
                        <td>".$result['email']."</td>
                        <td><a href=''>Edit</a></td>
                      </tr>
                      <tr>
                        <th>Contact No:</th>
                        <td>".$result['phone']."</td>
                        <td><a href=''>Edit</a></td>
                      </tr>
                      <tr>
                        <th>User Type:</th>
                        <td>".$result['user_type']."</td>
                        </tr>
                        <tr>
                          <th>Change Password:</th>
                          <td><a href=''>Click here</a></td>
                          </tr>
                    ";
              }
               ?>

        </div>
      </div>

   </body>
 </html>
