
<?php
 include('connection.php');
 ?>
 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <script>
 function validatename(){
  let name=document.getElementById('name').value;
 
  if(name==="" || name==='null'){
   let dis= document.getElementById('nameerror');
   dis.innerHTML='enter the name';
   dis.style.color='red';
   return 0;
  }
  else{
    document.getElementById('nameerror').innerHTML=' ';
    return 1;
  }
 }
 function validateemail(){
   var email=document.getElementById('email_id').value;
  var regex=/^[a-zA-Z]+[0-9!#$%^&*()?[]{}.]+@[a-z]+\.[a-z]{2,3}$/;
  let result=regex.test(email);
  if(email===""||email==="null"){
    let em=document.getElementById('emailerror');
    em.innerHTML='enter the email id';
    em.style.color='red';
    return 0;
  }
  else if(!(result)){
  let em=document.getElementById('emailerror');
  em.innerHTML='email should starts with alphabets other than underscore,the special characters are not allowed';
  em.style.color='red';
  return 0;
  }
  else{
    document.getElementById('emailerror').innerHTML=" ";
    return 1;
  }
 }
 function validatepassword(){
   var pass=document.getElementById('password').value;

  var regpass=/^[a-zA-Z]+[0-9!$%^*&@]/;
  let res=regpass.test(pass);
  if(pass===''||pass==='null'){
    let p=document.getElementById('passerror');
    p.innerHTML='enter the password';
    p.style.color='red';
    return 0;
  }
  else if(!(res)){
    let p=document.getElementById('passerror');
    p.innerHTML='password shoud starts with alphabets and special charaters';
    p.style.color='red';
    return 0;
  }
  else if(!(pass.length>=8)){
    let p=document.getElementById('passerror');
    p.innerHTML='password shoud contain atleast 8 charaters';
    p.style.color='red';
    return 0
  }
  else
  {
    document.getElementById('passerror').innerHTML='';
    return 1;
  }
 }
 function validatephone(){
    var phone=document.getElementById('phone_no').value;
  if(phone===''||phone==='null'){
    let pho=document.getElementById('phoneerror');
    pho.innerHTML='enter the phone number';
    pho.style.color='red';
    return 0;
  }
  else if(!(phone.length>=10)){
     let pho=document.getElementById('phoneerror');
    pho.innerHTML='enter the proper phone number';
    pho.style.color='red';
    return 0;
  }
  else{
    document.getElementById('phoneerror').innerHTML='';
    return 1;
  }
 }
 function validate(){
  var i=validatename();
  var j=validateemail();
  var k=validatepassword();
  var l=validatephone();
  if(i==1&&j==1&&k==1&&l==1){
    document.write('record successfull');
  }
  
   }
  </script>
  <title>Register</title>
  </head>
  <body>
  <div class='form my-5'>
  <form method="POST" action="sign-in.php">
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

  <button type="submit" class="btn btn-primary" name="submit"onclick="validate()">Submit</button>
</form>
  </div>
  
  


  </body>
</html>