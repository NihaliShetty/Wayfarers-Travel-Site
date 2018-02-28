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
/*
  $query= "CREATE TABLE WriteStory7 (Username VARCHAR(30), Password VARCHAR(30),content VARCHAR(1000))";
  mysqli_query($conn,$query);*/
if (isset($_GET['trek'])) {
	# code...

if($_GET["trek"]=="him3")
{
	$name="HIMACHAL TREK";
	$pic1="hima1.jpg";
$pic2="hima3.jpg";
$pic3="hima2.jpg";
$money="33000";

  $test="SELECT Username,review FROM WriteStory where trek  = '$name';";
  

$res=mysqli_query($conn,$test);
$okay=mysqli_fetch_all($res);

}
if($_GET["trek"]=="him1")
{
$name="CHADAR TREK";
$pic1="chadar1.jpg";
$pic2="chadar2.jpg";
$pic3="chadar3.jpg";
$money="22000";

  $test="SELECT Username,review FROM WriteStory where trek  = '$name';";


$res=mysqli_query($conn,$test);
$okay=mysqli_fetch_all($res);

}
/*if($_GET["publish"]=="pb")
{
	if($name="CHADAR TREK")

{
	if(isset($_SESSION["name"]))
	{
		//take the {{content}} and put in SQL;
		echo $_GET["text"];
		$query1="INSERT INTO WriteStory1 (Username,Password,content) values ('".$_SESSION["name"]."','".$_SESSION["password"]."','".$_GET["text"]."')";
   		mysqli_query($conn, $query1);
   		$name="CHADAR TREK";
   		$pic1="chadar1.jpg";
   		$pic2="chadar2.jpg";
   		$pic3="chadar3.jpg";

}
else
{
	echo "login to write review";
}
}
}
}*/
if($_GET["trek"]=="him2")
{
	$name="ROOPKUND TREK";
	$pic1="roo1.jpg";
$pic2="roo2.jpg";
$pic3="roo3.jpg";
$money="30000";
  $test="SELECT Username,review FROM WriteStory where trek  ='$name';";

$res=mysqli_query($conn,$test);
$okay=mysqli_fetch_all($res);

}



if($_GET["trek"]=="wes1")
{
	$name="CHEMBRA TREK";
	$pic1="chembar1.jpg";
$pic2="chembar3.jpg";
$pic3="chembar2.jpg";
$money="30000";
$test="SELECT Username,review FROM WriteStory where trek  ='$name';";
$res=mysqli_query($conn,$test);
$okay=mysqli_fetch_all($res);

}
if($_GET["trek"]=="wes2")
{
	$name="KODACHADARI TREK";
	$pic1="kod1.jpg";
$pic2="kod2.jpg";
$pic3="kod3.jpg";
$money="34000";
$test="SELECT Username,review FROM WriteStory where trek  ='$name';";
$res=mysqli_query($conn,$test);
$okay=mysqli_fetch_all($res);

}

if($_GET["trek"]=="wes3")
{
	$name="TADIANDAMOL TREK";
	$pic1="tad1.jpg";
$pic2="tad2.jpg";
$pic3="tad3.jpg";
$money="29000";
$test="SELECT Username,review FROM WriteStory where trek  ='$name';";

$res=mysqli_query($conn,$test);
$okay=mysqli_fetch_all($res);
}


if($_GET["trek"]=="cen1")
{
	$name="MANDANGAD TREK";
	$pic1="chembar1.jpg";
$pic2="chembar3.jpg";
$pic3="chembar2.jpg";
$money="30000";
$test="SELECT Username,review FROM WriteStory where trek  ='$name';";

$res=mysqli_query($conn,$test);
$okay=mysqli_fetch_all($res);

}
if($_GET["trek"]=="cen2")
{
	$name="RATANGAL TREK";
$pic2="kod2.jpg";
$pic3="kod3.jpg";
	$pic1="kod1.jpg";
	$money="30100";

  $test="SELECT Username,review FROM WriteStory where trek  ='$name';";
$res=mysqli_query($conn,$test);
$okay=mysqli_fetch_all($res);

}

if($_GET["trek"]=="cen3")
{
	$name="RAJMACHI TREK";
	$pic1="tad1.jpg";
$pic2="tad2.jpg";
$pic3="tad3.jpg";
$money="36000";
  $test="SELECT Username,review FROM WriteStory where trek  ='$name';";


$res=mysqli_query($conn,$test);
$okay=mysqli_fetch_all($res);

}

}
// if($_GET["publish"]=="pb")
// {
// 	if(($_SESSION["name"]==NULL))
// 	{
// 		echo "login to write review";
// 	}
// }

/*foreach ($okay as $k=>$v)
{
	//echo "<br>";
	//echo $k;
	foreach ($v as $key => $value) 
	{
		# code...
		
		if ($value == $_SESSION["name"])
		{
			$flag="true";
			

		}
	}
}*/

 /*   
if($_GET["publish"]=="pb")
{
	echo "hello";
	if($name="CHADAR TREK")
	{
	if(isset($_SESSION["name"]))
	{
		//take the {{content}} and put in SQL;
		echo $_GET["text"];
		$query1="INSERT INTO WriteStory1 (Username,Password,content) values ('".$_SESSION["name"]."','".$_SESSION["password"]."','".$_GET["text"]."')";
   		mysqli_query($conn, $query1);
   		$name="CHADAR TREK";
       $pic1="chadar1.jpg";
       $pic2="chadar2.jpg";
$pic3="chadar3.jpg";
   		
	}
	else
	{
		echo "login to write review";
	}
}
}

if($_GET["publish"]=="pb")
{
if($name="ROOPKUND TREK")
{
	if(isset($_SESSION["name"]))
	{
		//take the {{content}} and put in SQL;
		echo $_GET["text"];
		$query1="INSERT INTO WriteStory2(Username,Password,content) values ('".$_SESSION["name"]."','".$_SESSION["password"]."','".$_GET["text"]."')";
   		mysqli_query($conn, $query1);
   		$name="ROOPKUND TREK";
	$pic1="roo1.jpg";
$pic2="roo2.jpg";
$pic3="roo3.jpg";

	}
	else
	{
		echo "login to write review";
	}
}
}
/*
if($name="HIMACHAL TREK")
{
	if(isset($_SESSION["name"]))
	{
		//take the {{content}} and put in SQL;
		echo $_GET["text"];
		$query1="INSERT INTO WriteStory3(Username,Password,content) values ('".$_SESSION["name"]."','".$_SESSION["password"]."','".$_GET["text"]."')";
   		mysqli_query($conn, $query1);
   		$name="HIMACHAL TREK";
   		$pic1="hima1.jpg";
   		$pic2="hima2.jpg";
   		$pic3="hima3.jpg";

	}
	else
	{
		echo "login to write review";
	}
}

if($name="CHEMBRA TREK")
{
	if(isset($_SESSION["name"]))
	{
		//take the {{content}} and put in SQL;
		echo $_GET["text"];
		$query1="INSERT INTO WriteStory4(Username,Password,content) values ('".$_SESSION["name"]."','".$_SESSION["password"]."','".$_GET["text"]."')";
   		mysqli_query($conn, $query1);
   		$name="CHEMBRA TREK";
	$pic1="chembar1.jpg";
$pic2="chembar2.jpg";
$pic3="chembar3.jpg";

	}
	else
	{
		echo "login to write review";
	}
}

if($name="KODACHADARI TREK")
{
	if(isset($_SESSION["name"]))
	{
		//take the {{content}} and put in SQL;
		echo $_GET["text"];
		$query1="INSERT INTO WriteStory5(Username,Password,content) values ('".$_SESSION["name"]."','".$_SESSION["password"]."','".$_GET["text"]."')";
   		mysqli_query($conn, $query1);
   		$name="KODACHADARI TREK";
	$pic1="kod1.jpg";
$pic2="kod2.jpg";
$pic3="kod3.jpg";

	}
	else
	{
		echo "login to write review";
	}
}

if($name="TADIANDAMOL TREK")
{
	if(isset($_SESSION["name"]))
	{
		//take the {{content}} and put in SQL;
		echo $_GET["text"];
		$query1="INSERT INTO WriteStory6(Username,Password,content) values ('".$_SESSION["name"]."','".$_SESSION["password"]."','".$_GET["text"]."')";
   		mysqli_query($conn, $query1);
   		$name="TADIANDAMOL TREK";
	$pic1="tad1.jpg";
$pic2="tad2.jpg";
$pic3="tad3.jpg";

	}
	else
	{
		echo "login to write review";
	}
}

if($name="MANDANGAD TREK")
{
	if(isset($_SESSION["name"]))
	{
		//take the {{content}} and put in SQL;
		echo $_GET["text"];
		$query1="INSERT INTO WriteStory7(Username,Password,content) values ('".$_SESSION["name"]."','".$_SESSION["password"]."','".$_GET["text"]."')";
   		mysqli_query($conn, $query1);
   		$name="MANDANGAD TREK";
	$pic1="mul1.jpg";
$pic2="mul2.jpg";
$pic3="mul3.jpg";

	}
	else
	{
		echo "login to write review";
	}
}

if($name="RAJMACHI TREK")
{
	if(isset($_SESSION["name"]))
	{
		//take the {{content}} and put in SQL;
		echo $_GET["text"];
		$query1="INSERT INTO WriteStory8(Username,Password,content) values ('".$_SESSION["name"]."','".$_SESSION["password"]."','".$_GET["text"]."')";
   		mysqli_query($conn, $query1);
   		$name="RAJMACHI TREK";
	$pic1="nag1.jpg";
$pic2="nag2.jpg";
$pic3="nag3.jpg";

	}
	else
	{
		echo "login to write review";
	}
}*/

/*
if($_GET["publish"]="pb")
{
if($name="RATANGAL TREK")
{
	if(isset($_SESSION["name"]))
	{
		//take the {{content}} and put in SQL;
		echo $_GET["text"];
		$query1="INSERT INTO WriteStory9(Username,Password,content) values ('".$_SESSION["name"]."','".$_SESSION["password"]."','".$_GET["text"]."')";
   		mysqli_query($conn, $query1);
   		$name="RATANGAL TREK";
	$pic1="chembar1.jpg";
$pic2="chembar2.jpg";
$pic3="chembar3.jpg";

	}
	else
	{
		echo "login to write review";
	}
}
}
*/










echo $twig->render('writeYourStorymain.html', array( 'okay'=>$okay,'name'=>$name,'pic1'=>$pic1,'pic2'=>$pic2,'pic3'=>$pic3,'money'=>$money));
?>