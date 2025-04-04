@extends('frontend.layouts.master')
@section('title', $records->meta_title ?? "whizseed")
@section('meta_keywords', $records->meta_keywords ?? "whizseed")
@section('meta_description', $records->meta_description ?? "whizseed")
<!-- Google tag (gtag.js) -->

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16554738835"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16554738835');
gtag('event', 'conversion', {'send_to': 'AW-16554738835/G-OOCNXJ_6wZEJOJ9dU9'});
</script> 
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-6497941910797383"
     crossorigin="anonymous"></script>
@push('customecss') 
<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/custome.css')}}">
@endpush
@section('content')

<section class="thanku-sction">
    <div class="thanku-page">
        <!-- <img src="https://startupfino.com/frontend/assets/images/startupfino-thankusign.svg" alt="thanku"> -->
        <h2 class="text-center text-primary">Thank you for getting in touch!</h2>
        <p> We appreciate you contacting us. One of our colleagues will get back to you shortly.</p>

<p class="text-center text-primary">The Whizseed Team</p>
<p>You may also contact us at: 9625432342</p>
        <a href="{{url('/')}}">Back to Home</a>
    </div>
</section>


@endsection