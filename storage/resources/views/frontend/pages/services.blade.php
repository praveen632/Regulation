@extends('frontend.layouts.master')
@section('title', $records->meta_title)
@section('meta_keywords', $records->meta_keywords)
@section('meta_description', $records->meta_description)
@push('customecss') 
<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/custome.css')}}">
@endpush
@section('content')
<?php 
$current_url = $_SERVER['SCRIPT_URI'];
$new_url = str_replace("/"," ",$current_url);
$pieces = explode(' ', $new_url);
$current_slug = array_pop($pieces);
//echo $current_slug;
// echo "<pre>";
// print_r ($records);
// echo "</pre>";
?>
<section id="virtual-cfo" class="mt-n5 mb-5">

<section id="'VCFO_consultant_form" class="mt-5 css-sprite-2-banner-bg w-100">
	<div class="container">
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

		<div class="row justify-content-center mt-2">
			<div class="col-lg-7 col-md-7 col-sm-7 col-12">
				{!! $records->description !!}
			</div>
			<div class="col-lg-5 col-md-5 col-sm-12 col-12 mt-5 mb-5">
				<div class="çard">
					<div class="form1_bg" id="form1_bg"></div>
					<div class="card-body" id="form1_card">
						<center>
							@if ($records->price>0)
							<h2 class="text-center mt-3"><strong style="color: #37609b;">Consultation By Expert</strong></h2>
                            @endif
                            @if ($records->price==0)
							<h2 class="text-default mt-3"><strong style="color: #37609b;">{!! $records->free_consultation_desc !!}</strong></h2>
							@endif
							@if (session()->has('message'))
							    <div class="alert alert-success">{{ session()->get('message') }}</div>
							@endif

						</center>
						<form action="{{url('/')}}/saveenquiry" method="POST">
							@csrf
							<div class="row justify-content-center">
								<div class="col-lg-12 col-md-12 col-sm-12 col-12 form-group mt-3">
									<!-- <strong>Name*</strong> -->
									<input type="text" name="name" value="" class="form-control"
										placeholder="Name*" required>
										
										<span class="text-danger">
						                    @error('name')
						                    {{$message}}
						                    @enderror
						                </span>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-12 form-group mt-1">
									<!-- <strong>Mobile Number*</strong> -->
									<input type="text" name="mobile" value="" maxlength="10"
										class="form-control" placeholder="Mobile*" required>
									<span class="text-danger">
					                    @error('mobile')
					                    {{$message}}
					                    @enderror
					                </span>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-12 form-group mt-1">
									<!-- <strong>Email*</strong> -->
									<input type="email" name="email" value="" class="form-control"
										placeholder="Email*" required>
									<span class="text-danger">
					                    @error('email')
					                    {{$message}}
					                    @enderror
					                </span>
								</div>
								<div class="col-lg-12 col-md-12 col-sm-12 col-12 form-group  mt-1">
									<!-- <strong>State*</strong> -->
									<select class="form-control" name=state_id id=state_id required>
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
									<span class="text-danger">
					                    @error('state_id')
					                    {{$message}}
					                    @enderror
					                </span>
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
								<input type="hidden" name="service_slug" value="{{$current_slug}}" />
								<input type="hidden" name="path" value="{{$current_url}}">
								<div class="col-lg-12 col-md-12 col-sm-12 col-12 form-group mt-3">
									<input type="submit"
										class="btn btn-darkprimary btn-block vcfo_consultation_form"
										id="servicebtnM" value="Submit" id="servicebtnM">
								</div>

								 <div class="col-lg-12 form-group mb-0">
									<p>Need to speak to an expert? <a href="#" data-toggle="modal" data-target="#assistance_modal">Get Free Consultation</a></p>
								</div> 
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	
</script>
<section class="mb-5" id="talk_to_an_export">
    <div class="container">
    	<div class="row justify-content-center">
    		<center>
    		{!! $records->short_description !!}
    		</center>
    		<div class="col-lg-12 col-md-12 col-sm-12 col-12 mt-5 finofontp">
    			<div class="row">
    				<div class="col-lg-7 col-md-7 col-sm-7 col-12">
    				{!! $records->talk_to_expert_description !!}
    				</div>
    				<div class="col-lg-5 col-md-5 col-sm-5 col-12">
    					<div class="row justify-content-center">
    						<div class="col-lg-12 col-md-12 col-sm-12 col-12">
    							<div class="çard shadow">
    								<img src="https://complianceclock.com/public/frontend/assets/ui/card-img.svg" id="image_avatar"
    									class="img-fluid">
    								<div class="card-body" id="call_now_div">
    									<div class="row justify-content-center">
    										<div class="col-lg-3 col-md-3 col-sm-3 col-3">
    											<img src="https://complianceclock.com/public/frontend/assets/ui/card-pic.jpg"
    												class="rounded-circle img-fluid call_girl" alt="card-pic.jpg">
    										</div>
    										<div class="col-lg-9 col-md-9 col-sm-9 col-9">
    											<center class="call_girl">
    												<p class="mt-2 text-white finfonth">
    												{!! $records->caller_name !!} &nbsp;&nbsp;&nbsp;<i
    														class="fa fa-circle text-success"></i>&nbsp;Online
    												</p>
    												<p class="mt-n3 text-white text-capitalize finfonth">{!! $records->caller_description !!}</p>
    											</center>
    										</div>
    									</div>
    									<div class="row justify-content-end">
    										<div class="col-lg-10 col-md-10 col-sm-10 col-10">
    											<center>
    												<div class="stars_Font">
    													<i class="fa fa-star text-warning"></i>
    													<i class="fa fa-star text-warning"></i>
    													<i class="fa fa-star text-warning"></i>
    													<i class="fa fa-star text-warning"></i>
    													<i class="fa fa-star text-warning"></i>
    													<span class="badge badge-startinfo finfonth">4.7</span>
    												</div>
    
    											</center>
    										</div>
    									</div>
    									<div class="row justify-content-center mt-4 mb-5">
    										<div class="col-lg-6 col-md-6 col-sm-6 col-6">
    											<a href="tel:+91 88105 49414"
    												class="btn btn-chatblue btn-sm btn-block finfonth call_girl_btn" id="call_now_btn"
    												><span id="text_call_now">Call
    													Now</span>
    												</a>
    										</div>
    										<div class="col-lg-6 col-md-6 col-sm-6 col-6">
    											<a href="http://wa.link/v4hygf" target="_blank"
    												class="btn btn-chatgreen btn-sm btn-block finfonth call_girl_btn" id="chat_now_btn"
    												><span id="text_chat_now">Chat
    													Now</span></a>
    										</div>
    									</div>
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
<section id="video_testimonial" class="mb-5">
	<div class="container">
		<div class="row justify-content-center">
		{!! $records->testmonial_description !!}
			<div class="col-lg-12 col-md-12 col-12 mt-5 finofontp">
				<div id="demo" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ul class="carousel-indicators">
						<li data-target="#demo" data-slide-to="0" class="active"></li>
						<li data-target="#demo" data-slide-to="1"></li>
						<li data-target="#demo" data-slide-to="2"></li>
					</ul>

					<!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="row justify-content-center">
								<div class="col-lg-4 col-md-4 col-12">
									<div class="card">
										<div class="embed-responsive embed-responsive-21by9" id="youtube_frame"
											>
											<iframe width="885" height="600"
												src="https://www.youtube.com/embed/QfvYLdppYFA"
												title="StartupFino Virtual CFO Service Testimonial (Avinash Founder of Shararat)"
												frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
												allowfullscreen></iframe>
										</div>
										<div class="row justify-content-center mt-2">
											<div class="col-lg-6 col-md-6 col-12">
												<div class="row justify-content-center">
													<div class="col-12">
														<p class="ml-2 font-weight-bold vt-heading">Avinash
															Sharma</p>
														<p class="ml-2 text-secondary mt-n3" id="founder_name"
															>Founder Shararat</p>
													</div>
												</div>

											</div>
											<div class="col-lg-6 col-md-6 col-12">
												<div class="row justify-content-center">
													<div class="col-12">
														<img src="https://complianceclock.com/public/frontend/assets/ui/shararat-logo.svg"
															width="100" class="img-fluid float-right mr-2">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-12">
									<div class="card">
										<div class="embed-responsive embed-responsive-21by9"
											id="youtube_frame2">
											<iframe width="853" height="480"
												src="https://www.youtube.com/embed/ytuOBfnaRQg"
												title="StartupFino Virtual CFO Service Testimonial (Praneeth Founder of VeGrow)"
												frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
												allowfullscreen></iframe>
										</div>
										<div class="row justify-content-center mt-2">
											<div class="col-lg-6 col-md-6 col-12">
												<div class="row justify-content-center">
													<div class="col-12">
														<p class="ml-2 font-weight-bold vt-heading">Praneeth</p>
														<p class="ml-2 text-secondary mt-n3"
															id="founder_name2">Founder VeGrow</p>
													</div>
												</div>

											</div>
											<div class="col-lg-6 col-md-6 col-12">
												<div class="row justify-content-center">
													<div class="col-12">
														<img src="https://complianceclock.com/public/frontend/assets/ui/5-vigrow-logo.svg"
															width="100" class="img-fluid float-right mr-2">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-12">
									<div class="card">
										<div class="embed-responsive embed-responsive-21by9"
											id="youtube_frame3">
											<iframe width="885" height="498"
												src="https://www.youtube.com/embed/zyXBHHiWX9I"
												title="StartupFino Virtual CFO Service Testimonial (Finance Head of Gromo)"
												frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
												allowfullscreen></iframe>
										</div>
										<div class="row justify-content-center mt-2">
											<div class="col-lg-6 col-md-6 col-12">
												<div class="row justify-content-center">
													<div class="col-12">
														<p class="ml-2 font-weight-bold vt-heading">Raj Arya</p>
														<p class="ml-2 text-secondary mt-n3"
															id="founder_name3">Finance Head Gromo</p>
													</div>
												</div>
											</div>
											<div class="col-lg-6 col-md-6 col-12">
												<div class="row justify-content-center">
													<div class="col-12">
														<img src="https://complianceclock.com/public/frontend/assets/ui/3-Gromo-logo.svg"
															width="100" class="img-fluid float-right mr-2">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row justify-content-center">
								<div class="col-lg-4 col-md-4 col-12">
									<div class="card">
										<div class="embed-responsive embed-responsive-21by9"
											id="youtube_frame4">
											<iframe width="885" height="498"
												src="https://www.youtube.com/embed/0_hd41NJEnw"
												title="StartupFino Virtual CFO Service Testimonial (Saurabh Founder of DukaanSe!) #virtualcfo, #startupfino"
												frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
												allowfullscreen></iframe>
										</div>
										<div class="row justify-content-center mt-2">
											<div class="col-lg-6 col-md-6 col-12">
												<div class="row justify-content-center">

													<div class="col-12">
														<p class="ml-2 font-weight-bold vt-heading">Saurabh</p>
														<p class="ml-2 text-secondary mt-n3"
															id="founder_name4">Founder DukaanSe</p>
													</div>
												</div>

											</div>
											<div class="col-lg-6 col-md-6 col-12">
												<div class="row justify-content-center">
													<div class="col-12">
														<img src="https://complianceclock.com/public/frontend/assets/ui/6-Dukaanse-logo.svg"
															alt="6-Dukaanse-logo" width="100" height="40"
															class="float-right mr-2">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-12">
									<div class="card">
										<div class="embed-responsive embed-responsive-21by9"
											id="youtube_frame5">
											<iframe width="942" height="530"
												src="https://www.youtube.com/embed/Rh6AMre-fKI"
												title="StartupFino Virtual CFO Service Testimonial (Ashish Founder of GagaHealth) #virtualcfo, #startupfino"
												frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
												allowfullscreen></iframe>
										</div>
										<div class="row justify-content-center mt-2">
											<div class="col-lg-6 col-md-6 col-12">
												<div class="row justify-content-center">
													<div class="col-12">
														<p class="ml-2 font-weight-bold vt-heading">Ashish</p>
														<p class="ml-2 text-secondary mt-n3"
															id="founder_name5">Founder GagaHealth</p>
													</div>
												</div>

											</div>
											<div class="col-lg-6 col-md-6 col-12">
												<div class="row justify-content-center">
													<div class="col-12">
														<img src="https://complianceclock.com/public/frontend/assets/ui/babynama_logo.svg"
															alt="babynama_logo" width="100" height="40"
															class="float-right mr-2">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-12">
									<div class="card">
										<div class="embed-responsive embed-responsive-21by9"
											id="youtube_frame6">

											<iframe width="942" height="530"
												src="https://www.youtube.com/embed/gcPQZKd9zx4"
												title="StartupFino Virtual CFO Service Testimonial (Pratishita Founder of InfiMedia)#startupfino, #VCFO"
												frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
												allowfullscreen></iframe>
										</div>
										<div class="row justify-content-center mt-2">
											<div class="col-lg-6 col-md-6 col-12">
												<div class="row justify-content-center">
													<div class="col-12">
														<p class="ml-2 font-weight-bold vt-heading">Pratishita
														</p>
														<p class="ml-2 text-secondary mt-n3"
															id="founder_name6">Founder InfiMedia</p>
													</div>
												</div>

											</div>
											<div class="col-lg-6 col-md-6 col-12">
												<div class="row justify-content-center">
													<div class="col-12">
														<img src="https://complianceclock.com/public/frontend/assets/ui/8-inFi-media-logo.svg"
															alt="8-inFi-media-logo" width="100" height="40"
															class="float-right mr-2">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row justify-content-center">
								<div class="col-lg-4 col-md-4 col-12">
									<div class="card">
										<div class="embed-responsive embed-responsive-21by9"
											id="youtube_frame7">
											<iframe width="885" height="600"
												src="https://www.youtube.com/embed/QfvYLdppYFA"
												title="StartupFino Virtual CFO Service Testimonial (Avinash Founder of Shararat)"
												frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
												allowfullscreen></iframe>
										</div>
										<div class="row justify-content-center mt-2">
											<div class="col-lg-6 col-md-6 col-12">
												<div class="row justify-content-center">
													<div class="col-12">
														<p class="ml-2 font-weight-bold vt-heading">Avinash
															Sharma</p>
														<p class="ml-2 text-secondary mt-n3"
															id="founder_name7">Founder Shararat</p>
													</div>
												</div>

											</div>
											<div class="col-lg-6 col-md-6 col-12">
												<div class="row justify-content-center">
													<div class="col-12">
														<img src="https://complianceclock.com/public/frontend/assets/ui/shararat-logo.svg"
															width="100" height="40" class="float-right mr-2">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-12">
									<div class="card">
										<div class="embed-responsive embed-responsive-21by9"
											id="youtube_frame8">
											<iframe width="853" height="480"
												src="https://www.youtube.com/embed/ytuOBfnaRQg"
												title="StartupFino Virtual CFO Service Testimonial (Praneeth Founder of VeGrow)"
												frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
												allowfullscreen></iframe>
										</div>
										<div class="row justify-content-center mt-2">
											<div class="col-lg-6 col-md-6 col-12">
												<div class="row justify-content-center">
													<div class="col-12">
														<p class="ml-2 font-weight-bold vt-heading">Praneeth</p>
														<p class="ml-2 text-secondary mt-n3"
															id="founder_name8">Founder VeGrow</p>
													</div>
												</div>

											</div>
											<div class="col-lg-6 col-md-6 col-12">
												<div class="row justify-content-center">
													<div class="col-12">
														<img src="https://complianceclock.com/public/frontend/assets/ui/5-vigrow-logo.svg"
															width="100" height="40" class="float-right mr-2">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-12">
									<div class="card">
										<div class="embed-responsive embed-responsive-21by9"
										id="youtube_frame9">
											<iframe width="885" height="498"
												src="https://www.youtube.com/embed/zyXBHHiWX9I"
												title="StartupFino Virtual CFO Service Testimonial (Finance Head of Gromo)"
												frameborder="0"
												allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
												allowfullscreen></iframe>
										</div>
										<div class="row justify-content-center mt-2">
											<div class="col-lg-6 col-md-6 col-12">
												<div class="row justify-content-center">
													<div class="col-12">
														<p class="ml-2 font-weight-bold vt-heading">Raj Arya</p>
														<p class="ml-2 text-secondary mt-n3"
															id="founder_name9">Finance Head Gromo</p>
													</div>
												</div>

											</div>
											<div class="col-lg-6 col-md-6 col-12">
												<div class="row justify-content-center">
													<div class="col-12">
														<img src="https://complianceclock.com/public/frontend/assets/ui/3-Gromo-logo.svg"
															width="100" height="40" class="float-right mr-2">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Left and right controls -->
					<!-- <a class="carousel-control-prev" href="#demo" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
								<span class="carousel-control-next-icon"></span>
			</a> -->
				</div>
			</div>
		</div>
	</div>
</section>
<section class="service-page" id="overview_section" class="mt-2 mb-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="service-content row">
					<div class="col-lg-8 col-md-8 col-sm-8 col-8 overview_large">
					{!! $records->long_description !!}
					{!! $records->too_long_description !!}	
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-4 overview_small">
						<div class="formarea fixedform">
							<div class="card shadow"  id="consult_bottom_card">
								<div class="card-body bg-white">
									<div class="card-title font-weight-bold text-center" id="bottom_consult">{!! $records->free_consultation_desc !!}</div>
									@if (session()->has('overview_msg'))
									    <div class="row justify-content-center">
									    	<div class="col-lg-10 col-md-10 col-12">
									    		<div class="alert alert-success texty-center">{{ session()->get('overview_msg') }}</div>
									    	</div>
									    </div>
									@endif
									<form action="{{url('/')}}/SaveOverviewEnquiry" method="POST">
										@csrf
										<div class="row">
											<div class="col-lg-12 col-sm-12 form-group mt-4">
												<!-- <strong>Name*</strong> -->
												<input type="text" name="name" value="" class="form-control"
													placeholder="Name*" required>
											</div>
											<div class="col-lg-12 col-sm-12 form-group">
												<!-- <strong>Mobile Number*</strong> -->
												<input type="text" name="mobile" value="" maxlength="10"
													class="form-control" placeholder="Mobile*" required>
												<p id="smobileError" class="error validation_message_error"></p>
											</div>
											<div class="col-lg-12 col-sm-12 form-group">
												<!-- <strong>Email*</strong> -->
												<input type="email" name="email" value="" class="form-control"
													placeholder="Email*" required>
												<p id="semailError" class="error validation_message_error"></p>
											</div>
											<div class="col-lg-12 col-sm-12 form-group">
												<!-- <strong>State*</strong> -->
												<select class="form-control" name=state_id id=state_id required>
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
											<input type="hidden" name="service_slug" value="{{$current_slug}}" />
								            <input type="hidden" name="path" value="{{$current_url}}">
											<div class="col-lg-12 form-group mt-3">
												<input type="submit" class="btn btn-darkprimary btn-block"
													id="servicebtnM" value="Submit">
											</div>


											 <div class="col-lg-12 form-group">
									<p style="text-align:center;">Need to speak to an expert? <a href="#" data-toggle="modal" data-target="#assistance_modal">Get Free Consultation</a></p>
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

<section id="advisory_services" class="mt-2 mb-2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-5 col-md-5 col-12 mt-5">
			{!! $records->advisory_services !!}
				<div class="row justify-content-start StartupFinoQR">
					<div class="col-lg-4 col-md-4 col-6 mb-5">
						<img src="https://complianceclock.com/public/frontend/assets/ui/StartupFinoQR.svg"
							class="img-fluid img-responsive">
					</div>
					<div class="col-lg-8 col-md-8 col-6 mb-5 scan_qr_code">
						<p class="text-white mt-2 finofontp">Scan this QR Code...</p>
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-md-7 col-12">
				<img src="{{asset('frontend/assets/ui/advisory_Services-sf.png')}}"
					alt="advisory_Services_img" class="advisory_services_img img-fluid mt-5 mb-5">
			</div>
		</div>
	</div>
</section>
<section id="visit_our_blogs" class="mt-2 mb-5" style="display:none;">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4 col-md-4 col-12 mt-5">
				<h2 class="text-center text-dark">
					Visit Our Related Blogs
				</h2>
			</div>
			<div class="col-lg-12 col-md-12 col-12 mt-5">
				<div id="blogCarousals" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#blogCarousal" data-slide-to="0" class="active"></li>
						<li data-target="#blogCarousal" data-slide-to="1"></li>
						<li data-target="#blogCarousal" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" id="listed_blog">
						<div class="carousel-item active">
							<div class="row justify-content-center">
								<div class="col-lg-4 col-md-4 col-12">
									<div class="card">
										<img src="https://complianceclock.com/public/frontend/assets/banner/Rights_and_Obligations_of_Patentees_in_India.jpg"
											alt="Rights_and_Obligations_of_Patentees_in_India.jpg"
											class="img-fluid">
										<div class="card-body bg-white">
											<p><span class="float-left" >By Aishwarya
													Agrawal</span> <span class="text-secondary float-right"
													>April 26, 2023</span></p>
											<h6 class="blog_heading font-weight-bold finofonth mt-4"
												id="blog_heading">Rights and Obligations of Patentees in India
											</h6>
											<a href="https://complianceclock.com/public/frontend/blogs/rights-and-obligations-of-patentees-in-india/"
												target="_blank" class="btn btn-light btn-sm float-right"
												>More &nbsp;&nbsp;<i
													class="fa fa-angle-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-12">
									<div class="card">
										<img src="https://complianceclock.com/public/frontend/assets/banner/authorship_and_ownership.jpg"
											alt="authorship_and_ownership" class="img-fluid">
										<div class="card-body bg-white">
											<p><span class="float-left" >By Aishwarya
													Agrawal</span> <span class="text-secondary float-right"
													>April 26, 2023</span></p>
											<h6 class="blog_heading font-weight-bold finofonth"
												id="blog_heading">Authorship and Ownership of Copyright in
												India: Understanding the Basics</h6>
											<a href="https://complianceclock.com/public/frontend/blogs/authorship-and-ownership-of-copyright-in-india-understanding-the-basics/"
												target="_blank" class="btn btn-light btn-sm float-right"
												>More &nbsp;&nbsp;<i
													class="fa fa-angle-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-12">
									<div class="card">
										<img src="https://complianceclock.com/public/frontend/assets/banner/difference-between-trust-and-society.jpg"
											alt="difference-between-trust-and-society" class="img-fluid">
										<div class="card-body bg-white">
											<p><span class="float-left" >By Aishwarya
													Agrawal</span> <span class="text-secondary float-right"
													>April 26, 2023</span></p>
											<h6 class="blog_heading font-weight-bold finofonth"
												id="blog_heading">Difference between Trust and Society</h6>
											<a href="https://complianceclock.com/public/frontend/blogs/difference-between-trust-and-society/"
												target="_blank" class="btn btn-light btn-sm float-right"
												>More &nbsp;&nbsp;<i
													class="fa fa-angle-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row justify-content-center">
								<div class="col-lg-4 col-md-4 col-12">
									<div class="card">
										<img src="https://complianceclock.com/public/frontend/assets/banner/disadvantages-of-intellectual-property-rights.jpg"
											alt="disadvantages-of-intellectual-property-rights"
											class="img-fluid">
										<div class="card-body bg-white">
											<p><span class="float-left" >By Aishwarya
													Agrawal</span> <span class="text-secondary float-right"
													>April 26, 2023</span></p>
											<h6 class="blog_heading font-weight-bold finofonth"
												id="blog_heading">Disadvantages of Intellectual Property Rights
											</h6>
											<a href="https://complianceclock.com/public/frontend/blogs/disadvantages-of-intellectual-property-rights/"
												target="_blank" class="btn btn-light btn-sm float-right"
												>More &nbsp;&nbsp;<i
													class="fa fa-angle-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-12">
									<div class="card finofontp">
										<img src="https://complianceclock.com/public/frontend/assets/banner/epfo-registration-a-step-by-step-guide.jpg"
											alt="epfo-registration-a-step-by-step-guide" class="img-fluid">
										<div class="card-body bg-white">
											<p><span class="float-left" >By Aishwarya
													Agrawal</span> <span class="text-secondary float-right"
													>April 24, 2023</span></p>
											<h6 class="blog_heading font-weight-bold finofonth"
												id="blog_heading">EPFO Registration: A Step-by-Step Guide</h6>
											<a href="https://complianceclock.com/public/frontend/blogs/epfo-registration-a-step-by-step-guide/"
												target="_blank" class="btn btn-light btn-sm float-right"
												>More &nbsp;&nbsp;<i
													class="fa fa-angle-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-12">
									<div class="card finofontp">
										<img src="https://complianceclock.com/public/frontend/assets/banner/overview-of-functions-of-ngos.jpg"
											alt="overview-of-functions-of-ngos" class="img-fluid">
										<div class="card-body bg-white">
											<p><span class="float-left" >By Aishwarya
													Agrawal</span> <span class="text-secondary float-right"
													>April 21, 2023</span></p>
											<h6 class="blog_heading font-weight-bold finofonth"
												id="blog_heading">Functions of NGOs</h6>

											<a href="https://complianceclock.com/public/frontend/blogs/overview-of-functions-of-ngos/"
												target="_blank" class="btn btn-light btn-sm float-right"
												>More &nbsp;&nbsp;<i
													class="fa fa-angle-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row justify-content-center" >
								<div class="col-lg-4 col-md-4 col-12">
									<div class="card finofontp">
										<img src="https://complianceclock.com/public/frontend/assets/banner/society-registration-renewal-online.jpg"
											alt="society-registration-renewal-online" class="img-fluid">
										<div class="card-body bg-white">
											<p><span class="float-left">By Aishwarya
													Agrawal</span> <span class="text-secondary float-right"
													>April 26, 2023</span></p>
											<h6 class="blog_heading font-weight-bold finofonth"
												id="blog_heading">Society Registration Renewal Online</h6>
											<a href="https://complianceclock.com/public/frontend/blogs/society-registration-renewal-online/"
												target="_blank" class="btn btn-light btn-sm float-right"
												>More &nbsp;&nbsp;<i
													class="fa fa-angle-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-12">
									<div class="card finofontp">
										<img src="https://complianceclock.com/public/frontend/assets/banner/documents-required-for-trust-registration-in-india.jpg"
											alt="documents-required-for-trust-registration-in-india"
											class="img-fluid">
										<div class="card-body bg-white">
											<p><span class="float-left" >By Aishwarya
													Agrawal</span> <span class="text-secondary float-right"
													>April 26, 2023</span></p>
											<h6 class="blog_heading font-weight-bold finofonth"
												id="blog_heading">Documents Required for Trust Registration in
												India</h6>
											<a href="https://complianceclock.com/public/frontend/blogs/documents-required-for-trust-registration-in-india/"
												target="_blank" class="btn btn-light btn-sm float-right"
												>More &nbsp;&nbsp;<i
													class="fa fa-angle-right"></i></a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-12">
									<div class="card finofontp">
										<img src="https://complianceclock.com/public/frontend/assets/banner/conversion-of-a-public-company-into-a-private-company.jpg"
											alt="conversion-of-a-public-company-into-a-private-company"
											class="img-fluid">
										<div class="card-body bg-white">
											<p><span class="float-left" >By Aishwarya
													Agrawal</span> <span class="text-secondary float-right"
													>April 19, 2023</span></p>
											<h6 class="blog_heading font-weight-bold finofonth"
												id="blog_heading">Conversion of a Public Company into a Private
												Company</h6>
											<a href="https://complianceclock.com/public/frontend/blogs/conversion-of-a-public-company-into-a-private-company/"
												target="_blank" class="btn btn-light btn-sm float-right"
												>More &nbsp;&nbsp;<i
													class="fa fa-angle-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					 <a class="carousel-control-prev" href="#blogCarousal" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#blogCarousal" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a> -->
				</div>
			</div>
		</div>
	</div>
</section>
<section class="blog-section pt-5 pb-5">
  <div class="container">
    <div class="blog-heading">
      <h1>Visit our <strong>Blog</strong></h1>
    </div>
    <div class="blog-item-list">
      <div class="blog-card">
        <img src="{{asset('frontend/assets/images/Blog-img-1.png')}}" alt="Image" />
        <div class="blog-name-time">
          <h2 class="blog-name">John Doe -</h2>
          <p class="blog-date">June 16, 2023</p>
        </div>
        <div class="blog-card-content">
          <h3 class="blog-title">
            Lorem ipsum dolor sit amet consectetur. Lorem neque nulla
          </h3>
          <p class="blog-description">
            Lorem ipsum dolor sit amet consectetur. Auctor purus nulla
            suspendisse et rhoncus in. Quam vehicula condimentum fringilla
            ut. Euismod velit pulvinar odio eu iaculis consequat.
          </p>
        </div>
        <div class="blog-link">
          <a class="link" href="https://example.com">More ></a>
        </div>
      </div>
      <div class="blog-card">
        <img src="{{asset('frontend/assets/images/Blog-img-2.png')}}" alt="Image" />
        <div class="blog-name-time">
          <h2 class="blog-name">John Doe -</h2>
          <p class="blog-date">June 16, 2023</p>
        </div>
        <div class="blog-card-content">
          <h3 class="blog-title">
            Lorem ipsum dolor sit amet consectetur. Lorem neque nulla
          </h3>
          <p class="blog-description">
            Lorem ipsum dolor sit amet consectetur. Auctor purus nulla
            suspendisse et rhoncus in. Quam vehicula condimentum fringilla
            ut. Euismod velit pulvinar odio eu iaculis consequat.
          </p>
        </div>
        <div class="blog-link">
          <a class="link" href="https://example.com">More ></a>
        </div>
      </div>
      <div class="blog-card">
        <img src="{{asset('frontend/assets/images/Blog-img-3.png')}}" alt="Image" />
        <div class="blog-name-time">
          <h2 class="blog-name">John Doe -</h2>
          <p class="blog-date">June 16, 2023</p>
        </div>
        <div class="blog-card-content">
          <h3 class="blog-title">
            Lorem ipsum dolor sit amet consectetur. Lorem neque nulla
          </h3>
          <p class="blog-description">
            Lorem ipsum dolor sit amet consectetur. Auctor purus nulla
            suspendisse et rhoncus in. Quam vehicula condimentum fringilla
            ut. Euismod velit pulvinar odio eu iaculis consequat.
          </p>
        </div>
        <div class="blog-link">
          <a class="link" href="https://example.com">More ></a>
        </div>
      </div>
    </div>
    <div class="view-more-link">
        <a class="button-link" href="#" target="_blank">View More Articles</a>
    </div>
  </div>
</section>
<section class="inquery-form-section pt-4 pb-5">
	<div class="container">
		<div class="inqury-form-main-div">
			<div class="">
				@if (session()->has('msg'))
				    <div class="row justify-content-center">
				    	<div class="col-lg-10 col-md-10 col-12">
				    		<div class="alert alert-success text-center">{{ session()->get('msg') }}</div>
				    	</div>
				    </div>
				@endif
				<form action="{{url('/')}}/shortenquiry" method="POST" class="inqury-form">
					@csrf
				    <div class="inqury-form-heading">
    					<h1>Startups Looking to Connect with us?</h1>
    				</div>
					<div class="inqury-form-email">
						<input type="email" name="email" placeholder="Email Address" />
					</div>
					<div class="inqury-form-mobile">
						<input type="tel" name="mobile" placeholder="Contact Number" />
					</div>
					<input type="hidden" name="service_slug" value="{{$current_slug}}" />
					<input type="hidden" name="path" value="{{$current_url}}">
					<div class="inquery-form-btn">
						<button type="submit" class="button-link">Send</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<section id="get_started" class="mt-2 mb-5 bg-section">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-9 col-md-9 col-12 mt-5 mb-1">
			{!! $records->get_started !!}
			</div>
			<div class="col-lg-3 col-md-3 col-12 mt-5 chat_with_us_btn">
				<a href="http://wa.link/v4hygf" target="_blank" class="btn btn-chatgreen btn-block btn-lg"
					> Chat with Us</a>
			</div>
		</div>
		<div class="row justify-content-center mt-2 mb-5">
			<div class="col-lg-3 col-md-3 col-6 mt-3 mb-3" id="contact_form_fill">
				<i id="icon1_text" class="fa fa-circle text-info" ></i>
				<i id="icon2_form"
					class="fa fa-file-text-o text-white">
				</i>
				<p class="text-white text-capitalize get_started_content">Fill up contact form</p>
			</div>
			<div class="col-lg-3 col-md-3 col-6 mt-3 mb-3">
				<i class="fa fa-circle" id="icon3_text"></i>
				<i class="fa fa-phone text-white" id="icon3_call"
				></i>
				<!-- <img src="https://complianceclock.com/public/frontend/assets/ui/Process Application-icon.svg" alt="Process Application-icon" style="font-size: 30px;z-index: 2;position: absolute;margin-top: 8px;margin-left: -35px;"> -->
				<p class="text-white text-capitalize get_started_content">Expert will call you</p>
			</div>
			<div class="col-lg-3 col-md-3 col-6 mt-3 mb-3">
				<i class="fa fa-circle"
				id="icon4_text"
					></i>
				<img src="https://complianceclock.com/public/frontend/assets/ui/Payment-icon.svg" alt="Payment-icon"
				id="icon4_pay"
					>

				<p class="text-white text-capitalize get_started_content">Make online payment</p>
			</div>
			<div class="col-lg-3 col-md-3 col-6 mt-3 mb-3">
				<i class="fa fa-circle"
				 id="icon5_text"
					></i>
					<i
					id="icon5_service"
					class="fa fa-laptop text-white"
					></i>
				<p class="text-white text-capitalize get_started_content">Get Services</p>
			</div>
		</div>
	</div>
</section>

<section id="startups_trust_us" class="mt-2 mb-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 col-md-12 col-12 mt-5">
				<h2 class="text-center font-weight-bolder fino-font-size text-capitalize">500+ Startups Trust Us</h2>
			</div>
			<div class="col-lg-12 col-md-12 col-12 startups_trust_us_1">
				<div id="blogCarousals" class="carousel slide" data-ride="carousel">
					<!-- <ol class="carousel-indicators">
						<li data-target="#blogCarousal" data-slide-to="0" class="active"></li>
						<li data-target="#blogCarousal" data-slide-to="1"></li>
						<li data-target="#blogCarousal" data-slide-to="2"></li>
					</ol> -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="row justify-content-center mt-5">
								<div class="col-lg-2 col-md-2 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/1-wheelseye-logo.png" alt="1-wheelseye-logo" class="img-fluid" width="100%" id="company_logo1">
								</div>
								<div class="col-lg-2 col-md-2 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/2-farmor-logo.svg" alt="2-farmor-logo" class="img-fluid" width="100%" id="company_logo2">
								</div>
								<div class="col-lg-2 col-md-2 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/2-shadowfax-logo.png" alt="2-shadowfax-logo" class="img-fluid" width="100%" id="company_logo3">
								</div>
								<div class="col-lg-2 col-md-2 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/3-damensch-logo.png" alt="3-damensch-logo" class="img-fluid" width="100%" id="company_logo4">
								</div>
								<div class="col-lg-2 col-md-2 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/3-Gromo-logo.svg" alt="3-Gromo-logo" class="img-fluid" width="100%" id="company_logo5">
								</div>
								<div class="col-lg-2 col-md-2 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/4-affordplan-logo.png" alt="4-affordplan-logo" class="img-fluid" width="100%" id="company_logo6">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row justify-content-center mt-5">
								<div class="col-lg-2 col-md-2 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/4-boyo-logo.svg" alt="4-boyo-logo" class="img-fluid" width="100%" id="company_logo7">
								</div>
								<div class="col-lg-2 col-md-2 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/5-vigrow-logo.svg" alt="5-vigrow-logo" class="img-fluid" width="100%" id="company_logo8">
								</div>
								<div class="col-lg-2 col-md-2 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/6-Dukaanse-logo.svg" alt="6-Dukaanse-logo" class="img-fluid" width="100%" id="company_logo9">
								</div>
								<div class="col-lg-2 col-md-2 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/8-Oye-logo.png" alt="8-Oye-logo" class="img-fluid" width="100%" id="company_logo10">
								</div>
								<div class="col-lg-2 col-md-2 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/9-leegality-logo.png" alt="9-leegality-logo" class="img-fluid" width="100%" id="company_logo11">
								</div>
								<div class="col-lg-2 col-md-2 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/10-shaadisaga.logo.png" alt="10-shaadisaga.logo" class="img-fluid" width="100%" id="company_logo12">
								</div>
							</div>
						</div>
					</div>
					<!-- <a class="carousel-control-prev" href="#blogCarousal" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#blogCarousal" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a> -->
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-12 startups_trust_us_2">
				<div id="blogCarousals" class="carousel slide" data-ride="carousel">
					<!-- <ol class="carousel-indicators">
						<li data-target="#blogCarousal" data-slide-to="0" class="active"></li>
						<li data-target="#blogCarousal" data-slide-to="1"></li>
						<li data-target="#blogCarousal" data-slide-to="2"></li>
					</ol> -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="row justify-content-center mt-5">
								<div class="col-lg-12 col-md-12 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/1-wheelseye-logo.png" alt="1-wheelseye-logo" class="img-fluid mob_carousel"  id=company_logo13>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row justify-content-center mt-5">
								<div class="col-lg-12 col-md-12 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/2-farmor-logo.svg" alt="2-farmor-logo" class="img-fluid mob_carousel"  id="company_logo14">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row justify-content-center mt-5">
								<div class="col-lg-12 col-md-12 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/2-shadowfax-logo.png" alt="2-shadowfax-logo" class="img-fluid mob_carousel"  id="company_logo15">	
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row justify-content-center mt-5">
								<div class="col-lg-12 col-md-12 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/3-damensch-logo.png" alt="3-damensch-logo" class="img-fluid mob_carousel" id="company_logo16">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row justify-content-center mt-5">
								<div class="col-lg-12 col-md-12 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/2-shadowfax-logo.png" alt="2-shadowfax-logo" class="img-fluid mob_carousel" id="company_logo17">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row justify-content-center mt-5">
								<div class="col-lg-12 col-md-12 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/3-damensch-logo.png" alt="3-damensch-logo" class="img-fluid mob_carousel" id="company_logo18">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row justify-content-center mt-5">
								<div class="col-lg-12 col-md-12 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/3-Gromo-logo.svg" alt="3-Gromo-logo" class="img-fluid mob_carousel" width="100%" id="company_logo18">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row justify-content-center mt-5">
								<div class="col-lg-12 col-md-12 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/4-affordplan-logo.png" alt="4-affordplan-logo" class="img-fluid mob_carousel" width="100%" id="company_logo19">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row justify-content-center mt-5">
								<div class="col-lg-12 col-md-12 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/4-boyo-logo.svg" alt="4-boyo-logo" class="img-fluid mob_carousel" width="100%" id="company_logo20">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row justify-content-center mt-5">
								<div class="col-lg-12 col-md-12 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/5-vigrow-logo.svg" alt="5-vigrow-logo" class="img-fluid mob_carousel" width="100%" id="company_logo21">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row justify-content-center mt-5">
								<div class="col-lg-12 col-md-12 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/6-Dukaanse-logo.svg" alt="6-Dukaanse-logo" class="img-fluid mob_carousel" width="100%" id="company_logo22">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row justify-content-center mt-5">
								<div class="col-lg-12 col-md-12 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/8-Oye-logo.png" alt="8-Oye-logo" class="img-fluid mob_carousel" width="100%" id="company_logo23">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row justify-content-center mt-5">
								<div class="col-lg-12 col-md-12 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/9-leegality-logo.png" alt="9-leegality-logo" class="img-fluid mob_carousel" width="100%" id="company_logo24">
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row justify-content-center mt-5">
								<div class="col-lg-12 col-md-12 col-12">
									<img src="https://complianceclock.com/public/frontend/assets/ui/10-shaadisaga.logo.png" alt="10-shaadisaga.logo" class="img-fluid mob_carousel" width="100%" id="company_logo25">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--<section id="award_winning" class="mt-2 mb-5">-->
<!--	<div class="container">-->
<!--		<div class="row justify-content-center">-->
<!--			<div class="col-lg-12 col-md-12 col-12 mt-5" id="achivement_stars">-->
<!--				<center>-->
<!--					<i class="fa fa-star" ></i>-->
<!--					<i class="fa fa-star" ></i>-->
<!--					<i class="fa fa-star" ></i>-->
<!--					<i class="fa fa-star" ></i>-->
<!--					<i class="fa fa-star" ></i>-->
<!--				</center>-->
<!--				<h2 class="text-center font-weight-bolder fino-font-size text-capitalize mt-4 finofonth">Our-->
<!--					Achievements</h2>-->
<!--			</div>-->
<!--		</div>-->
<!--		<div class="row justify-content-center" id="award_tittle">-->
<!--			<div class="col-lg-4 col-md-4 col-12 mt-5">-->
<!--				<div class="card shadow" id="title1">-->
<!--					<div class="card-body bg-white">-->
<!--						<center><img src="https://complianceclock.com/public/frontend/assets/ui/V-CFOAwards-img 1.png"-->
<!--								alt="V-CFOAwards-img 1" class="img-fluid"></center>-->
<!--						<h6 class="text-center text-capitalize font-weight-bolder mt-3 finofonth">Best Virtual-->
<!--							CFO of the year 2023</h6>-->

<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-lg-4 col-md-4 col-12 mt-5">-->
<!--				<div class="card shadow" id="title2">-->
<!--					<div class="card-body bg-white">-->
<!--						<center><img src="https://complianceclock.com/public/frontend/assets/ui/legal-compliance- award-img.png"-->
<!--								alt="legal-compliance-award" class="img-fluid"></center>-->
<!--						<h6 class="text-center text-capitalize font-weight-bolder mt-3 finofonth">Best Tax &-->
<!--							Legal Compliance Management Agency</h6>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--			<div class="col-lg-4 col-md-4 col-12 mt-5">-->
<!--				<div class="card shadow" id="title3">-->
<!--					<div class="card-body bg-white">-->
<!--						<center><img src="https://complianceclock.com/public/frontend/assets/ui/financial-advisor-award-img.png"-->
<!--								alt="financial-advisor-award" class="img-fluid"></center>-->
<!--						<h6 class="text-center text-capitalize font-weight-bolder mt-3 finofonth">Best Financial-->
<!--							Advisor Agency at the World Startup Convention'23</h6>-->
<!--					</div>-->
<!--				</div>-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</section>-->
<section class="pt-5 pb-5 award-section" id="award_winning">
			<div class="container">
				<div class="award-heading">
					<h1>An award<strong>-winning</strong></h1>
					<p>Based on 500+ customer reviews.</p>
				</div>
				<div class="award-item-list">
					<div class="award-card">
						<img src="{{asset('frontend/assets/images/award-img-1.png')}}" alt="award" />
						<div class="award-card-content card-content">
						  <h3 class="award-title card-title">
							Best Virtual CFO Of The Year 2023
						  </h3>
						  <p class="award-description card-description">
							Startupfino has been awarded as the Best Virtual CFO of 2023 held at Global Startup and Entrepreneurship Conclave 2023. It was decisive to get recognition as a startup in this competitive industry.
						  </p>
						</div>
					</div>
					<div class="award-card">
					  <img src="{{asset('frontend/assets/images/award-img-2.png')}}" alt="award" />
					  <div class="award-card-content card-content">
						<h3 class="award-title card-title">
							Best Tax and Legal Compliance Management Agency
						</h3>
						<p class="award-description card-description">
							Startupfino is honoured to recognise as a Best Tax and Legal Compliance Management Agency in the India Stratup Summit and Startup Achievers Awards 2022.
						</p>
					  </div>
					</div>
					<div class="award-card">
					  <img src="{{asset('frontend/assets/images/award-img-3.png')}}" alt="award" />
					  <div class="award-card-content card-content">
						<h3 class="award-title card-title">
							Best Financial Advisor Agency 
						</h3>
						<p class="award-description card-description">
							Startupfino is honoured as a Best Financial Advisor Agency at the World Startup Convention 2023. This acknowledgment shows commitment towards delivering innovative solutions.
						</p>
					  </div>
					</div>
				</div>
			</div>
		</section>
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
				<form action="{{url('/')}}/shortenquiry" method="POST">
					@csrf
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Email*">
					</div>
					<div class="form-group">
						<input type="text" name="mobile" class="form-control" maxlength="10"
							placeholder="Phone Number*">
					</div>
					<input type="hidden" name="service_slug" value="{{$current_slug}}" />
					<input type="hidden" name="path" value="{{$current_url}}">
					<div class="form-group">
						<input type="submit" class="btn btn-primary" value="Submit">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</section>
<section id="prg-counter">
<div class="container">
	<div class="prg-container row">

		<div class="col-md-12">
			<h2>10+ years of success</h2>
			<p>Startupfino is working with Startups since last 10 years with an unparalleled experience of
				helping fast growing startups. Our Success can be witnessed through the numbers given below.</p>
		</div>
		<div class="col-md-12 mobile_block">
			<img src="https://complianceclock.com/public/frontend/assets/images/counter_img_mob.jpg">
		</div>
		<div class="col-md-12 desk_none">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-item">
						<div class="counter-inner mt-tp">
							<h3 class="prg-count" data-count="500">0</h3>
							<h4 class="prg-count-title">Startups</h4>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-item">
						<div class="counter-inner mt-tp2">
							<h3 class="prg-count" data-count="8000">0</h3>
							<h4 class="prg-count-title">Projects Completed</h4>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-item">
						<div class="counter-inner mt-tp3">
							<h3 class="prg-count" data-count="4">0</h3>
							<h4 class="prg-count-title">Office Location</h4>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="counter-item">
						<div class="counter-inner mt-tp4">
							<h3 class="prg-count" data-count="98">0</h3>
							<h4 class="prg-count-title">Client Retention</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<section class="startup about-testimonial">
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="title">
				<h2>Startup eco-system loves to talk about us!</h2>
			</div>
		</div>
	</div>
	<div class="row common-slider">
		<div class="col-md-12">
			<div class="white-bg">
				<h4>Timely Execution of work</h4>
				<p>Startupfino is managing my accounts and its such a relaxed and smooth journey so far , I dont
					have to worry about timely execution of the work . They manage my invoicing, finances and
					compliances in a efficient way. I wish karan and team all the very best for the future of
					this startup .</p>
				<div class="row mt-4">
					<div class="col-md-8">
						<div class="user-item">
							<img class="user" src="https://complianceclock.com/public/frontend/assets/images/Ishant-Sharma.jpg">
							<h3>Ishant Sharma <span>Indian Cricketer</span></h3>
						</div>
					</div>
					<!-- <div class="col-md-4"><img class="c-logo" src="images/client1.jpg"></div> -->
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="white-bg">
				<h4>On the call Solutions for first time founders</h4>
				<p>Startupfino provided Shadowfax with an end to end support in managing compliance and accounts
					during our early stage and helped us transition to a full fledged finance team post our
					multiple Venture rounds of Capital. Highly recommended for first time founders who are
					looking for on-the-call solutions for specialized accounting, taxation and statutory
					compliances.</p>
				<div class="row mt-4">
					<div class="col-md-8">
						<div class="user-item">
							<img class="user" src="https://complianceclock.com/public/frontend/assets/images/bansal-img.jpg">
							<h3>Abhishek Bansal <span>CEO, ShadowFax</span></h3>
						</div>
					</div>
					<div class="col-md-4"><img class="c-logo"
							src="https://complianceclock.com/public/frontend/assets/images/logo1.jpg"></div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="white-bg">
				<h4>Highly Responsive and truly understand issues faced by startup</h4>
				<p>I have been working with Startupfino on a couple of our portfolio companies. I have found
					this team highly responsive and they truly understand issues faced by startups. I would
					highly recommend them to startups for their accounting and compliance needs.</p>
				<div class="row mt-4">
					<div class="col-md-8">
						<div class="user-item">
							<img class="user" src="https://complianceclock.com/public/frontend/assets/images/Sarbvir-Singh.jpg">
							<h3>Sarbvir Singh <span>CEO-PolicyBazaar, <br>Ex Managing Partner-WaterBridge
									Ventures</span></h3>
						</div>
					</div>
					<div class="col-md-4"><img class="c-logo"
							src="https://complianceclock.com/public/frontend/assets/images/logo8.jpg"></div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="white-bg">
				<h4>Easily able to distill the problem and provide the solutions to founders</h4>
				<p>I have been working with Karan and team with a long time now. Karan’s thought of clarity is
					remarkable. He is very easily able to distill the problem and provide a solution which suits
					everyone needs. Would highly recommend others to explore services provided by Karan and his
					team at Startupfino.</p>
				<div class="row mt-4">
					<div class="col-md-8">
						<div class="user-item">
							<img class="user" src="https://complianceclock.com/public/frontend/assets/images/Kshitij-Puri.jpg">
							<h3>Kshitij Puri <span>CEO- Ziploan</span></h3>
						</div>
					</div>
					<div class="col-md-4"><img class="c-logo"
							src="https://complianceclock.com/public/frontend/assets/images/logo14.jpg"></div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="white-bg">
				<h4>Compliance of US and India entirely handled by Startupfino</h4>
				<p>Team FINO has been there with us since we began our journey 5 years back..the reason for our
					long lasting relationship was the trust that the Fino team members reciprocated. Compliance
					of both our USA and India entity are handled by them. I’d highly recommend StartUpfino to
					early stage startups”</p>
				<div class="row mt-4">
					<div class="col-md-8">
						<div class="user-item">
							<img class="user" src="https://complianceclock.com/public/frontend/assets/images/Kush-Beejal.jpg">
							<h3>Kush Beejal <span>CEO- NeoStencil</span></h3>
						</div>
					</div>
					<div class="col-md-4"><img class="c-logo"
							src="https://complianceclock.com/public/frontend/assets/images/logo16.jpg"></div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="white-bg">
				<h4>Fast Turnaround time and deep understanding of the business</h4>
				<p>Startupfino team are one of the most friendly people to work. They have a deep understanding
					of the business and help us with all our financial work without any hassles. Add to that a
					fast turnaround time for any task- they are one of the best start up accounting firms in the
					market!</p>
				<div class="row mt-4">
					<div class="col-md-8">
						<div class="user-item">
							<img class="user"
								src="https://complianceclock.com/public/frontend/assets/images/Utkarsh-Kawatra.jpg">
							<h3>Utkarsh Kawatra <span>CEO- myHQ</span></h3>
						</div>
					</div>
					<div class="col-md-4"><img class="c-logo"
							src="https://complianceclock.com/public/frontend/assets/images/logo4.jpg"></div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="white-bg">
				<h4>Startup Founder friendly</h4>
				<p>I have been working with Startupfino for last 5 years and I really like the way they works.
					Startupfino helps Truelancer from its very beginning for all of its financial and legal
					aspects and turnaround the things quickly. This firm is a truly a Startup Founder friendly.
				</p>
				<div class="row mt-4">
					<div class="col-md-8">
						<div class="user-item">
							<img class="user" src="https://complianceclock.com/public/frontend/assets/images/Dipesh-Garg.jpg">
							<h3>Dipesh Garg <span>CEO- Truelancer</span></h3>
						</div>
					</div>
					<div class="col-md-4"><img class="c-logo"
							src="https://complianceclock.com/public/frontend/assets/images/logo5.jpg"></div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="white-bg">
				<h4>DNA Tuned perfect for Startups</h4>
				<p>We have been working with Karan and Startupfino for a long time now. The entire DNA of the
					firm is tuned perfectly for startups. The support which you get from them at the time of
					crisis really differentiates them from everyone else in the market. Karan is a master of his
					domain.Highly recommended from our side</p>
				<div class="row mt-4">
					<div class="col-md-8">
						<div class="user-item">
							<img class="user"
								src="https://complianceclock.com/public/frontend/assets/images/Gaurav-Pushkar--Damensch.jpg">
							<h3>Gaurav Pushkar <span>CEO- Damensch</span></h3>
						</div>
					</div>
					<div class="col-md-4"><img class="c-logo"
							src="https://complianceclock.com/public/frontend/assets/images/dam-small-logo.jpg"></div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="white-bg">
				<h4>Services through efficient and Control Platform</h4>
				<p>The very foundation of a Startupfino is laid down by the founding member of it. Mr. Karan is
					a great person and getting to know that he is floating his own startup got me really
					excited. I really love the services offered by StartupFino and now getting these services
					through a more efficient and controlled platform is going to be truly amazing.</p>
				<div class="row mt-4">
					<div class="col-md-8">
						<div class="user-item">
							<img class="user" src="https://complianceclock.com/public/frontend/assets/images/Mohit-Sharma.jpg">
							<h3>Mohit Sharma <span>CEO- Oye Rickshaw</span></h3>
						</div>
					</div>
					<div class="col-md-4"><img class="c-logo"
							src="https://complianceclock.com/public/frontend/assets/images/logo2.jpg"></div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="white-bg">
				<h4>unparalleled experience in helping fast growing startups</h4>
				<p>Startupfino team has an unparalleled experience in helping fast growing startups right from
					their inception to later stage rounds. Startupfino helped Leegality for all the financial
					and legal matters. Highly recommended and all the best!</p>
				<div class="row mt-4">
					<div class="col-md-8">
						<div class="user-item">
							<img class="user" src="https://complianceclock.com/public/frontend/assets/images/Shivam-Singla.jpg">
							<h3>Shivam Singla <span>CEO- Leegality</span></h3>
						</div>
					</div>
					<div class="col-md-4"><img class="c-logo"
							src="https://complianceclock.com/public/frontend/assets/images/logo11.jpg"></div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="white-bg">
				<h4>Good knowledge of Tax and Labour law compliance</h4>
				<p>We worked with Deepak from StartupFino and the experience has been fantastic. They have good
					knowledge about Tax compliance and Labour law compliance.This firm is highly recommended for
					Startup world</p>
				<div class="row mt-4">
					<div class="col-md-8">
						<div class="user-item">
							<img class="user"
								src="https://complianceclock.com/public/frontend/assets/images/Tanuj-Gangwani.jpg">
							<h3>Tanuj Gangwani <span>Head Finance- Wheelseye</span></h3>
						</div>
					</div>
					<div class="col-md-4"><img class="c-logo"
							src="https://complianceclock.com/public/frontend/assets/images/logo10.jpg"></div>
				</div>
			</div>
		</div>
		<div class="col-md-12">
			<div class="white-bg">
				<h4>Startupfino takes the ownership of work</h4>
				<p>We have been working Karan and Startupfino team for almost 5 years now. In any startup legal
					and financial work takes huge time and the way Karan takes the ownership of the work, as a
					founder you are able to save lot of time and be tension free. Highly recommended.</p>
				<div class="row mt-4">
					<div class="col-md-8">
						<div class="user-item">
							<img class="user"
								src="https://complianceclock.com/public/frontend/assets/images/Himanshu-Kapsime.jpg">
							<h3>Himanshu Kapsime <span>CEO ShaadiSaga</span></h3>
						</div>
					</div>
					<div class="col-md-4"><img class="c-logo"
							src="https://complianceclock.com/public/frontend/assets/images/logo15.jpg"></div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
@endsection
@push('customscript')
<script type="text/javascript">
	$(document).ready(function () {
		// $("#overview").mouseenter(function(){
		// 	$('.overview_btn').addClass('active btn btn-darkprimary btn-lg service_tag_white');
		// });
		// $("#benefits").mouseenter(function(){
		// 	$('.benefit_btn').addClass('active btn btn-darkprimary btn-lg service_tag_white');
		// });
		// $("#list_articles").mouseenter(function(){
		// 	$('.listicle_btn').addClass('active btn btn-darkprimary btn-lg service_tag_white');
		// });
		// $("#faq").mouseenter(function(){
		// 	$('.faq_btn').addClass('active btn btn-darkprimary btn-lg service_tag_white');
		// });

		//  $("#overview").mouseover(function(){
		// 	$('.overview_btn').addClass('active btn btn-default btn-lg service_tag_default');
		// });
		// $("#benefits").mouseover(function(){
		// 	$('.benefit_btn').addClass('active btn btn-default btn-lg service_tag_default');
		// });
		// $("#list_articles").mouseover(function(){
		// 	$('.listicle_btn').addClass('active btn btn-default btn-lg service_tag_default');
		// });
		// $("#faq").mouseover(function(){
		// 	$('.faq_btn').addClass('active btn btn-default btn-lg service_tag_default');
		// });

// 		$("#overview").hover(function () {
// 			$('.overview_btn').addClass('active btn btn-darkprimary btn-lg service_tag_white');
// 			$('.faq_btn, .benefit_btn, .listicle_btn').removeClass('active btn-darkprimary service_tag_white');
// 			$('.faq_btn .benefit_btn .listicle_btn').addClass('btn-default service_tag_default');
// 		});
// 		$("#benefits").hover(function () {
// 			$('.benefit_btn').addClass('active btn btn-darkprimary btn-lg service_tag_white');
// 			$('.faq_btn, .overview_btn, .listicle_btn').removeClass('active btn-darkprimary service_tag_white');
// 			$('.faq_btn .overview_btn .listicle_btn').addClass('btn-default service_tag_default');
// 		});
// 		$("#list_articles").hover(function () {
// 			$('.listicle_btn').addClass('active btn btn-darkprimary btn-lg service_tag_white');
// 			$('.faq_btn, .overview_btn, .benefit_btn').removeClass('active btn-darkprimary service_tag_white');
// 			$('.faq_btn, .overview_btn, .benefit_btn').addClass('btn-default service_tag_default');
// 		});
// 		$("#faq").hover(function () {
// 			$('.faq_btn').addClass('active btn btn-darkprimary btn-lg service_tag_white');
// 			$('.listicle_btn, .overview_btn, .benefit_btn').removeClass('active btn-darkprimary service_tag_white');
// 			$('.listicle_btn, .overview_btn, .benefit_btn').addClass('btn-default service_tag_default');
// 		});


// 		$("#overview").click(function () {
// 			$('.overview_btn').addClass('active btn btn-darkprimary btn-lg service_tag_white');
// 			$('.faq_btn, .benefit_btn, .listicle_btn').removeClass('active btn-darkprimary service_tag_white');
// 			$('.faq_btn .benefit_btn .listicle_btn').addClass('btn-default service_tag_default');
// 		});
// 		$("#benefits").click(function () {
// 			$('.benefit_btn').addClass('active btn btn-darkprimary btn-lg service_tag_white');
// 			$('.faq_btn, .overview_btn, .listicle_btn').removeClass('active btn-darkprimary service_tag_white');
// 			$('.faq_btn .overview_btn .listicle_btn').addClass('btn-default service_tag_default');
// 		});
// 		$("#list_articles").click(function () {
// 			$('.listicle_btn').addClass('active btn btn-darkprimary btn-lg service_tag_white');
// 			$('.faq_btn, .overview_btn, .benefit_btn').removeClass('active btn-darkprimary service_tag_white');
// 			$('.faq_btn, .overview_btn, .benefit_btn').addClass('btn-default service_tag_default');
// 		});
// 		$("#faq").click(function () {
// 			$('.faq_btn').addClass('active btn btn-darkprimary btn-lg service_tag_white');
// 			$('.listicle_btn, .overview_btn, .benefit_btn').removeClass('active btn-darkprimary service_tag_white');
// 			$('.listicle_btn, .overview_btn, .benefit_btn').addClass('btn-default service_tag_default');
// 		});
	});

</script>

<!-- <script>
if ($("#servicefrmDataM").length > 0) {

$("#servicefrmDataM").validate({
  rules: {
    name: {
    required: true,
    maxlength: 50
  },
  mobile: {
    required: true,
    maxlength: 10
  },
  email: {
    required: true,
    maxlength: 100,
    email:true
  },  
  state_id: {
    required: "Please choose state"
  },   
  },
  messages: {
  name: {
    required: "Please enter name",
    maxlength: "Your name maxlength should be 50 characters long."
  },
  email: {
    required: "Please enter valid email",
    email: "Please enter valid email",
    maxlength: "The email name should less than or equal to 50 characters"
  },
  mobile: {
    required: "Please enter mobile no",
    maxlength: "Your mobile no should be 10 digit long."
  },
  },
  submitHandler: function(form) {
  $.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $('#servicebtnM').html('Please Wait...');
  $("#servicebtnM"). attr("disabled", true);
  $.ajax({
    url: "{{url('SaveEnquiry')}}",
    type: "POST",
    data: $('#servicefrmDataM').serialize(),
    success: function( response ) {
      $('#servicebtnM').html('Submit');
      $("#servicebtnM"). attr("disabled", false);
      alert('Ajax form has been submitted successfully');
      document.getElementById("servicefrmDataM").reset(); 
    }
   });
  }
  });
}
</script> -->
@endpush