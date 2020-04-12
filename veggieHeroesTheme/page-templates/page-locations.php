<?php /* Template Name: page-locations.php */?>
<?php get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
            <p> 
            <?php the_content(); ?>
            </p>

           
<?php endwhile; ?>
<?php endif; ?>



    <!-- the footer --> 
    <?php get_footer(); ?> 