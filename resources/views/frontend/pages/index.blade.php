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
    <div class="row align-items-center">
      <!-- Left Content -->
      <div class="col-lg-7 col-md-12 banner-heading">
        <h1 class="display-4 fw-bold mb-3">
          Your One-Stop Destination <br />
          for All Business Solutions
        </h1>
        <p class="lead mb-4 text-muted">
          At <strong>Regulationwala</strong>, we empower entrepreneurs and startups across India with end-to-end
          business registration, compliance, and growth services.
        </p>

        <!-- Search and Services -->
        <div class="banner-search mb-4">
          <input type="text" id="autosearch" class="form-control mb-2" placeholder="Search for services..." />
          <input type="submit" class="search-icon" value="">
          <button type="button" class="btn btn-primary px-4">
            Explore Services
            <img class="ms-2" src="{{ asset('frontend/assets/images1/whitearrow.png') }}" alt="arrow" />
          </button>
        </div>

        <!-- Animated Text or Popular Services -->
        <!-- <div class="show-most-service d-flex flex-wrap gap-2 mt-3">
          <span class="badge">Company Registration</span>
          <span class="badge">LLP Registration</span>
          <span class="badge">Startup India</span>
          <span class="badge">GST Registration</span>
          <span class="badge">OPC Registration</span>
        </div> -->

        <!-- Recommended Services -->
        <div class="banner-startup-pro mt-4">
          <h2 class="h5 fw-bold mb-3">Recommended Services</h2>
          <div class="banner-most-btn d-flex flex-wrap gap-3">
            <a href="service/private-limited-company-registration" class="btn btn-outline-primary">Company
              Registration</a>
            <a href="service/one-person-company-opc-registration" class="btn btn-outline-primary">OPC Registration</a>
            <a href="service/online-llp-registration-india" class="btn btn-outline-primary">LLP Registration</a>
            <a href="service/ngo-registration" class="btn btn-outline-primary">NGO Registration</a>
            <a href="service/isi-mark-certification" class="btn btn-outline-primary">ISI Certification</a>
            <a href="https://regulationwala.com/Business-Incorporation" class="btn btn-light text-primary">+ More
              Services</a>
          </div>
        </div>
      </div>

      <!-- Right Image -->
      <div class="col-lg-5 col-md-12 text-center mt-4 mt-lg-0">
        <div class="head-banner-img position-relative">
          <img src="{{ asset('frontend/assets/images1/banner.png') }}" class="img-fluid" alt="Regulationwala Banner" />

          <!-- <div class="small-banner-img bounce position-absolute top-0 start-0">
            <img src="/path-to-your-assets/compliance.svg" alt="Compliance" />
          </div>
          <div class="small-banner-img bounce position-absolute top-0 end-0">
            <img src="/path-to-your-assets/happy-clients.svg" alt="Happy Clients" />
          </div>
          <div class="small-banner-img bounce position-absolute bottom-0 start-0">
            <img src="/path-to-your-assets/environmental.svg" alt="Environmental" />
          </div>
          <div class="small-banner-img bounce position-absolute bottom-0 end-0">
            <img src="/path-to-your-assets/startup.svg" alt="Startup 200+" />
          </div> -->
        </div>

        <!-- Optional CTA below image -->
        <div class="V-cfo-service mt-3 text-primary">
          <a href="#" class="fw-semibold text-decoration-none">Discover Our Virtual CFO Services</a>
        </div>
      </div>
    </div>
  </div>
</section>


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
                    <a class="active" href="#RegisterYourBusiness" aria-controls="start-business" role="tab"
                      data-toggle="tab">Register Your Business</a>
                  </li>
                  <li role="presentation" class="">
                    <a class="" href="#GetLicensesandRegistrations" aria-controls="start-business" role="tab"
                      data-toggle="tab">Get Licenses and Registrations</a>
                  </li>
                  <li role="presentation" class="">
                    <a class="" href="#ProtectYourIntellectualProperty" aria-controls="start-business" role="tab"
                      data-toggle="tab">Protect Your Intellectual Property</a>
                  </li>
                  <li role="presentation" class="">
                    <a class="" href="#EasyTaxRegistrationandFiling" aria-controls="start-business" role="tab"
                      data-toggle="tab">Easy Tax Registration and Filing</a>
                  </li>
                  <li role="presentation" class="">
                    <a class="" href="#MandatoryCompliance" aria-controls="start-business" role="tab"
                      data-toggle="tab">Mandatory Compliance</a>
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
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage"
                                  src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png"
                                  alt="btnarrow"></span></a>
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
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage"
                                  src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png"
                                  alt="btnarrow"></span></a>
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
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage"
                                  src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png"
                                  alt="btnarrow"></span></a>
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
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage"
                                  src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png"
                                  alt="btnarrow"></span></a>
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
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage"
                                  src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png"
                                  alt="btnarrow"></span></a>
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
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage"
                                  src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png"
                                  alt="btnarrow"></span></a>
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
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage"
                                  src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png"
                                  alt="btnarrow"></span></a>
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
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage"
                                  src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png"
                                  alt="btnarrow"></span></a>
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
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage"
                                  src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png"
                                  alt="btnarrow"></span></a>
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
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage"
                                  src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png"
                                  alt="btnarrow"></span></a>
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
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage"
                                  src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png"
                                  alt="btnarrow"></span></a>
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
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage"
                                  src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png"
                                  alt="btnarrow"></span></a>
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
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage"
                                  src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png"
                                  alt="btnarrow"></span></a>
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
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage"
                                  src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png"
                                  alt="btnarrow"></span></a>
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
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage"
                                  src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png"
                                  alt="btnarrow"></span></a>
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
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage"
                                  src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png"
                                  alt="btnarrow"></span></a>
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
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage"
                                  src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png"
                                  alt="btnarrow"></span></a>
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
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage"
                                  src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png"
                                  alt="btnarrow"></span></a>
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
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage"
                                  src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png"
                                  alt="btnarrow"></span></a>
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
                            <a href="#" target="_blank">Know More <span><img class="btnarroeimage"
                                  src="https://www.whizseed.com/frontend/assets/images1/btnarrow.png"
                                  alt="btnarrow"></span></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
</section>

<section class='section-customers-choose-us'>
  <div class="container-fluid">
    <div class="row">

      <div class="col-lg-6 col-md-12 col-sm-12">
        <div class='row'>
          <div class='col-lg-6 col-md-6 col-sm-12'>
            <div class='client-satisfaction-section'>
              <!-- <img src="https://www.whizseed.com/frontend/assets/images1/analytics-icon.png" alt='whizseed icon'> -->
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-bar-chart-line" viewBox="0 0 16 16">
                <path
                  d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1zm1 12h2V2h-2zm-3 0V7H7v7zm-5 0v-3H2v3z" />
              </svg>
              <h3>Simplified Dashboard Experience</h3>
              <p>Seamlessly navigate our user-friendly dashboard for a hassle-free journey.</p>
            </div>
          </div>
          <div class='col-lg-6 col-md-6 col-sm-12'>
            <div class='client-satisfaction-section'>
              <!-- <img src="https://www.whizseed.com/frontend/assets/images1/analytics-icon.png" alt='whizseed icon'> -->
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-bar-chart-line" viewBox="0 0 16 16">
                <path
                  d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1zm1 12h2V2h-2zm-3 0V7H7v7zm-5 0v-3H2v3z" />
              </svg>
              <h3>Premium Expertise, Budget-Friendly Rates</h3>
              <p>Enjoy top-tier services without breaking the bank.</p>
            </div>
          </div>
          <div class='col-lg-6 col-md-6 col-sm-12'>
            <div class='client-satisfaction-section'>
              <!-- <img src="https://www.whizseed.com/frontend/assets/images1/analytics-icon.png" alt='whizseed icon'> -->
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-bar-chart-line" viewBox="0 0 16 16">
                <path
                  d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1zm1 12h2V2h-2zm-3 0V7H7v7zm-5 0v-3H2v3z" />
              </svg>
              <h3>A Comprehensive Hub of Legal Experts</h3>
              <p>Find skilled lawyers, chartered accountants, and company secretaries for all your essential services.
              </p>
            </div>
          </div>
          <div class='col-lg-6 col-md-6 col-sm-12'>
            <div class='client-satisfaction-section'>
              <!-- <img src="https://www.whizseed.com/frontend/assets/images1/analytics-icon.png" alt='whizseed icon'> -->
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-bar-chart-line" viewBox="0 0 16 16">
                <path
                  d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1zm1 12h2V2h-2zm-3 0V7H7v7zm-5 0v-3H2v3z" />
              </svg>
              <h3>Your Questions, Our Priority</h3>
              <p>Expect your queries to be addressed within 24 hours – your business success is our top concern.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-1"></div>
      <div class="col-lg-5 col-md-12 col-sm-12 customers-choose-us-heading">
        <h2>Why Choose Regulation?</h2>
        <p>Choose Regulation for all your business needs in India because we are your trusted partner in entrepreneurial
          success. Here's how we can help you:</p>
        <div class='customers-choose-us-li'>
          <ul>
            <li><strong>Expert Guidance:</strong> Benefit from our seasoned experts who provide tailored advice for your
              specific business goals.</li>
            <li><strong>Comprehensive Services:</strong> We offer a wide range of services, from company registration to
              financial planning, to meet all your business needs.</li>
            <li><strong>Customized Solutions:</strong> Our solutions are designed to address your unique challenges,
              ensuring your business thrives in the Indian market.</li>
            <li><strong>Regulatory Compliance:</strong> Stay on top of ever-changing regulations with our assistance,
              minimizing legal hassles for your business.</li>
            <li><strong>Support at Every Step:</strong> Regulation is with you from the inception of your business idea
              to its realization, providing constant support and guidance.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="global-stratup-section">
  <div class="container-fluid">
    <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="global-stratup-country-flag">
        <h2>The backbone for <br>global <span>Start up</span></h2>
        <p>Regulation is the ultimate platform for aspiring entrepreneurs and<br> startups. You can streamline your
          startup journey from ideation to <br> execution.</p>
        <img src="https://www.whizseed.com/frontend/assets/images1/countryimag.png" alt="country-flag">

        <div class="flag-view-more-div">
          <a class="flag-view-more" href="https://whizseed.com/global-incorporation">+5 More <span><img
                class="btnarroewhiteimage" src="https://www.whizseed.com/frontend/assets/images1/whitearrow.png"
                alt="btnarrow"></span></a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12">
    </div>

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

            <div class="owl-stage"
              style="transform: translate3d(-1527px, 0px, 0px); transition: all 0.25s ease 0s; width: 3334px;">

              <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
                <div class="item testimonial-item0bottom">
                  <div class='client-revier-main'>
                    <div class='client-revier-img-service-ft'>
                      <img src="https://www.whizseed.com/frontend/assets/images1/aman-gupta.jpg" alt="aman-gupta">
                    </div>
                    <div class='client-revier-para'>
                      <img src="https://www.whizseed.com/frontend/assets/images1/commma.png" alt="aman-gupta">
                      <p>Regulation made our company registration a breeze! Their expert guidance and efficient process
                        saved us time and effort. Highly recommended for startups!</p>
                      <p class="client-name-tag">- Aman Gupta</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
                <div class="item testimonial-item0bottom">
                  <div class='client-revier-main'>
                    <div class='client-revier-img-service-ft'>
                      <img src="https://www.whizseed.com/frontend/assets/images1/akash-yadav.jpg" alt="akash-yadav">
                    </div>
                    <div class='client-revier-para'>
                      <img src="https://www.whizseed.com/frontend/assets/images1/commma.png" alt="akash-yadav">
                      <p>Choosing WhizSeed for our NBFC needs was a game-changer. Their in-depth knowledge and
                        personalized solutions ensured a smooth and compliant operation.</p>
                      <p class="client-name-tag">- Akash Yadav</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-item" style="width: 128.906px; margin-right: 10px;">
                <div class="item testimonial-item0bottom">
                  <div class='client-revier-main'>
                    <div class='client-revier-img-service-ft'>
                      <img src="https://www.whizseed.com/frontend/assets/images1/sonam-malhotra.jpg"
                        alt="sonam-malhotra">
                    </div>
                    <div class='client-revier-para'>
                      <img src="https://www.whizseed.com/frontend/assets/images1/commma.png" alt="sonam-malhotra">
                      <p>Regulation's compliance services have been a lifesaver for our business. They keep us on the
                        right side of the law, allowing us to focus on growth with confidence.</p>
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