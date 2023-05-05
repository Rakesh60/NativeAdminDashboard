<?php 

$host="localhost";
$username="root";
$password="";
$db="mystore";


$conn=mysqli_connect($host,$username,$password,$db);
if(!$conn){
  
    die(mysqli_error($conn));
}



?>