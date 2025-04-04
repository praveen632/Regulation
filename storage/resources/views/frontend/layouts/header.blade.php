<header>
   <div class="top-header" back>
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
               <div class="top-link">
                  <ul>
                     <li><a href="#">About Us</a> |</li>
                     <li><a href="#">Our Client</a> |</li>
                     <li>
                        <a href="#">Learning Section</a>
                     </li>
                     <li><a href="#">Contact Us</a></li>
                  </ul>
                  <div class="top-number">
                     <a href="#"><img src="{{asset('frontend/assets/images/top-icon.png')}}" alt="">(011)7777-04508</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="bottom-header">
      <div class="container">
         <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-12">
               <div class="logo">
                  <a href="{{route('index')}}">
                  <!--<img src="{{asset('frontend/assets/images/logo.png')}}" alt="" style="width: 180px;">-->
                  <img src="{{asset('frontend/assets/images/startupfinogiflogo.gif')}}" alt="" style="width: 180px;">
                  <!--<video autoplay loop muted id="video-bg" style="width: 180px;">-->
                  <!--  <source src="{{asset('frontend/assets/videos/startupfino logo animation.mp4')}}" type="video/mp4">-->
                  <!--</video>-->
                  </a>
               </div>
            </div>
            <div class="col-lg-10 col-md-12 col-sm-12 col-12 m-p mr-n2">
               <div class="serach-nav">
                   <div class="searcha-area searcha-area1">
                        <div class="">
                           <input type="text" class="form-control" id="autosearch" style="border-radius: 20px;">
                        </div>
                     <a class="btn btn-sm btn-chatgreen loginpoclik1" href="#" id="loginpoclik" type="button" data-toggle="modal" data-target="#login_modal">Sign In</a>
                     <div class="search-bar">
                        <h5>Most recommended services</h5>
                        <ul>
                           <li><a href="services/private-limited-incorporation">Private Limited Incorporation</a></li>
                           <li><a href="services/limited-liability-partnership-llp">Limited Liability Partnership (LLP)</a></li>
                           <li><a href="services/partnership-firm">Partnership Firm</a></li>
                           <li><a href="services/pantan-application">PAN/TAN Application</a></li>
                           <li><a href="services/gst">GST Registration</a></li>
                           <li><a href="services/fssai-food-licence">FSSAI (Food License)</a></li>
                           <li><a href="services/udyog-aadhar-msme-">MSME Registration</a></li>
                           <li><a href="services/trademark-registration">Trademark Registration</a></li>
                           <li><a href="services/esop-policy">ESOP Policy</a></li>
                        </ul>
                     </div>
                  </div>
                  <nav class="nav">
                     <div class="nav-bar-h">
                        <p><span onclick="myFunction()"> ☰</span></p>
                     </div>
                     @php $i =1; @endphp
                     <ul id="myDIV" class="mt-n2">
                        @foreach(parentCategoryWithChield() as $k => $v)
                        <li class="nav-title{{$i++}}">
                           @if(count($v->childs) > 0)
                           <a class="menu-main-item">{{$v->name}}</a><span class="ar1">↓</span>
                           <ul class="panel">
                              <div class="navmu">
							  @foreach($v->childs as $records)
                                 <li>
								           <font class="font"><a href="{{getUrl($records->sub_page_no)}}" class="text-decoration-none">{{$records->name}}</a></font>
                                    <ul>
                                    @foreach(ServicesList($v->id, $records->id) as $service)   		
                                       <li>
                                          <a href="{{route('fronts.services', [$service->slug])}}" class="text-decoration-none">{{$service->name}}</a>
                                       </li>
                                    @endforeach   	
                                    </ul>
                                 </li>
								 @endforeach
                              </div>
                           </ul>
                           @else
                           <a href="#" class="menu-main-item text-decoration-none">{{$v->name}}</a>
                           @endif
                        </li>
                        @endforeach
                        <!-- <li class="virtual_cfo">
                           <a href="services/virtual-cfo-services" class="menu-main-item text-decoration-none">VCFO</a>
                           </li> -->
                     </ul>
                  </nav>
                  <div class="searcha-area searcha-area2">
                     <div class="row mt-1">
                        <div class="col-lg-8 col-md-8 col-8">
                           <input type="text" class="form-control" id="autosearch" style="border-radius: 20px;">
                        </div>
                     </div>
                     <a class="btn btn-sm btn-chatgreen" href="#" id="loginpoclik" type="button" data-toggle="modal" data-target="#login_modal" style="margin-left: 220px;margin-top: -70px;">Sign In</a>
                     <div class="search-bar">
                        <h5>Most recommended services</h5>
                        <ul>
                           <li><a href="services/private-limited-incorporation">Private Limited Incorporation</a></li>
                           <li><a href="services/limited-liability-partnership-llp">Limited Liability Partnership (LLP)</a></li>
                           <li><a href="services/partnership-firm">Partnership Firm</a></li>
                           <li><a href="services/pantan-application">PAN/TAN Application</a></li>
                           <li><a href="services/gst">GST Registration</a></li>
                           <li><a href="services/fssai-food-licence">FSSAI (Food License)</a></li>
                           <li><a href="services/udyog-aadhar-msme-">MSME Registration</a></li>
                           <li><a href="services/trademark-registration">Trademark Registration</a></li>
                           <li><a href="services/esop-policy">ESOP Policy</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>