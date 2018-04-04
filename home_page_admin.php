<?php
session_start();
if (!isset($_SESSION['ticket']) && $_SESSION['ticket']!='a') {
  header('location:index.php');
}else {
$id=$_SESSION['idd']
}
 ?>




  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title></title>
      <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <div class="wapper">
          <nav>
            <img src="image/sas.png" alt="Organization Logo" width="200" height="80">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Profile`</a></li>
              <li><a href="#">Home</a></li>
              <li><a href="#">Home</a></li>
            </ul>
          </nav>



      <div class="footer">
        <p>
          Copyright @ SAS Organization
        </p>
      </div>


    </body>
  </html>
