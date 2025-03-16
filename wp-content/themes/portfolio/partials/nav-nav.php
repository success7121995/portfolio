<?php
/**
 * Navbar
 * 
 * @package Portfolio
 * 
 */
?>

 <nav id="nav-header" class="mt-10 w-[90%] mx-auto relative">

    <!-- Navbar Toggler -->
    <div class="fixed top-0 right-0 z-50 w-full h-[160px] bg-gradient-to-b from-white to-transparent lg:hidden">
        <div class="flex justify-end items-center w-[90%] min-w-[375px] max-w-[800px] mx-auto">
            <button id="nav-toggler" class="cursor-pointer">
                <img src="<?php echo esc_html_e(get_template_directory_uri()); ?>/assets/svg/menu.svg" height="32" width="32" class="mx-auto my-2" alt="Menu toggler">
            </button>
        </div>
    </div>

    <!-- Nav -->
    <ul id="nav-menu" class="fixed w-full mx-auto top-0 left-0 right-0 bg-black px-5 py-10 flex flex-col justify-center items-center z-50 rounded-b-[30px] lg:w-[750px] lg:flex-row lg:justify-between lg:bg-transparent lg:h-[120px] lg:bg-gradient-to-b lg:from-white lg:to-transparent lg:px-5 lg:-top-5">
        <li class="text-base font-primary text-white py-3"><a class="navigate-link cursor-pointer hover:text-primary hover:underline hover:font-bold lg:text-black lg:hover:text-black" href="#about-me">About Me</a></li>
        <li class="text-base font-primary text-white py-3"><a class="navigate-link cursor-pointer hover:text-primary hover:underline hover:font-bold lg:text-black lg:hover:text-black" href="#education">Education</a></li>
        <li class="text-base font-primary text-white py-3"><a class="navigate-link cursor-pointer hover:text-primary hover:underline hover:font-bold lg:text-black lg:hover:text-black" href="#work-experience">Work Experience</a></li>
        <li class="text-base font-primary text-white py-3"><a class="navigate-link cursor-pointer hover:text-primary hover:underline hover:font-bold lg:text-black lg:hover:text-black" href="#skills">Skills</a></li>
        <li class="text-base font-primary text-white py-3"><a class="navigate-link cursor-pointer hover:text-primary hover:underline hover:font-bold lg:text-black lg:hover:text-black" href="#showcases">Showcases</a></li>
        <li class="text-base font-primary text-white py-3"><a class="cursor-pointer hover:text-primary hover:underline hover:font-bold lg:text-black lg:hover:text-black" href="/blog.html">Blog</a></li>
    </ul>
</nav>