@extends('admin.layouts.master')
@section('content')

@if(Auth::user()->is_admin == 1)
<section class="content">
    <h1>
        Dashboard
    </h1>

@else

          <section class="content-header">
            <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
            <h1>Template and Tools to manage Every Aspect of Your Business</h1>
       
          </section>
@endif

    <div class="row">
    @if(Auth::user()->is_admin == 1)

           @include('admin.dashboard.admin_panel')
        
    @else

           @include('admin.dashboard.admin_panel')
   
    @endif
    </div>
    
</section>

@endsection