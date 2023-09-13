<?php
include('connection.php');

if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email_id = $_POST['email_id'];
    $password = $_POST['password'];
    $phone_no = $_POST['phone_no'];
    
    // Use backticks for table and column names
    $sql = "UPDATE `sign_in` SET name='$name', email_id='$email_id', password='$password', phone_no='$phone_no' WHERE id='$id'";
    
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        echo "Success";
    } else {
        die(mysqli_error($conn));
    }
}
}
?>

<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
<body>
  <div id='form'>
    <form method="POST" action=''>
   <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" id="name" name="name" onblur="validatename()" autocomplete="off">
    <span id="nameerror"></span>
  </div>

  <div class="mb-3">
    <label class="form-label">Email address</label>
    <input type="email" class="form-control" id="email_id" aria-describedby="emailHelp" name="email_id" onblur="validateemail()"  autocomplete="off">
    <span id="emailerror"></span>
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" onblur="validatepassword()"  autocomplete="off">
    <span id="passerror"></span>
  </div>

   <div class="mb-3">
    <label class="form-label">Phone Number</label>
    <input type="text" class="form-control" id="phone_no" name="phone_no" onblur="validatephone()"  autocomplete="off">
    <span id="phoneerror"></span>
  </div>

  <button type="submit" class="btn btn-primary" name="submit"onclick="validate()">Update</button>
</form>
  </div>
</body>
</html>
