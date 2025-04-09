@extends('admin.layouts.master')
@section('content')

<section class="content">
    @if(Auth::user()->is_admin == 1)
        <h1>Dashboard</h1>
    @else
        <section class="content-header">
            <div class="home-icon">
                <a href="{{ url('/dashboard') }}"><i class="fa fa-home"></i></a>
            </div>
            <h1>Template and Tools to manage Every Aspect of Your Business</h1>
        </section>
    @endif

    <div class="row">
        @include('admin.dashboard.admin_panel')
    </div>
</section>

@endsection
