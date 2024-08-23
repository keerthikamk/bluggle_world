
@extends('layouts.master')
@section('title','bluggle-bussiness-plus')
@section('content')
<main class="page_content">

<!-- Page Banner Section - Start
================================================== -->
<section class="software_company_hero_section xb-hidden ">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12 a ">
            <div class="content-wraps text-center mt-3">
              <div class="content_wrap  ">
                <h1 class="text-white  ">
                 <mark>Pricing</mark> 
                   
                </h1>
                <h6 class="text-white " >Think Big! Do Big! Be Big! Together we are <mark class="ms-1">Bluggle</mark>
                </h6>
              </div>
            </div>
            <div class="shape_images_1">
              <img src="/assets/images/hero/shape_image_1.webp" alt="Engine Image">
            </div>
            <div class="shape_images_2">
              <img src="/assets/images/hero/shape_image_2.webp" alt="Engine Image">
            </div>
          </div>
          <!-- <div class="col-lg-4  ">
            <div class="content-wraps">
            <div class="img-work mt-5">
            <img src="/assets/images/about/i-1.png" alt="Engine Image" width="210px" height="210px">
            </div>
            </div>
          </div> -->
        </div>
      </div>

</section>
<!-- Page Banner Section - End
================================================== -->

<!-- Policy Section - Start
================================================== -->

<!-- Policy Section - End
================================================== -->

<!-- Pricing Section - Start
================================================== -->
<section class="pricing_section section_space pb-5 bg-light">
  <div class="container">
    <div class="heading_block text-center">
    
      <h2 class="heading_text mb-0">
        Best Plane for Business And Acedemic
      </h2>
    </div>
    <div class="pricing_toggle_btn text-center mt-5">
      <button type="button">
        <span>Acedemic</span>
        <span>Bussiness</span>
      </button>
    </div>
    <div class="row justify-content-center">
      <div class="col-auto col-md-auto">
        <div class="pricing_block">
          <div class="heading">
            <h4 class="text-center mb-3">
            For Lisenter
            </h4>
          </div>
          <div class="table_head">
          <div class="pricing_price_value bg-primary-subtle text-primary">
              <span class="pricing_monthly">
                <del>₹150</del> ₹99 <sub>You'll Save <u>₹51</u></sub>
              </span>
              <span class="pricing_annually">
                <del>₹250</del> ₹149<sub>You'll Save <u>₹101</u></sub>
              </span>
          </div>
        
          </div>
          <ul class="icon_list unordered_list_block flex-column">
            <li>
              <span class="icon_list_icon">
                <i class="fa-regular fa-circle-check"></i>
              </span>
              <span class="icon_list_text">
                Software Development.
              </span>
            </li>
            <li>
              <span class="icon_list_icon">
                <i class="fa-regular fa-circle-check"></i>
              </span>
              <span class="icon_list_text">
                Digital Product Design
              </span>
            </li>

          </ul>
          <a class="btn btn-light" href="#!">
            <span class="btn_label" data-text="Checkout">Checkout</span>
            <span class="btn_icon">
              <i class="fa-solid fa-arrow-up-right"></i>
            </span>
          </a>
        </div>
      </div>
      <div class="col-auto col-md-auto">
        <div class="pricing_block">
        <div class="heading">
            <h4 class="text-center mb-3">
           
              For Presenter
            </h4>
          </div>
          <div class="table_head">
            <div class="pricing_price_value bg-primary-subtle text-primary">
            <span class="pricing_monthly">
                <del>₹200</del> ₹119<sub>You'll Save <u>₹81</u></sub>
              </span>
              <span class="pricing_annually">
                <del>₹300</del> ₹199<sub>You'll Save <u>₹101</u></sub>
              </span>
            </div>
        
          </div>
          <ul class="icon_list unordered_list_block flex-column">
            <li>
              <span class="icon_list_icon">
                <i class="fa-regular fa-circle-check"></i>
              </span>
              <span class="icon_list_text">
                Software Development.
              </span>
            </li>
            <li>
              <span class="icon_list_icon">
                <i class="fa-regular fa-circle-check"></i>
              </span>
              <span class="icon_list_text">
                Digital Product Design
              </span>
            </li>

          </ul>
          <a class="btn btn-light" href="#!">
            <span class="btn_label" data-text="Checkout">Checkout</span>
            <span class="btn_icon">
              <i class="fa-solid fa-arrow-up-right"></i>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Pricing Section - End
================================================== -->

<!-- Client Logo Section - Start
================================================== -->

<!-- Client Logo Section - End
================================================== -->

<!-- Call To Action Section - Start
================================================== -->
<section class="calltoaction_section parallaxie" style="background-image: url('/assets/images/backgrounds/bg_image_1.webp');">
  <div class="container text-center">
    <div class="heading_block text-white">
      <h2 class="heading_text">
        Ready to Work, Let's Chat
      </h2>
      <p class="heading_description mb-0">
        Our team of experts is ready to collaborate with you every step of the way, from initial consultation to implementation.
      </p>
    </div>
    <a class="btn btn-primary" href="contact">
      <span class="btn_label" data-text="Contact Us Today!">Contact Us Today!</span>
      <span class="btn_icon">
        <i class="fa-solid fa-arrow-up-right"></i>
      </span>
    </a>
  </div>
</section>
<!-- Call To Action Section - End
================================================== -->

</main>


@endsection('content')