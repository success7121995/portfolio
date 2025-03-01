<!-- Nav Header -->
<nav id="nav-header" class="bg-secondary pb-[50px] lg:pb-[80px] relative w-full">

  <?php
  if (is_home() || is_front_page()):
    get_template_part('partials/nav', 'header');
  endif;
  ?>
  
  
  <!-- Bottom Edge -->
  <img class="absolute -bottom-12 lg:-bottom-10 -z-50 min-w-[375px] w-screen h-[180px] lg:h-[120px]" src="<?php echo get_template_directory_uri(); ?> /assets/images/nav-header.png" alt="">
  
</nav>
<?php
if (is_home() || is_front_page()):
  get_template_part('partials/nav', 'menu');
endif;
?>