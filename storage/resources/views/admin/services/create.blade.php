@extends('admin.layouts.master')
@section('content')
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('service.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Add Service</h2>
  </section>
   <div class="row">
      
      <div class="col-md-12">
         <!-- @if (count($errors) > 0)
         <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
               @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
         @endif -->
         <div class="box">
            <div class="box-header with-border">
               <h3 class="box-title">Basic Information</h3>
            </div>
            <div class="box-body">
               <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="name">Category Name:</label>
                              <input type="text" class="form-control" id="title" placeholder="Enter Category Name" name="name" value="{{old('name')}}">
                              <span class="text-danger">{{ $errors->first('name') }}</span>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="name">Slug:</label>
                              <input type="text" class="form-control" id="slug" placeholder="Enter Category Slug" name="slug" value="{{old('slug')}}">
                              <span class="text-danger">{{ $errors->first('slug') }}</span>
                     </div>
                  </div>
                  <div class="col-md-6">  
                  <div class="form-group">
                            <label for="parent_category">Category Name</label>
                            <select class="form-control" name="category_id" id="category_id" style="height: 35px;">
                                <option value="">Select category</option>
                                @foreach($categories as $category)
                                    @if (old('category_id') ==$category->id)
                                        <option value="{{$category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{$category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach                                
                            </select>
                            <span class="text-danger">{{ $errors->first('category_id') }}</span>
                  </div>
                </div>  

                <div class="col-md-6">
                  <div class="form-group">
                            <label for="parent_category">Subcategory Name</label>
                            <select class="form-control" name="subcategory_id" id="subcategory_id"  style="height: 35px;">
                                <option value="">Select</option>
                                
                            </select>
                            <span class="text-danger">{{ $errors->first('subcategory_id') }}</span>
                  </div>
                </div>
                  
                <div class="col-md-6">
                     <div class="form-group">
                              <label for="price">Price:</label>
                              <input type="number" class="form-control" id="Price" placeholder="Enter Price" name="price" value="{{old('price')}}">
                              <span class="text-danger">{{ $errors->first('price') }}</span>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="mrp_price">Mrp Price:</label>
                              <input type="number" class="form-control" id="mrp_price" placeholder="Enter MRP Price" name="mrp_price" value="{{old('mrp_price')}}">
                              <span class="text-danger">{{ $errors->first('mrp_price') }}</span>
                     </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="name">Small Description:</label>
                              <input type="hidden" id="small_description" name="small_description" style="display:none" />
                              <input type="hidden" id="small_description___Config" value="" style="display:none" />
                              <iframe id="small_description___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=small_description&amp;Toolbar=Default')}}" width="100%" height="200px" frameborder="0" scrolling="no"></iframe>
                              <span class="text-danger">{{ $errors->first('small_description') }}</span>
                     </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="name">Banner Description:</label>
                              <input type="hidden" id="description" name="description" style="display:none" />
                              <input type="hidden" id="description___Config" value="" style="display:none" />
                              <iframe id="description___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=description&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                              <span class="text-danger">{{ $errors->first('description') }}</span>
                     </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="free_consultation_desc">Free Consultation:</label>
                              <input type="text" class="form-control" id="free_consultation_desc" placeholder="Enter Free Consultation" name="free_consultation_desc" value="{{old('free_consultation_desc')}}">
                              <span class="text-danger">{{ $errors->first('free_consultation_desc') }}</span>
                     </div>
                  </div>

                  <div class="col-md-12">
                  <div class="form-group">
                            <label for="name">Short Description:</label>
                            <input type="hidden" id="short_description" name="short_description" style="display:none" />
                            <input type="hidden" id="short_description___Config" value="" style="display:none" />
                            <iframe id="short_description___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=short_description&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                            <span class="text-danger">{{ $errors->first('short_description') }}</span>
                  </div>
                  </div>

                  <div class="col-md-12">
                  <div class="form-group">
                            <label for="name">Talk To Expert Description:</label>
                            <input type="hidden" id="talk_to_expert_description" name="talk_to_expert_description" style="display:none" />
                            <input type="hidden" id="talk_to_expert_description___Config" value="" style="display:none" />
                            <iframe id="talk_to_expert_description___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=talk_to_expert_description&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                            <span class="text-danger">{{ $errors->first('talk_to_expert_description') }}</span>
                  </div>
                  </div>

                 
                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="caller_name">Caller Name:</label>
                              <input type="text" class="form-control" id="caller_name" placeholder="Enter Caller Name" name="caller_name" value="{{old('caller_name')}}">
                              <span class="text-danger">{{ $errors->first('caller_name') }}</span>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="caller_description">Caller Description:</label>
                              <input type="text" class="form-control" id="caller_description" placeholder="Enter Caller Description" name="caller_description" value="{{old('caller_description')}}">
                              <span class="text-danger">{{ $errors->first('caller_description') }}</span>
                     </div>
                  </div>
                  <div class="col-md-12">
                  <div class="form-group">
                            <label for="testmonial_description">Testimonials Description:</label>
                            <input type="hidden" id="testmonial_description" name="testmonial_description" style="display:none" />
                            <input type="hidden" id="testmonial_description___Config" value="" style="display:none" />
                            <iframe id="testmonial_description___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=testmonial_description&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                            <span class="text-danger">{{ $errors->first('testmonial_description') }}</span>
                  </div>
                  </div>

                  <div class="col-md-12">
                  <div class="form-group">
                            <label for="name">Long Description:</label>
                            <input type="hidden" id="long_description" name="long_description" style="display:none" />
                            <input type="hidden" id="long_description___Config" value="" style="display:none" />
                            <iframe id="long_description___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=long_description&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                            <span class="text-danger">{{ $errors->first('long_description') }}</span>
                  </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="name">Too Long Description:</label>
                              <input type="hidden" id="too_long_description" name="too_long_description" style="display:none" />
                              <input type="hidden" id="too_long_description___Config" value="" style="display:none" />
                              <iframe id="too_long_description___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=too_long_description&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                              <span class="text-danger">{{ $errors->first('too_long_description') }}</span>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="name">Advisory Services:</label>
                              <input type="hidden" id="advisory_services" name="advisory_services" style="display:none" />
                              <input type="hidden" id="advisory_services___Config" value="" style="display:none" />
                              <iframe id="advisory_services___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=advisory_services&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                              <span class="text-danger">{{ $errors->first('advisory_services') }}</span>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="name">Get Started:</label>
                              <input type="hidden" id="get_started" name="get_started" style="display:none" />
                              <input type="hidden" id="get_started___Config" value="" style="display:none" />
                              <iframe id="get_started___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=get_started&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                              <span class="text-danger">{{ $errors->first('get_started') }}</span>
                     </div>
                  </div>
                  <div class="col-md-12"> 
                  <h3>For Seo Part</h3>
                  </div>
                  <div class="col-md-6"> 
                     <div class="form-group">
                              <label for="banner">Meta Title:</label>
                              <input type="text" class="form-control" id="meta_title" placeholder="Meta Title" name="meta_title" value="{{old('meta_title')}}">
                              <span class="text-danger">{{ $errors->first('meta_title') }}</span>
                     </div>
                  </div>
                  <div class="col-md-6"> 
                     <div class="form-group">
                              <label for="banner">Meta Keywords:</label>
                              <input type="text" class="form-control" id="meta_keywords" placeholder="Meta Keywords" name="meta_keywords" value="{{old('meta_keywords')}}">
                              <span class="text-danger">{{ $errors->first('meta_keywords') }}</span>
                     </div>
                  </div>   
                 <div class="col-md-12"> 
                     <div class="form-group">
                              <label for="name">Meta Description:</label>
                              <textarea type="text" class="form-control" id="meta_description" placeholder="Enter Meta Description" name="meta_description">{{old('meta_description')}}</textarea>
                              <span class="text-danger">{{ $errors->first('meta_description') }}</span>
                     </div>
                  </div>
                  <div class="box-footer text-center">
                     <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
@stop
<script type="text/javascript" src="{{asset('admin/fckeditor/fckeditor.js')}}"></script>