@extends('frontend.layouts.master')
@section('title', $seo->meta_title ?? "whizseed")
@section('meta_keywords', $seo->meta_keyword ?? "whizseed")
@section('meta_description', $seo->meta_description ?? "whizseed")
<script src="https://www.startupfino.com/frontend/assets/js/tiny-slider.js"></script>
<script src="js/jquery.validate.js"></script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-171595342-1"></script>
<script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag('js', new Date());
   gtag('config', 'UA-171595342-1');
</script>
@section('content')
<!-- <section class="inner-banner">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="internal-banner-text">
               <h1>{{$category->name}}</h1>
               {!! $category->description !!}
               <a href="#" class="btn btn-primary">View more...</a>
            </div>
         </div>
      </div>
   </div>
</section> -->
<section class="service-page demo">
   <div class="container">
      <div class="row">
      <h1>{{$category->name}}</h1>
         <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="start-business">
               <div class="row">
                @foreach($services as $service) 
                  <div class="col-md-6 mt-4">
                     <div class="bdr2 bdr3">
                        <!-- <h3>{{(isset($service->name) && !empty($service->name)) ? $service->name : ''}}</h3> -->
                        <p>{!! $service->small_description !!}</p>
                        <!-- <span>
						     @if(!empty($service->price) || $service->price >0 )
                                <i class="fa fa-inr" aria-hidden="true"></i> {{ $service->price }} 
						     @endif		 -->
                             
							 <!-- @if(!empty($service->mrp_price) || $service->mrp_price > 0)
								<span class="rs rg-price"><del>₹  {{ $service->mrp_price }}</del></span>
						     @endif		 -->
                        <!-- </span>
						@if(!empty($service->price) || $service->price >0 )
                          <a class="float-right" href="{{route('fronts.services', [$service->slug])}}">Book Now</a>
						@else -->
						  <a class="readmores2page" href="{{route('fronts.services', [$service->slug])}}">Read More</a>
						@endif
                     </div>
                  </div>
                @endforeach
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="people-5000">
	<h2><b>50,000+ People</b> Choose WHIZSEED for their Legal Solutions</h2>
</div>
<section class="mt-5 Comprehens-checklist-section mb-5" >
    <div class="container-fluid Comprehens-checklist">
		<div class="row Comprehens-checklist-row">
			<div class="col-lg-4 col-md-6 col-sm-12 Comprehens-checklist-item">
				<div class="Comprehens-checklist-item-heading">
					<img src="https://www.whizseed.com/frontend/assets/images1/analytics-icon.png" alt="whizseed icon">
					<h3>India’s No.1 Legal Platform</h3>
				</div>
				<p>Get the legal help from over 10,000+ Independent Professionals across India</p>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 Comprehens-checklist-item">
				<div class="Comprehens-checklist-item-heading">
					<img src="https://www.whizseed.com/frontend/assets/images1/analytics-icon.png" alt="whizseed icon">
					<h3>Get Legal Advice</h3>
				</div>
				<p>Post your queries and get response from highly experienced professionals within 1 or 2 days.</p>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 Comprehens-checklist-item">
				<div class="Comprehens-checklist-item-heading">
					<img src="https://www.whizseed.com/frontend/assets/images1/analytics-icon.png" alt="whizseed icon">
					<h3>Contact a Lawyer</h3>
				</div>
				<p>Contact & get legal advice from our network of independent professionals for your specific matter.</p>
			</div>
		</div>
	</div>
</section>
<!-- <section id="startups_trust_us" class="mt-2">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-12 col-md-12 col-12">
            <h2 class="text-center">500+ Startups Trust Us</h2>
         </div>
         <div class="col-lg-12 col-md-12 col-12 startups_trust_us_1">
            <div style="width: 100%" class="new-slider">
               <img src="https://www.whizseed.com/frontend/assets/images1/cmplogo.png" alt="whizseed">
               <img src="https://www.whizseed.com/frontend/assets/images1/cmplogo.png" alt="whizseed">
            </div>
         </div>
      </div>
   </div>
</section> -->
<section class="testimoinal-section mt-5 pt-5 mb-5">
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
                          <img src="https://www.whizseed.com/frontend/assets/images1/aman-gupta.jpg" alt="Aman Gupta">
                        </div>
                        <div class='client-revier-para'>
                          <img src="https://www.whizseed.com/frontend/assets/images1/commma.png" alt="whizseed">
                          <p>WhizSeed made our company registration a breeze! Their expert guidance and efficient process saved us time and effort. Highly recommended for startups!</p>
                          <p class="client-name-tag">- Aman Gupta</p>
                        </div>
                      </div>
                    </div>
                 </div>
                 
                 <div class="owl-item" style="width: 128.906px; margin-right: 10px;"><div class="item testimonial-item0bottom">
                      <div class='client-revier-main'>
                        <div class='client-revier-img-service-ft'>
                          <img src="https://www.whizseed.com/frontend/assets/images1/sonam-malhotra.jpg" alt="Sonam Malhotra">
                        </div>
                        <div class='client-revier-para'>
                          <img src="https://www.whizseed.com/frontend/assets/images1/commma.png" alt="whizseed">
                          <p>WhizSeed's compliance services have been a lifesaver for our business. They keep us on the right side of the law, allowing us to focus on growth with confidence.</p>
                          <p class="client-name-tag">- Sonam Malhotra</p>
                        </div>
                      </div>
                    </div>
                 </div>
                 <div class="owl-item" style="width: 128.906px; margin-right: 10px;"><div class="item testimonial-item0bottom">
                      <div class='client-revier-main'>
                        <div class='client-revier-img-service-ft'>
                          <img src="https://www.whizseed.com/frontend/assets/images1/akash-yadav.jpg" alt="Akash Yadav">
                        </div>
                        <div class='client-revier-para'>
                          <img src="https://www.whizseed.com/frontend/assets/images1/commma.png" alt="whizseed">
                          <p>Choosing WhizSeed for our NBFC needs was a game-changer. Their in-depth knowledge and personalized solutions ensured a smooth and compliant operation.</p>
                          <p class="client-name-tag">-Akash Yadav</p>
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