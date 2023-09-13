<?php
include('connection.php');
$query="SELECT * FROM sign_in";
$data=mysqli_query($conn,$query);

$total=mysqli_num_rows($data);
if($total!=0){
	?>
	
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <h2>Records</h2>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email_id</th>
      <th scope="col">Password</th>
      <th scope="col">Phone_no</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
       <?php
    while($result=mysqli_fetch_assoc($data)){
       echo" <tr>
       <td>".$result['id']."</td>
        <td>".$result['name']."</td>
        <td>".$result['email_id']."</td>
        <td>".$result['password']."</td>
        <td>".$result['phone_no']."</td>
        <td>
       <button class='btn btn-primary'><a href='Update.php?updateid=".$result['id']."' class='text-light'>Update</a></button>
       <button class='btn btn-danger'><a href='Delete.php?deleteid=".$result['id']."'  class='text-light'>Delete</a></button>
       </td>
    </tr>
     ";
    }
}
else{
    echo "no record found";
}


?>
  </tbody>
  
</table>
 </body>
 
  </html>