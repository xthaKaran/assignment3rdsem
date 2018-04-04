<?php
session_start();
if (!isset($_SESSION['ticket']) && $_SESSION['ticket']!='g') {
  header('location:login.php');
}
else {
$id=$_SESSION['idd'];
}
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
             <a href="logout.php">LogOut</a>
               <input class="search_text_field" type="text" name="search" placeholder="Search">
               <input  class="search_button" type="submit" name="submit_search" value="Search">
           </div>
           <div class="menu">
               <ul>
                 <a href=""><li class="active">Home</li></a>
                 <a href="profile.php"><li>Pofile</li></a>
                 <a href=""><li>Forum</li></a>
                 <a href=""><li>Home</li></a>
                 <a href=""><li>About us</li></a>
                 <a href=""><li>Contact us</li></a>
               </ul>
           </div>
         </div>

       </div>
       <div class="wrapper-content">
         <div class="content-image">
           <img src="image/cat.jpg" alt="cat">
           <p>Spencer Animal Shelter</p>
         </div>

       </div>
     </div>
<?php
include "connection.php";

$sel="select * from counter";
$data=$conn->query($sel);
$result=$data->fetch_assoc();
echo $result['count'];
?>
  </body>
</html>
