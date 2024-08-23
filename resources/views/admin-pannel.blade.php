
@extends('layouts.master')
@section('title','Admin-Pannel')
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
               Admin<mark>Pannel</mark> 
                   
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
<section class="portfolio_section section_space bg-light">
  <div class="container">
  <div class="table-responsive">
  <table class="table bg-white">
  <thead class="table-dark">
  <tr>
      <th scope="col">S.no</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email Id</th>
      <th scope="col">Mobile NO</th>
      <th scope="col">Designation</th>
      <th scope="col">Slot Category </th>
      <th scope="col">Referral Source </th>
     
    </tr>
  </thead>
  <tbody>
                      @foreach($details as $key => $user)
											<tr>
											<td scope="col">{{++$key}}</td>
											<td scope="col">{{$user->name}}</td>
											<td scope="col">{{$user->lastname}}</td>
											<td scope="col">{{$user->email}}</td>
											<td scope="col">{{$user->mobile}}</td>
											<td scope="col">{{$user->designation}}</td>
											<td scope="col">{{$user->slot}}</td>
											<td scope="col">{{$user->referal}}</td>
										
											@endforeach
										</tr>
 
    

  </tbody>
</table>
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