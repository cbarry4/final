    <div id="header">
        <div class="wrap">
            <!--Need logo for page if we want this to work-->
            <figure><img src="images/logo.gif" alt=""/><figcaption>An animated logo.</figcaption></figure>
            
            <?php 
            /* This sets the current page to not be a link. Repeat this if block for
            * each menu item */
                if ($path_parts['filename'] == "index") {
                    print '<nl/>';
                    print '<div class="headActive">' . '<h1>';
                    print " ". 'PAGE TITLE PLACEHOLDER' . '</h1>' . '</div>';
                } 
                else {
                print '<div class="headLink">' . '<h1>' . '<a href="index.php">' . "PAGE TITLE PLACEHOLDER" . '</a>' . '<h1>' . '</div>';}
       ?>
        </div>
    </div>