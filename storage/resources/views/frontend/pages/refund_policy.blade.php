@extends('frontend.layouts.master')
@section('content')
<section class="grey-bg check-page blog-page">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="title">
					<h2>{{$record->title}}</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="main-content">
					{!! $record->description !!}
				</div>
			</div>
		</div>
	</div>
</section>
@endsection