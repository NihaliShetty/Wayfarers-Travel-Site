<?php
    require __DIR__.'/vendor/autoload.php';
    $loader = new Twig_Loader_Filesystem(__DIR__.'/');
    $twig = new Twig_Environment($loader, array(
    ));
    
    
    $item1="chadar1.jpg";
    $item2="chadar2.jpg";
    $item3="chadar3.jpg";
    $item4="chadar4.jpg";
    $name="Chadar Trek";
    
    

    if($_GET["but"]=="b2")
    {
        $item1="chembar1.jpg";
    $item2="chembar2.jpg";
    $item3="chembar3.jpg";
    $item4="chembar4.jpg";
    $name="Chembar Trek";
    }

    
    if($_GET["but"]=="b3")
    {
        $item1="kod1.jpg";
    $item2="kod2.jpg";
    $item3="kod3.jpg";
    $item4="kod4.jpg";
    $name="Kodachadari Trek";
    }

/*
    if($_GET["but"]=="b4")
    {
        $item1="mul1.jpg";
    $item2="mul2.jpeg";
    $item3="mul3.jpg";
    $item4="mul4.jpg";
    $name="Mullayanagari Trek";
    }


    if($_GET["but"]=="b5")
    {
        $item1="nag1.jpg";
    $item2="nag2.jpg";
    $item3="nag3.jpg";
    $item4="nag4.jpg";
    $name="Nagalapuram Trek";
    }


    if($_GET["but"]=="b6")
    {
        $item1="tad1.jpg";
    $item2="tad2.jpg";
    $item3="tad3.jpg";
    $item4="tad4.jpg";
    $name="Tadiandamol Trek";
    }


    if($_GET["but"]=="b7")
    {
        $item1="chembar1.jpg";
    $item2="chembar2.jpg";
    $item3="chembar3.jpg";
    $item4="chembar4.jpg";
    $name="Chembar Trek";
    }


    if($_GET["but"]=="b8")
    {
        $item1="chembar1.jpg";
    $item2="chembar2.jpg";
    $item3="chembar3.jpg";
    $item4="chembar4.jpg";
    $name="Chembar Trek";
    }


    if($_GET["but"]=="b9")
    {
        $item1="chembar1.jpg";
    $item2="chembar2.jpg";
    $item3="chembar3.jpg";
    $item4="chembar4.jpg";
    $name="Chembar Trek";
    }
*/
    
    echo $twig->render('photogallery1.html', array('name'=>$name,'item1'=>$item1,'item2'=>$item2, 'item3'=>$item3,'item4'=>$item4));
    
 
    
?>