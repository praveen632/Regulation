<header>
    <div class="bottom-header">
       <div class="container-fluid">
          <div class="row">
             <div class="col-lg-2 col-md-2 col-sm-2 col-12">
                <div class="logo">
                   <a href="{{route('index')}}">
                   <img src="{{asset('frontend/assets/images/logo.jpeg')}}" alt="whizseed" style="width: 110px;margin-top: -12px;">
                   </a>
                </div>
             </div>
             <div class="col-lg-10 col-md-10 col-sm-12 col-12 m-p">
                <div class="serach-nav">
                   <nav class="nav">
                      <div class="nav-bar-h">
                         <p><span onclick="myFunction()"> ☰</span></p>
                      </div>
                      @php $i =1; @endphp
                      <ul id="myDIV" >
                         @foreach(parentCategoryWithChield() as $k => $v)
                         <li class="nav-title{{$i++}} nav-title-li-mainheadr">
                            @if(count($v->childs) > 0)
                            <a class="menu-main-item">{{$v->name}}</a><span class="ar1">↓</span>
                            <ul class="panel">
                               <div class="navmu">
                                 <div class="row">
                                @foreach($v->childs as $records)
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 menu-item-list-header">
                                      <!-- <font class="font"></font> -->
                                      <div class="col-megamenu">
                                          <h6><img class="s2-icon" src="https://www.whizseeddigital.com/frontend/assets/images1/s2-icon.svg" alt="whizseed icon"> {{$records->name}}</h6>
                                          <ul class="megamenu-ul">
                                          @foreach(ServicesList($v->id, $records->id) as $service)   		
                                             <li>
                                                <a href="{{route('fronts.services', [$service->slug])}}" class="text-decoration-none" id="whizseed-header-bar">{{$service->name}}</a>
                                             </li>
                                          @endforeach	
                                          </ul>
                                       </div>
                                    </div>
                                @endforeach
                                </div>
                               </div>
                            </ul>
                            @else
                            <a href="#" class="menu-main-item text-decoration-none">{{$v->name}}</a>
                            @if($v->name == "Library")
                                 <ul class="panel">
                                             <div class="navmu">
                                                 <li>
                                                     <ul>
                                                         <li><a href="{{url('blogs')}}">Blogs</a></li>
                                                         <li><a href="{{url('video')}}">Videos</a></li>
                                                         <li><a href="{{url('contact_us')}}">Contact us</a></li>
                                                     </ul>
                                                 </li>
                                             </div>
                                         </ul>
                               @endif
                            @endif
                            
                         </li>
                         @endforeach
                      </ul>
                   </nav>
                   <div class="nav-phone-whatapp-tag">
                        <a href="https://api.whatsapp.com/send?phone=919625432342&amp;text=Hi" class="nav-whatsapp-tag"><img src="https://www.whizseeddigital.com/frontend/assets/images1/whatsapp-wh.png" alt="Whatsapp Now : 9625432342"></a>
                        <a href="tel:9625432342" class="nav-phone-tag"><img src="https://www.whizseeddigital.com/frontend/assets/images1/call-icon.png" alt="Call Now : 9625432342">&nbsp;<span >9625432342</span></a>
                   </div>
                   <div class="searcha-area searcha-area2">
                     <div class="linevar">
                        <img src="{{asset('frontend/assets/images1/linevar.png')}}" alt="linevar">
                        <div class="library-section">
                           <ul>
                              <li>
                                 <a href="https://whizseeddigital.com/about-us" >About Us</a>
                              </li>
                              <li>
                                 <a href="https://whizseeddigital.com/contact-us" >Contact Us</a>
                              </li>
                              <!-- <li>
                                 <a href="https://whizseeddigital.com/blogs/" target="_blank">Blogs</a>
                              </li> -->
                           </ul>
                        </div>
                     </div>
                       <!--  <div class="">
                            <div class="searchandsign"> -->
                                <!-- <input type="text" class="form-control" id="autosearch" style="border-radius: 20px;"> -->
                                <!-- <a class="btn-chatgreen" href="#" id="loginpoclik" type="button" data-toggle="modal" data-target="#login_modal">Sign In</a>
                            </div>
                        </div> -->
                      <!-- <div class="search-bar">
                         <h5>Most recommended services</h5>
                         <ul>
                            <li><a href="services/company-registration">Private Limited Incorporation</a></li>
                            <li><a href="limited-liability-partnership-llp-registration">Limited Liability Partnership (LLP)</a></li>
                            <li><a href="services/partnership-firm-registration">Partnership Firm</a></li>
                            <li><a href="services/how-to-apply-for-a-pan-card">PAN/TAN Application</a></li>
                            <li><a href="services/gst-registration">GST Registration</a></li>
                            <li><a href="services/fssai-food-licence">FSSAI (Food License)</a></li>
                            <li><a href="services/udyog-aadhar-msme-registration">MSME Registration</a></li>
                            <li><a href="services/trademark-registration">Trademark Registration</a></li>
                            <li><a href="services/esop-policy">ESOP Policy</a></li>
                         </ul>
                      </div> -->
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Whizseed",
  "url": "https://whizseeddigital.com/",
  "logo": "https://whizseeddigital.com/frontend/assets/images/logo.svg",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91-9625432342",
    "contactType": "customer service",
    "areaServed": "IN"
  },
  "sameAs": [
    "https://www.facebook.com/whizseed",
    "https://x.com/whizseeddigital",
    "https://www.instagram.com/whizseed/",
    "https://www.youtube.com/@Whizseed",
    "https://www.linkedin.com/company/whizseed"
  ]
}
</script>
 </header>