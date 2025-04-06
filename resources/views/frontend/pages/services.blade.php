@extends('frontend.layouts.master')
@section('title', $seo->meta_title ?? "whizseed")
@section('meta_keywords', $seo->meta_keywords ?? "whizseed")
@section('meta_description', $seo->meta_description ?? "whizseed")
@push('customecss')

@endpush
@section('content')
<?php     
    $fino_url = url()->current();
    $fino_new_url_1 = str_replace('https://www.whizseed.com/services/','',$fino_url);
    $fino_new_url_2 = str_replace('https://www.whizseed.com/','',$fino_url);
    $fino_check_service=strpos($fino_url,"services");
    $fino_new_url_3 = ($fino_check_service>0?$fino_new_url_1:$fino_new_url_2);
?>
<!-- <section id="virtual-cfo" class="mt-n5 mb-5"> -->

<section id="'VCFO_consultant_form" class=" css-sprite-2-banner-bg w-100 ">
    <div class="container-fluid maindiv-to-service-page"  style="padding: 0px 10px;">
        <div class="row justify-content-center mt-2">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="breadcrum">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{getUrl($records->Subcategory->sub_page_no)}}">{{$records->Subcategory->name}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$records->name}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-2 pb-5">
            <div class="col-lg-6 col-md-6 col-sm-8 col-12">

            <!-- <div class="row mt-2 justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <p class="text-white"><span class="vcfo_heading1"></span>&nbsp;<span class="vcfo_herading1a">{!! $records->name !!}</span></p>
            </div>
            </div> -->
                {!! $records->small_description !!}
                    
                    <div class="row mt-1 justify-content-center virtual-CFO-Services1 pb-3 pt-3">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                      <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 info-aboutcomp">
                          <p>100000+</p>
                          <p class="info-aboutcomp-clr">Happy Customer</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 info-aboutcomp">
                          <p>100+</p>
                          <p class="info-aboutcomp-clr">CA & Lawyers</p>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 info-aboutcomp" style="border: none;">
                          <p>10+</p>
                          <p class="info-aboutcomp-clr">Offices</p>
                        </div>
                      </div>
                    </div>
                    </div>
                    <div class="row mt-3 justify-content-start">
                      <div class="owl-carousel owl-theme owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                           <div class="owl-stage" style="transform: translate3d(-1527px, 0px, 0px); transition: all 0.25s ease 0s; width: 3334px;">
                              <div class="owl-item" style="width: 128.906px; ">
                                 <div class="item">
                                    <div class='client-review-servie-header'>
                                       <div class='client-revier-img'>
                                          <img src="https://www.whizseed.com/frontend/assets/images1/aman-gupta.jpg" alt="Aman Gupta">
                                       </div>
                                       <div class='client-revier-para-servie-header'>
                                          <img src="https://www.whizseed.com/frontend/assets/images1/5star.png" alt="Aman Gupta">
                                          <p>WhizSeed made our company registration a breeze! Their expert guidance and efficient process saved us time and effort. Highly recommended for startups!</p>
                                          <p class="client-name-tag">- Aman Gupta</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="owl-item" style="width: 128.906px; ">
                                 <div class="item">
                                    <div class='client-review-servie-header'>
                                       <div class='client-revier-img'>
                                          <img src="https://www.whizseed.com/frontend/assets/images1/akash-yadav.jpg" alt="Akash Yadav">
                                       </div>
                                       <div class='client-revier-para-servie-header'>
                                          <img src="https://www.whizseed.com/frontend/assets/images1/5star.png" alt="Akash Yadav">
                                          <p>Choosing WhizSeed for our NBFC needs was a game-changer. Their in-depth knowledge and personalized solutions ensured a smooth and compliant operation.</p>
                                          <p class="client-name-tag">- Akash Yadav</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="owl-item" style="width: 128.906px; ">
                                 <div class="item">
                                    <div class='client-review-servie-header'>
                                       <div class='client-revier-img'>
                                          <img src="https://www.whizseed.com/frontend/assets/images1/sonam-malhotra.jpg" alt="Sonam Malhotra">
                                       </div>
                                       <div class='client-revier-para-servie-header'>
                                          <img src="https://www.whizseed.com/frontend/assets/images1/5star.png" alt="Sonam Malhotra">
                                          <p>WhizSeed's compliance services have been a lifesaver for our business. They keep us on the right side of the law, allowing us to focus on growth with confidence.</p>
                                          <p class="client-name-tag">-	Sonam Malhotra</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="owl-nav disabled">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="google-rated-header">
                    <p><img src="https://www.whizseed.com/frontend/assets/images1/google-rated.png" alt="google Rated">Rated at 4.9 By 50000 + Customers Globally</p>
                  </div>
            </div>
            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 mt-5 mb-5 pb-3">
                <div class="çard">
                    <div class="form1_bg" id="form1_bg"></div>
                    <div class="card-body" id="form1_card">
                            @if ($records->price>0)
                            <h2 class="text-center mt-3 consultation-By"><strong style="color: #37609b;">Consultation By Expert</strong></h2>
                            @endif
                            <h2 class="text-center mt-3 consultation-By"><strong style="color: #37609b;">Consultation By Expert</strong></h2>
                            @if ($records->price==0)
                            @endif
                            <form action="{{route('saveenquiry')}}" method="POST" class="gen_query1" id="enquiry_form_1">
                            @csrf
                            <div class="row justify-content-center">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 form-group mt-3">
                                    <!-- <strong>Name*</strong> -->
                                    <input type="text" name="name" class="form-control" placeholder="Name*" id="name_1">                                        
                                        <span class="text-danger" id="names">
                                            @error('name')
                                            {{$message}}
                                            @enderror
                                        </span>
                                        <span id="msg_name" class="text-danger"></span>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 form-group mt-1">
                                    <!-- <strong>Email*</strong> -->
                                    <input type="email" name="email" id="email_1" class="form-control" placeholder="Email Address*" required>
                                    <span class="text-danger" id="emails">
                                        @error('email')
                                        {{$message}}
                                        @enderror
                                    </span>
                                    <span id="msg_email" class="text-danger"></span>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 form-group mt-1">
                                    <!-- <strong>Mobile Number*</strong> -->
                                    <div class="countrycode-and-input">
                                      <div class="country_code form-control">+91 <img src="https://www.whizseed.com/frontend/assets/images1/tringa.png" alt="tringa"></div>
                                      <input type="text" name="mobile" id="mobile_1" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" class="form-control countrycode-input" placeholder="Mobile Number*" minlength="10" maxlength="10" required>
                                    </div>
                                    <span class="text-danger" id="mobiles">
                                        @error('mobile')
                                        {{$message}}
                                        @enderror
                                    </span>
                                    <span id="msg_mobile" class="text-danger"></span>
                                </div>
                                <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-12 form-group mt-1"> -->
                                    <!-- <strong>Email*</strong> -->
                                    <!-- <input type="email" name="email" id="email_1" class="form-control" placeholder="Email*" required>
                                    <span class="text-danger" id="emails">
                                        @error('email')
                                        {{$message}}
                                        @enderror
                                    </span>
                                    <span id="msg_email" class="text-danger"></span>
                                </div> -->
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 form-group state_id1 mt-1">
                                    <!-- <strong>State*</strong> -->
                                    <select class="form-control" name="state_id" id="state_id_1">
                                        <option value="">Select State*</option>
                                        <option value="1">Andaman & Nicobar Islands</option>
                                        <option value="2">Andhra Pradesh</option>
                                        <option value="3">Arunachal Pradesh</option>
                                        <option value="4">Assam</option>
                                        <option value="5">Bihar</option>
                                        <option value="7">Chhattisgarh</option>
                                        <option value="8">Dadra & Nagar Haveli</option>
                                        <option value="9">Daman & Diu</option>
                                        <option value="10">Delhi</option>
                                        <option value="11">Goa</option>
                                        <option value="12">Gujarat</option>
                                        <option value="13">Haryana</option>
                                        <option value="14">Himachal Pradesh</option>
                                        <option value="15">Jammu & Kashmir</option>
                                        <option value="16">Jharkhand</option>
                                        <option value="17">Karnataka</option>
                                        <option value="18">Kerala</option>
                                        <option value="19">Lakshadweep</option>
                                        <option value="20">Madhya Pradesh</option>
                                        <option value="21">Maharashtra</option>
                                        <option value="22">Manipur</option>
                                        <option value="23">Meghalaya</option>
                                        <option value="24">Mizoram</option>
                                        <option value="25">Nagaland</option>
                                        <option value="26">Odisha</option>
                                        <option value="27">Puducherry</option>
                                        <option value="28">Punjab</option>
                                        <option value="29">Rajasthan</option>
                                        <option value="30">Sikkim</option>
                                        <option value="31">Tamil Nadu</option>
                                        <option value="32">Telangana</option>
                                        <option value="33">Tripura</option>
                                        <option value="34">Uttar Pradesh</option>
                                        <option value="35">Uttarakhand</option>
                                        <option value="36">West Bengal</option>
                                    </select>
                                    <span class="text-danger" id="state_ids">
                                        @error('state_id')
                                        {{$message}}
                                        @enderror
                                    </span>
                                    <span id="msg_state" class="text-danger"></span>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 main-price-tag">
                                    <!--@if ($records->price>0)-->
                                    <!--<p><span class="font-weight-bold" style="font-size:40px;">&#8377;{!! $records->price !!}</span>&nbsp;&nbsp; <del class="text-success font-weight-bold" style="font-size: 25px;">&#8377;{!! $records->mrp_price !!}</del> &nbsp;&nbsp;<span class="text-secondary">(All inclusive)</span></p>-->
                                    <!--<p class="text-secondary float-left">*Limited time period only.</p>-->
                                    <!--@endif-->
                                    @if ($records->price>0)
                                    <p class="main-form-price">&#8377;{!! $records->price !!} <span class="del-price">&#8377;{!! $records->mrp_price !!} <span class="main-price-text">(All inclusive)*</span> </span></p>
                                    <p class="main-price-text1">Limited time period only.</p>
                                    @endif
                                </div>
                                <input type="hidden" name="service_slug" id="service_slug" value="{{$fino_new_url_3}}" />
                                <input type="hidden" name="path" id="path" value="{{$fino_url}}">
                                <input type="hidden" name="uad" value="{{base64_encode($_SERVER['REMOTE_ADDR'])}}">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12 form-group mt-3">
                                    <button type="submit" class="btn-darkprimary btn-block vcfo_consultation_form" id="servicebtnM1">GET STARTED NOW</button>
                                </div>

                                 <div class="col-lg-12 form-group mb-0">
                                    <p>We’ll never share your details with third parties. we won’t spam you</p>
                                </div> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-1"></div> -->
        </div>
    </div>
    <div class="container-fluid follow-step-main-div">
      <div class="follow-step">
        <div class="row">
          <div class="col-lg-7 col-md-7 col-sm-12">
            <div class="row">
            {!! $records->description !!}
            </div>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12">
              <div class="row">
                <div class="col-12">
                  <div class="card-body" id="call_now_div">
                    <div class="row justify-content-center">
                       <div class="col-lg-3 col-md-3 col-sm-3 col-3">
                          <img src="https://www.whizseed.com/frontend/assets/images1/khusi-girl.jpeg" class="rounded-circle img-fluid call_girl" alt="khusi">
                       </div>
                       <div class="col-lg-9 col-md-9 col-sm-9 col-9">
                          <center class="call_girl">
                             <p class="mt-2 text-white finfonth">
                             {{ !empty($records->caller_name) ? $records->caller_name : '' }} &nbsp;&nbsp;<span class="badge badge-success" style="padding: 3px 17px; font-size: 15px;">Online</span>
                             </p>
                             <!-- <i class="fa fa-circle text-success"> -->
                             <p class="mt-n3 text-white text-capitalize finfonth">{{ !empty($records->caller_description) ? $records->caller_description : '' }}</p>
                             <div class="stars_Font">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <span class="text-white">(4.9)</span>
                             </div>
                          </center>
                       </div>
                    </div>
                    <div class="row justify-content-center mt-4 mb-5">
                       <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                          <a target="_blank" href="tel:{{ !empty($records->free_consultation_desc) ? $records->free_consultation_desc : '' }}" class="call-girl-button btn-block" id=""><span id="text_call_now">Call Now</span><img src="https://www.whizseed.com/frontend/assets/images1/call-girl-wh.png" alt="Call us">
                          </a>
                       </div>
                       <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <a target="_blank" href="https://api.whatsapp.com/send?phone=9625432342&text=Hi" class="call-girl-button btn-block" id=""><span id="text_call_now">Chat With Us</span><img src="https://www.whizseed.com/frontend/assets/images1/whatsapp-wh.png" alt="whatsapp">
                        </a>
                     </div>
                    </div>
                 </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
</section>
<section class="service-page mt-4" id="overview_section" class="mt-2 mb-2">
    <div class="container-fluid">
        <div class="">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="service-content row">
                    <div class="col-lg-8 col-md-7 col-sm-12 col-12 overview_large">
                    {!! $records->long_description !!}
                    {!! $records->too_long_description !!}  
                    </div>
                    <!-- <div class="col-lg-1"></div> -->
                    <div class="col-lg-4 col-md-5 col-sm-12 col-12 overview_small">
                        <div class="formarea fixedform">
                            <div class="card shadow11"  id="consult_bottom_card" style="padding-bottom: 20px;">
                                <div class="card-body bg-white">
                                    
                                    <h2 class="text-center mt-3 consultation-By"><strong style="color: #37609b;">Consultation By Expert</strong></h2>
                                    <form action="{{url('saveenquiry')}}" method="POST" class="gen_query2" id="enquiry_form_2">
                                        @csrf
                                        <div class="row" style="margin-top: -16px;">
                                            <div class="col-lg-12 col-sm-12 form-group mt-4">
                                                <!-- <strong>Name*</strong> -->
                                                <input type="text" name="name" id="name_2" class="form-control" placeholder="Name*" required>
                                                <span id="msg_name_2" class="text-danger"></span>
                                            </div>
                                            <div class="col-lg-12 col-sm-12 form-group">
                                                <!-- <strong>Email*</strong> -->
                                                <input type="email" name="email" id="email_2" value="" class="form-control"
                                                    placeholder="Email*" required>
                                                    <span id="msg_email_2" class="text-danger"></span>
                                            </div>
                                            <div class="col-lg-12 col-sm-12 form-group">
                                                <!-- <strong>Mobile Number*</strong> -->
                                                <div class="countrycode-and-input">
                                                  <div class="country_code form-control">+91 <img src="https://www.whizseed.com/frontend/assets/images1/tringa.png" alt="tringa"></div>
                                                    <input type="text" name="mobile" id="mobile_2" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" class="countrycode-input form-control" placeholder="Mobile*" required minlength="10" maxlength="10">
                                                </div>
                                                <span id="msg_mobile_2" class="text-danger"></span>
                                            </div>
                                            <!-- <div class="col-lg-12 col-sm-12 form-group"> -->
                                                <!-- <strong>Email*</strong> -->
                                                <!-- <input type="email" name="email" id="email_2" value="" class="form-control"
                                                    placeholder="Email*" required>
                                                    <span id="msg_email_2" class="text-danger"></span>
                                            </div> -->
                                            <div class="col-lg-12 col-sm-12 form-group state_id1">
                                                <!-- <strong>State*</strong> -->
                                                <select class="form-control" name="state_id" class="" id="state_id_2" required>
                                                    <option value="">Select State*</option>
                                                    <option value="1">Andaman & Nicobar Islands</option>
                                                    <option value="2">Andhra Pradesh</option>
                                                    <option value="3">Arunachal Pradesh</option>
                                                    <option value="4">Assam</option>
                                                    <option value="5">Bihar</option>
                                                    <option value="7">Chhattisgarh</option>
                                                    <option value="8">Dadra & Nagar Haveli</option>
                                                    <option value="9">Daman & Diu</option>
                                                    <option value="10">Delhi</option>
                                                    <option value="11">Goa</option>
                                                    <option value="12">Gujarat</option>
                                                    <option value="13">Haryana</option>
                                                    <option value="14">Himachal Pradesh</option>
                                                    <option value="15">Jammu & Kashmir</option>
                                                    <option value="16">Jharkhand</option>
                                                    <option value="17">Karnataka</option>
                                                    <option value="18">Kerala</option>
                                                    <option value="19">Lakshadweep</option>
                                                    <option value="20">Madhya Pradesh</option>
                                                    <option value="21">Maharashtra</option>
                                                    <option value="22">Manipur</option>
                                                    <option value="23">Meghalaya</option>
                                                    <option value="24">Mizoram</option>
                                                    <option value="25">Nagaland</option>
                                                    <option value="26">Odisha</option>
                                                    <option value="27">Puducherry</option>
                                                    <option value="28">Punjab</option>
                                                    <option value="29">Rajasthan</option>
                                                    <option value="30">Sikkim</option>
                                                    <option value="31">Tamil Nadu</option>
                                                    <option value="32">Telangana</option>
                                                    <option value="33">Tripura</option>
                                                    <option value="34">Uttar Pradesh</option>
                                                    <option value="35">Uttarakhand</option>
                                                    <option value="36">West Bengal</option>
                                                </select>
                                                <span id="msg_state_id_2" class="text-danger"></span>
                                            </div>
                                            <div class="form-group mt-2 mb-0">
                                                <!--@if ($records->price>0)-->
                                                <!--<p class="ml-3"><span class="font-weight-bold" style="font-size:30px;">&#8377;{!! $records->price !!}</span>&nbsp;&nbsp; <del class="text-success font-weight-bold" style="font-size: 12px;">&#8377;{!! $records->mrp_price !!}</del> &nbsp;&nbsp;<span class="text-secondary">(All inclusive)</span></p>-->
                                                <!--<p class="text-secondary float-left ml-3">*Limited time period only.</p>-->
                                                <!--@endif-->
                                                @if ($records->price>0)
                                                <p class="side-form-price">&#8377;{!! $records->price !!} <span class="side-form-del-price"> &#8377;{!! $records->mrp_price !!} </span><span class="side-form-price-text"> (All inclusive)* </span></p>
                                                <p class="side-form-price-text1">Limited time period only.</p>
                                                @endif
                                            </div>
                                            <input type="hidden" name="service_slug" value="{{$fino_new_url_3}}" />
                                            <input type="hidden" name="path" value="{{$fino_url}}">
                                            <input type="hidden" name="uad" value="{{base64_encode($_SERVER['REMOTE_ADDR'])}}">
                                            <div class="col-lg-12 form-group mt-3">
                                                <button type="submit" class="btn btn-darkprimary btn-block" id="servicebtnM" value="Submit">GET STARTED NOW</button>
                                            </div>
                                            <div class="col-lg-12 form-group mb-0">
                                                <p class="text-center">We’ll never share your details with third parties. we won’t spam you</p>
                                            </div> 
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="blog-section-wh" style="display:none;">
  <div class="container-fluid">
    <h2>Latest Posts</h2>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="blog-body-content">
          <img class="blog-body-content-img" src="https://www.whizseed.com/frontend/assets/images1/Rectangle.png" alt="Rectangle">
          <h3>Recovery of shares from IEPF no longer..</h3>
          <p>The Central Government had established the IEPF (Investor Education and Protection Fund) a few ye..</p>
          <div class="blog-bottom-btn-date">
            <button>Know More<span><img class="btnarroeimage" src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png" alt="btnarrow"></span> </button>
            <p><span><img class="clendericonimage" src="https://www.whizseed.com/frontend/assets/images1/clendericon.png" alt="clendericon"></span>February 07, 2023</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="blog-body-content">
          <img class="blog-body-content-img" src="https://www.whizseed.com/frontend/assets/images1/blog-2.png" alt="Rectangle">
          <h3>Recovery of shares from IEPF no longer..</h3>
          <p>The Central Government had established the IEPF (Investor Education and Protection Fund) a few ye..</p>
          <div class="blog-bottom-btn-date">
            <button>Know More<span><img class="btnarroeimage" src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png" alt="btnarrow"></span> </button>
            <p><span><img class="clendericonimage" src="https://www.whizseed.com/frontend/assets/images1/clendericon.png" alt="clendericon"></span>February 07, 2023</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="blog-body-content">
          <img class="blog-body-content-img" src="https://www.whizseed.com/frontend/assets/images1/blog-3.png" alt="Rectangle">
          <h3>Recovery of shares from IEPF no longer..</h3>
          <p>The Central Government had established the IEPF (Investor Education and Protection Fund) a few ye..</p>
          <div class="blog-bottom-btn-date">
            <button>Know More<span><img class="btnarroeimage" src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png" alt="btnarrow"></span> </button>
            <p><span><img class="clendericonimage" src="https://www.whizseed.com/frontend/assets/images1/clendericon.png" alt="clendericon"></span>February 07, 2023</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- <section class="client-slider-section mt-5 mb-5">
  <div class="container-fluid">
    <h2>Our Trusted Clients</h2>
      <div class="client-logo-div">
        <img src="https://www.whizseed.com/frontend/assets/images1/cmplogo.png" alt="whizseed">
      </div>
  </div>
</section>-->
<div class="modal fade" id="assistance_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4>Get a Call back from us</h4>
                <form action="{{route('saveenquiry')}}" method="POST" class="gen_query3" id="enquiry_form_3">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="email" id="email_sh" class="form-control" placeholder="Email*" required>
                        <span id="msg_email_sh" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" name="mobile" id="mobile_sh" class="form-control" placeholder="Mobile*" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');" minlength="10" maxlength="10">
                        <span id="msg_mobile_sh" class="text-danger"></span>
                    </div>
                    <input type="hidden" name="service_slug" id="service_slug_sh" value="{{$fino_new_url_3}}" />
                    <input type="hidden" name="path" value="{{$fino_url}}">
                    <input type="hidden" name="uad" value="{{base64_encode($_SERVER['REMOTE_ADDR'])}}">
                    <div class="form-group">
                        <button type="submit" class="btn btn-info" value="Submit" id="submit_sh">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>

<section class="testimoinal-section  mt-5 pt-5 mb-5" style="display:none;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-5 col-md-5 col-sm-12 reviewer">
        <h2>Here’s what our amazing clients are saying</h2>
      </div>
      <div class="col-lg-7 col-md-7 col-sm-12" style=" margin: auto 0px; ">
        
        <div class="owl-carousel owl-theme owl-loaded owl-drag">
            
               <div class="owl-stage-outer">
                 
                 <div class="owl-stage" style="transform: translate3d(-1527px, 0px, 0px); transition: all 0.25s ease 0s; width: 3334px;">
                   
                   <div class="owl-item" style="width: 128.906px; margin-right: 10px;"><div class="item testimonial-item0bottom">
                      <div class='client-revier-main'>
                        <div class='client-revier-img-service-ft'>
                          <img src="https://www.whizseed.com/frontend/assets/images1/girl.png" alt="Sarbvir-Singh">
                        </div>
                        <div class='client-revier-para'>
                          <img src="https://www.whizseed.com/frontend/assets/images1/commma.png" alt="Sarbvir-Singh">
                          <p>Regulation made our company registration a breeze! Their expert guidance and efficient process saved us time and effort. Highly recommended for startups!</p>
                          <p class="client-name-tag">-	Namita Kapoor</p>
                        </div>
                      </div>
                    </div>
                 </div>
                 
                 <div class="owl-item" style="width: 128.906px; margin-right: 10px;"><div class="item testimonial-item0bottom">
                      <div class='client-revier-main'>
                        <div class='client-revier-img-service-ft'>
                          <img src="https://www.whizseed.com/frontend/assets/images1/girl.png" alt="Sarbvir-Singh">
                        </div>
                        <div class='client-revier-para'>
                          <img src="https://www.whizseed.com/frontend/assets/images1/commma.png" alt="Sarbvir-Singh">
                          <p>Choosing Regulation for our NBFC needs was a game-changer. Their in-depth knowledge and personalized solutions ensured a smooth and compliant operation.</p>
                          <p class="client-name-tag">-	Akash Yadav</p>
                        </div>
                      </div>
                    </div>
                 </div>
                 <div class="owl-item" style="width: 128.906px; margin-right: 10px;"><div class="item testimonial-item0bottom">
                      <div class='client-revier-main'>
                        <div class='client-revier-img-service-ft'>
                          <img src="https://www.whizseed.com/frontend/assets/images1/girl.png" alt="Sarbvir-Singh">
                        </div>
                        <div class='client-revier-para'>
                          <img src="https://www.whizseed.com/frontend/assets/images1/commma.png" alt="Sarbvir-Singh">
                          <p>Regulation's compliance services have been a lifesaver for our business. They keep us on the right side of the law, allowing us to focus on growth with confidence.</p>
                          <p class="client-name-tag">-	Sonam Malhotra</p>
                        </div>
                      </div>
                    </div>
                 </div>
                   
                </div>
                <div class="owl-nav disabled">
          </div>
        </div>
      
      </div>
    </div>
  </div>
</section>
@endsection


