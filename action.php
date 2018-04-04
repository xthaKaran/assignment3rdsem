<?php
session_start();
include 'connection.php';
if(isset($_POST['sign_up'])){
   $emaill=$_POST['email'];
      $pass=$_POST['password'];
      $qry_sel="select DATEDIFF(now(),date) from login where email='$emaill'";
      $data1=$conn->query($qry_sel);
     while($result1 = $data1->fetch_assoc())
        $diffDate=$result1['DATEDIFF(now(),date)'];
      {
        if($diffDate > 720){
          $delete="delete from login where email='$emaill'";
          if($conn->query($delete)==true){
            header("location:login.php?msg=your account has deleted");
          }
        }
      


else
{
      $emaill=$_POST['email'];
      $pass=$_POST['password'];

      $select="SELECT * FROM login where email='$emaill' and password='$pass'";
      $data=$conn->query($select);
      $count = $data->num_rows;  // 0 or 1

      if($count>0)
      {
          $result = $data->fetch_array();
          $user_type =  $result['user_type']; // admin or general-
             if($user_type=='admin')
             {
                 $_SESSION['ticket'] = 'a';
                  $_SESSION['idd'] = $result['id'];
                 header('location:home_page_admin.php');
             }else if($user_type=="general")
          	{

              $counter = "update counter set count=count+1";
              $conn->query($counter);
            	 $_SESSION['ticket'] = 'g';
              $_SESSION['idd']=$result['id'];
               $todayDate= date('Y-m-d');
               $updateDate="UPDATE login set date='$todayDate' WHERE email='$emaill'";
               $conn->query($updateDate);
               header('location:home_page_general.php');
          	}
      }
    


      else
      {
            if(isset($_COOKIE['count']))
            {
            $count = $_COOKIE['count']+1;
            setcookie('count',$count,time()+300); // saves new data
            header('location:login.php?error=Email or Password Do not match');
            }
            else
            {
            setcookie('count',1); //// first time
              header('location:login.php?error=Email or Password Do not match');
            }
       }

}
}
}


if (isset($_POST['create_profile'])){
  header('location:register.php');

} 
elseif (isset($_POST['create_acount'])) {
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $dob=$_POST['dob'];
  $postal_address=$_POST['postal_address'];
  $city=$_POST['city'];
  $country=$_POST['country'];
  $gender=$_POST['gender'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];
  $password1=$_POST['re-pass'];
  $insertDate=date('Y-m-d');


  $user_type='general';

  
    
      $insert="INSERT INTO login VALUES('','$firstname','$lastname','$dob','$postal_address'
        ,'$city','$country','$gender','$email','$password','$user_type','$phone','$insertDate')";
        header('location:register.php');

      if ($conn->query($insert)==FALSE)
       {
         die("Error in Insert Query: ".$conn->error);
        }
      

 

}

 ?>
