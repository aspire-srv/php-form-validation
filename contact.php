<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
</head>
<body>  


<?php
$con = mysqli_connect('localhost', 'root', '','db_connect');


$name = $_POST["name"];
$email = $_POST["email"];
$contact = $_POST["contact"];
$website = $_POST["website"];


$sql = "INSERT INTO `contact_form` (`Id`, `name`, `email`, `contact`, `website`) VALUES ('0', '$name', '$email','$contact', '$website')";


$rs = mysqli_query($con, $sql);

if($rs)
{
  echo "<div class='jumbotron'>
  <h1 class='display-4'>Success !!!</h1>
  <p class='lead'>Form is submitted Sucessfully.</p>";
}
else
{
  echo "<div class='jumbotron'>
  <h1 class='display-4'>Oh ! Something went wrong</h1>
  <a class='btn btn-primary btn-lg' href='index.php' role='button'>Try Again</a>";
}

?>



    
</body>
</html>