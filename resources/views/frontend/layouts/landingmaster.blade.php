<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}" />
    <title>@yield('title','Whizseed')</title>

    <meta name="keywords" content="@yield('meta_keywords','Whizseed')" />
    <meta
      name="description"
      content="@yield('meta_description','Whizseed')"
    />

    <meta property="og:title" content="@yield('title','Whizseed')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta
      property="og:description"
      content="@yield('meta_description','Whizseed')"
    />
    <meta property="og:site_name" content="StartupFino" />
    <meta
      property="og:image"
      content="{{asset('frontend/assets/images/startupfinogiflogo.gif')}}"
    />
    <meta property="og:image:type" content="image/gif" />
    <meta property="og:image:alt" content="@yield('title','Whizseed')" />

    <link rel="canonical" href="{{url()->current()}}" />
    <link
      rel="shortcut icon"
      href="{{asset('frontend/assets/images/logo.svg')}}"
      type="image/x-icon"
    />
    <link
      rel="shortcut icon"
      href="{{asset('frontend/assets/images/logo.svg')}}"
      type="image/x-icon"
    />

    <link
      type="text/css"
      rel="stylesheet"
      href="{{asset('frontend/assets/css/bootstrap.min.css')}}"
    />
    

    <link
      rel="stylesheet"
      type="text/css"
      href="{{asset('frontend/assets/css/style.css')}}"
    />
<link
      rel="stylesheet"
      type="text/css"
      href="https://www.startupfino.com/frontend/assets/css/landing.css"
    />

   
 
  </head>

  <body class="bg-white">
      @include('frontend.layouts.landingheader') @yield('content')

    @include('frontend.layouts.landingfooter')
  </body>
</html>
