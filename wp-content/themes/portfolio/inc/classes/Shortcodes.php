<?php
/**
 * Shortcodes
 * 
 * @package Portfolio
 * 
 * Create shortcodes for components
 * 
 */

class Shortcodes {
  // Prevent from multiple instantiations
  use Singleton;

  private function __construct() {
    add_shortcode('embed_intro', [$this, 'intro_shortcode']);
    add_shortcode('embed_about_me', [$this, 'about_me_shortcode']);
    add_shortcode('embed_education', [$this, 'education_shortcode']);
    add_shortcode('embed_work_experience', [$this, 'work_experience_shortcode']);
    add_shortcode('embed_skill', [$this, 'skill_shortcode']);
  }


  // Intro shortcode
  public function intro_shortcode() {
    $intro_page_query = new WP_Query([
      'post_type' => 'page',
      'title' => 'Intro',
      'posts_per_page' => 1
    ]);

    $intro_page = $intro_page_query -> have_posts() ? $intro_page_query -> posts[0] : null;

    if ($intro_page) {
      $content = apply_filters('the_content', $intro_page -> post_content);
      $content = wp_kses_post($content); // Sanitize content

      // Custom class to p tags
      $content = str_replace('<p>', '<p class="font-primary text-xs text-primary mt-3 w-5/6 max-w-[600px] leading-6">', $content);
      return $content;
    }
    return 'Intro not found.';
  }

  // About Me shortcode
  public function about_me_shortcode() {
    $about_page_query = new WP_Query([
      'post_type' => 'page',
      'title' => 'About Me',
      'posts_per_page' => 1
    ]);

    $about_page = $about_page_query -> have_posts() ? $about_page_query -> posts[0] : null;

    if ($about_page) {
      $content = apply_filters('the_content', $about_page -> post_content);
      $content = wp_kses_post($content); // Sanitize content

      // Custom class to p tags
      $content = str_replace('<p>', '<p class="my-4 font-secondary text-sm/6 text-body md:text-base/7">', $content);
      return $content;
    }
    return 'About Me not found.';
  }

  // Education shortcode
  public function education_shortcode() {
    $posts = get_posts([
      'post_type' => 'education',
      'numberposts' => -1,
      'meta_key' => 'ends',
      'orderby' => 'meta_value_num',
    ]);

    if (empty($posts)) {
      $output = '<div class="w-full mx-auto flex justify-center items-center py-10">';
      $output .= '<h5 class="font-secondary text-base text-[#676767] leading-5">No Education Available</h5>';
      $output .= '</div>';
      return $output;
    };

    ob_start();
  ?>

    <!-- HTML -->
    <?php foreach($posts as $post): ?>
      <?php 
        $qualification = get_field('qualification', $post -> ID);
        $institution = get_field('institution', $post -> ID);
        $ends = get_field('ends', $post -> ID);
        $image = get_field('image', $post -> ID);
        $url = get_field('url', $post -> ID);
      ?>

        <div class="bg-tertiary flex justify-center items-center w-[90%] mx-auto py-12 relative my-12 rounded-[10px] shadow-md md:w-[75%] md:py-8">
          <div class="flex flex-col items-center justify-center">
            
            <!-- Qualification -->
            <h3 class="font-secondary text-primary font-bold text-sm md:text-lg text-center"><?php echo $qualification ? esc_html_e($qualification) : esc_html_e(''); ?></h3>

            <div class="flex flex-row justify-center items-center gap-2">

              <!-- Institution -->
                <a href="<?php echo $url ? esc_url($url) : esc_url('#'); ?>" target="_blank" class="!no-underline hover:!underline font-secondary text-[#666666] text-sm mt-2"><?php echo $institution ? esc_html_e($institution) : esc_html_e(''); ?></a>

              <!-- Period -->
              <p class="font-secondary text-[#666666] text-sm mt-2"> - <?php echo $ends ? esc_html_e($ends) : esc_html_e(''); ?></p>
            </div>
          </div>

          <!-- Small Image -->
          <div class="absolute -left-7 -top-12">
            <div class="w-18 h-18 rounded-full overflow-hidden mt-5 border-6 border-secondary md:w-23 md:h-23">
              <img class="w-full h-full" src="<?php echo $image ? esc_url($image['url']) : esc_url(get_template_directory_uri() . '/assets/images/no-avatar.jpg'); ?>" alt="">
            </div>
          </div>

        </div>
    <?php endforeach; ?>

  <?php
    return ob_get_clean();
  }

  // Work Experience shortcode
  public function work_experience_shortcode() {
    $posts = get_posts([
      'post_type' => 'work_experience',
      'numberposts' => -1,
      'meta_key' => 'starts',
      'orderby' => 'meta_value_num',
    ]);

    if (empty($posts)) {
      $output = '<div class="w-full mx-auto flex justify-center items-center py-10">';
      $output .= '<h5 class="font-secondary text-base text-[#676767] leading-5">No Work Experience Available</h5>';
      $output .= '</div>';
      return $output;
    };
    ob_start();
  ?>

    <!-- HTML -->
    <div class="relative border-l-3 border-[#91766F] pl-6 py-4 my-10 w-[97%] mx-auto md:w-[85%]">
      
      <?php foreach($posts as $post): ?>
        <?php 
          $position = get_field('position', $post -> ID);
          $company = get_field('company', $post -> ID);
          $starts = get_field('starts', $post -> ID);
          $ends = get_field('ends', $post -> ID);
          $description = get_field('description', $post -> ID);
        ?>

        <div class="relative my-8 w-[95%]">
          <div class="circle-indicator absolute -left-[37px] top-2 w-6 h-6 bg-primary border-4 border-white rounded-full"></div>

          <div class="speech-bubble relative bg-white text-gray-800 p-8 rounded-lg ml-5 md:p-10">
            
            <!-- Position -->
            <h3 class="text-xl font-bold text-heading font-primary"><?php echo $position ? esc_html_e($position) : esc_html_e(''); ?></h3>
            
            <div class="my-[5px] md:my-[10px]">
              <!-- Company -->
              <p class="text-gray-500 font-secondary text-sm mb-[3px] md:text-lg"><?php echo $company ? esc_html_e($company) : esc_html_e(''); ?></p>
  
              <!-- Period -->
              <p class="text-gray-400 text-xs font-secondary text-nowrap md:text-sm">
                <?php
                if ($starts):
                  echo esc_html_e($starts) . ' - ';
                  echo $ends ? esc_html_e($ends) : esc_html_e('Present');
                endif;
                ?>
              </p>
            </div>
            
            <!-- Description -->
            <p class="text-gray-700 mt-2 text-xs/5 font-secondary md:text-sm/5 md:mt-4">
              <?php echo $description ? nl2br(esc_html($description)) : ''; ?>
            </p>

            <!-- Speech Bubble Tail -->
            <div class="absolute -left-[26px] top-[20px] -translate-y-1/2 border-[16px] border-transparent border-r-white"></div>
            </div>
        </div>


      <?php endforeach; ?>

    </div>
  <?php
    return ob_get_clean();
  }

  // Skills shortcode
  public function skill_shortcode() {
    $posts = get_posts([
      'post_type' => 'skill',
      'numberposts' => -1,
      'orderby' => 'title',
      'order' => 'ASC',
    ]);

    if (empty($posts)) {
      $output = '<div class="w-full mx-auto flex justify-center items-center py-10">';
      $output .= '<h5 class="font-secondary text-base text-[#676767] leading-5">No Skill Available</h5>';
      $output .= '</div>';
      return $output;
    };
    ob_start();
  ?>

    <div class="mt-5 grid grid-cols-3 md:grid-cols-5 gap-4 w-full md:w-[85%] mx-auto">
      <?php foreach($posts as $post):
        $icon = get_field('icon', $post -> ID);
        $title = get_the_title($post -> ID);
      ?>
        <div class="mt-5 grid grid-cols-3 md:grid-cols-5 gap-4 w-full">
          <div class="flex flex-col items-center justify-between gap-3 h-[80px]">
            
            <!-- Icon -->
            <img class="mx-auto" src="<?php echo $icon ? esc_url($icon['url']) : ''; ?>" alt="HTML">
            
            <!-- Title -->
            <p class="font-secondary font-semibold text-heading text-sm"><?php esc_html_e($title); ?></p>
          </div>
        </div>
                
        <?php endforeach; ?>

    </div>
    
  <?php
    return ob_get_clean();
  }
}
