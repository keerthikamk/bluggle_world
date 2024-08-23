
@extends('layouts.master')
@section('title','login')
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
                log<mark>in</mark> 
                   
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
<section class="contact_section pt-5 pb-5 bg-light">
          <div class="container">
            <div class=" pt-5 pb-0">
              <div class="row justify-content-center">
                <div class="col-lg-7">
                  <div class="contact_form mb-0">
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
                    <h3 class="details_item_info_title mb-4 text-center">Login</h3>

                    <form action="login" method="post">
                    @csrf
                    <div class="row">
                    
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="input_title" for="input_email">Your Email
                        </label>
                        <input id="input_email" class="form-control" type="email" name="email"  required>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label class="input_title" for="input_phone">Enter your Password</label>
                        <input id="input_phone" class="form-control" type="password" name="password" >
                      </div>
                    </div>
                    <div class="col-12 text-center">
                  
                      <button type="submit" class="btn btn-primary ">
                        <span class="btn_label" data-text="Login">Login</span>
                        <span class="btn_icon">
                          <i class="fa-solid fa-arrow-up-right"></i>
                        </span>
                      </button>
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

<!-- Call To Action Section - End
================================================== -->

</main>
@endsection('content')