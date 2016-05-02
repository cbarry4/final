<!DOCTYPE html>
<head>
    
</head>
<body>
<nav>
   <div class='wrap'> 
       <ul class="horizontal">
        <?php
            /* This sets the current page to not be a link. Repeat this if block for
            * each menu item */
        if ($path_parts['filename'] == "page1") {
            print '<li class="navActive">page1</li>';
         } 
        else {
            print '<li class="navLink"><a href="page1.php">page1</a></li>';
        }
        if ($path_parts['filename'] == "page2") {
            print '<li class="navActive">page2</li>';
         } 
        else {
            print '<li class="navLink"><a href="page2.php">page2</a></li>';
        }
        if ($path_parts['filename'] == "page3") {
            print '<li class="navActive">page3</li>';
         } 
        else {
            print '<li class="navLink"><a href="page3.php">page3</a></li>';
        } 
        if ($path_parts['filename'] == "page4") {
            print '<li class="navActive">page4</li>';
         } 
        else {
            print '<li class="navLink"><a href="page4.php">page4</a></li>';
        } 
        if ($path_parts['filename'] == "page5") {
            print '<li class="navActive">page5</li>';
         } 
        else {
            print '<li class="navLink"><a href="page5.php">page5</a></li>';
        } 
        ?>
    </ul>   
    </div>
</nav>
</body>    