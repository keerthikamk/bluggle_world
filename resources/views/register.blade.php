
@extends('layouts.master')
@section('title','Enterprise Growth Advisors')
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
                Register <mark>to get link</mark> 
                   
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
<section class="contact_section pt-0 bg-light">
          <div class="container">
      

            <div class="section_space asd pt-5 pb-5">
              <div class="row  ">
                <div class="col-lg-12">
 
                  <div class="contact_form mb-0">
                    <h3 class="details_item_info_title mb-5 text-center ">Register</h3>
                    <div class="col-12">
                    @if(session()->has('message'))
                      <!-- <div class="alert alert-success alert-dismissible">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                          {{ session()->get('message') }}
                      </div> -->
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong> {{ session()->get('message') }}</strong> 
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                   @endif
                    @if(session()->has('error'))
                      <!-- <div class="alert alert-success alert-dismissible">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                          {{ session()->get('message') }}
                      </div> -->
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong> {{ session()->get('error') }}</strong> 
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                   @endif
                
                   @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    </div>
                  <form action="register" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="input_title" for="input_name">first Name
                          </label>
                          <input id="input_name" class="form-control" type="text" name="name"  required>
                        </div>
                  
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="input_title" for="input_name">last Name
                          </label>
                          <input id="input_name" class="form-control" type="text" name="lastname"  required>
                        </div>
                  
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="input_title" for="input_email">Your Email
                          </label>
                          <input id="input_email" class="form-control" type="email" name="email"  required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="input_title" for="input_phone">Your Phone</label>
                          <input id="input_phone" class="form-control" type="text" name="mobile" placeholder="eg:+91994421xxxx" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group " >
                          <label class="input_title" for="input_phone">Designation</label>
                          <!-- <input id="input_phone" class="form-control" type="" name="phone" placeholder="eg:+91994421xxxx" > -->
                           <select name="designation" id="" class="form-select" >
                           <option ></option>
                            <option >student</option>
                            <option >Working</option>
                           </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="input_title" for="input_phone">Slot Category </label>
                          <!-- <input id="input_phone" class="form-control" type="" name="phone" placeholder="eg:+91994421xxxx" > -->
                           <select name="slot" id="" class="form-select">
                           <option ></option>
                            <option >Presenter</option>
                            <option >Attendee</option>
                            
                           
                            
                           </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="input_title" for="input_phone">Referral Source  </label>
                          <!-- <input id="input_phone" class="form-control" type="" name="phone" placeholder="eg:+91994421xxxx" > -->
                           <select name="referal" id="" class="form-select">
                           <option ></option>
                            <option >Social Media</option>
                            <option >Website</option>
                            
                            <option >Email</option>
                            <option >Promotion site</option>
                            
                           </select>
                        </div>
                      </div>
                     
                      <div class="col-12">
                        <div class="form-group  ">
                         <li class="list">
                         <input type="checkbox" name="check" id="check" class="me-3" required>
                         <label class="bold" ><b>I agree to receive communications about this webinar and related content.</b></label>
                         </li>
                       
                        </div>
                        <div class="text-center">
                        <button type="submit" class="btn btn-primary">
                          <span class="btn_label" data-text="Next">Next</span>
                          <span class="btn_icon">
                            <i class="fa-solid fa-arrow-up-right"></i>
                          </span>
                        </button>
                        </div>
                     
                      </div>
                    </div>
                    </form>
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