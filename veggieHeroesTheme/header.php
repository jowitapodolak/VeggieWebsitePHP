<!-- What is the best way to create 'boc-environment?' -->
<!DOCTYPE html>
<html>
<head>

    <title>Veggie Heroes</title>
    <!-- UTF -8 lets you write in all kind of languages-->
    <meta charset="UTF-8">
    <!-- not working - should part sets the width of the page to follow the screen-width of the device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fonts import here-->
    <link href="https://fonts.googleapis.com/css?family=Geo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head> 
      <!-- Navbar menu (sit on top) 
   
   The <header> element represents a container for introductory content or a set of navigational links.-->

 <header>
 <div class="menu-top">
       <a class ="logoImg" href="<?php echo get_home_url(); ?>"><img class="logoImg" src="<?php echo get_stylesheet_directory_uri(); ?>/img/veggie_small.png" alt="Logo"></a>
       <?php wp_nav_menu( array('theme_location' => 'my-custom-menu', 'exclude' => '121') ); ?>
       <!-- <ul> .... <li>  -->
   </div>

    
 <?php wp_head(); ?>
 </header>

