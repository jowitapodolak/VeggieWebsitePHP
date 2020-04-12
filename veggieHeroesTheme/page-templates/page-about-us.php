<?php /* Template Name: page-about-us.php */?>
<?php get_header(); ?>
 <!-- Page content -->
 <div class="page-content">
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="all-you-can-eat">
        <!--here i need empty space for description of the buffet-->
        <!-- why its not workign with an ordianry p, without a class?-->
        <div class="all-eat-text">
        
            <p> 
            <?php the_content(); ?>
            </p>
        </div>
           

 
    </div>
<?php endwhile; ?>
<?php endif; ?>

    <!-- the footer --> 
    <?php get_footer(); ?> 
