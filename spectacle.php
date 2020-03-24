<?php
/*
Template Name: Spectacle
*/

get_header(); ?>

<?php
// Start the loop.
while ( have_posts() ) : the_post();
?>
<?php the_title(); ?>
<?php the_content(); ?>
<?php
// End the loop.
endwhile;
?>

<?php get_footer(); ?>