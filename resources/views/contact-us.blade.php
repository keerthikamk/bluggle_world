
@extends('layouts.master')
@section('metatag')
      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="thumbnail" content="/assets/images/Techco_page_thumbnail_2.webp">

    <meta name="title" content="Expert Business Consulting & Digital Marketing | Bluggle World">

    <meta name="description" content="Get in touch with Bluggle World for all your inquiries and support. Our dedicated team is here to assist you with any questions or concerns.">

    <meta name="keywords" content="Digital marketing agency in Chennai">

    <meta name="keywords" content="digital marketing services, best digital marketing agency, SEO agencies in Chennai, digital marketing firm, digital marketing agency, medical conferences, international conferences, cyber security conferences, network security">

    
  @endsection('metatag')
@section('title','Contact Us | Bluggle Pvt. Ltd. | Support and Inquiries')
@section('content')

<main class="page_content">

<!-- Page Banner Section - Start
================================================== -->
<section class="software_company_hero_section xb-hidden">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12 a ">
            <div class="content-wraps text-center mt-3">
              <div class="content_wrap  ">
                <h1 class="text-white  ">
                Contact <mark>Us</mark> 
                   
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

<!-- Portfolio Section - Start
================================================== -->
<section class="contact_section section_space bg-light">
          <div class="container">
            <div class="contact_info_box row">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="iconbox_block text-center">
                  <div class="iconbox_icon">
                    <img src="/assets/images/icons/icon_calling_2.svg" alt="Calling SVG Icon">
                  </div>
                  <div class="iconbox_content">
                    <h3 class="iconbox_title">Contact</h3><br>
                    <p class="mb-0">+91 93426 90684</p>
                    <!-- <div class="mb-0">+88(0) 555-01117</div> -->
                  </div>
                </div>
              </div>
              <div class="col-lg-5 col-md-6 col-sm-6">
                <div class="iconbox_block text-center">
                  <div class="iconbox_icon">
                    <img src="/assets/images/icons/icon_map_mark_2.svg" alt="Map Mark SVG Icon">
                  </div>
                  <div class="iconbox_content">
                    <h3 class="iconbox_title">Location</h3>
                    <p class="mb-0">
                    DoorNo F6,1st floor,Bhagya Complex,Priyadharshini Nagar Main Rd,Sithalapakkam,Chennai,Tamilnadu 600126.

                      
                    </p>
                    <!-- <div class="mb-0">+88(0) 555-01117</div> -->
                  </div>
                  <!-- <div class="iconbox_content">
                    <h3 class="iconbox_title">Location</h3>
                    <p class="mb-0">
                    Door No F6, 1st floor, Bhagya Complex, Priyadharshini Nagar Main Rd, Sithalapakkam, Chennai, Tamil Nadu 600126
                    </p>
                  </div> -->
                </div>
              </div>
          
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="iconbox_block text-center">
                  <div class="iconbox_icon">
                    <img src="/assets/images/icons/icon_mail_3.svg" alt="User Check SVG Icon">
                  </div>
                  <div class="iconbox_content">
                    <h3 class="iconbox_title">Email</h3><br>
                    <p class="mb-0">customersupport@bluggledigital.com</p>
               
                  </div>
                </div>
              </div>
              
            </div>

            <div class="section_space pb-0">
              <div class="row justify-content-lg-between">
                <div class="col-lg-7">
                  <div class="contact_form mb-0">
                    <h3 class="details_item_info_title mb-1">Send Us A Message</h3>
                    <!-- @if(session()->has('message'))
                      <div class="alert alert-success alert-dismissible fade show">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                          {{ session()->get('message') }}
                      </div>
                    @endif -->
                    @if(session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Sent Successfully!</strong>  {{ session()->get('message') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if(session()->has('error'))
                      <div class="alert alert-danger alert-dismissible fade show">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                          {{ session()->get('error') }}
                      </div>
                    @endif
                   <form action="contactform" method="post">
                    @csrf
                   <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="input_title" for="input_name">Full Name
                          </label>
                          <input id="input_name" class="form-control" type="text" name="name"  required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="input_title" for="input_email">Your Email
                          </label>
                          <input id="input_email" class="form-control" type="email" name="email"  required>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label class="input_title" for="input_phone">Your Phone</label>
                          <input id="input_phone" class="form-control" type="tel" name="phone" >
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="form-group">
                          <label class="input_title" for="input_textarea">Message</label>
                          <textarea id="input_textarea" class="form-control" name="message" placeholder="How can we help you?"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">
                          <span class="btn_label" data-text="Send Message">Send Message</span>
                          <span class="btn_icon">
                            <i class="fa-solid fa-arrow-up-right"></i>
                          </span>
                        </button>
                      </div>
                    </div>
                   </form>
                  
                  </div>
                </div>
                    <div class="col-lg-5">
                      <div class="gmap_canvas ps-lg-5">
                        <!-- <iframe src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe> -->
                          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.207739816715!2d80.17433397484007!3d12.894359487413933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5259c064b13ca1%3A0xa46c2c2e5389da3f!2sBluggle%20Groups!5e0!3m2!1sen!2sin!4v1716984775782!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
        </section>
<!-- Portfolio Section - End
================================================== -->

<!-- Call To Action Section - Start
================================================== -->
<!-- <section class="calltoaction_section parallaxie" style="background-image: url('/assets/images/backgrounds/bg_image_6.webp');">
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
</section> -->
<!-- Call To Action Section - End
================================================== -->

</main>
@endsection('content')