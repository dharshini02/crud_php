<?php
include('connection.php');
if(isset($_POST['submit'])){
   $name=$_POST['name'];
   $email_id=$_POST['email_id'];
   $password=$_POST['password'];
   $phone_no=$_POST['phone_no'];

   
  if($name!="" &&  $email_id!="" && $password!="" &&$phone_no!=""){

   $sql="INSERT INTO sign_in(name,email_id,password,phone_no)VALUES('$name','$email_id','$password','$phone_no')";
   mysqli_query($conn,$sql);
   header('location:display.php'); 

  }
}
?>