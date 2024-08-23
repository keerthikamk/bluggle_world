<!doctype html>
<html lang="en">

  

<head>

    <!--<meta charset="utf-8">-->
    <!--<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    <!--<meta http-equiv="x-ua-compatible" content="ie=edge">-->
    <!--<meta name="thumbnail" content="/assets/images/Techco_page_thumbnail_2.webp">-->
    <!--<meta name="description" content="Techco – IT Solutions & Technology, Business Consulting, Software Company Site Template">-->
    <!--<meta name="keywords" content="Bootstrap Site Template">-->
    <!--<meta name="author" content="Webrock">-->
    <!--<meta name="google-site-verification" content="hFwSgPNr6ChmnTcUjFBGUHle96d79FOlos6UT4RhOas" />-->
     @yield('metatag')
        <meta name="google-site-verification" content="hFwSgPNr6ChmnTcUjFBGUHle96d79FOlos6UT4RhOas" />

    <title>@yield('title')</title>
    <link rel="shortcut icon" href="/assets/images/site_logo/bluggle-logo-1.4.png">

    <link
     rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
   />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <!-- Fraimwork - CSS Include -->
    <link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.min.css">

    <!-- Icon - CSS Include -->
    <link rel="stylesheet" type="text/css" href="/assets/css/fontawesome.css">

    <!-- Animation - CSS Include -->
    <link rel="stylesheet" type="text/css" href="/assets/css/animate.min.css">

    <!-- Carousel - CSS Include -->
    <link rel="stylesheet" type="text/css" href="/assets/css/swiper-bundle.min.css">

    <!-- Video & Image Popup - CSS Include -->
    <link rel="stylesheet" type="text/css" href="/assets/css/magnific-popup.min.css">

    <!-- Counter - CSS Include -->
    <link rel="stylesheet" type="text/css" href="/assets/css/odometer.min.css">

    <!-- Custom - CSS Include -->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">

  </head>


  <body>

    <!-- Body Wrap - Start -->
    <div class="page_wrapper">

      <!-- Preloader - Start -->
      <div id="preloader" class="preloader">
        <div class="loader-circle">
          <div class="loader-line-mask">
            <div class="loader-line"></div>
          </div>
          <div class="loader-logo">
            <img src="/assets/images/site_logo/bluggle-logo-1.png" alt="Site Logo – Techco – IT Solutions &amp; Technology Site Template">
          </div>
        </div>
      </div>
      <!-- Preloader - End -->

      <!-- Back To Top - Start -->
      <div class="backtotop">
        <a href="#" class="scroll">
          <i class="fa-solid fa-arrow-up"></i>
        </a>
      </div>
      <!-- Back To Top - End -->

      <!-- Site Header - Start
      ================================================== -->
      <header class="site_header site_header_2">
        <div class="header_bottom stricky">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-3 col-5">
                <div class="site_logo">
                  <a class="site_link" href="/">
                     
                    <img src="/assets/images/site_logo/bluggle-logo-1.7.png" alt="Site Logo – Techco – IT Solutions & Technology, Business Consulting, Software Company Site Template">
                    <img src="/assets/images/site_logo/bluggle-logo-1.8.png" alt="Site Logo – Techco – IT Solutions & Technology, Business Consulting, Software Company Site Template">
                  </a>
                </div>
              </div>
              <div class="col-lg-6 col-2">
                <nav class="main_menu navbar navbar-expand-lg">
                  <div class="main_menu_inner collapse navbar-collapse justify-content-lg-center" id="main_menu_dropdown">
                    <ul class="main_menu_list unordered_list justify-content-center">
                      <li class="{{ request()->is('/') ? 'active' : '' }}">
                        <a class="nav-link" href="/"  role="button" aria-expanded="false" >
                          Home
                        </a>
                       
                      </li>
                      <li class="{{ request()->is('about-us') ? 'active' : '' }}">
                        <a class="nav-link" href="/about-us" id="company_submenu" role="button"  aria-expanded="false">
                          About Us
                        </a>
                      
                      </li>
                     
                      <li class="dropdown {{ request()->is('services/*') ? 'active' : '' }} " >
                        <a class="nav-link" href="service" id="pages_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                         Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="pages_submenu">
                          <li class="{{ request()->is('services/digital-marketing') ? 'active' : '' }}" ><a href="/services/digital-marketing">Bluggle Digital marketing</a></li>


                          <li class="dropdown {{ request()->is('service/conference/*') ? 'active' : '' }}" >
                            <a class="nav-link" href="#" id="blog_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Bluggle Conferences
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="blog_submenu">
                              <li class="{{ request()->is('services/conferences/bluggle-conference') ? 'active' : '' }}"><a href="/services/conferences/bluggle-conference">Bluggle Medical Conferences</a></li>
                              <li class="{{ request()->is('services/conferences/network-security') ? 'active' : '' }}"><a href="/services/conferences/network-security">Bluggle Network Security</a></li>
                              <li class="{{ request()->is('services/conferences/finvest-webinars') ? 'active' : '' }}"><a href="/services/conferences/finvest-webinars">Finance and Investment Webinars</a></li>
                            
                            </ul>
                          </li>
                          <li class="{{ request()->is('services/enterprise-Growth-Advisors') ? 'active' : '' }}" ><a href="/services/consulting-services">Bluggle Business Consulting Services</a></li>

                          <li class="{{ request()->is('services/software-solution') ? 'active' : '' }}" ><a href="/services/software-solution">Bluggle Software And Solution</a></li>
                          
                     
                         
                        </ul>
                      </li>
                      <!-- <li class="dropdown">
                        <a class="nav-link" href="#" id="services_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Services
                        </a>
                        <div class="dropdown-menu mega_menu_wrapper p-0" aria-labelledby="services_submenu">
                          <div class="container">
                            <div class="row justify-content-lg-between">
                              <div class="col-lg-8">
                                <div class="row">
                                  <div class="col-lg-4">
                                    <div class="megamenu_widget">
                                      <h3 class="megamenu_info_title">Services</h3>
                                      <ul class="icon_list unordered_list_block">
                                        <li>
                                          <a href="service_details.html">
                                            <span class="icon_list_text">
                                              IT Management Services
                                            </span>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="service_details.html">
                                            <span class="icon_list_text">
                                              Data Tracking Security
                                            </span>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="service_details.html">
                                            <span class="icon_list_text">
                                              Website Development
                                            </span>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="service_details.html">
                                            <span class="icon_list_text">
                                              CRM Solutions and Design
                                            </span>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="service_details.html">
                                            <span class="icon_list_text">
                                              UI/UX Design Services
                                            </span>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="service_details.html">
                                            <span class="icon_list_text">
                                              Technology Solution
                                            </span>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="service_details.html">
                                            <span class="icon_list_text">
                                              Software Development
                                            </span>
                                          </a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="megamenu_widget">
                                      <h3 class="megamenu_info_title">Our Fields</h3>
                                      <ul class="icon_list unordered_list_block">
                                        <li>
                                          <a href="fields.html">
                                            <span class="icon_list_text">
                                              Healthcare
                                            </span>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="fields.html">
                                            <span class="icon_list_text">
                                              Banks
                                            </span>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="fields.html">
                                            <span class="icon_list_text">
                                              Logistics
                                            </span>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="fields.html">
                                            <span class="icon_list_text">
                                              Supermarkets
                                            </span>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="fields.html">
                                            <span class="icon_list_text">
                                              Industries
                                            </span>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="fields.html">
                                            <span class="icon_list_text">
                                              Hotels
                                            </span>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="fields.html">
                                            <span class="icon_list_text">
                                              Fintech
                                            </span>
                                          </a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                  <div class="col-lg-4">
                                    <div class="megamenu_widget">
                                      <h3 class="megamenu_info_title">Product</h3>
                                      <ul class="icon_list unordered_list_block">
                                        <li>
                                          <a href="portfolio.html">
                                            <span class="icon_list_text">
                                              Case Studies
                                            </span>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="pricing.html">
                                            <span class="icon_list_text">
                                              Our Pricing
                                            </span>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="service.html">
                                            <span class="icon_list_text">
                                              Features
                                            </span>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="about.html">
                                            <span class="icon_list_text">
                                              Overview
                                            </span>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="#!">
                                            <span class="icon_list_text">
                                              New Releases
                                            </span>
                                          </a>
                                        </li>
                                        <li>
                                          <a href="service.html">
                                            <span class="icon_list_text">
                                              Solutions
                                            </span>
                                          </a>
                                        </li>
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                                <div class="social_area">
                                  <ul class="social_icons_block unordered_list" data-text="Follow Us:">
                                    <li>
                                      <a href="#!">
                                        <i class="fa-brands fa-facebook-f"></i>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#!">
                                        <i class="fa-brands fa-twitter"></i>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#!">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#!">
                                        <i class="fa-brands fa-dribbble"></i>
                                      </a>
                                    </li>
                                  </ul>
                                  <p class="career_link m-0">Looking for new career? <a href="#!">We’re Hiring</a></p>
                                </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="megamenu_case bg-primary">
                                  <h3>Computer Software</h3>
                                  <h4>Astarte Medical</h4>
                                  <img src="/assets/images/case/case_image_4.webp" alt="Case Image">
                                  <a class="btn" href="portfolio.html">
                                    <span class="btn_label" data-text="Read Case">Read Case</span>
                                    <span class="btn_icon">
                                      <i class="fa-solid fa-arrow-up-right"></i>
                                    </span>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li> -->
                      <!-- <li class="dropdown">
                        <a class="nav-link" href="#" id="pages_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Pages
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="pages_submenu">
                          <li><a href="about.html">About Us</a></li>
                          <li class="dropdown">
                            <a class="nav-link" href="#" id="blog_submenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Blogs
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="blog_submenu">
                              <li><a href="blog.html">Our Blogs</a></li>
                              <li><a href="blog_details.html">Blod details</a></li>
                            </ul>
                          </li>
                          <li><a href="contact">Help Center</a></li>
                          <li><a href="#!">Careers <small class="badge bg-danger-subtle text-danger">We’re Hiring</small></a></li>
                        </ul>
                      </li> -->
                      <li  class="{{ request()->is('blogs') ? 'active' : '' }}"><a href="/blogs">Blogs</a></li>
                      <li i class="{{ request()->is('contact-us') ? 'active' : '' }}"><a href="/contact-us">Contact Us</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
              <div class="col-lg-3 col-5">
                <ul class="header_btns_group unordered_list justify-content-end">
                  <li>
                    <button class="mobile_menu_btn" type="button" data-bs-toggle="collapse" data-bs-target="#main_menu_dropdown" aria-expanded="false" aria-label="Toggle navigation">
                      <i class="far fa-bars"></i>
                    </button>
                  </li>
                  <li>
                    <a class="btn btn-primary" href="/contact-us">
                      <span class="btn_label" data-text="Enquire Now">Enquire Now</span>
                      <span class="btn_icon">
                        <i class="fa-solid fa-arrow-up-right"></i>
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- Site Header - End
      ================================================== -->

      <!-- Main Body - Start
      ================================================== -->
      @yield('content')
      <!-- Main Body - End
      ================================================== -->

      <!-- Site Footer - Start
      ================================================== -->
      <section class="calltoaction_section parallaxie" style="background-image: url('/assets/images/backgrounds/bg_image_6.webp');">
          <div class="container text-center">
            <div class="heading_block text-white">
              <h2 class="heading_text">
                Ready to Work, Let's Chat
              </h2>
              <p class="heading_description mb-0">
                Our team of experts is ready to collaborate with you every step of the way, from initial consultation to implementation.
              </p>
            </div>
            <a class="btn btn-primary" href="/contact-us">
              <span class="btn_label" data-text="Contact Us Today!">Contact Us Today!</span>
              <span class="btn_icon">
                <i class="fa-solid fa-arrow-up-right"></i>
              </span>
            </a>
          </div>
        </section>

      <footer class="site_footer footer_layout_2 section_decoration" style="background-image: url    ('/assets/images/shapes/bg_pattern_3.svg');">
        <div class="decoration_item shape_image_1">
          <img src="/assets/images/shapes/shape_space_2.svg" alt="Techco Shape">
        </div>
        <div class="container">
         <!-- <div class="service_pill_carousel swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <a class="service_pill_block" href="service_details.html">
                  <i class="fa-solid fa-check"></i>
                  <span>Custom Web Apps</span>
                </a>
              </div>
              <div class="swiper-slide">
                <a class="service_pill_block" href="service_details.html">
                  <i class="fa-solid fa-check"></i>
                  <span>App Development</span>
                </a>
              </div>
              <div class="swiper-slide">
                <a class="service_pill_block" href="service_details.html">
                  <i class="fa-solid fa-check"></i>
                  <span>Web Development</span>
                </a>
              </div>
              <div class="swiper-slide">
                <a class="service_pill_block" href="service_details.html">
                  <i class="fa-solid fa-check"></i>
                  <span>Software Solution</span>
                </a>
              </div>
              <div class="swiper-slide">
                <a class="service_pill_block" href="service_details.html">
                  <i class="fa-solid fa-check"></i>
                  <span>Enterprise Apps</span>
                </a>
              </div>
              <div class="swiper-slide">
                <a class="service_pill_block" href="service_details.html">
                  <i class="fa-solid fa-check"></i>
                  <span>Devops Services</span>
                </a>
              </div>
              <div class="swiper-slide">
                <a class="service_pill_block" href="service_details.html">
                  <i class="fa-solid fa-check"></i>
                  <span>Custom Web Apps</span>
                </a>
              </div>
              <div class="swiper-slide">
                <a class="service_pill_block" href="service_details.html">
                  <i class="fa-solid fa-check"></i>
                  <span>App Development</span>
                </a>
              </div>
              <div class="swiper-slide">
                <a class="service_pill_block" href="service_details.html">
                  <i class="fa-solid fa-check"></i>
                  <span>Web Development</span>
                </a>
              </div>
              <div class="swiper-slide">
                <a class="service_pill_block" href="service_details.html">
                  <i class="fa-solid fa-check"></i>
                  <span>Software Solution</span>
                </a>
              </div>
              <div class="swiper-slide">
                <a class="service_pill_block" href="service_details.html">
                  <i class="fa-solid fa-check"></i>
                  <span>Enterprise Apps</span>
                </a>
              </div>
              <div class="swiper-slide">
                <a class="service_pill_block" href="service_details.html">
                  <i class="fa-solid fa-check"></i>
                  <span>Devops Services</span>
                </a>
              </div>
            </div>
          </div> -->
          <div class="">
            <div class="row justify-content-lg-between align-items-center">
              <div class="col-lg-3 col-md-6 h-2">
                <div class="footer_widget h-3 ">
                  <h3 class="footer_info_title ">Quick Links</h3>
                  <ul class="icon_list unordered_list_block ">
                    <li >
                      <a href="about-us">
                        <span class="icon_list_text ">
                          About Us
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="services">
                        <span class="icon_list_text">
                          Our Services
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="/blogs">
                        <span class="icon_list_text">
                          Our Blogs
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="/contact-us">
                        <span class="icon_list_text">
                          Contact Us
                        </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 h-2">
                <div class="footer_widget h-3">
                  <h3 class="footer_info_title text-center">Our Services</h3>
                  <ul class="icon_list unordered_list_block">
                    <li>
                      <a href="/service/digital-marketing">
                        <span class="icon_list_text">
                         Digital Marketing
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="/service/conference/bluggle-conference">
                        <span class="icon_list_text">
                        Medical Conferences
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="/service/conference/network-security">
                        <span class="icon_list_text">
                        Network Security
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="/service/conference/finvest-webinars">
                        <span class="icon_list_text">
                        Finvest Webinars
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="/service/consulting-services">
                        <span class="icon_list_text">
                        Business Consulting Services
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="/service/software-solution">
                        <span class="icon_list_text">
                        Software and Solution
                        </span>
                      </a>
                    </li>
               
                
                  </ul>
                </div>
              </div>
              <!-- <div class="col-lg-3 col-md-6 h-2">
                <div class="footer_widget h-3">
                  <h3 class="footer_info_title text-center">Our Website</h3>
                  <ul class="icon_list unordered_list_block">
                    <li>
                      <a href="https://www.bluggledigital.com/" target="_blank">
                        <span class="icon_list_text">
                          www.bluggledigital.com
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="https://bluggleconferences.com/#nav-mobile" target="_blank">
                        <span class="icon_list_text" target="_blank">
                          www.bluggleconferences.com
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="https://blugglewheels.in/" target="_blank">
                        <span class="icon_list_text">
                          www.blugglewheels.in
                        </span>
                      </a>
                    </li>
               
                
                  </ul>
                </div>
              </div> -->
             
              <div class="col-lg-3 col-md-6 h-2">
                <div class="footer_widget h-3 ">
                  <h2 class="footer_info_title text-center ">Social Links</h2>
                 
             
                  <ul class="social_icons_block unordered_list ">
                    <li>
                      <a href="https://www.facebook.com/profile.php?id=61559689564625" target="_blank">
                        <i class="fa-brands fa-facebook-f"></i>
                      </a>
                    </li>
                  
                    <li>
                      <a href="https://www.linkedin.com/company/bluggle-groups/" target="_blank">
                        <i class="fa-brands fa-linkedin-in"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://wa.me/9342690684" target="_blank">
                        <i class="fa-brands fa-whatsapp"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/bluggle_groups " target="_blank">
                        <i class="fa-brands fa-instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="https://x.com/bluggle_world?t=F0olYk0v_IltdCh5JkclMw&s=08" target="_blank">
                        <i class="fa-brands fa-twitter"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer_bottom" style="background-image: url('/assets/images/shapes/shape_space_6.svg');">
          <div class="container d-md-flex align-items-md-center justify-content-md-center">
            <p class="copyright_text m-0">
              Copyright © 2024 Bluggle.Pvt.Ltd, All rights reserved.
            </p>
            <ul class="icon_list unordered_list">
        
           
            </ul>
          </div>
        </div>
      </footer>
      <!-- Site Footer - End
      ================================================== -->

    </div>
    <!-- Body Wrap - End -->

    <!-- Fraimwork - Jquery Include -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/bootstrap-dropdown-ml-hack.min.js"></script>

    <!-- Carousel - Jquery Include -->
    <script src="/assets/js/swiper-bundle.min.js"></script>

    <!-- Parallax Effects - jquery include -->
    <script src="/assets/js/parallaxie.js"></script>
    <script src="/assets/js/parallax-scroll.js"></script>
    <script src="/assets/js/wow.min.js"></script>

    <!-- Countdown - Jquery Include -->
    <script src="/assets/js/countdown.js"></script>

    <!-- Video & Image Popup - Jquery Include -->
    <script src="/assets/js/magnific-popup.min.js"></script>

    <!-- Counter - Jquery Include -->
    <script src="/assets/js/appear.min.js"></script>
    <script src="/assets/js/odometer.min.js"></script>

    <!-- Circular Progress Bar - Jquery Include -->
    <script src="/assets/js/circularProgressBar.min.js"></script>

    <!-- Custom - Jquery Include -->
    <script src="/assets/js/main.js"></script>
    <script>
   const phoneInputField = document.querySelector("#phone");
   const phoneInput = window.intlTelInput(phoneInputField, {
     utilsScript:
       "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
   });


   phoneInputField.addEventListener('countrychange', function(event) {
        const countryData = phoneInput.getSelectedCountryData();
        document.querySelector("#country_code").value = countryData.iso2;
        document.querySelector("#country_name").value = countryData.name;
    });
 </script>



  </body>


</html>