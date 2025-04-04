<?php

namespace App\Http\Controllers\Admin;

use Cviebrock\EloquentSluggable\Services\SlugService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Service;
use App\Models\State;
use App\Models\City;
use Storage;
use File;
use Auth;
use Str;

class ServiceController extends Controller
{
    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

     function __construct()

     {
 
          $this->middleware('permission:service-list|service-create|service-edit|service-delete|service-status', ['only' => ['index','show']]);
 
          $this->middleware('permission:service-create', ['only' => ['create','store']]);
 
          $this->middleware('permission:service-edit', ['only' => ['edit','update']]);
 
          $this->middleware('permission:service-delete', ['only' => ['destroy']]);
 
          $this->middleware('permission:service-status', ['only' => ['status']]);
 
     }
 
 
 
     /**
 
      * Display a listing of the resource.
 
      *
 
      * @return \Illuminate\Http\Response
 
      */
 
     public function index(Request $request) 
     {
 
         $services = Service::orderBy('id', 'desc')->get();
 
         return view('admin.services.index')->with(compact(['services']));
 
     }
 
 
     /** 
      * Show the form for creating a new resource. 
      * 
      * @return \Illuminate\Http\Response 
      */
 
     public function create() 
     { 
         $categories = Category::where('status', 1)->where('parent_id', 0)->get();
         $cities     = City::orderBy('name', 'asc')->get();
         $states     = State::orderBy('name', 'asc')->get();
         return view('admin.services.create')->with(compact(['categories', 'cities', 'states'])); 
     }
 
 
 
     /**
 
      * Store a newly created resource in storage.
 
      *
 
      * @param  \Illuminate\Http\Request  $request
 
      * @return \Illuminate\Http\Response
 
      */
 
     public function store(Request $request)
     {
         
      $this->validate($request, [
             'name' =>'required',
             'slug' =>'required',
             'service_type'=>'required'
      ]);      
 
         if(empty($request->city))
         {
             $service                              = new Service;
             $service->user_id                     = Auth::user()->id;
             $service->category_id                 = $request->category_id ? $request->category_id : 0;
             $service->subcategory_id              = $request->subcategory_id ? $request->subcategory_id : 0;
             $service->name                        = $request->name;
             $service->slug                        = SlugService::createSlug(Service::class, 'slug', $request->slug);
             $service->price                       = $request->price ? $request->price : 0;
             $service->mrp_price                   = $request->mrp_price ? $request->mrp_price : 0;
             $service->service_type                = $request->service_type;
             $service->small_description           = $request->small_description;
             $service->description                 = $request->description;
             $service->free_consultation_desc      = $request->free_consultation_desc;
             $service->short_description           = $request->short_description;
             $service->talk_to_expert_description  = $request->talk_to_expert_description;
             $service->caller_name                 = $request->caller_name;
             $service->caller_description          = $request->caller_description;
             $service->testmonial_description      = $request->testmonial_description;
             $service->long_description            = $request->long_description;
             $service->too_long_description        = $request->too_long_description;
             $service->advisory_services           = $request->advisory_services;
             $service->get_started                 = $request->get_started;
             $service->meta_title                  = $request->meta_title;
             $service->meta_keywords               = $request->meta_keywords;
             $service->meta_description            = $request->meta_description;
             
           if ($service->save() ) {
            AddSeoData($service->id, 2);
             \LogActivity::addToLog('Services added successfully.');
             $request->session()->flash('alert-success', "Services added successfully.");
             return redirect()->route('service.index');
           }
           else
           {
               $request->session()->flash('alert-danger', "Unable to add Services.");
               return redirect()->back();
           }
         }
         else
         {
            try{ 
             foreach($request->city as $k=>$v)
             {
                 $service                              = new Service;
                 $service->user_id                     = Auth::user()->id;
                 $service->category_id                 = $request->category_id ? $request->category_id : 0;
                 $service->subcategory_id              = $request->subcategory_id ? $request->subcategory_id : 0;
                 $service->name                        = $request->name." ".$v;
                 $service->slug                        = SlugService::createSlug(Service::class, 'slug', $request->slug).'-'.Str::slug($v, '-');
                 $service->price                       = $request->price ? $request->price : 0;
                 $service->mrp_price                   = $request->mrp_price ? $request->mrp_price : 0;
                 $service->service_type                = $request->service_type;
                 $service->small_description           = $request->small_description;
                 $service->description                 = $request->description;
                 $service->free_consultation_desc      = $request->free_consultation_desc;
                 $service->short_description           = $request->short_description;
                 $service->talk_to_expert_description  = $request->talk_to_expert_description;
                 $service->caller_name                 = $request->caller_name;
                 $service->caller_description          = $request->caller_description;
                 $service->testmonial_description      = $request->testmonial_description;
                 $service->long_description            = $request->long_description;
                 $service->too_long_description        = $request->too_long_description;
                 $service->advisory_services           = $request->advisory_services;
                 $service->get_started                 = $request->get_started;
                 $service->meta_title                  = $request->meta_title;
                 $service->meta_keywords               = $request->meta_keywords;
                 $service->meta_description            = $request->meta_description;
                 $service->save();
                 
                 AddSeoData($service->id, 2);
             }
             
             \LogActivity::addToLog('Services added successfully.');
             $request->session()->flash('alert-success', "Services added successfully.");
             return redirect()->route('service.index');
            
            }
            catch(Exception $e)
            {
                $request->session()->flash('alert-danger', "Unable to add Services.");
                return redirect()->back();
            }
         }
         
 
         
 
     }
 
 
 
     /**
 
      * Show the form for editing the specified resource.
 
      *
 
      * @param  int  $id
 
      * @return \Illuminate\Http\Response
 
      */
 
     public function edit($id) 
     {
         $service    = Service::where('id', $id)->first();
         $categories = Category::where('status', 1)->where('parent_id', 0)->get();
         $subcategory = Category::where('parent_id', $service->category_id)->get();
         
         $cities     = City::orderBy('name', 'asc')->get();
         $states     = State::orderBy('name', 'asc')->get();

         return view('admin.services.edit')->with(compact(['service', 'categories', 'subcategory', 'cities', 'states']));
 
     }
 
 
 
     /**
 
      * Update the specified resource in storage.
 
      *
 
      * @param  \Illuminate\Http\Request  $request
 
      * @param  int  $id
 
      * @return \Illuminate\Http\Response
 
      */
 
     public function update(Request $request, $id) 
     {

        $this->validate($request, [
            'name' =>'required',
            'slug' =>'required',
            'service_type'=>'required'
        ]); 

        $service = Service::find($id);
        $service->user_id                     = Auth::user()->id;
        $service->category_id                 = $request->category_id ? $request->category_id : 0;
        $service->subcategory_id              = $request->subcategory_id ? $request->subcategory_id : 0;
        $service->name                        = $request->name;
        $service->price                       = $request->price ? $request->price : 0;
        $service->mrp_price                   = $request->mrp_price ? $request->mrp_price : 0;
        $service->service_type                = $request->service_type;
        $service->small_description           = $request->small_description;
        $service->description                 = $request->description;
        $service->free_consultation_desc      = $request->free_consultation_desc;
        $service->short_description           = $request->short_description;
        $service->talk_to_expert_description  = $request->talk_to_expert_description;
        $service->caller_name                 = $request->caller_name;
        $service->caller_description          = $request->caller_description;
        $service->testmonial_description      = $request->testmonial_description;
        $service->long_description            = $request->long_description;
        $service->too_long_description        = $request->too_long_description;
        $service->advisory_services           = $request->advisory_services;
        $service->get_started                 = $request->get_started;
        $service->meta_title                  = $request->meta_title;
        $service->meta_keywords               = $request->meta_keywords;
        $service->meta_description            = $request->meta_description;
         
         if($service->slug != $request->slug)
         {
             $checkSlug        = Service::where('slug', $request->slug)->first();
             $checkSlug ? $service->slug = SlugService::createSlug(Service::class, 'slug', $request->slug) : $service->slug = $request->slug;
         }
 
         if ($service->save() ) {
            
            if(!empty($request->city) && count($request->city) > 0)
            {
             foreach($request->city as $k=>$v)
             {
                 $service                              = new Service;
                 $service->user_id                     = Auth::user()->id;
                 $service->category_id                 = $request->category_id ? $request->category_id : 0;
                 $service->subcategory_id              = $request->subcategory_id ? $request->subcategory_id : 0;
                 $service->name                        = $request->name." in ".$v;
                 $service->slug                        = Str::slug($request->name." in ".$v, '-');
                 $service->price                       = $request->price ? $request->price : 0;
                 $service->mrp_price                   = $request->mrp_price ? $request->mrp_price : 0;
                 $service->service_type                = $request->service_type;
                 $service->small_description           = $request->small_description;
                 $service->description                 = $request->description;
                 $service->free_consultation_desc      = $request->free_consultation_desc;
                 $service->short_description           = $request->short_description;
                 $service->talk_to_expert_description  = $request->talk_to_expert_description;
                 $service->caller_name                 = $request->caller_name;
                 $service->caller_description          = $request->caller_description;
                 $service->testmonial_description      = $request->testmonial_description;
                 $service->long_description            = $request->long_description;
                 $service->too_long_description        = $request->too_long_description;
                 $service->advisory_services           = $request->advisory_services;
                 $service->get_started                 = $request->get_started;
                 $service->meta_title                  = $request->meta_title;
                 $service->meta_keywords               = $request->meta_keywords;
                 $service->meta_description            = $request->meta_description;
                 $service->save();
                 
                 AddSeoData($service->id, 2);
             }
            } 
             \LogActivity::addToLog('Services successfully updated.');
 
             $request->session()->flash('alert-success', "Services successfully updated.");
 
             return redirect()->route('service.index');
 
         }
 
         $request->session()->flash('alert-success', "Unable to update Services.");
 
         return redirect()->back();
 
     }
 
 
 
     public function Show(Service $service)
 
     {
 
         //dd($service->parent->name);
 
         return view('admin.services.show', compact("service"));
 
     }
 
 
 
     /**
 
      * Remove the specified resource from storage.
 
      *
 
      * @param  int  $id
 
      * @return \Illuminate\Http\Response
 
      */
 
     public function destroy(Request $request, $id) 
     {
         $service = Service::find($id);
         if ($service->delete()) {
 
             \LogActivity::addToLog('Service successfully deleted.');
 
             $request->session()->flash('alert-success', "Service successfully deleted.");
 
             return redirect()->back();
 
         }
 
         $request->session()->flash('alert-danger', "Unable to delete Service.");
 
         return redirect()->back();
 
     }
 
 
 
     public function changeStatus(Request $request, $id)
 
     {
 
         $service    = Service::where('id', $id)->first();
 
 
 
         if($service->status == '1'){
 
             $status = '0';
 
         }else{
 
             $status = '1';
 
         }
 
         $value     = array('status' => $status);
 
         Service::where('id', $id)->update($value);
 
 
 
         \LogActivity::addToLog('Service Status successfully changed!');
 
         $request->session()->flash('alert-success', "Status successfully changed!");
 
         return redirect()->back();
 
     }
 
 
 
     public function subCategoryList($id) 
     {
 
         $parent  = Category::where('id', $id)->where('status', 1)->value('name'); 
         $records = Category::where('parent_id', $id)->where('status', 1)->get(); 
         return view('admin.services.subcategory_list', compact('records', 'id', 'parent'));
 
     }

    public function selectCategory(Request $request)
    {

        $records = Category::where('parent_id', $request->id)->get();

        return view('admin.services.category_list', compact('records'));

    }
 
 }
