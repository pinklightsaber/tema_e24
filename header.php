<?php wp_head() ?> 

<?php if(has_nav_menu('header-menu')) { ?>

  
  <nav class="navbar navbar-default">
    
<?php 
    wp_nav_menu(array(
      'theme_location' => 'header-menu',
      'container_class' => 'header_menu'
    ));
 ?>
 
 </nav>

<?php } ?>
