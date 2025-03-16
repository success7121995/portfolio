<?php
/**
 * Home Page
 * 
 * @package Portfolio
 * 
 */
?>

<?php
get_header();
get_template_part('partials/main', 'head');
?>

<!-- Navbar -->
<?php get_template_part('partials/nav', 'nav'); ?>

<!-- About Me -->
<section id="about-me" class="my-10 lg:max-w-[70%]">
    <!-- About Me Title -->
    <div class="relative">
        <img class="absolute -top-3 -left-5 h-[120px] w-[160px] lg:-top-5 lg:-left-8 lg:h-[140px] lg:w-[180px]" src="<?php echo esc_html_e(get_template_directory_uri()); ?>/assets/components/dialogue-box.png" alt="Dialogue Box">
        <h1 class="text-2xl font-bold font-primary text-black translate-x-[10px] underline transform -rotate-3 md:text-3xl lg:text-4xl">About Me</h1>
    </div>

    <div class="my-10">
        <?php echo do_shortcode('[embed_about_me]'); ?>
    </div>
</section>

<!-- Education -->
<section id="education" class="my-10 text-end">
    <!-- Education Title -->
    <div class="relative">
        <img class="absolute -top-13 -right-2 h-[120px] w-[160px] lg:-top-12 lg:-right-8 lg:h-[140px] lg:w-[240px]" src="<?php echo esc_html_e(get_template_directory_uri()); ?>/assets/components/dialogue-box-fliped.png" alt="">
        <h1 class="text-2xl font-bold font-primary text-black -translate-x-[10px] -translate-y-[10px] underline transform -rotate-3 md:text-3xl lg:text-4xl lg:-translate-y-[-20]">Education</h1>
    </div>

    <?php echo do_shortcode('[embed_education]'); ?>
</section>

<!-- Work Experience -->
<section id="work-experience" class="my-10 lg:max-w-70%">
    <!-- Work Experience Title -->
    <div class="relative">
        <img class="absolute -top-3 -left-5 h-[150px] w-[250px] lg:-top-5 lg:-left-8 lg:h-[180px] lg:w-[380px]" src="<?php echo esc_html_e(get_template_directory_uri()); ?>/assets/components/dialogue-box.png" alt="Dialogue Box">
        <h1 class="text-2xl font-bold font-primary text-black translate-x-[10px] translate-y-[23px] underline transform -rotate-3 md:text-3xl lg:text-4xl">Work Experience</h1>
    </div>

    <?php echo do_shortcode('[embed_work_experience]'); ?>
</section>

<!-- Skills -->
<section id="skills" class="mt-25 text-end">
    <!-- Skills Title -->
    <div class="relative">
        <img class="absolute -top-16 -right-2 h-[120px] w-[160px] lg:-top-5 lg:-right-8 lg:h-[140px] lg:w-[180px]" src="<?php echo esc_html_e(get_template_directory_uri()); ?>/assets/components/dialogue-box-fliped.png" alt="">
        <h1 class="text-2xl font-bold font-primary text-black -translate-x-[50px] -translate-y-[20px] underline transform -rotate-3 md:text-3xl lg:text-4xl  lg:-translate-x-[15px] lg:translate-y-[30px]">Skills</h1>
    </div>

    <?php echo do_shortcode('[embed_skills]'); ?>
</section>

<?php
get_template_part('partials/main', 'foot');
get_footer();
?>