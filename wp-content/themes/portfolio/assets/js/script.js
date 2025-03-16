$(document).ready(function () {
  console.log('hhihi')

  /** Background Image */
  // Setting the background image
  const imgSrc = themeData.templateUrl + "/assets/components/yellow_bg.png";
  console.log(imgSrc);
  const imgHeight = 120; // Height of a single image (px)
  const navHeight = 60; // Height of the navigation bar (px)
  const footerHeight = 60; // Height of the footer (px)
  
  function adjustBgImages() {
    let screenHeight = $('.main-container').height();

    let numImages = Math.ceil((screenHeight - navHeight - footerHeight) / imgHeight); // Calculate the number of images needed

    let $bgContainer = $("#bg-container");
    $bgContainer.empty();

    numImages = Math.max(numImages, 5); // Ensure there are at least 5 images

    for (let i = 0; i < numImages; i++) {
      $bgContainer.append(`<img src="${imgSrc}" class="w-full absolute h-[200px] md:h-[280px]" style="top: ${navHeight + i * imgHeight}px;">`);
    }
  }

  adjustBgImages();

  $(window).resize(function () {
    adjustBgImages();
  });

  /** Navbar */
  // Toggle menu on toggler click
  $('#nav-toggler').on('click', function(e) {
    e.stopPropagation();
    $('#nav-menu').toggleClass('open');
  });

  // Collapse menu
  const collapseNavMenu = () => {
    $('#nav-menu').removeClass('open');
  }
    
  $(document).on('click', function() {
    collapseNavMenu();
  });

  // Prevent menu from collapsing when clicking inside the menu
  $('#nav-menu').on('click', function(e) {
    e.stopPropagation();
  });

  // Smooth scroll to sections on link click
  $('.navigate-link').on('click', function(e) {
    e.preventDefault();
    const target = $(this).attr('href');
    const headerHeight = $('#nav-header').outerHeight();
    $('html, body').animate({
      scrollTop: $(target).offset().top - headerHeight
    }, 800);
  });

  // Track the screen width when resizing. Collapse the nav menu when the screen size is greater than 992px, 
  $(window).on('resize', function() {
    if ($(window).width() >= 992) {
      collapseNavMenu();
    }
  });

  $(window).on('resize', function() {
    if ($(window).width() < 1024) {
      collapseNavMenu();
    }
  });

  /** Scroll to sections */
  // Smooth scroll to sections on link click
  $('.navigate-link').on('click', function(e) {
    e.preventDefault();
    const target = $(this).attr('href');
    const headerHeight = $('#nav-header').outerHeight();
    $('html, body').animate({
      scrollTop: $(target).offset().top - headerHeight
    }, 800);

    // Collapse nav menu after navigating to the section
    collapseNavMenu();
  });
  
});