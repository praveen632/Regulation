@extends('frontend.layouts.master') 
@section('title', $seo->meta_title ??"Whizseed") 
@section('meta_keywords', $seo->meta_keyword ?? "Whizseed")
@section('meta_description', $seo->meta_description ?? "Whizseed")
@section('content')

<style>
  .showReg {
    display: block;
  }

  .hideReg {
    display: none;
  }
</style>

<section class="banner-section pt-5 mt-3">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-7 col-md-12 col-12 banner-heading">
        <h1>
          One-Stop Destination <br />
          For All Your<br>
        </h1>
        <p class='banner-heading-h1-p'>Business Requirements</p>
        <p>At WhizSeed, we're dedicated to fueling your entrepreneurial fire. Our services and <br>expert guidance empower startups and entrepreneurs across India to build, grow, and prosper.
        </p>
        <div class="banner-search">
          <input type="text" id='autosearch' placeholder="" />
          <br>
          <input type="submit" class="search-icon" value="">
          <button type="button" class="btn">Go For Services <span><img class="btnarroeimage" src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png" alt="btnarrow"></span></button>

          <!-- <div class="show-most-service">About1</div>
          <div class="show-most-service">About2</div>
          <div class="show-most-service">About3</div>
          <div class="show-most-service">About4</div>
          <div class="show-most-service">About5</div> -->

          <div class="show-most-service">
            <div class="bdBtSc" id="animationText-1">Company Registration</div>
            <div class="bdBtSc" id="animationText-2">Public Limited Company Registration</div>
            <div class="bdBtSc" id="animationText-3">One Person Company Registration</div>
            <div class="bdBtSc" id="animationText-4">Nidhi Company Registration</div>
            <div class="bdBtSc" id="animationText-5">LLP Registration</div>
            <div class="bdBtSc" id="animationText-6">Sole Proprietorship Registration</div>
            <div class="bdBtSc" id="animationText-7">Partnership Firm Registration</div>
            <div class="bdBtSc" id="animationText-8">Indian Subsidiary Company Registration</div>
            <div class="bdBtSc" id="animationText-9">GST Registration</div>
            <div class="bdBtSc" id="animationText-10">Startup India Registration</div>
          </div>
        </div>
        <div class="search-bar">
          <!-- <h5>Most recommended services</h5> -->
          <ul>
             <li><a href="service/private-limited-company-registration">Company Registration</a></li>
             <li><a href="service/online-llp-registration-india">LLP Registration</a></li>
             <li><a href="service/ngo-registration">NGO Registration</a></li>
             <li><a href="service/one-person-company-opc-registration">OPC Registration</a></li>
             <li><a href="service/gst-registration">GST Registration</a></li>
             <li><a href="service/professional-tax-registration">Professional Tax Registration</a></li>
             <li><a href="service/virtual-cfo-services">Virtual CFO Services</a></li>
             <li><a href="service/isi-mark-certification">ISI Certification</a></li>
             <li><a href="service/epr-authorization">EPR Authorization</a></li>
          </ul>
       </div>
        <div class="banner-startup-pro">
           <h2>RECOMMENDED SERVICES</h2>
          <div class="banner-most-btn">
          <div class="banner-most-btn-1stDiv">
            <a href="service/private-limited-company-registration" target="_blank">Company Registration</a>
            <a href="service/one-person-company-opc-registration" target="_blank">OPC Registration</a>
            <a href="service/online-llp-registration-india" target="_blank">LLP Registration</a>
          </div>

          <div class="banner-most-btn-2ndDiv">
            <a href="service/ngo-registration" target="_blank">NGO Registration</a>
            <a href="service/isi-mark-certification" target="_blank">ISI Mark Certification</a>
            <a style="background:#E2E1E1 !important;"
            class="view-more"
            href="https://whizseed.com/Business-Incorporation"
            >+5 More</a
          >
          </div>
        </div>
        </div>
      </div>
      <div
        class="col-lg-5 col-md-12 col-12"
        style="text-align: right; margin-top: 20px"
      >
        <div class="head-banner-img">
          <img
            src="https://www.whizseed.com/frontend/assets/images1/bannerImg.png"
            alt="whizseed-banner"
          />
          <div class="Regulatory small-banner-img bounce">
            <img src="https://www.whizseed.com/frontend/assets/images1/Regulatory-img.svg" alt="Regulatory">
          </div>
          <div class="happyClient small-banner-img bounce">
            <img src="https://www.whizseed.com/frontend/assets/images1/happyClient.svg" alt="happyClient">
          </div>
          <div class="Environmental-img small-banner-img bounce">
            <img src="https://www.whizseed.com/frontend/assets/images1/Environmental-img.svg" alt="Environmental">
          </div>
          <div class="startup200 small-banner-img bounce">
            <img src="https://www.whizseed.com/frontend/assets/images1/startup200.svg" alt="startup200">
          </div>
        </div>
        <div class="V-cfo-service" style="color: #37609b; text-align: center">
          <a href="#" target="_blank">Our Virtual CFO Services</a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--<section class="client-slider-section">
  <div class="container">
      <div class="client-logo-div new-slider">
        <img
          src="https://www.whizseed.com/frontend/assets/images1/cmplogo.png"
          alt="whizseed"
        />
        <img
          src="https://www.whizseed.com/frontend/assets/images1/cmplogo.png"
          alt="whizseed"
        />
      </div>
  </div>
</section>-->
<section class="mt-5" style="display:none;">
  <div class="group-path">
  <div class="group-path-bg">
    <div class="sw bg2">
      <div class="container-fluid">
        <div class="row popular">
          <div class="col-md-12">
            <h2 class="pt-3">Our Core Services</h2>
          </div>
          <div class="demo">
            <div role="tabpanel">
              <ul class="nav nav-tabs nav-tabs-dropdown" role="tablist">
                <li role="presentation" class="">
                  <a
                    class="active"
                    href="#RegisterYourBusiness"
                    aria-controls="start-business"
                    role="tab"
                    data-toggle="tab"
                  >Register Your Business</a
                  >
                </li>
                <li role="presentation" class="">
                  <a
                    class=""
                    href="#GetLicensesandRegistrations"
                    aria-controls="start-business"
                    role="tab"
                    data-toggle="tab"
                  >Get Licenses and Registrations</a
                  >
                </li>
                <li role="presentation" class="">
                  <a
                    class=""
                    href="#ProtectYourIntellectualProperty"
                    aria-controls="start-business"
                    role="tab"
                    data-toggle="tab"
                  >Protect Your Intellectual Property</a
                  >
                </li>
                <li role="presentation" class="">
                  <a
                    class=""
                    href="#EasyTaxRegistrationandFiling"
                    aria-controls="start-business"
                    role="tab"
                    data-toggle="tab"
                  >Easy Tax Registration and Filing</a
                  >
                </li>
                <li role="presentation" class="">
                  <a
                    class=""
                    href="#MandatoryCompliance"
                    aria-controls="start-business"
                    role="tab"
                    data-toggle="tab"
                  >Mandatory Compliance</a
                  >
                </li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="RegisterYourBusiness">
                  <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 mt-4 marginRightTag">
                      <div class="bdr2 bdr2-index-page">
                        <h3>Private Limited Company Registration</h3>
                        <p class="price-section-bdr2">
                          ₹ 999
                        </p>
                        <p class="para-section-bdr2">applicable taxes and Govt. fees extra. </p>
                        <div class="tabpanel-price-and-button">
                            <div class="ulli-section-bdr2">
                              <ul>
                                <li>DSC and DIN for a pair of directors</li>
                                <li>Certificate of Approval for Name</li>
                                <li>Drafting of the AoA and MoA</li>
                                <li>Stamp duty and registration costs</li>
                                <li>Certificate of Company Incorporation</li>
                                <li>Company PAN and TAN</li>
                                <li>Zero Balance Current Account & more</li>
                              </ul>
                            </div>
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage" src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png" alt="btnarrow"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 mt-4 marginRightTag">
                      <div class="bdr2 bdr2-index-page">
                        <h3>LLP Registration</h3>
                        <p class="price-section-bdr2">
                          ₹ 999
                        </p>
                        <p class="para-section-bdr2">applicable taxes and Govt. fees extra. </p>
                        <div class="tabpanel-price-and-button">
                            <div class="ulli-section-bdr2">
                              <ul>
                                <li>DIN and DSC for two Directors</li>
                                <li>Name Approval Certificate</li>
                                <li>Drafting to MoA & AoA</li>
                                <li>Registration fees and stamp duty</li>
                                <li>Company Incorporation Certificate</li>
                                <li>Company PAN and TAN</li>
                                <li>Zero Balance Current Account & more</li>
                              </ul>
                            </div>
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage" src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png" alt="btnarrow"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 mt-4 marginRightTag">
                      <div class="bdr2 bdr2-index-page">
                        <h3>OPC Registration</h3>
                        <p class="price-section-bdr2">
                          ₹ 999
                        </p>
                        <p class="para-section-bdr2">applicable taxes and Govt. fees extra. </p>
                        <div class="tabpanel-price-and-button">
                            <div class="ulli-section-bdr2">
                              <ul>
                                <li>DIN and DSC for two Directors</li>
                                <li>Name Approval Certificate</li>
                                <li>Drafting to MoA & AoA</li>
                                <li>Registration fees and stamp duty</li>
                                <li>Company Incorporation Certificate</li>
                                <li>Company PAN and TAN</li>
                                <li>Zero Balance Current Account & more</li>
                              </ul>
                            </div>
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage" src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png" alt="btnarrow"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 mt-4 marginRightTag ">
                      <div class="bdr2 bdr2-index-page">
                        <h3>Partnership Firm</h3>
                        <p class="price-section-bdr2">
                          ₹ 999
                        </p>
                        <p class="para-section-bdr2">applicable taxes and Govt. fees extra. </p>
                        <div class="tabpanel-price-and-button">
                            <div class="ulli-section-bdr2">
                              <ul>
                                <li>DIN and DSC for two Directors</li>
                                <li>Name Approval Certificate</li>
                                <li>Drafting to MoA & AoA</li>
                                <li>Registration fees and stamp duty</li>
                                <li>Company Incorporation Certificate</li>
                                <li>Company PAN and TAN</li>
                                <li>Zero Balance Current Account & more</li>
                              </ul>
                            </div>
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage" src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png" alt="btnarrow"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="GetLicensesandRegistrations">
                  <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 mt-4 marginRightTag">
                      <div class="bdr2 bdr2-index-page">
                        <h3>Private Limited Company Registration</h3>
                        <p class="price-section-bdr2">
                          ₹ 999
                        </p>
                        <p class="para-section-bdr2">applicable taxes and Govt. fees extra. </p>
                        <div class="tabpanel-price-and-button">
                            <div class="ulli-section-bdr2">
                              <ul>
                                <li>DIN and DSC for two Directors</li>
                                <li>Name Approval Certificate</li>
                                <li>Drafting to MoA & AoA</li>
                                <li>Registration fees and stamp duty</li>
                                <li>Company Incorporation Certificate</li>
                                <li>Company PAN and TAN</li>
                                <li>Zero Balance Current Account & more</li>
                              </ul>
                            </div>
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage" src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png" alt="btnarrow"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 mt-4 marginRightTag">
                      <div class="bdr2 bdr2-index-page">
                        <h3>Private Limited Company Registration</h3>
                        <p class="price-section-bdr2">
                          ₹ 999
                        </p>
                        <p class="para-section-bdr2">applicable taxes and Govt. fees extra. </p>
                        <div class="tabpanel-price-and-button">
                            <div class="ulli-section-bdr2">
                              <ul>
                                <li>DIN and DSC for two Directors</li>
                                <li>Name Approval Certificate</li>
                                <li>Drafting to MoA & AoA</li>
                                <li>Registration fees and stamp duty</li>
                                <li>Company Incorporation Certificate</li>
                                <li>Company PAN and TAN</li>
                                <li>Zero Balance Current Account & more</li>
                              </ul>
                            </div>
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage" src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png" alt="btnarrow"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 mt-4 marginRightTag">
                      <div class="bdr2 bdr2-index-page">
                        <h3>Private Limited Company Registration</h3>
                        <p class="price-section-bdr2">
                          ₹ 999
                        </p>
                        <p class="para-section-bdr2">applicable taxes and Govt. fees extra. </p>
                        <div class="tabpanel-price-and-button">
                            <div class="ulli-section-bdr2">
                              <ul>
                                <li>DIN and DSC for two Directors</li>
                                <li>Name Approval Certificate</li>
                                <li>Drafting to MoA & AoA</li>
                                <li>Registration fees and stamp duty</li>
                                <li>Company Incorporation Certificate</li>
                                <li>Company PAN and TAN</li>
                                <li>Zero Balance Current Account & more</li>
                              </ul>
                            </div>
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage" src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png" alt="btnarrow"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 mt-4 marginRightTag ">
                      <div class="bdr2 bdr2-index-page">
                        <h3>Private Limited Company Registration</h3>
                        <p class="price-section-bdr2">
                          ₹ 999
                        </p>
                        <p class="para-section-bdr2">applicable taxes and Govt. fees extra. </p>
                        <div class="tabpanel-price-and-button">
                            <div class="ulli-section-bdr2">
                              <ul>
                                <li>DIN and DSC for two Directors</li>
                                <li>Name Approval Certificate</li>
                                <li>Drafting to MoA & AoA</li>
                                <li>Registration fees and stamp duty</li>
                                <li>Company Incorporation Certificate</li>
                                <li>Company PAN and TAN</li>
                                <li>Zero Balance Current Account & more</li>
                              </ul>
                            </div>
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage" src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png" alt="btnarrow"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="ProtectYourIntellectualProperty">
                  <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 mt-4 marginRightTag">
                      <div class="bdr2 bdr2-index-page">
                        <h3>Private Limited Company Registration</h3>
                        <p class="price-section-bdr2">
                          ₹ 999
                        </p>
                        <p class="para-section-bdr2">applicable taxes and Govt. fees extra. </p>
                        <div class="tabpanel-price-and-button">
                            <div class="ulli-section-bdr2">
                              <ul>
                                <li>DIN and DSC for two Directors</li>
                                <li>Name Approval Certificate</li>
                                <li>Drafting to MoA & AoA</li>
                                <li>Registration fees and stamp duty</li>
                                <li>Company Incorporation Certificate</li>
                                <li>Company PAN and TAN</li>
                                <li>Zero Balance Current Account & more</li>
                              </ul>
                            </div>
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage" src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png" alt="btnarrow"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 mt-4 marginRightTag">
                      <div class="bdr2 bdr2-index-page">
                        <h3>Private Limited Company Registration</h3>
                        <p class="price-section-bdr2">
                          ₹ 999
                        </p>
                        <p class="para-section-bdr2">applicable taxes and Govt. fees extra. </p>
                        <div class="tabpanel-price-and-button">
                            <div class="ulli-section-bdr2">
                              <ul>
                                <li>DIN and DSC for two Directors</li>
                                <li>Name Approval Certificate</li>
                                <li>Drafting to MoA & AoA</li>
                                <li>Registration fees and stamp duty</li>
                                <li>Company Incorporation Certificate</li>
                                <li>Company PAN and TAN</li>
                                <li>Zero Balance Current Account & more</li>
                              </ul>
                            </div>
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage" src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png" alt="btnarrow"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 mt-4 marginRightTag">
                      <div class="bdr2 bdr2-index-page">
                        <h3>Private Limited Company Registration</h3>
                        <p class="price-section-bdr2">
                          ₹ 999
                        </p>
                        <p class="para-section-bdr2">applicable taxes and Govt. fees extra. </p>
                        <div class="tabpanel-price-and-button">
                            <div class="ulli-section-bdr2">
                              <ul>
                                <li>DIN and DSC for two Directors</li>
                                <li>Name Approval Certificate</li>
                                <li>Drafting to MoA & AoA</li>
                                <li>Registration fees and stamp duty</li>
                                <li>Company Incorporation Certificate</li>
                                <li>Company PAN and TAN</li>
                                <li>Zero Balance Current Account & more</li>
                              </ul>
                            </div>
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage" src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png" alt="btnarrow"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 mt-4 marginRightTag ">
                      <div class="bdr2 bdr2-index-page">
                        <h3>Private Limited Company Registration</h3>
                        <p class="price-section-bdr2">
                          ₹ 999
                        </p>
                        <p class="para-section-bdr2">applicable taxes and Govt. fees extra. </p>
                        <div class="tabpanel-price-and-button">
                            <div class="ulli-section-bdr2">
                              <ul>
                                <li>DIN and DSC for two Directors</li>
                                <li>Name Approval Certificate</li>
                                <li>Drafting to MoA & AoA</li>
                                <li>Registration fees and stamp duty</li>
                                <li>Company Incorporation Certificate</li>
                                <li>Company PAN and TAN</li>
                                <li>Zero Balance Current Account & more</li>
                              </ul>
                            </div>
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage" src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png" alt="btnarrow"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="EasyTaxRegistrationandFiling">
                  <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 mt-4 marginRightTag">
                      <div class="bdr2 bdr2-index-page">
                        <h3>Private Limited Company Registration</h3>
                        <p class="price-section-bdr2">
                          ₹ 999
                        </p>
                        <p class="para-section-bdr2">applicable taxes and Govt. fees extra. </p>
                        <div class="tabpanel-price-and-button">
                            <div class="ulli-section-bdr2">
                              <ul>
                                <li>DIN and DSC for two Directors</li>
                                <li>Name Approval Certificate</li>
                                <li>Drafting to MoA & AoA</li>
                                <li>Registration fees and stamp duty</li>
                                <li>Company Incorporation Certificate</li>
                                <li>Company PAN and TAN</li>
                                <li>Zero Balance Current Account & more</li>
                              </ul>
                            </div>
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage" src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png" alt="btnarrow"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 mt-4 marginRightTag">
                      <div class="bdr2 bdr2-index-page">
                        <h3>Private Limited Company Registration</h3>
                        <p class="price-section-bdr2">
                          ₹ 999
                        </p>
                        <p class="para-section-bdr2">applicable taxes and Govt. fees extra. </p>
                        <div class="tabpanel-price-and-button">
                            <div class="ulli-section-bdr2">
                              <ul>
                                <li>DIN and DSC for two Directors</li>
                                <li>Name Approval Certificate</li>
                                <li>Drafting to MoA & AoA</li>
                                <li>Registration fees and stamp duty</li>
                                <li>Company Incorporation Certificate</li>
                                <li>Company PAN and TAN</li>
                                <li>Zero Balance Current Account & more</li>
                              </ul>
                            </div>
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage" src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png" alt="btnarrow"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 mt-4 marginRightTag">
                      <div class="bdr2 bdr2-index-page">
                        <h3>Private Limited Company Registration</h3>
                        <p class="price-section-bdr2">
                          ₹ 999
                        </p>
                        <p class="para-section-bdr2">applicable taxes and Govt. fees extra. </p>
                        <div class="tabpanel-price-and-button">
                            <div class="ulli-section-bdr2">
                              <ul>
                                <li>DIN and DSC for two Directors</li>
                                <li>Name Approval Certificate</li>
                                <li>Drafting to MoA & AoA</li>
                                <li>Registration fees and stamp duty</li>
                                <li>Company Incorporation Certificate</li>
                                <li>Company PAN and TAN</li>
                                <li>Zero Balance Current Account & more</li>
                              </ul>
                            </div>
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage" src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png" alt="btnarrow"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 mt-4 marginRightTag ">
                      <div class="bdr2 bdr2-index-page">
                        <h3>Private Limited Company Registration</h3>
                        <p class="price-section-bdr2">
                          ₹ 999
                        </p>
                        <p class="para-section-bdr2">applicable taxes and Govt. fees extra. </p>
                        <div class="tabpanel-price-and-button">
                            <div class="ulli-section-bdr2">
                              <ul>
                                <li>DIN and DSC for two Directors</li>
                                <li>Name Approval Certificate</li>
                                <li>Drafting to MoA & AoA</li>
                                <li>Registration fees and stamp duty</li>
                                <li>Company Incorporation Certificate</li>
                                <li>Company PAN and TAN</li>
                                <li>Zero Balance Current Account & more</li>
                              </ul>
                            </div>
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage" src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png" alt="btnarrow"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="MandatoryCompliance">
                  <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 mt-4 marginRightTag">
                      <div class="bdr2 bdr2-index-page">
                        <h3>Private Limited Company Registration</h3>
                        <p class="price-section-bdr2">
                          ₹ 999
                        </p>
                        <p class="para-section-bdr2">applicable taxes and Govt. fees extra. </p>
                        <div class="tabpanel-price-and-button">
                            <div class="ulli-section-bdr2">
                              <ul>
                                <li>DIN and DSC for two Directors</li>
                                <li>Name Approval Certificate</li>
                                <li>Drafting to MoA & AoA</li>
                                <li>Registration fees and stamp duty</li>
                                <li>Company Incorporation Certificate</li>
                                <li>Company PAN and TAN</li>
                                <li>Zero Balance Current Account & more</li>
                              </ul>
                            </div>
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage" src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png" alt="btnarrow"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 mt-4 marginRightTag">
                      <div class="bdr2 bdr2-index-page">
                        <h3>Private Limited Company Registration</h3>
                        <p class="price-section-bdr2">
                          ₹ 999
                        </p>
                        <p class="para-section-bdr2">applicable taxes and Govt. fees extra. </p>
                        <div class="tabpanel-price-and-button">
                            <div class="ulli-section-bdr2">
                              <ul>
                                <li>DIN and DSC for two Directors</li>
                                <li>Name Approval Certificate</li>
                                <li>Drafting to MoA & AoA</li>
                                <li>Registration fees and stamp duty</li>
                                <li>Company Incorporation Certificate</li>
                                <li>Company PAN and TAN</li>
                                <li>Zero Balance Current Account & more</li>
                              </ul>
                            </div>
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage" src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png" alt="btnarrow"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 mt-4 marginRightTag">
                      <div class="bdr2 bdr2-index-page">
                        <h3>Private Limited Company Registration</h3>
                        <p class="price-section-bdr2">
                          ₹ 999
                        </p>
                        <p class="para-section-bdr2">applicable taxes and Govt. fees extra. </p>
                        <div class="tabpanel-price-and-button">
                            <div class="ulli-section-bdr2">
                              <ul>
                                <li>DIN and DSC for two Directors</li>
                                <li>Name Approval Certificate</li>
                                <li>Drafting to MoA & AoA</li>
                                <li>Registration fees and stamp duty</li>
                                <li>Company Incorporation Certificate</li>
                                <li>Company PAN and TAN</li>
                                <li>Zero Balance Current Account & more</li>
                              </ul>
                            </div>
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage" src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png" alt="btnarrow"></span></a>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-12 col-12 mt-4 marginRightTag ">
                      <div class="bdr2 bdr2-index-page">
                        <h3>Private Limited Company Registration</h3>
                        <p class="price-section-bdr2">
                          ₹ 999
                        </p>
                        <p class="para-section-bdr2">applicable taxes and Govt. fees extra. </p>
                        <div class="tabpanel-price-and-button">
                            <div class="ulli-section-bdr2">
                              <ul>
                                <li>DIN and DSC for two Directors</li>
                                <li>Name Approval Certificate</li>
                                <li>Drafting to MoA & AoA</li>
                                <li>Registration fees and stamp duty</li>
                                <li>Company Incorporation Certificate</li>
                                <li>Company PAN and TAN</li>
                                <li>Zero Balance Current Account & more</li>
                              </ul>
                            </div>
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage" src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png" alt="btnarrow"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
</section>
<!-- <section class="service-platform pt-5">
  <div class="container">
    <div class="service-header">
      <h2>
        <strong>Lorem&#39;s</strong> Largest Services <strong>Platform</strong>
      </h2>
      <p>
        We believe in transforming your vision into reality by providing
        unparalleled solutions and exceptional results, so trust our experts.
      </p>
    </div>
    <div class="service-item-new">
      <div class="service-item-list-new">
        <div class="service-details-new">
          
          <div class="service-list-details-new">
            <h4>Business Setup Services</h4>
            <p>
              Unlock the doors to success with seamless business setup, paving
              the way for your entrepreneurial journey with our professionals at
              whizseed.
              <a
                href="https://www.whizseed.com/business-incorporation"
                target="_blank"
                ><i>Read More</i></a
              >
            </p>
          </div>
        </div>
      </div>
      <div class="service-item-list-new">
        <div class="service-details-new">
          
          <div class="service-list-details-new">
            <h4>Tax Registration</h4>
            <p>
              Get your business on the right track with hassle-free tax
              registration, ensuring compliance and maximizing your financial
              opportunities.
              <a
                href="https://www.whizseed.com/tax-registrations"
                target="_blank"
                ><i>Read More</i></a
              >
            </p>
          </div>
        </div>
      </div>
      <div class="service-item-list-new">
        <div class="service-details-new">
          
          <div class="service-list-details-new">
            <h4>Fundraising Services</h4>
            <p>
              Elevate your fundraising efforts to new heights with our expert
              services, connecting you to the resources and opportunities to
              achieve your goals.
              <a
                href="https://www.whizseed.com/fundraising-services"
                target="_blank"
                ><i>Read More</i></a
              >
            </p>
          </div>
        </div>
      </div>
      <div class="service-item-list-new">
        <div class="service-details-new">
          
          <div class="service-list-details-new">
            <h4>Compliance Management</h4>
            <p>
              Safeguarding and Empowering your business landscape by regulating
              challenges with ease comprehensive compliance management
              solutions.
              <a
                href="https://www.whizseed.com/accounting-compliance"
                target="_blank"
                ><i>Read More</i></a
              >
            </p>
          </div>
        </div>
      </div>
      <div class="service-item-list-new">
        <div class="service-details-new">
          
          <div class="service-list-details-new">
            <h4>Legal Agreement</h4>
            <p>
              Our expertly crafted legal agreements provide the solid foundation
              you need, ensuring clarity, protection, and peace of mind in every
              business transaction.
              <a
                href="https://www.whizseed.com/legal-agreements"
                target="_blank"
                ><i>Read More</i></a
              >
            </p>
          </div>
        </div>
      </div>
      <div class="service-item-list-new">
        <div class="service-details-new">
          
          <div class="service-list-details-new">
            <h4>Virtual CFO Advisory</h4>
            <p>
              Unleash the strategic power of your business with our Virtual CFO
              Advisory services, guiding you towards financial excellence and
              unlocking unparalleled growth opportunities.
              <a
                href="https://www.whizseed.com/services/virtual-cfo-services"
                target="_blank"
                ><i>Read More</i></a
              >
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<section class='section-customers-choose-us'>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-5 col-md-12 col-sm-12 customers-choose-us-heading">
        <h2>Why Choose Whizseed?</h2>
        <p>Choose WhizSeed for all your business needs in India because we are your trusted partner in entrepreneurial success. Here's how we can help you:</p>
        <div class='customers-choose-us-li'>
          <ul>
            <li><strong>Expert Guidance:</strong> Benefit from our seasoned experts who provide tailored advice for your specific business goals.</li>
            <li><strong>Comprehensive Services:</strong> We offer a wide range of services, from company registration to financial planning, to meet all your business needs.</li>
            <li><strong>Customized Solutions:</strong> Our solutions are designed to address your unique challenges, ensuring your business thrives in the Indian market.</li>
            <li><strong>Regulatory Compliance:</strong> Stay on top of ever-changing regulations with our assistance, minimizing legal hassles for your business.</li>
            <li><strong>Support at Every Step:</strong> WhizSeed is with you from the inception of your business idea to its realization, providing constant support and guidance.</li>
          </ul>
        </div>
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class='row'>
          <div class='col-lg-6 col-md-6 col-sm-12'>
            <div class='client-satisfaction-section'>
              <img src="https://www.whizseed.com/frontend/assets/images1/analytics-icon.png" alt='whizseed icon'>
              <h3>Simplified Dashboard Experience</h3>
              <p>Seamlessly navigate our user-friendly dashboard for a hassle-free journey.</p>
            </div>
          </div>
           <div class='col-lg-6 col-md-6 col-sm-12'>
            <div class='client-satisfaction-section'>
              <img src="https://www.whizseed.com/frontend/assets/images1/analytics-icon.png" alt='whizseed icon'>
              <h3>Premium Expertise, Budget-Friendly Rates</h3>
              <p>Enjoy top-tier services without breaking the bank.</p>
            </div>
          </div>
           <div class='col-lg-6 col-md-6 col-sm-12'>
            <div class='client-satisfaction-section'>
              <img src="https://www.whizseed.com/frontend/assets/images1/analytics-icon.png" alt='whizseed icon'>
              <h3>A Comprehensive Hub of Legal Experts</h3>
              <p>Find skilled lawyers, chartered accountants, and company secretaries for all your essential services.</p>
            </div>
          </div>
           <div class='col-lg-6 col-md-6 col-sm-12'>
            <div class='client-satisfaction-section'>
              <img src="https://www.whizseed.com/frontend/assets/images1/analytics-icon.png" alt='whizseed icon'>
              <h3>Your Questions, Our Priority</h3>
              <p>Expect your queries to be addressed within 24 hours – your business success is our top concern.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <section class="customerslove-section pt-5">
  <div class="contain">
    <h2>Reasons Why Customers Love Us</h2>
    <div class="row pt-5">
      <div class="col-lg-4 col-md-4 col-sm-12 customer-info-use customer-info-use-left offset-md-2">
        <img src="https://whizseed.com/frontend/assets/images1/truley-digital.svg" alt="truley-digital-12">
        <b>Easy-to-Use Dashboard</b>
        <p>Complete the entire process and chat with us from your dashboard!</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 customer-info-use customer-info-use-right">
        <img src="https://whizseed.com/frontend/assets/images1/truley-digital.svg" alt="truley-digital-12">
        <b>Easy-to-Use Dashboard</b>
        <p>Complete the entire process and chat with us from your dashboard!</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 customer-info-use customer-info-use-left pt-3  offset-md-2">
        <img src="https://whizseed.com/frontend/assets/images1/truley-digital.svg" alt="truley-digital-12">
        <b>Easy-to-Use Dashboard</b>
        <p>Complete the entire process and chat with us from your dashboard!</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 customer-info-use pt-3 customer-info-use-right">
        <img src="https://whizseed.com/frontend/assets/images1/truley-digital.svg" alt="truley-digital-12">
        <b>Easy-to-Use Dashboard</b>
        <p>Complete the entire process and chat with us from your dashboard!</p>
      </div>
    </div>
  </div>
</section> -->
<section class="global-stratup-section">
  <div class="container-fluid">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <div class="global-stratup-country-flag">
          <h2>The backbone for <br>global <span>Start up</span></h2>
          <p>WHIZSEED is the ultimate platform for aspiring entrepreneurs and<br> startups. You can streamline your startup journey from ideation to <br> execution.</p>
          <img src="https://www.whizseed.com/frontend/assets/images1/countryimag.png" alt="country-flag">

          <div class="flag-view-more-div">
          <a class="flag-view-more" href="https://whizseed.com/global-incorporation">+5 More <span><img class="btnarroewhiteimage" src="https://www.whizseed.com/frontend/assets/images1/whitearrow.png" alt="btnarrow"></span></a>
        </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12"></div>

  </div>
</section>
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
                          <p>WhizSeed made our company registration a breeze! Their expert guidance and efficient process saved us time and effort. Highly recommended for startups!</p>
                          <p class="client-name-tag">- Aman Gupta</p>
                        </div>
                      </div>
                    </div>
                 </div>
                 
                 <div class="owl-item" style="width: 128.906px; margin-right: 10px;"><div class="item testimonial-item0bottom">
                      <div class='client-revier-main'>
                        <div class='client-revier-img-service-ft'>
                          <img src="https://www.whizseed.com/frontend/assets/images1/akash-yadav.jpg" alt="akash-yadav">
                        </div>
                        <div class='client-revier-para'>
                          <img src="https://www.whizseed.com/frontend/assets/images1/commma.png" alt="akash-yadav">
                          <p>Choosing WhizSeed for our NBFC needs was a game-changer. Their in-depth knowledge and personalized solutions ensured a smooth and compliant operation.</p>
                          <p class="client-name-tag">- Akash Yadav</p>
                        </div>
                      </div>
                    </div>
                 </div>
                 <div class="owl-item" style="width: 128.906px; margin-right: 10px;"><div class="item testimonial-item0bottom">
                      <div class='client-revier-main'>
                        <div class='client-revier-img-service-ft'>
                          <img src="https://www.whizseed.com/frontend/assets/images1/sonam-malhotra.jpg" alt="sonam-malhotra">
                        </div>
                        <div class='client-revier-para'>
                          <img src="https://www.whizseed.com/frontend/assets/images1/commma.png" alt="sonam-malhotra">
                          <p>WhizSeed's compliance services have been a lifesaver for our business. They keep us on the right side of the law, allowing us to focus on growth with confidence.</p>
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