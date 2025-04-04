
@extends('frontend.layouts.master')
@section('title', $record->meta_title ?? "whizseed")
@section('meta_keywords', $record->meta_keyword ?? "whizseed")
@section('meta_description', $record->meta_description ?? "whizseed")
@section('content')
<!-- <div class="inner-about">
	<img src="{{asset($record->image)}}">	
	<div class="breadcrumb">
		<a href="">Home &nbsp</a>
		<span> > About Us</span>
	</div>	
</div> -->

<section class="top-banner-pages-section">
	<div class="top-banner-pages">
		<h1><span>Who</span> We Are</h1>
		<p>We serve many customers, ranging from small businesses, <br>medium entrepreneurs, to world-renowned companies.</p>
	</div>
</section>

<section class="contact-heading-section mt-5 mb-5">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 contact-heading">
				<h2>About Us</h2>
				<p>Whizseed is your go-to online hub for all things legal! We've created a special platform that links top-notch lawyers with business clients, making it easy for you to get the legal help you need. Whether you have questions, need advice, or want to discuss legal matters, we've got you covered. Plus, we like to keep you in the loop with legal updates and news snippets.</p>
				
				<p>At Whizseed, we've gathered a bunch of talented professionals who specialize in various areas like Environmental issues, Business Registrations, Government Licenses, Compliance, Tax filing, and more. These experts are their own bosses, and no one at Whizseed or any other member firm can speak for them or make commitments on their behalf.</p>

				<p>Just so you know, Whizseed isn't a law firm. When our lawyers provide answers to your legal questions, they keep things simple and easy to understand, but remember, these are not full legal opinions. They're here to help you out of goodwill, but it doesn't create a formal lawyer-client relationship. It's important to note that the services we offer are not a replacement for advice from a lawyer.</p>

				<p>One cool thing about Whizseed is that clients like you post your queries or cases on our platform, and you get to choose the lawyer you want to work with. You're in the driver's seat when it comes to picking your lawyer!</p>
			</div>
			<div class="col-lg-1 col-md-1"></div>
			<div class="col-lg-5 col-md-5 col-sm-12 contact-heading-img">
				<img src="https://www.whizseed.com/frontend/assets/images1/contact-image.png" alt="contact-image">
			</div>
		</div>
	</div>
</section>
<div class="people-5000">
	<h2><b>50,000+ People</b> Choose WHIZSEED for their Legal Solutions</h2>
</div>
<section class="mt-5 Comprehens-checklist-section">
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
<!-- <section>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div>
				<div class="contact-us-office-add">
						<div class="office-details-icon">
							<img src="https://www.whizseed.com/frontend/assets/images1/office-icon.png" alt="office-icon">
						</div>
						<div class="office-details-wh">
							<h4>India’s No.1 Legal Platform</h4>
						</div>
					</div>

					<p>Get the legal help from over 10,000+ Independent Professionals across India</p>
				</div>
			</div>
		</div>
	</div>
</section> -->
<!-- <section class="faq-section mt-5 mb-5 pt-4">
	<div class="container-fluid">
		<div id="Faq" itemscope="" itemtype="https://schema.org/FAQPage">
			<div class="service-link-item service-link-item-about-faq">
				<h2 class="overview-company-h2 faq-about">FAQs</h2>
				<div class="accordion" id="accordionExample" data-fix-nav-title="FAQs">
					<div class="card bg-white">
						<div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
						<div class="card-header bg-white" id="q1">
							<h2 class="mb-0"><button type="button" class="btn btn-link finfonth collapsed" data-toggle="collapse" data-target="#collapseOne">                 <span itemprop="name">What do I do if my vendor does not upload my invoice in their GSTR-1?</span></button></h2>
						</div>
						<div id="collapseOne" class="collapse" aria-labelledby="q1" data-parent="#accordionExample">
							<div class="card-body card-body-faq ml-0" itemprop="acceptedAnswer" itemscope="" itemtype="https://schema.org/Answer"><span itemprop="text">Yes. However, it is compulsory to have at least one Director on the Board who is an Indian Resident.</span></div>
						</div>
						</div>
					</div>
					<div class="card bg-white">
						<div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
						<div class="card-header bg-white" id="q2">
							<h2 class="mb-0"><button type="button" class="btn btn-link finfonth collapsed" data-toggle="collapse" data-target="#collapseTwo">                 <span itemprop="name">What do I do if my vendor does not upload my invoice in their GSTR-1?</span>               </button></h2>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="q2" data-parent="#accordionExample">
							<div class="card-body card-body-faq ml-0" itemprop="acceptedAnswer" itemscope="" itemtype="https://schema.org/Answer"><span itemprop="text">Private Limited Companies must file their annual returns within 60 days of conducting the AGM.</span></div>
						</div>
						</div>
					</div>
					<div class="card bg-white">
						<div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
						<div class="card-header bg-white" id="q3">
							<h2 class="mb-0"><button type="button" class="btn btn-link finfonth collapsed" data-toggle="collapse" data-target="#collapseThree">                 <span itemprop="name">What do I do if my vendor does not upload my invoice in their GSTR-1?</span>               </button></h2>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="q3" data-parent="#accordionExample">
							<div class="card-body card-body-faq ml-0" itemprop="acceptedAnswer" itemscope="" itemtype="https://schema.org/Answer"><span itemprop="text">Yes, it is possible to convert an LLP into a Private Limited Company. If you are considering this conversion, our experts can assist you in initiating the process</span></div>
						</div>
						</div>
					</div>
					<div class="card bg-white">
						<div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
						<div class="card-header bg-white" id="q4">
							<h2 class="mb-0"><button type="button" class="btn btn-link finfonth collapsed" data-toggle="collapse" data-target="#collapseFour">                 <span itemprop="name">What do I do if my vendor does not upload my invoice in their GSTR-1?</span>               </button></h2>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="q4" data-parent="#accordionExample">
							<div class="card-body card-body-faq ml-0" itemprop="acceptedAnswer" itemscope="" itemtype="https://schema.org/Answer"><span itemprop="text">While the AoA serve as the internal guidelines and regulations that manage the operations of the company, the MoA includes crucial information about the company, such as its name, registered office, liability of members, objectives of the company and details about its capital.</span></div>
						</div>
						</div>
					</div>
					<div class="card bg-white">
						<div itemscope="" itemprop="mainEntity" itemtype="https://schema.org/Question">
						<div class="card-header bg-white" id="q5">
							<h2 class="mb-0"><button type="button" class="btn btn-link finfonth collapsed" data-toggle="collapse" data-target="#collapseFive">                 <span itemprop="name">Is it necessary to conduct an Annual General Meeting (AGM)?</span>               </button></h2>
						</div>
						<div id="collapseFive" class="collapse" aria-labelledby="q5" data-parent="#accordionExample">
							<div class="card-body card-body-faq ml-0" itemprop="acceptedAnswer" itemscope="" itemtype="https://schema.org/Answer"><span itemprop="text">Yes, the AGM is a mandatory meeting where management and shareholders interact. The Companies Act, 2013 requires companies to hold AGMs to discuss yearly results and appoint auditors.</span></div>
						</div>
						</div>
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
                          <img src="https://www.whizseed.com/frontend/assets/images1/aman-gupta.jpg" alt="aman-gupta">
                        </div>
                        <div class='client-revier-para'>
                          <img src="https://www.whizseed.com/frontend/assets/images1/commma.png" alt="aman-gupta">
                          <p>whizseed is managing my accounts and its such a relaxed and smooth journey so far , I dont have to worry about timely execution of the work .</p>
                          <p class="client-name-tag">- Aman Gupta</p>
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
                          <img src="https://www.whizseed.com/frontend/assets/images1/commma.png" alt="Akash Yadav">
                          <p>whizseed is managing my accounts and its such a relaxed and smooth journey so far , I dont have to worry about timely execution of the work .</p>
                          <p class="client-name-tag">- Akash Yadav</p>
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
                          <img src="https://www.whizseed.com/frontend/assets/images1/commma.png" alt="Sonam Malhotra">
                          <p>whizseed is managing my accounts and its such a relaxed and smooth journey so far , I dont have to worry about timely execution of the work .</p>
                          <p class="client-name-tag">- Sonam Malhotra</p>
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