<?php
session_start();
	$servername="localhost";
 $username='root';

 $password= NULL;
 $dbname="webtech";

  $conn=mysqli_connect($servername,$username,$password,$dbname);


if(($_SESSION["name"]!=NULL))
{
  $review=$_POST["review"];
  
  
  $query= "INSERT INTO writeStory values ('".$_SESSION["name"]."','".$_SESSION["password"]."','".$review."','".$_POST["trek"]."' )";
  mysqli_query($conn,$query);
}


?>