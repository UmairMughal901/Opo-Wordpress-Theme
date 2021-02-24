<?php
// This is area for code
//  Please enter your code here.
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>
        <?php echo get_the_title(); ?> |
        <?php bloginfo('name') ?>
    </title>

    <?php wp_head() ?>
</head>

<body>
    <div class="update-message">
        <img src='<?php echo get_template_directory_uri() ?>/assests/img/loudspeaker.png' class="icon-mike" height="35px" />
        <span> Double Validity @ 50% Off on Netsdemy Special </span>
    </div>
    <div class="site-main container">
        <!--   it will be closed in footer understand the site psd -->
        <header class="site-header">

            <nav class="site-navigation">
                <div class="site-Branding">
                    <?php the_custom_logo() ?>
                    <div class="Menu-Bar">
                        <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
                    </div>
                </div>



            </nav>
        </header>

        <!-- Checked Jquery integration -->
        <!-- <script type="text/javascript">
        jQuery(document).ready(function($){
            $("img").fadeOut();
        });

        </script> -->