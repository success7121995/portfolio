<div class="w-[85%] max-w-[1000px] p-2 pt-20 mx-auto relative">

  <!-- Menu toggler -->
  <div class="fixed top-[20px] right-0 z-40 p-5 h-auto">
    <button id="nav-header-toggler" class="cursor-pointer lg:hidden">
      <img height="25" width="25" src="<?php echo esc_html_e(get_template_directory_uri()); ?>/assets/svg/menu.svg" alt="Nav header toggler">
    </button>
  </div>

  <!-- Hero -->
  <div class="mt-5">
    <h1 class="font-primary text-4xl text-primary">Testing</h1>
      
    <div class="divider w-[150px] bg-primary h-[4px]"></div>

    <p class="font-primary text-xs text-primary mt-3 w-5/6 max-w-[600px] leading-6"><?php echo do_shortcode('[embed_intro]'); ?></p>
  </div>

  <div class="absolute right-0 md:-bottom-46">
    <div class="w-34 h-34 rounded-full overflow-hidden mt-5 border-6 border-primary -translate-y-[20px] md:w-40 md:h-40">
      <img class="w-full h-full" src="<?php echo esc_html_e(get_template_directory_uri()); ?>/assets/images/no-avatar.jpg" alt="">
    </div>
  </div>

</div>