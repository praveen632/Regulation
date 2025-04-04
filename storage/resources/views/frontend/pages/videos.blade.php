@extends('frontend.layouts.master')
@section('content')
<div class="inner-banner" style="background-image: url({{$record->image}});">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="inner-banner-title">
					<h2>{{$record->title}}</h2>
				</div>
			</div>
			<div class="col-md-6">
				<div class="banner-search">
					<input type="textbox" class="form-control" id="search_grid_box" name="search_grid_box" value="" placeholder="Search video">
					<button type="button" class="btn button btn-default float-right" id="grid_search_button" onclick="gridSearchData()"><i class="fa fa-search" aria-hidden="true"></i></button>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="blog-page">
	<div class="container">
		<div class="row">
				<div class="col-md-6">
				<div class="blog-post"> 
					<div class="blog-item-img" id="videoImg2" style="background-image: url('https://www.startupfino.com/media/video_images/');" onclick="showVideo('videoImg2','https://www.youtube.com/shorts/WBRcX4mTRTI');"></div>
					<div class="utf-post-content-area">
						<h3>{!! $record->description !!}<h3>
						<ul class="post-meta">
							<li> 15th Feb, 2023</li>
							<li>test</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="blog-post"> 
					<div class="blog-item-img" id="videoImg1" style="background-image: url('https://www.startupfino.com/media/video_images/668461_blog_img_1.jpg');" onclick="showVideo('videoImg1','https://www.youtube.com/watch?v=qHyJpSoY3Rw');"></div>
					<div class="utf-post-content-area">
						<h3>{!! $record->short_description !!}<h3>
						<ul class="post-meta">
							<li> 26th Jun, 2020</li>
							<li>test</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="page-next">
					<nav aria-label="Page navigation example">
						<ul class="pagination"><li class="page-item active" aria-controls="dataTables-example" tabindex="0" id="pageId0">
					<a class="page-link" href="javascript:void(0)" onclick=generatePagi("0","0")>1</a></li></ul>					</nav>
				</div>			
			</div>
		</div>
	</div>
</section>
<form name="frmSort" id="frmSort" method="get">
	<input type="hidden" id="perPage" name="perPage" value="0"/>
	<input type="hidden" id="searchByFieldValue" name="searchByFieldValue" value=""/>
	<input type="hidden" id="selectTab" name="selectTab" value="0"/>
</form>
<script>
function showVideo(id,youtubeUrl){
	$("#"+id).html('<iframe width="100%" height="180" frameborder="0" allowfullscreen src="'+youtubeUrl+'"></iframe>');
	$("#"+id).removeAttr("style");
}

</script>

@endsection