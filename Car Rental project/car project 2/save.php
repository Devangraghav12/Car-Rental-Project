<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "Car rental";

$con = mysqli_connect($server, $username, $password, $dbname);

if(!$con)
{
    echo "not connected";
}

// start

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO `register`(`name`, `email`, `password`) VALUES ('[$name]','[$email]','[$password]')";

$result = mysqli_query($con, $sql);

if($result)
{
    echo "data submited";
}
else
{
    echo "query faild...!";
}

?>

