<?php
session_start();

$servername="localhost";
 $username='root';

 $password= NULL;
 $dbname="webtech";

 $conn=mysqli_connect($servername,$username,$password,$dbname);

$tdate=$_GET["tdate"];
$tadult=$_GET["tadult"];
$temail=$_GET["tmail"];
$tphone=$_GET["tnum"];
$tname=$_GET["tname"];



if($_GET["booktrek"]=="bk")
{
	
	if(isset($_SESSION["name"]))
	{
		//take the {{content}} and put in SQL;
		
		$query1="INSERT INTO trekdetails (Username,Password,Name,day,Adults,Email,Phone) values ('".$_SESSION["name"]."','".$_SESSION["password"]."','".$tname."','".$tdate."','".$tadult."','".$temail."','".$tphone."')";
   		mysqli_query($conn, $query1);
   		header("Location:himalaya.html");
   		

	}
	else
	{
		
		header("Location:webpro.html");
}
}

?>