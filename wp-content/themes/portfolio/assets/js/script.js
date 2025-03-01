$(document).ready(function() {
  // Fade in sections when they come into view
  const scrollToFadeInSections = () => {
    $('.fade-in-section').each(function() {
      const sectionTop = $(this).offset().top;
      const sectionBottom = sectionTop + $(this).outerHeight();
      const scrollTop = $(window).scrollTop();
      const windowHeight = $(window).height();

      if (scrollTop + windowHeight > sectionTop + 100) {
        $(this).addClass('visible');
      } else if (scrollTop + windowHeight < sectionBottom) {
        $(this).removeClass('visible');
      }
    });
  }

  $(window).on('scroll', scrollToFadeInSections);
  // Initial check on page load
  scrollToFadeInSections();
  
  // Toggle tooltips
  $(".tooltip-btn").click(function(e) {
    e.stopPropagation();
    let tooltip = $(this).siblings(".tooltip");

    $(".tooltip").not(tooltip).removeClass("opacity-100 visible").addClass("opacity-0 invisible");

    tooltip.toggleClass("opacity-0 invisible opacity-100 visible transition duration-1000"); 
  });

  // Close tooltips and collapse the nav menu when clicking outside of them
  $(document).click(() => {
    $(".tooltip").removeClass("opacity-100 visible").addClass("opacity-0 invisible");
  });

  /**** Navbar ****/

  // Toggle menu on toggler click
  $('#nav-header-toggler').on('click', function(e) {
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

  // Variables for navigation menu behavior
  let navMenuOffsetTop;

  // Update the offset of the navigation menu
  const updateNavMenuOffset = () => {
    if ($(window).width() >= 992) {
      navMenuOffsetTop = $('#nav-menu').offset().top;
    } else {
      navMenuOffsetTop = null;
    }
  };

  // Fix the navigation menu on scrolling when it is reaching the top
  const fixNavMenuOnScroll = () => {
    if ($(window).width() >= 992 && navMenuOffsetTop !== null) {
      const scrollTop = $(window).scrollTop();
      if (scrollTop >= navMenuOffsetTop) {
        $('#nav-menu').addClass('fixedTop');
      } else {
        $('#nav-menu').removeClass('fixedTop');
      }
    } else {
      $('#nav-menu').removeClass('fixedTop');
    }
  };

  // Update the offset on page load
  updateNavMenuOffset();

  $(window).on('scroll', fixNavMenuOnScroll);
  $(window).on('resize', function() {
    fixNavMenuOnScroll();

    if ($(window).width() >= 992) {
      collapseNavMenu();
    }
  });

  // Initial check on page load
  fixNavMenuOnScroll();
  
  // Back to top
  const backToTopButton = $('#back-to-top');

  $(window).on('scroll', function() {
    if ($(window).scrollTop() > 300) {
      backToTopButton.addClass('show');
    } else {
      backToTopButton.removeClass('show');
    }
  });

  backToTopButton.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '300');
  });
});