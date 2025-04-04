@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('seo-pages.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Seo Page</h2>
  </section>
<section class="content-header">
   <h1>
      @can('seo-page-create')
      <a href="{{route('seo-pages.create')}}">
      <button class="btn btn-warning"><i class="fa fa-plus"></i> Add</button>
      </a>
      @endcan    
      
   </h1>
</section>
   <div class="box box-primary">
      <div class="box-body">
      <div class="row">
            <div class="col-md-3">
                <!-- <div class="form-group">
                <select name="status" id="status" class="form-control custom-select"  style="height: 3.5rem;">
                    <option value="">Filter</option>
                    <option value="active">Active</option>
                    <option value="inactive">InActive</option>
                </select>
                </div> -->
            </div>
         <div class="col-md-6">
               </div>
               <div class="col-md-3">
               <div class="form-group">
               <input type="text" name="serach" id="serach" class="form-control" value="{{old('serach')}}"/>
               </div>
            </div>
            </div>
         <div id="content" style="overflow-x:auto;">
            <p><strong>Manage Seo Page</strong></p>
            <table width="100%" id="table1" class="table-bordered table-striped table-hover table-condensed data-table all-table-design">
               <thead style="background:#111;color:#fff;">
                  <tr>
                     <th>No</th>
                     <th>Page Name</th>
                     <th>URL</th>
                     <th>Meta Title</th>
                     <th>Page Name</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                  @include('admin.seo.include.list')                       
               </tbody>
            </table>
         </div>
      </div>
   </div>
</section>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    const fetch_data = (page, status, seach_term) => {
        if(status === undefined){
            status = "";
        }
        if(seach_term === undefined){
            seach_term = "";
        }
        $.ajax({ 
            url:"{{route('seo-pages.index')}}?page="+page+"&status="+status+"&seach_term="+seach_term,
            type: 'GET',
            success:function(data){
                $('tbody').html('');
                $('tbody').html(data);
            }
        })
    }

    $('body').on('keyup', '#serach', function(){
        var status = $('#status').val();
        var seach_term = $('#serach').val();
        var page = $('#hidden_page').val();
        fetch_data(page, status, seach_term);
    });

    $('body').on('change', '#status', function(){
        var status = $('#status').val();
        var seach_term = $('#serach').val();
        var page = $('#hidden_page').val();
        fetch_data(page, status, seach_term);
    });

    $('body').on('click', '.pager a', function(event){
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        $('#hidden_page').val(page);
        var status = $('#status').val();
        var seach_term = $('#serach').val();
        fetch_data(page,status, seach_term);
    });
});
</script>