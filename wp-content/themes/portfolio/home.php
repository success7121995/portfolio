<?php
  get_header();
?>
  <?php get_template_part('partials/nav', 'nav'); ?>

  <!-- About -->
  <div id="about-me" class="fade-in-section md:mt-5">
    <section class="w-[85%] max-w-[1000px] mx-auto py-[50px]">
      <h1 class="relative pl-5 text-3xl font-primary text-primary">
        About
        <span class="absolute left-0 -top-[13px] bottom-0 w-[5px] h-[50px] bg-primary"></span>
      </h1>

      <article class="w-[93%] mx-auto">
        <?php echo do_shortcode('[embed_about_me]'); ?>
      </article>
  
    </section>
  </div>

  <!-- Education -->
  <div id="education" class="fade-in-section">
    <section class="w-[85%] max-w-[1000px] mx-auto py-[50px]">
      <h1 class="relative pl-5 text-3xl font-primary text-primary">
        Education
        <span class="absolute left-0 -top-[13px] bottom-0 w-[5px] h-[50px] bg-primary"></span>
      </h1>
  
      <div class="mt-12">
        <?php echo do_shortcode('[embed_education]'); ?>
      </div>
  
    </section>
  </div>

  <!-- Work Experience -->
  <div id="work-experience" class="w-screen bg-[#FAF7F0] fade-in-section">
    <section class="flex flex-col justify-center item-center py-10 w-[85%] max-w-[1000px] mx-auto min-h-[250px]">
    
    <h1 class="relative pl-5 text-3xl font-primary text-primary">
      Work Experience
      <span class="absolute left-0 -top-[13px] bottom-0 w-[5px] h-[50px] bg-primary"></span>
    </h1>
    
    <?php echo do_shortcode('[embed_work_experience]'); ?>

    </section>
  </div>

  <!-- Skills -->
  <div id="skills" class="fade-in-section">
    <section class="w-[85%] max-w-[1000px] mx-auto py-[50px]">
      <h1 class="relative pl-5 text-3xl font-primary text-primary">
        Skills
        <span class="absolute left-0 -top-[13px] bottom-0 w-[5px] h-[50px] bg-primary"></span>
      </h1>

    </section>
  </div>
  <?php echo do_shortcode('[embed_skill]'); ?>

<?php
  get_footer();
?>