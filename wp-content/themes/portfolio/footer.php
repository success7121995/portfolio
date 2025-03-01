  <!-- Footer -->
   <footer class="bg-secondary w-screen">
    <div class="w-[85%] max-w-[1000px] mx-auto py-10 text-center text-white">

      <!-- Use PHP to update the current year -->
      <p class="font-secondary text-heading text-1xs">&copy; 2025 Stanford Tse. All rights reserved.</p>
      <div class="flex justify-center mt-4 space-x-4">
        
        <!-- Dynamic Icons embeded links -->
        <a href="https://github.com/success7121995" target="_blank">
          <img src="<?php echo esc_html_e(get_template_directory_uri()); ?>/assets/svg/profiles/github.svg" alt="GitHub" height="32" width="32">
        </a>
        <a href="https://www.linkedin.com/in/shing-fung-tse-844730294/" target="_blank">
          <img src="<?php echo esc_html_e(get_template_directory_uri()); ?>/assets/svg/profiles/linkedin.svg" alt="LinkedIn" height="32" width="32">
        </a>
      </div>
    </div>
  </footer>

  <!-- Back to top -->
  <button id="back-to-top" class="fixed bottom-15 right-15 p-3 bg-tertiary opacity-50 cursor-pointer">
    <img src="<?php echo esc_html_e(get_template_directory_uri()); ?>/assets/svg/back-to-top.svg" alt="Back to top" height="25" width="25">
  </button>
  <?php wp_footer(); ?>
</body>
</html>