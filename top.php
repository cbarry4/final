<<<<<<< HEAD
<!DOCTYPE HTML>
<html lang="en">

    <head>
        <title>Clockwork College</title>
        <!--Gonna need to make an icon and include it later-->
        <link rel="icon" 
        type="image/png" 
        href="images/headerlogo.png"/>
        <meta charset="utf-8">
        <meta name="author" content="Cody Barry, Olivia Marelic, Eddie Hockenbury ">
        <meta name="description" content="A website about making the best of college years">
        <link rel="stylesheet" href="style.css" type="text/css" media="screen">
        <?php
            $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
            $path_parts = pathinfo($phpSelf);
            $pages = array('index' , 'portfolio' , 'staff' , 'hiring')
        ?>
    </head>
 <?php
// giving each body tag an id really helps with css later on
 print '<body id="' . $path_parts['filename'] . '">';
=======
<!DOCTYPE HTML>
<html lang="en">

    <head>
        <title>Placeholder Title</title>
        <!--Gonna need to make an icon and include it later-->
        <link rel="icon" 
        type="image/png" 
        href="images/headerlogo.png"/>
        <meta charset="utf-8">
        <meta name="author" content="Cody Barry, Olivia LAST, Eddy LAST ">
        <meta name="description" content="A website about making the best of college years">
        <link rel="stylesheet" href="style.css" type="text/css" media="screen">
        <?php
            $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
            $path_parts = pathinfo($phpSelf);
            $pages = array('index' , 'page1' , 'page2' , 'page3', 'page4', 'page5')
        ?>
    </head>
 <?php
// giving each body tag an id really helps with css later on
 print '<body id="' . $path_parts['filename'] . '">';
>>>>>>> origin/master
 ?>