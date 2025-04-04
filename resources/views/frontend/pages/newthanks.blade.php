@extends('frontend.layouts.master')

<!-- Google tag (gtag.js) -->
<?php
  Log::info('send data for email on new thanks page ='.$obj);
  $name =(isset($obj->name)?$obj->name:'');
  $email =(isset($obj->email)?$obj->email:'');
  $mobile =(isset($obj->mobile)?$obj->mobile:'');
  $subject =(isset($obj->subject)?$obj->subject:'');
  $description =(isset($obj->description)?$obj->description:'');
  $service_slug =(isset($obj->service_slug)?$obj->service_slug:'');
?>
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11060471183"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11060471183');
</script>
<!-- Event snippet for Submit lead form conversion page -->
<script>
	gtag('event', 'conversion', {'send_to': 'AW-11060471183/0C1tCJ-84KAYEI_LhZop'});
</script>  
@push('customecss') 
<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/custome.css')}}">
@endpush
@section('content')

<section class="thanku-sction">
    <div class="thanku-page">
        <!-- <img src="https://complianceclock.com/frontend/assets/images/startupfino-thankusign.svg" alt="startupfino-thanku"> -->
        <h1 class="text-center text-primary">THANK YOU!</h1>
        <a href="https://startupfino.com/">Back to Home</a>
    </div>
</section>

<form action="{{route('sendnewemail')}}" method="POST" name="emailForm" id="emailForm">
  @csrf
    <input type="hidden" name="name" value="{{$name}}">
    <input type="hidden" name="email" value="{{$email}}" required>
    <input type="hidden" name="mobile" value="{{$mobile}}" required>
    <input type="hidden" name="subject" value="{{$subject}}">
    <input type="hidden" name="description" value="{{$description}}">
    <input type="hidden" name="service_slug" value="{{$service_slug}}" required>
</form>
<script type="text/javascript">
  document.forms["emailForm"].submit();
</script>

@endsection