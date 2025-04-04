@extends('frontend.layouts.master')
<script src="https://www.startupfino.com/assets/js/tiny-slider.js"></script>
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
<section class="inner-banner">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="internal-banner-text">
               <h1>{{$category->title}}</h1>
               {!! $category->description !!}
               <!-- <a href="#" class="btn btn-primary">View more...</a> -->
            </div>
         </div>
      </div>
   </div>
</section>
<section class="service-page demo">
   <div class="container">
      <div class="row">
         <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="start-business">
               <div class="row">
                  <div class="col-md-4 mt-4">
                     <div class="bdr2">
                        <h3>Limited Liability Partnership (LLP)</h3>
                        <p>Registered under MCA and ensuring Limited liabilities for its Partners. </p>
                        <span>
                        <i class="fa fa-inr" aria-hidden="true"></i> 6099<span class="rs rg-price"><del>₹  9499</del></span>
                        </span>
                        <a class="float-right" href="https://www.startupfino.com/services/limited-liability-partnership-llp-registration">Book Now</a>
                     </div>
                  </div>
                  <div class="col-md-4 mt-4">
                     <div class="bdr2">
                        <h3>Private Limited Incorporation</h3>
                        <p>Most popular type of Corporate entity and recommended for the Start-ups. </p>
                        <span>
                        <i class="fa fa-inr" aria-hidden="true"></i> 8499												<span class="rs rg-price"><del>₹  10999</del></span>
                        </span>
                        <a class="float-right" href="https://www.startupfino.com/services/company-registration">Book Now</a>
                     </div>
                  </div>
                  <div class="col-md-4 mt-4">
                     <div class="bdr2">
                        <h3>One Person Company</h3>
                        <p>Registered under MCA and is recommended to the Start-ups having Single Founder.</p>
                        <span>
                        <i class="fa fa-inr" aria-hidden="true"></i> 5599												<span class="rs rg-price"><del>₹  8999</del></span>
                        </span>
                        <a class="float-right" href="https://www.startupfino.com/services/one-person-company-opc-registration">Book Now</a>
                     </div>
                  </div>
                  <div class="col-md-4 mt-4">
                     <div class="bdr2">
                        <h3>Partnership Firm</h3>
                        <p>Governed by Partnership Act and is recommended for Idea stage business.</p>
                        <span>
                        <i class="fa fa-inr" aria-hidden="true"></i> 3099												<span class="rs rg-price"><del>₹  4999</del></span>
                        </span>
                        <a class="float-right" href="https://www.startupfino.com/services/partnership-firm-registration">Book Now</a>
                     </div>
                  </div>
                  <div class="col-md-4 mt-4">
                     <div class="bdr2">
                        <h3>Proprietorship Firm</h3>
                        <p>Simplest form of doing the business and has no individual business existence. </p>
                        <span>
                        <i class="fa fa-inr" aria-hidden="true"></i> 2499												<span class="rs rg-price"><del>₹  3999</del></span>
                        </span>
                        <a class="float-right" href="https://www.startupfino.com/services/sole-properitorship-firm-registration">Book Now</a>
                     </div>
                  </div>
                  <div class="col-md-4 mt-4">
                     <div class="bdr2">
                        <h3>Foreign Subsidiary</h3>
                        <p>Company whose shares are majorly owned by foreign Parent Company.</p>
                        <span>
                        <i class="fa fa-inr" aria-hidden="true"></i> 29899												<span class="rs rg-price"><del>₹  34999</del></span>
                        </span>
                        <a class="float-right" href="https://www.startupfino.com/services/foreign-subsidiary-company-registration">Book Now</a>
                     </div>
                  </div>
                  <div class="col-md-4 mt-4">
                     <div class="bdr2">
                        <h3>Section 8 Company (NGO)</h3>
                        <p>Preferred form of registering a NGO and governed under the guidelines of MCA.</p>
                        <span>
                        <i class="fa fa-inr" aria-hidden="true"></i> 24999												<span class="rs rg-price"><del>₹  30999</del></span>
                        </span>
                        <a class="float-right" href="https://www.startupfino.com/services/section-8-company-registration">Book Now</a>
                     </div>
                  </div>
                  <div class="col-md-4 mt-4">
                     <div class="bdr2">
                        <h3>Trust (NGO)</h3>
                        <p>Form of NGO registered under Indian Trust Act and is the simplest form of Registering a NGO.</p>
                        <a class="float-right" href="https://www.startupfino.com/services/trust-registration">View Service</a>
                     </div>
                  </div>
                  <div class="col-md-4 mt-4">
                     <div class="bdr2">
                        <h3>Society (NGO)</h3>
                        <p>Registered under the Society Registration Act and are preferred by the Schools, Hospitals etc.</p>
                        <a class="float-right" href="https://www.startupfino.com/services/society-registration">View Service</a>
                     </div>
                  </div>
                  <div class="col-md-4 mt-4">
                     <div class="bdr2">
                        <h3>Nidhi Company</h3>
                        <p>Type of NBFC formed for the sole purpose of borrowing or lending money only to its members. </p>
                        <a class="float-right" href="https://www.startupfino.com/services/nidhi-company-registration">View Service</a>
                     </div>
                  </div>
                  <div class="col-md-4 mt-4">
                     <div class="bdr2">
                        <h3>US Incorporation</h3>
                        <p>C Corp or S Corp registered under the norms of United States. </p>
                        <span>
                        <i class="fa fa-inr" aria-hidden="true"></i> 49999												<span class="rs rg-price"><del>₹  59999</del></span>
                        </span>
                        <a class="float-right" href="https://www.startupfino.com/services/us-company-incorporation">Book Now</a>
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
               {!! $category->short_description !!}
            </div>
         </div>
      </div>
      <div class="row common-slider">
         <div class="col-md-12">
            <div class="white-bg">
               <h4>Timely Execution of work</h4>
               <p>Startupfino is managing my accounts and its such a relaxed and smooth journey so far , I dont have to worry about timely execution of the work . They manage my invoicing, finances and compliances in a efficient way. I wish karan and team all the very best for the future of this startup .</p>
               <div class="row mt-4">
                  <div class="col-md-8">
                     <div class="user-item">
                        <img class="user" src="https://www.startupfino.com/assets/images/Ishant-Sharma.jpg">
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
               <p>Startupfino provided Shadowfax with an end to end support in managing compliance and accounts during our early stage and helped us transition to a full fledged finance team post our multiple Venture rounds of Capital. Highly recommended for first time founders who are looking for on-the-call solutions for specialized accounting, taxation and statutory compliances.</p>
               <div class="row mt-4">
                  <div class="col-md-8">
                     <div class="user-item">
                        <img class="user" src="https://www.startupfino.com/assets/images/bansal-img.jpg">
                        <h3>Abhishek Bansal <span>CEO, ShadowFax</span></h3>
                     </div>
                  </div>
                  <div class="col-md-4"><img class="c-logo" src="https://www.startupfino.com/assets/images/logo1.jpg"></div>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="white-bg">
               <h4>Highly Responsive and truly understand issues faced by startup</h4>
               <p>I have been working with Startupfino on a couple of our portfolio companies. I have found this team highly responsive and they truly understand issues faced by startups. I would highly recommend them to startups for their accounting and compliance needs.</p>
               <div class="row mt-4">
                  <div class="col-md-8">
                     <div class="user-item">
                        <img class="user" src="https://www.startupfino.com/assets/images/Sarbvir-Singh.jpg">
                        <h3>Sarbvir Singh <span>CEO-PolicyBazaar, <br>Ex Managing Partner-WaterBridge Ventures</span></h3>
                     </div>
                  </div>
                  <div class="col-md-4"><img class="c-logo" src="https://www.startupfino.com/assets/images/logo8.jpg"></div>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="white-bg">
               <h4>Easily able to distill the problem and provide the solutions to founders</h4>
               <p>I have been working with Karan and team with a long time now. Karan’s thought of clarity is remarkable. He is very easily able to distill the problem and provide a solution which suits everyone needs. Would highly recommend others to explore services provided by Karan and his team at Startupfino.</p>
               <div class="row mt-4">
                  <div class="col-md-8">
                     <div class="user-item">
                        <img class="user" src="https://www.startupfino.com/assets/images/Kshitij-Puri.jpg">
                        <h3>Kshitij Puri <span>CEO- Ziploan</span></h3>
                     </div>
                  </div>
                  <div class="col-md-4"><img class="c-logo" src="https://www.startupfino.com/assets/images/logo14.jpg"></div>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="white-bg">
               <h4>Compliance of US and India entirely handled by Startupfino</h4>
               <p>Team FINO has been there with us since we began our journey 5 years back..the reason for our long lasting relationship was the trust that the Fino team members reciprocated. Compliance of both our USA and India entity are handled by them. I’d highly recommend StartUpfino to early stage startups”</p>
               <div class="row mt-4">
                  <div class="col-md-8">
                     <div class="user-item">
                        <img class="user" src="https://www.startupfino.com/assets/images/Kush-Beejal.jpg">
                        <h3>Kush Beejal <span>CEO- NeoStencil</span></h3>
                     </div>
                  </div>
                  <div class="col-md-4"><img class="c-logo" src="https://www.startupfino.com/assets/images/logo16.jpg"></div>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="white-bg">
               <h4>Fast Turnaround time and deep understanding of the business</h4>
               <p>Startupfino team are one of the most friendly people to work. They have a deep understanding of the business and help us with all our financial work without any hassles. Add to that a fast turnaround time for any task- they are one of the best start up accounting firms in the market!</p>
               <div class="row mt-4">
                  <div class="col-md-8">
                     <div class="user-item">
                        <img class="user" src="https://www.startupfino.com/assets/images/Utkarsh-Kawatra.jpg">
                        <h3>Utkarsh Kawatra <span>CEO- myHQ</span></h3>
                     </div>
                  </div>
                  <div class="col-md-4"><img class="c-logo" src="https://www.startupfino.com/assets/images/logo4.jpg"></div>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="white-bg">
               <h4>Startup Founder friendly</h4>
               <p>I have been working with Startupfino for last 5 years and I really like the way they works. Startupfino helps Truelancer from its very beginning for all of its financial and legal aspects and turnaround the things quickly. This firm is a truly a Startup Founder friendly.</p>
               <div class="row mt-4">
                  <div class="col-md-8">
                     <div class="user-item">
                        <img class="user" src="https://www.startupfino.com/assets/images/Dipesh-Garg.jpg">
                        <h3>Dipesh Garg <span>CEO- Truelancer</span></h3>
                     </div>
                  </div>
                  <div class="col-md-4"><img class="c-logo" src="https://www.startupfino.com/assets/images/logo5.jpg"></div>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="white-bg">
               <h4>DNA Tuned perfect for Startups</h4>
               <p>We have been working with Karan and Startupfino for a long time now. The entire DNA of the firm is tuned perfectly for startups. The support which you get from them at the time of crisis really differentiates them from everyone else in the market. Karan is a master of his domain.Highly recommended from our side</p>
               <div class="row mt-4">
                  <div class="col-md-8">
                     <div class="user-item">
                        <img class="user" src="https://www.startupfino.com/assets/images/Gaurav-Pushkar--Damensch.jpg">
                        <h3>Gaurav Pushkar <span>CEO- Damensch</span></h3>
                     </div>
                  </div>
                  <div class="col-md-4"><img class="c-logo" src="https://www.startupfino.com/assets/images/dam-small-logo.jpg"></div>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="white-bg">
               <h4>Services through efficient and Control Platform</h4>
               <p>The very foundation of a Startupfino is laid down by the founding member of it. Mr. Karan is a great person and getting to know that he is floating his own startup got me really excited. I really love the services offered by StartupFino and now getting these services through a more efficient and controlled platform is going to be truly amazing.</p>
               <div class="row mt-4">
                  <div class="col-md-8">
                     <div class="user-item">
                        <img class="user" src="https://www.startupfino.com/assets/images/Mohit-Sharma.jpg">
                        <h3>Mohit Sharma <span>CEO- Oye Rickshaw</span></h3>
                     </div>
                  </div>
                  <div class="col-md-4"><img class="c-logo" src="https://www.startupfino.com/assets/images/logo2.jpg"></div>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="white-bg">
               <h4>unparalleled experience in helping fast growing startups</h4>
               <p>Startupfino team has an unparalleled experience in helping fast growing startups right from their inception to later stage rounds. Startupfino helped Leegality for all the financial and legal matters. Highly recommended and all the best!</p>
               <div class="row mt-4">
                  <div class="col-md-8">
                     <div class="user-item">
                        <img class="user" src="https://www.startupfino.com/assets/images/Shivam-Singla.jpg">
                        <h3>Shivam Singla <span>CEO- Leegality</span></h3>
                     </div>
                  </div>
                  <div class="col-md-4"><img class="c-logo" src="https://www.startupfino.com/assets/images/logo11.jpg"></div>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="white-bg">
               <h4>Good knowledge of Tax and Labour law compliance</h4>
               <p>We worked with Deepak from StartupFino and the experience has been fantastic. They have good knowledge about Tax compliance and Labour law compliance.This firm is highly recommended for Startup world</p>
               <div class="row mt-4">
                  <div class="col-md-8">
                     <div class="user-item">
                        <img class="user" src="https://www.startupfino.com/assets/images/Tanuj-Gangwani.jpg">
                        <h3>Tanuj Gangwani <span>Head Finance- Wheelseye</span></h3>
                     </div>
                  </div>
                  <div class="col-md-4"><img class="c-logo" src="https://www.startupfino.com/assets/images/logo10.jpg"></div>
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <div class="white-bg">
               <h4>Startupfino takes the ownership of work</h4>
               <p>We have been working Karan and Startupfino team for almost 5 years now. In any startup legal and financial work takes huge time and the way Karan takes the ownership of the work, as a founder you are able to save lot of time and be tension free. Highly recommended.</p>
               <div class="row mt-4">
                  <div class="col-md-8">
                     <div class="user-item">
                        <img class="user" src="https://www.startupfino.com/assets/images/Himanshu-Kapsime.jpg">
                        <h3>Himanshu Kapsime <span>CEO ShaadiSaga</span></h3>
                     </div>
                  </div>
                  <div class="col-md-4"><img class="c-logo" src="https://www.startupfino.com/assets/images/logo15.jpg"></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div id="integrations-slider">
   <div>
      <div class="client-logo-img">
         <img src="https://www.startupfino.com/assets/images/client1.jpg">
      </div>
   </div>
   <div>
      <div class="client-logo-img">
         <img src="https://www.startupfino.com/assets/images/client2.jpg">
      </div>
   </div>
   <div>
      <div class="client-logo-img">
         <img src="https://www.startupfino.com/assets/images/oyo-small.jpg">
      </div>
   </div>
   <div>
      <div class="client-logo-img">
         <img src="https://www.startupfino.com/assets/images/client4.jpg">
      </div>
   </div>
   <div>
      <div class="client-logo-img">
         <img src="https://www.startupfino.com/assets/images/client11.jpg">
      </div>
   </div>
   <div>
      <div class="client-logo-img">
         <img src="https://www.startupfino.com/assets/images/client6.jpg">
      </div>
   </div>
   <div>
      <div class="client-logo-img">
         <img src="https://www.startupfino.com/assets/images/truecaler-smal.jpg">
      </div>
   </div>
   <div>
      <div class="client-logo-img">
         <img src="https://www.startupfino.com/assets/images/client8.jpg">
      </div>
   </div>
   <div>
      <div class="client-logo-img">
         <img src="https://www.startupfino.com/assets/images/client9.jpg">
      </div>
   </div>
   <div>
      <div class="client-logo-img">
         <img src="https://www.startupfino.com/assets/images/client10.jpg">
      </div>
   </div>
   <div>
      <div class="client-logo-img">
         <img src="https://www.startupfino.com/assets/images/client12.jpg">
      </div>
   </div>
   <div>
      <div class="client-logo-img">
         <img src="https://www.startupfino.com/assets/images/srijan-logo.jpg">
      </div>
   </div>
   <div>
      <div class="client-logo-img">
         <img src="https://www.startupfino.com/assets/images/client37.jpg">
      </div>
   </div>
   <div>
      <div class="client-logo-img">
         <img src="https://www.startupfino.com/assets/images/client14.jpg">
      </div>
   </div>
   <div>
      <div class="client-logo-img">
         <img src="https://www.startupfino.com/assets/images/client34.jpg">
      </div>
   </div>
   <div>
      <div class="client-logo-img">
         <img src="https://www.startupfino.com/assets/images/client16.jpg">
      </div>
   </div>
   <div>
      <div class="client-logo-img">
         <img src="https://www.startupfino.com/assets/images/client17.jpg">
      </div>
   </div>
   <div>
      <div class="client-logo-img">
         <img src="https://www.startupfino.com/assets/images/client18.jpg">
      </div>
   </div>
</div>
@endsection