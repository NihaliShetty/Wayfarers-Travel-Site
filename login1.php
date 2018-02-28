<?php
session_start();
require __DIR__.'/vendor/autoload.php';
    $loader = new Twig_Loader_Filesystem(__DIR__.'/');
    $twig = new Twig_Environment($loader, array(
    ));

 $servername="localhost";
 $username='root';

 $password= NULL;
 $dbname="webtech";

 $conn=mysqli_connect($servername,$username,$password,$dbname);
$name1 = "asdf";
$password1 = "qwer";
$name1=$_GET["uname2"];
$password1=$_GET["psw2"];

 /*$query= "CREATE TABLE WriteStory1 (Username VARCHAR(30), Password VARCHAR(30),content VARCHAR(1000))";
  $ret=mysqli_query($conn,$query);
  var_dump($ret);																	
  
$query= 'SELECT * FROM List';
$res=mysqli_query($conn,$query);

echo "<br>";
while(($row1=mysqli_fetch_assoc($res))!=null)
{
	//var_dump($row1);
	echo "<br>";
}*/


$query="SELECT Username,Password FROM Registerdata where Username='$name1'";
$res=mysqli_query($conn,$query);
$okay=mysqli_fetch_assoc($res);






if($okay['Username']==$name1 and $okay['Password']==$password1)
{


	
	$login="true";
	

	$_SESSION["name"]=$name1;
	$_SESSION["password"]=$password1;
	
}
else
{
$login="false";
	
}


if ($_GET["logout"]=="lg")
{

	session_destroy();
	$logout="true";
}

// if(isset($_SESSION["name"]))
// {
// 	$set="true";
// }

echo $twig->render('webpro.html', array('login'=>$login, 'logout'=>$logout));
//var_dump($res);
/*if($res)
{
	echo "helllo";
}
else
{
	echo"bye";
}*/

?>
