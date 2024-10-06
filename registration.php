


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>

 <?php

 if ($_SERVER['REQUEST_METHOD']=='POST'){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $description = $_POST['description'];


 

 //connectning a database

 $servername = "localhost";
 $username = "root";
 $password = "";
 $database = "register";

 //create a connection
 $conn = mysqli_connect($servername, $username , $password , $database);

 //check connection

 if(!$conn){

  die("sorry we failed to connect: ".mysqli_connect_error());
 }

 else{

  

  //submit these into database

  $sql = "INSERT INTO `contact` (`name`, `email`, `concern`, `date_time`) VALUES ( '$name', '$email', '$description', 'current_timestamp(6).000000')";

  $result = mysqli_query($conn,$sql);

  if($result){

    echo "Your entry was submit successfully!";


  }

  else{

    echo "The record was not submit successfully!";
  }
 }
}




?>
<div class="container p-5">

<h1>Registration Form</h1>

<form name="form"  action="./registration.php"  method="POST">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="name" class="form-control" name="name" id="name" aria-describedby="emailHelp">
 </div>

 <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
 </div>
    
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="password">
  </div>

  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea type="description" class="form-control" name="description" id="description" aria-describedby="emailHelp"></textarea>
 </div>
 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

</div>


    
</body>
</html>