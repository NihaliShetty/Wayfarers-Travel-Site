<?php

$name=$_GET["uname"];
$password1=$_GET["psw"];
$password2=$_GET["repsw"];
$email=$_GET["ema"];
$phone=$_GET["pho"];

$servername="localhost";
 $username='root';

 $password= NULL;
 $dbname="webtech";

  $conn=mysqli_connect($servername,$username,$password,$dbname);
/*
  $query= "CREATE TABLE trekdetails (Username VARCHAR(30) PRIMARY KEY,Day VARCHAR (30),Adults INT(1000) ,Email VARCHAR(30),Phone VARCHAR(10))";
  $res=mysqli_query($conn,$query);
  var_dump($res);*/
  
  
 if($password2==$password1)
 {
$query1="INSERT INTO Registerdata (Username,Password,Email,Phone) values ('".$name."','".$password1."','".$email."','".$phone."')";
   mysqli_query($conn, $query1);
   header("Location:webpro.html");

 }
 else
 {
 	echo "passwords dont match";
 	header("Location:webpro.html");

 }

?>