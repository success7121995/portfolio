<?php
/**
 * Shortcodes
 * 
 * @package Personal Website
 * 
 * Each component is a shortcode, so it can be directly called by entering the shortcode in the backend.
 */

class Shortcodes {
    // Prevent from multiple instantiations
    use Singleton;

    private function __construct() {
        add_shortcode('embed_about_me', [$this, 'about_me_shortcode']);
        add_shortcode('embed_education', [$this, 'education_shortcode']);
        add_shortcode('embed_work_experience', [$this, 'work_experience_shortcode']);
        add_shortcode('embed_skills', [$this, 'skills_shortcode']);
    }

    ## Show message if no content to be displayed
    ## Disallow direct access to this function
    private function no_content_to_be_displayed() {
        $output = '<div class="w-full mx-auto flex justify-center items-center py-10">';
        $output .= '<h5 class="font-primary text-sm font-medium text-[#424242] leading-5">Sorry, it\'s still updating...</h5>';
        $output .= '</div>';
        return $output;  
    }

    ## About Me
    function about_me_shortcode() {
        $about_me_query = new WP_Query([
            'post_type' => 'page',
            'title' => 'About Me',
            'posts_per_page' => 1
        ]);

    
        $about_me_comp = $about_me_query -> have_posts() ? $about_me_query -> posts[0] : null;

        if (empty($about_me_comp)) {
            return $this -> no_content_to_be_displayed();
        };

        $content = apply_filters('the_content', $about_me_comp -> post_content);
        $content = wp_kses_post($content); // Sanitize content

        // Custom class to p tags
        $content = str_replace('<p>', '<p class="p-4 font-primary text-black text-sm/6 transform -rotate-3 w-[95%] mx-auto mt-12 lg:mt-8">', $content);
        return $content;
    }

    ## Education
    function education_shortcode() {
        $education_query = new WP_Query([
            'post_type' => 'education',
            'numberposts' => -1,
            'meta_key' => 'ends',
            'orderby' => 'meta_value_num',
        ]);

        $education_comp = $education_query -> have_posts() ? $education_query -> posts : [];

        if (empty($education_comp)) {
            return $this -> no_content_to_be_displayed();
        };
        ob_start();

        foreach ($education_comp as $post):
            $qualification = get_field('qualification', $post -> ID);
            $institute = get_field('institute', $post -> ID);
            $starts = get_field('starts', $post -> ID);
            $ends = get_field('ends', $post -> ID);
        ?>
        <div class="education-card mt-2">
          
            <div class="w-[360px] pr-8 pt-8 ml-auto relative">
                <div class="sm:h-[160px] flex flex-col justify-center">
                    <!-- Qualification -->
                    <h3 class="font-primary font-semibold text-base transform -rotate-2 lg:text-lg"><?php echo $qualification ? esc_html_e($qualification) : esc_html_e(''); ?></h3>
                    
                    <div>
                        <!-- Institution -->
                        <p class="transform -rotate-2 font-primary text-black text-sm mt-2 lg:text-base"><?php echo $institute ? esc_html_e($institute) : esc_html_e(''); ?></p>
            
                        <!-- Period -->
                        <p class="transform -rotate-2 font-primary text-gray-500 text-sm">
                        <?php
                        if ($starts):
                            echo esc_html_e($starts) . ' - ';
                            echo $ends ? esc_html_e($ends) : esc_html_e('Present');
                        endif;                            
                        ?>
                        </p>
                    </div>
                </div>

            </div>

        </div>

        <?php
        endforeach;
        return ob_get_clean();
    }

    ## Work Experience
    function work_experience_shortcode() {
        $work_experience_query = new WP_Query([
            'post_type' => 'work-experience',
            'numberposts' => -1,
            'meta_key' => 'starts',
            'orderby' => 'meta_value_num',
        ]);

        $work_experience_comp = $work_experience_query -> have_posts() ? $work_experience_query -> posts : [];

        if (empty($work_experience_comp)) {
            $output = '<div class="my-20">';
            $output .= $this -> no_content_to_be_displayed();
            $output .= '</div>';
            return $output;
        };
        ob_start();
        ?>

        <div class="relative border-l-5 border-black pl-6 py-4 mb-10 mt-30 w-[80%] mx-auto lg:mt-30 lg:mb-10">
        
        <?php

        foreach ($work_experience_comp as $post):
            $position = get_field('position', $post -> ID);
            $company = get_field('company', $post -> ID);
            $starts = get_field('starts', $post -> ID);
            $ends = get_field('ends', $post -> ID);
            $description = get_field('description', $post -> ID);
        ?>

            <div class="relative my-8 w-[95%]">
                <!-- Circle Indicator -->
                <div class="circle-indicator absolute -left-[38px] top-2 w-6 h-6 bg-white border-4 border-black rounded-full"></div>

                <!-- Container -->
                <div class="speech-bubble relative bg-white p-4 rounded-lg ml-5 border-4 border-black">
                    <h3 class="text-2xl font-bold text-heading font-primary"><?php echo $position ? esc_html_e($position) : esc_html_e(''); ?></h3>
                
                    <div class="px-2">
                        <p class="text-gray-700 font-primary text-lg"><?php echo $company ? esc_html_e($company) : esc_html_e(''); ?></p>
                        <p class="text-gray-400 text-sm font-primary">
                        <?php
                        if ($starts):
                            echo esc_html_e($starts) . ' - ';
                            echo $ends ? esc_html_e($ends) : esc_html_e('Present');
                        endif;                            
                        ?>
                        </p>

                        <p class="text-black mt-2 text-sm font-primary my-3"><?php echo $description ? nl2br(esc_html($description)) : ''; ?></p>
                    </div>

                    <!-- Speech Bubble Tail -->
                    <div class="absolute -left-[32px] top-[20px] -translate-y-1/2 border-[16px] border-transparent border-r-black"></div>
                </div>
            </div>
            <?php
        endforeach;
        ?>
        </div>
        <?php
        return ob_get_clean();
    }

    ## Skills
    function skills_shortcode() {
        $skills_query = new WP_Query([
            'post_type' => 'skill',
            'numberposts' => -1,
            'meta_key' => 'order',
            'orderby' => 'meta_value_num'
        ]);

        $skills_comp = $skills_query -> have_posts() ? $skills_query -> posts : [];

        if (empty($skills_comp)) {
            $output = '<div class="w-full mx-auto lg:mt-15">';
            $output .= $this -> no_content_to_be_displayed();
            $output .= '</div>';
            return $output;
        };
        ob_start();
        ?>
        <div class="mt-5 mb-10 grid grid-cols-3 md:grid-cols-5 gap-4 w-full lg:mt-15 lg:mb-20">

        <?php
        foreach ($skills_comp as $post):
            $name = get_field('name', $post -> ID);
            $icon = get_field('icon', $post -> ID);
            $icon_url = $icon ? esc_url($icon['url']) : '';
        ?>
            <div class="flex flex-col items-center h-[100px] justify-between gap-3 py-4">
                <img class="mx-auto" src="<?php echo $icon_url; ?>" height="45" width="45" alt="HTML">
                <p class="font-primary font-semibold text-heading text-sm"><?php echo $name? esc_html_e($name) : esc_html_e(''); ?></p>
            </div>
        <?php
        endforeach;

        ?>
        </div>
        <?php
        return ob_get_clean();
    }
}