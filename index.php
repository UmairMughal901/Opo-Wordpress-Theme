<?php
// This is area for code
//  Please enter your code here.
// These are the ways to add foot or side bar using Buildin funtion in wordpress
get_header();
?>
<div class="Container">
        <!-- create a div which will be container -->
        <div class="home-main">
                <!-- Now we will get the image in the template -->
                <img src='<?php echo get_template_directory_uri() ?>/assests/img/cover.jpg' style="width:100%" />
                <div class="home-posts col-lg-8 col-nd-8 col-sm-8 col-xs-12">
                        <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post();  ?>
                                        <h1> <?php the_title(); ?> </h1>
                                        <p> <?php the_content() ?>
                                        <?php endwhile;  ?>
                                <?php endif;     ?>
                </div>
                <div class="home-sidebar col-lg-4 col-nd-4 col-sm-8 col-xs-12">
                        <?php get_sidebar(); ?>
                </div>

        </div>
</div>
<!-- Here we are using Have posts loop to show content title etc -->
<!-- Now check bootstrap css is implemented in to your code -->
<!-- // <div class="container" > -->
<!-- this is alert check on index page -->

<!--THis is how to get the tamplate path  -->
<?php get_template_part('template-parts/home', 'featured') ?>

<?php

// These are the ways to add foot or side bar using Buildin funtion in wordpress

get_footer();
?>