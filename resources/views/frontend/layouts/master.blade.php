<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}" />
    <title>Regulation</title>

    <meta name="keywords" content="Regulation" />
    <meta
      name="description"
      content="@yield('meta_description','Regulation')"
    />

    <meta property="og:title" content="@yield('title','Regulation')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta
      property="og:description"
      content="@yield('meta_description','Regulation')"
    />
    <meta property="og:site_name" content="Regulation" />
    <meta
      property="og:image"
      content="{{asset('frontend/assets/images/logo.jpeg')}}"
    />
    <meta property="og:image:type" content="image/gif" />
    <meta property="og:image:alt" content="@yield('title','Regulation')" />
    <meta name="google-site-verification" content="9c8es8146KgdopVTgR0FjoqyiH1atBeTVT4eZr8qjQk" />
    <meta name="p:domain_verify" content="a3a22f6a3c408229e2c37104738e2df1"/>
    <meta name="google-adsense-account" content="ca-pub-6497941910797383">
    

    <!-- <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@Regulation">
    <meta name="twitter:title" content="Online Legal Services for Startups and SMEs in India | Regulation">
    <meta name="twitter:description" content="At Regulation, We are dedicated to fueling your entrepreneurial fire. Our services and expert guidance empower startups and entrepreneurs across India to build.">
    <meta name="twitter:creator" content="@Regulation">
    <meta name="twitter:image" content="https://Regulation.com/frontend/assets/images/logo.svg"> -->

    <link rel="canonical" href="{{url()->current()}}" />
    <link
      rel="shortcut icon"
      href="{{asset('frontend/assets/images/logo.jpeg')}}"
      type="image/x-icon"
    />
    <link
      rel="shortcut icon"
      href="{{asset('frontend/assets/images/logo.jpeg')}}"
      type="image/x-icon"
    />

    <link
      type="text/css"
      rel="stylesheet"
      href="{{asset('frontend/assets/css/bootstrap.min.css')}}"
    />
    <!-- <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('frontend/assets/css/font-awesome.css')}}"
    /> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('frontend/assets/css/animate.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('frontend/assets/css/slick.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('frontend/assets/css/style.css')}}"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="{{asset('frontend/assets/css/media.css')}}"
    />

    <link
      rel="stylesheet"
      type="text/css"
      href="https://www.whizseed.com/frontend/assets/css/custome.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://www.whizseed.com/frontend/assets/css/new_custome.css"
    />

    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="https://owlcarousel2.github.io/OwlCarousel2/assets/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">

    <!-- @stack('customecss') -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->
   
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KH9JFH9QB7"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-KH9JFH9QB7');
      gtag('config', 'AW-16554738835');
    </script>
    
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-52FR9VNN');</script>
<!-- End Google Tag Manager -->

  </head>

  <body class="bg-white">
      
      @include('frontend.layouts.header') 
      @yield('content')

    <!-- Model -->
    <div
      class="modal fade"
      id="login_modal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true" style="position: relative; bottom: 4px"
                >&times;</span
              >
            </button>
          </div>
          <div class="modal-body">
            <div class="mainContainer">
              <div class="formPage">
                <div class="login formBlock active" id="tab-1">
                  <div class="" id="formlogin">
                    <form name="frmlogin" id="frmlogin" method="post">
                      <p>Login to your account:</p>
                      <div class="g-signin2" data-onsuccess="onSignIn"></div>
                      <div class="form-group">
                        <input
                          type="email"
                          name="uemail"
                          id="uemail"
                          placeholder="Email Address"
                          autocomplete="off"
                        />
                        <p
                          id="uemailError"
                          class="error validation_message_error"
                        ></p>
                      </div>
                      <div class="form-group">
                        <input
                          type="password"
                          name="password"
                          id="password"
                          placeholder="Password"
                        />
                        <p
                          id="passwordError"
                          class="error validation_message_error"
                        ></p>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="forgot_pass terms">
                            <h3 style="text-align: left">
                              <a href="#" class="tabclass" data-tab="tab-3"
                                >Forgot Password</a
                              >
                            </h3>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group alignRight">
                            <button
                              type="button"
                              class="loginbtn"
                              onclick="checkUser('mypop')"
                            >
                              Login
                            </button>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-12 terms">
                        <p>
                          By clicking the 'Sign Up' button, you confirm that you
                          accept our<a href="">Terms of Use</a> and
                          <a href="">Privacy Policy</a>
                        </p>
                      </div>
                      <div class="errorMessage">
                        <div class="loginmsg error"></div>
                      </div>
                      <!--<div class="col-md-12 terms">-->
                      <!--	<h3>Create an account? <a href="#" class="tabclass" data-tab="tab-2">Sign Up</a></h3>-->
                      <!--</div>-->
                    </form>
                  </div>
                  <div class="" id="loginDivotp" style="display: none">
                    <form
                      class="form-horizontal"
                      name="loginfrmverrifyOtppage"
                      id="loginfrmverrifyOtppage"
                      method="post"
                    >
                      <p>Verify account:</p>
                      <div class="form-group">
                        <input
                          type="password"
                          name="loginverifyOtp"
                          id="loginverifyOtp"
                          placeholder="OTP"
                          required
                        />
                        <p
                          id="loginverifyOtpError"
                          class="error validation_message_error"
                        ></p>
                      </div>
                      <div class="form-group">
                        <p id="loginotptimer"></p>
                      </div>
                      <div class="form-group alignRight">
                        <button
                          type="button"
                          class="verifyProfotpbtn"
                          onclick="verificationProfile('loginpop')"
                        >
                          Verify OTP
                        </button>
                      </div>
                      <div
                        class="errorMessageotp validation_message_error"
                      ></div>
                    </form>
                  </div>
                  <div class="" id="loginDivotpresent" style="display: none">
                    <p>Verify account:</p>
                    <div class="form-group alignRight">
                      <button
                        type="button"
                        class="resendOtpBtn"
                        onclick="resendOtp()"
                      >
                        Resend Otp
                      </button>
                    </div>
                    <div
                      class="resendmessageotp validation_message_error"
                    ></div>
                  </div>
                </div>
                
                <div class="register formBlock" id="tab-3">
                  <div class="form-row showReg" id="registerDiv">
                    <form name="frmResetPwd" id="frmResetPwd" method="post">
                      <p>Forgot Password:</p>
                      <div class="form-group">
                        <input
                          type="email"
                          name="email"
                          placeholder="Email Address(Username)"
                          autocomplete="off"
                          required
                        />
                        <p
                          id="emailError"
                          class="message validation_message"
                        ></p>
                      </div>
                      <div class="form-group alignRight">
                        <button type="submit" id="Resetbtn">Submit</button>
                      </div>
                      <div class="col-md-12 terms">
                        <p>
                          By clicking the 'Sign Up' button, you confirm that you
                          accept our<a href="">Terms of Use</a> and
                          <a href="">Privacy Policy</a>
                        </p>
                        <h3>
                          Have an account?
                          <a href="#" class="tabclass" data-tab="tab-1"
                            >Sign In</a
                          >
                        </h3>
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
    
    @include('frontend.layouts.footer')
  </body>
</html>
