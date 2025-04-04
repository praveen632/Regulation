@extends('admin.layouts.master')
@section('content')
<style>
    .new-select {
  display: inline-block;
}
</style>
<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('service.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Edit Category</h2>
  </section>
   <div class="row">
      
      <div class="col-md-12">
         
         <div class="box">
            <div class="box-header with-border">
               <h3 class="box-title">Basic Information</h3>
            </div>
            <div class="box-body">
             <form action="{{ url('service/'.$service->id ) }}" method="post" enctype="multipart/form-data">
                  @csrf
                 
                  <div class="col-md-6">
                        <div class="form-group">
                                 <label for="name">Title:</label>
                                 <input type="text" class="form-control" id="titles" name="name" value="{{old('name', $service->name)}}">
                                 <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                     </div>   
                     <div class="col-md-6">
                        <div class="form-group">
                                 <label for="slug">Slug:</label>
                                 <input type="text" class="form-control" id="slugss" name="slug" value="{{old('slug', $service->slug)}}">
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
                                        <option value="{{$category->id }}"{{($category->id == $service->category_id) ? 'selected': ""}}>{{ $category->name }}</option>
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
                                @foreach($subcategory as $sub)
                                 <option value="{{$sub->id}}"{{( $sub->id == $service->subcategory_id) ? 'selected':""}}>{{$sub->name}}</option>
                                @endforeach
                            </select>
                            <span class="text-danger">{{ $errors->first('subcategory_id') }}</span>
                  </div>
                </div>
                  
                <div class="col-md-6">
                     <div class="form-group">
                              <label for="price">Price:</label>
                              <input type="number" class="form-control" id="Price" placeholder="Enter Price" name="price" value="{{old('price', $service->price)}}">
                              <span class="text-danger">{{ $errors->first('price') }}</span>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="mrp_price">Mrp Price:</label>
                              <input type="number" class="form-control" id="mrp_price" placeholder="Enter MRP Price" name="mrp_price" value="{{old('mrp_price', $service->mrp_price)}}">
                              <span class="text-danger">{{ $errors->first('mrp_price') }}</span>
                     </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                      <label for="name">State (Optional): <input type="checkbox" id="state_all" value="all"> All</label>
                      <div class="fil hori now">
                          <span class="label-new">
                            <ul class="ngc">
                            @foreach($states as $state)    
                              <li class="new-select">
                                <input class="state_childs" id="city" name="city[]" type="checkbox" value="{{$state->name}}"> 
                                <label id="any" for="any">{{$state->name}}</label>
                              </li>
                            @endforeach  
                            </ul>
                          </span>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                      <label for="name">City (Optional): <input type="checkbox" id="permission_all" value="all"> All</label>
                      <div class="fil hori now">
                          <span class="label-new">
                            <ul class="ngc">
                            @foreach($cities as $city)    
                              <li class="new-select">
                                <input class="childs" id="city" name="city[]" type="checkbox" value="{{$city->name}}"> 
                                <label id="any" for="any">{{$city->name}}</label>
                              </li>
                            @endforeach  
                            </ul>
                          </span>
                        </div>
                     </div>
                  </div>
                  
                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="name">Service Type:</label>
                              <select name="service_type" id="service_type" class="form-control"  style="height: 35px;">
                                 <option value="">Select Service Type</option>
                                 <option value="1"{{($service->service_type == 1) ? 'selected':""}}>Show</option>
                                 <option value="0"{{($service->service_type == 0) ? 'selected':""}}>Hide</option>
                              </select>
                              <span class="text-danger">{{ $errors->first('service_type') }}</span>
                     </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="name">Small Description:</label>
                              <input type="hidden" id="small_description" value="{{$service->small_description}}" name="small_description" style="display:none" />
                              <input type="hidden" id="small_description___Config" value="" style="display:none" />
                              <iframe id="small_description___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=small_description&amp;Toolbar=Default')}}" width="100%" height="200px" frameborder="0" scrolling="no"></iframe>
                              <span class="text-danger">{{ $errors->first('small_description') }}</span>
                     </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="name">Description:</label>
                              <input type="hidden" id="description" value="{{$service->description}}" name="description" style="display:none" />
                              <input type="hidden" id="description___Config" value="" style="display:none" />
                              <iframe id="description___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=description&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                              <span class="text-danger">{{ $errors->first('description') }}</span>
                     </div>
                  </div>

                   <div class="col-md-12">
                     <div class="form-group">
                              <label for="free_consultation_desc">Caller Mobile Number:</label>
                              <input type="text" class="form-control" value="{{$service->free_consultation_desc}}" id="free_consultation_desc" placeholder="Enter Caller Mobile Number" name="free_consultation_desc" value="{{old('free_consultation_desc')}}">
                              <span class="text-danger">{{ $errors->first('free_consultation_desc') }}</span>
                     </div>
                  </div>

                  <!--<div class="col-md-12">
                  <div class="form-group">
                            <label for="name">Short Description:</label>
                            <input type="hidden" id="short_description" value="{{$service->short_description}}" name="short_description" style="display:none" />
                            <input type="hidden" id="short_description___Config" value="" style="display:none" />
                            <iframe id="short_description___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=short_description&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                            <span class="text-danger">{{ $errors->first('short_description') }}</span>
                  </div>
                  </div>

                  <div class="col-md-12">
                  <div class="form-group">
                            <label for="name">Talk To Expert Description:</label>
                            <input type="hidden" id="talk_to_expert_description" value="{{$service->talk_to_expert_description}}" name="talk_to_expert_description" style="display:none" />
                            <input type="hidden" id="talk_to_expert_description___Config" value="" style="display:none" />
                            <iframe id="talk_to_expert_description___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=talk_to_expert_description&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                            <span class="text-danger">{{ $errors->first('talk_to_expert_description') }}</span>
                  </div>
                  </div> -->

                 
                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="caller_name">Caller Name:</label>
                              <input type="text" class="form-control" id="caller_name" placeholder="Enter Caller Name" name="caller_name" value="{{old('caller_name', $service->caller_name)}}">
                              <span class="text-danger">{{ $errors->first('caller_name') }}</span>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                              <label for="caller_description">Caller Description:</label>
                              <input type="text" class="form-control" id="caller_description" placeholder="Enter Caller Description" name="caller_description" value="{{old('caller_description', $service->caller_description)}}">
                              <span class="text-danger">{{ $errors->first('caller_description') }}</span>
                     </div>
                  </div>
                  <!-- <div class="col-md-12">
                  <div class="form-group">
                            <label for="testmonial_description">Testimonials Description:</label>
                            <input type="hidden" id="testmonial_description" value="{{$service->testmonial_description}}" name="testmonial_description" style="display:none" />
                            <input type="hidden" id="testmonial_description___Config" value="" style="display:none" />
                            <iframe id="testmonial_description___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=testmonial_description&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                            <span class="text-danger">{{ $errors->first('testmonial_description') }}</span>
                  </div>
                  </div>

                  <div class="col-md-12">
                  <div class="form-group">
                            <label for="name">Long Description:</label>
                            <input type="hidden" id="long_description" value="{{$service->long_description}}" name="long_description" style="display:none" />
                            <input type="hidden" id="long_description___Config" value="" style="display:none" />
                            <iframe id="long_description___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=long_description&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                            <span class="text-danger">{{ $errors->first('long_description') }}</span>
                  </div>
                  </div> -->

                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="name">Too Long Description:</label>
                              <input type="hidden" id="too_long_description" value="{{$service->too_long_description}}" name="too_long_description" style="display:none" />
                              <input type="hidden" id="too_long_description___Config" value="" style="display:none" />
                              <iframe id="too_long_description___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=too_long_description&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                              <span class="text-danger">{{ $errors->first('too_long_description') }}</span>
                     </div>
                  </div>
                  <!-- <div class="col-md-12">
                     <div class="form-group">
                              <label for="name">Advisory Services:</label>
                              <input type="hidden" id="advisory_services" value="{{$service->advisory_services}}" name="advisory_services" style="display:none" />
                              <input type="hidden" id="advisory_services___Config" value="" style="display:none" />
                              <iframe id="advisory_services___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=advisory_services&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                              <span class="text-danger">{{ $errors->first('advisory_services') }}</span>
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                              <label for="name">Get Started:</label>
                              <input type="hidden" id="get_started" value="{{$service->get_started}}" name="get_started" style="display:none" />
                              <input type="hidden" id="get_started___Config" value="" style="display:none" />
                              <iframe id="get_started___Frame" src="{{asset('admin/fckeditor/editor/fckeditor.html?InstanceName=get_started&amp;Toolbar=Default')}}" width="100%" height="320px" frameborder="0" scrolling="no"></iframe>
                              <span class="text-danger">{{ $errors->first('get_started') }}</span>
                     </div>
                  </div> -->
                  <!-- <div class="col-md-12"> 
                  <h3>For Seo Part</h3>
                  </div> -->
                  <!-- <div class="col-md-6"> 
                     <div class="form-group">
                              <label for="banner">Meta Title:</label>
                              <input type="text" class="form-control" id="meta_title" placeholder="Meta Title" name="meta_title" value="{{old('meta_title', $service->meta_title)}}">
                              <span class="text-danger">{{ $errors->first('meta_title') }}</span>
                     </div>
                  </div>
                  <div class="col-md-6"> 
                     <div class="form-group">
                              <label for="banner">Meta Keywords:</label>
                              <input type="text" class="form-control" id="meta_keywords" placeholder="Meta Keywords" name="meta_keywords" value="{{old('meta_keywords', $service->meta_keywords)}}">
                              <span class="text-danger">{{ $errors->first('meta_keywords') }}</span>
                     </div>
                  </div>   
                 <div class="col-md-12"> 
                     <div class="form-group">
                              <label for="name">Meta Description:</label>
                              <textarea type="text" class="form-control" id="meta_description" placeholder="Enter Meta Description" name="meta_description">{{old('meta_description', $service->meta_description)}}</textarea>
                              <span class="text-danger">{{ $errors->first('meta_description') }}</span>
                     </div>
                  </div> -->
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