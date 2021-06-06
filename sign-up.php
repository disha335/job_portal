<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="sign-up.php" method="post">
      <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="email" class="form-control" name="email" placeholder="Email address" required autofocus><br>

      <label for="first_name" class="sr-only">First Name</label>
      <input type="text" id="first_name" class="form-control" name="first_name" placeholder="Enter First Name" required autofocus><br>

       <label for="last_name" class="sr-only">Last Name</label>
      <input type="text" id="last_name" class="form-control" name="last_name" placeholder="Enter Last Name" required autofocus><br>

      <label for="mobile_number" class="sr-only">Mobile Number</label>
      <input type="Number" id="mobile_number" name="mobile_number" class="form-control" placeholder="Enter Mobile Number" required><br>

      <label for="dob" class="sr-only">Date Of Birth</label>
      <input type="date" id="dob" name="dob" class="form-control" placeholder="Enter your Date of Birth" required><br>

       <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="Password" name="Password" class="form-control" placeholder="Password" required><br>

     
      
      <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" value="Sign Up">
      <a href="job-post.php">Already have Account</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html>

<?php
include('connection/db.php');
if(isset($_POST['submit'])){
  $email=$_POST['email'];
  $Password=$_POST['Password'];
  $first_name=$_POST['first_name'];
  $last_name=$_POST['last_name'];
  $dob=$_POST['dob'];
$mobile_number=$_POST['mobile_number'];
  
$query=mysqli_query($conn,"insert into jobseeker(email,password,first_name,last_name,dob,mobile_number) values('$email','$Password','$first_name','$last_name','$dob','$mobile_number')");


if($query){
  echo "<script>alert('You can login now !!!')</script>";
  header('location:job-post.php');
}else{
   echo "<script>alert('Error Occured!!!')</script>";
}
}


?>
