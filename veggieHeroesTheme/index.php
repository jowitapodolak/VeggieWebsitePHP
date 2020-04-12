
<?php get_header(); ?>

 <!-- Page content -->
 
<!-- Page content -->

 <div class="page-content">
 <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="all-you-can-eat">
        <!--here i need empty space for description of the buffet-->
        <!-- why its not workign with an ordianry p, without a class?-->
        <div class="all-eat-text">
            <?php the_content(); ?>
        </div>
   
    <div class="opening-hours-container">
        <div class="opening-hours-box">
                <h2 class ="opening-hours-h2">Opening hours</h2>
                <a class ="opening-hours-img" href="<?php echo get_home_url(); ?>"><img class="opening-hours" src="<?php echo get_stylesheet_directory_uri(); ?>/img/opening-hours.png" alt="opening-hours"></a>

    </div>
</div>
<?php endwhile; ?>
<?php endif; ?>



    <!-- the footer --> 
<?php get_footer(); ?> 


