<?php
// This is area for code
//  Please enter your code here.
get_header();
?>

<?php get_template_part('template-parts/home', 'featured')?>
<?php  if ( have_posts() ) : ?> 
        <?php while ( have_posts() ) : the_post();  ?>
           <h1> <?php the_title(); ?> </h1>
           <p> <?php the_content() ?> 
            <?php endwhile;  ?>
            <?php endif;     ?>


<?php
get_sidebar();
get_footer();
?>


