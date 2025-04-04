<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Seo\SeoRequest;
use App\Repository\Seo\SeoInterface;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Page;
use App\Models\Seo;


class SeoPageController extends Controller
{
    protected $seo;

    public function __construct(SeoInterface $seo)
    {
        $this->seo = $seo;

         $this->middleware('permission:seo-page-list|seo-page-create|seo-page-edit|seo-page-delete', ['only' => ['index','show']]);
         $this->middleware('permission:seo-page-create', ['only' => ['create','store']]);
         $this->middleware('permission:seo-page-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:seo-page-delete', ['only' => ['destroy']]);
    }

    public function index(Request $request)
    {
        
        $records = Seo::orderBy('id', 'desc')->paginate(10);
        if($request->ajax()){
            
            $search = 0;
            $type  = 0;
            $pages          = Page::where('status', 1)->where('slug', $request->seach_term)->first();
            // $categories  = Category::where('slug', $request->seach_term)->where('parent_id', 0)->where('status', 1)->first();
            $subcategories  = Category::where('slug', $request->seach_term)->where('parent_id', '>', 0)->where('status', 1)->first();
            $services       = Service::where('slug', $request->seach_term)->where('status', 1)->first(); 
            
            if($pages)
            {
                $search = $pages->id;
                $type  = 0;
            }
            // elseif($categories)
            // {
            //     $search = $categories->id;
            //     $type  = 1;
            // }
            elseif($subcategories)
            {
                $search = $subcategories->id;
                $type  = 1;
            }
            elseif($services)
            {
                $search = $services->id;
                $type  = 2;
            }
           
            if(isset($request->seach_term) && !empty($request->seach_term))
            {
             $records = Seo::Where('page_id', $search)
                    ->Where('page_type', $type)                
                    ->orderBy('id', 'desc')->paginate(10);
            }else{
                $records = Seo::query()
                ->when($request->seach_term, function($q)use($request){
                    $q->where('id', 'like', '%'.$request->seach_term.'%')
                    ->orWhere('method', 'like', '%'.$request->seach_term.'%')
                    ->orWhere('ip', 'like', '%'.$request->seach_term.'%')
                    ->orWhere('agent', 'like', '%'.$request->seach_term.'%');
                })
               ->orderBy('id', 'desc')->paginate(10);
            }
               
            return view('admin.seo.include.list', compact('records'))->render();
        }
         
        return view('admin.seo.index', compact('records'));
    }
    
    public function create()
    {
        
        $pages            = Page::where('status', 1)->get();
        $subcategories    = Category::where('parent_id', '>', 0)->where('status', 1)->get();
        
        return view('admin.seo.create', compact('pages', 'subcategories'));
    }

    public function store(SeoRequest $request)
    {
        $data = $request->all();
        $option = explode(',',$request->page_id);
        $check = Seo::where('page_id', $option[0])->where('page_type', $option[1])->first();
        if($check)
        {
            return back()->with('fail', "Sorry it has been already taken.");
        }
       
        $data['page_id'] = $option[0];
        $data['page_type'] = $option[1];
        
        $seo = $this->seo->store($data);
        if($seo) {
            \LogActivity::addToLog('Seo Page added successfully.');
            return redirect()->route('seo-pages.index')->with(['success' => 'Seo Page added successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to add seo page.']);
    }

    public function edit($id)
    {
        $edit = $this->seo->find($id);
        if($edit->page_type == 0)
        {
            $data = Page::select('id', 'title as name', 'slug')->where('id', $edit->page_id)->where('status', 1)->first();
        }
        elseif($edit->page_type == 1)
        {
            $data = Category::select('id', 'name', 'slug')->where('id', $edit->page_id)->where('status', 1)->where('parent_id', '>', 0)->first();
        }else{
            $data = Service::select('id', 'name', 'slug')->where('id', $edit->page_id)->where('status', 1)->first();
        }

        $pages = Page::where('status', 1)->get();
        
        return view('admin.seo.edit', compact('edit', 'pages', 'data'));
    }

    public function update(SeoRequest $request, $id)
    {
        $data = $request->all();
        
        $seo = $this->seo->update($data, $id);

        if($seo) {
            \LogActivity::addToLog('Seo Page updated successfully.');
            return redirect()->route('seo-pages.index')->with(['success' => 'Seo Page updated successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to update seo page.']);
    }

    public function destroy($id)
    {
        $seo = $this->seo->delete($id);

        if($seo) {
            \LogActivity::addToLog('Seo Page Deleted successfully.');
            return redirect()->route('seo-pages.index')->with(['success' => 'Seo Page Deleted successfully.']);
        }

        return redirect()->back()->with(['fail' => 'Unable to delete seo page.']);
    }
}
