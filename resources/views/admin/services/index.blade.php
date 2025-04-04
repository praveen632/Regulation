@extends('admin.layouts.master')

@section('content')

<section class="content">
  <section class="content-header">
    <div class="back-icon"><a href="{{route('service.index')}}"><i class="fa fa-arrow-left"></i></a></div>
      <div class="home-icon"> <a href="{{url('/dashboard')}}"><i class="fa fa-home"></i></a> </i></div>
      <h1>Home</h1>
      <h2>Services</h2>
  </section>

<section class="content-header">

   <h1>

      @can('service-create')

      <a href="{{route('service.create')}}">

      <button class="btn btn-warning"><i class="fa fa-plus"></i> Add</button>

      </a>

      @endcan    


   </h1>

</section>

   <div class="box box-primary">

      <div class="box-body">

         <!-- @if ($message = Session::get('success'))

         <div class="alert alert-success">

            <p>{{ $message }}</p>

         </div>

         @endif -->

         <div id="content" style="overflow-x:auto;">

            <p><strong>Manage Services</strong></p>

            <table width="100%" id="table1" class="table-bordered table-striped table-hover table-condensed data-table all-table-design">

               <thead>

                  <tr>

                     <th>No</th>

                     <th>Title Name</th>

                     <th>Slug</th>

                     <th>Category</th>
                     <th>Sub Category</th>

                     <th>Price</th>

                     <th>Mrp Price</th>

                     <th>Status</th>

                     <th>Action</th>

                  </tr>

               </thead>

               <tbody>

                       @foreach($services as $key => $service)

                            <tr>

                                <td>{{ ++$key }}</td>

                                <td>{{ $service->name}}</td>

                                <td>{{ $service->slug}}</td>

                                <td>

                                    @if ($service->Category)

                                        {{ $service->Category->name}}

                                    @endif

                                </td>
                                <td>

                                    @if ($service->Subcategory)

                                        {{ $service->Subcategory->name}}

                                    @endif

                                </td>

                               

                                <td>{!! $service->price !!}</td>
                                <td>{!! $service->mrp_price !!}</td>

                                <td>

                                    @if($service->status == 1)

                                     <a href="{{ route('service.status', [$service->id]) }}" class="btn btn-success">Active</a>

                                    @else

                                    <a href="{{ route('service.status', [$service->id]) }}" class="btn btn-danger">Inactive</a>

                                    @endif

                                </td>

                                <td>

                                    @can('service-edit')

                                    <a href="{{ url('service/edit/'.$service->id)}}" class="btn btn-xs btn-success mr-8"><i class="fa fa-edit"></i></a>

                                    @endcan

                                      @can('service-delete')
                                        <a href="{{ route('service.destroy', [$service->id]) }}" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure you want to delete this?');"><i class="fa fa-trash"></i></a>
                                        @endcan
                                    </form>

                                </td>

                            </tr>

                            @endforeach

               </tbody>

            </table>

         </div>

      </div>

   </div>

</section>

@stop

@section('js')

@endsection