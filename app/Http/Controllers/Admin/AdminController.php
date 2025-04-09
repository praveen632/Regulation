<?php



namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\SubscriptionUser;
use App\Models\DocumentCenter;
use Illuminate\Http\Request;
use App\Models\BasicSetting;
use App\Models\Favourite;
use App\Models\Enquiry;
use App\Models\User;
use Carbon\Carbon;
use Auth;

class AdminController extends Controller

{

    function __construct()
    {

           ini_set('memory_limit', '128M');

           ini_set('max_execution_time', '3000');

           ini_set('request_terminate_timeout', '3000');

    }



    public function index()

    {   
        
    	return view('admin.dashboard.index');

    }


    public function setting()
    {

        return view('admin.setting.index');

    }



    function settingPost(Request $request){

        //dd($request->all());

        foreach($request->input as $name=>$value){

            $name=str_replace("'","",$name);

            $data=BasicSetting::where("name",$name)->first();

            if($data){

                $data->value=$value;

                $data->save();

            }else{

                BasicSetting::create(['name'=>$name,"value"=>$value]);

            }

        }

        $request->session()->flash('alert-success', "Setting updated successfully!");

        return redirect()->back();

    }

   

}

