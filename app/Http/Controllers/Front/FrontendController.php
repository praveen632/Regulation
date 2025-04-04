<?php

namespace App\Http\Controllers\Front;

use App\Services\PayUService\Exception;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use App\Models\DocumentCenter;
use App\Events\ContactCreated;
use App\Events\LeadCreated;
use Illuminate\Http\Request;
use App\Mail\EnquiryMail;
use App\Models\Category;
use App\Models\Enquiry;
use App\Models\Service;
use App\Mail\FinoMail;
use App\Models\Page;
use App\Models\Seo;
use Redirect;
use Session;
use Auth;
use Mail;

class FrontendController extends Controller
{
    public function index()
    {
        
        $record = Category::where('status', 1)->where('id', 9)->orderBy('id', 'asc')->first();
        
        $seo = Page::select('pages.*', 'seos.meta_title', 'seos.meta_keyword', 'seos.meta_description')
        ->leftJoin('seos', 'seos.page_id', '=', 'pages.id')
        ->where('seos.page_type', 0)
        ->where('pages.slug', '/')
        ->first();
        
        return view('frontend.pages.index', compact('record', 'seo'));
    }

    
    public function SaveEnquiry(Request $request)
    {
        $this->validate($request, [
              'name' =>'required',
              'email' =>'required',
              'mobile' =>'required',
        ]);
        
    try{

        $obj = new enquiry();
        $obj->name           = $request->name;
        $obj->email          = $request->email;
        $obj->mobile         = $request->mobile;
        $obj->state_id       = $request->state_id;
        $obj->service_slug   = $request->service_slug;
        $obj->save();

        //Mail::to($request->email)->send(new EnquiryMail());
        return redirect('thanks');
       
    }
    catch(Exception $e)
    {
       $request->session()->flash('alert-danger', 'Sorry Something Else Problem!');
       return redirect()->back();
    }

    }

    
    public function services(Request $request)
    {
        //dd($request->all());
        $records   = Service::query()->with([
                                     'Category'=>function($c){$c->select('id', 'name', 'slug');}, 
                                     'Subcategory'=>function($sc){$sc->select('id', 'name', 'slug');}
                                     ])
                    ->where('slug', $request->services_slug)                    
                    ->where('status', 1)
                    //->where('service_type', 1)
                    ->first(); 
        
        
        if(isset($records->slug))
        {
            $seo = Seo::where('page_id', $records->id)->where('page_type', 2)->first();
            return view('frontend.pages.services', compact('records', 'seo'));
        }
        else{
           return view('errors.404');
        }
    }

    public function companyregistration()
    {
        return view('frontend.pages.comp_reg');
    }

    public function thanks()
    {
        return view('frontend.pages.thanks');
    }
    public function companyRegistrationLandingPage()
    {
        return view('frontend.pages.landingPage');
    }

    // public function newthanks()
    // {
    //     return view('frontend.pages.newthanks');
    // }

    public function aboutUs()
    {
        // $record = Page::where('slug', 'about')->first();
        $record = Page::select('pages.*', 'seos.meta_title', 'seos.meta_keyword', 'seos.meta_description')
        ->leftJoin('seos', 'seos.page_id', '=', 'pages.id')->where('seos.page_type', 0)->where('slug', 'about-us')->first();
        
        return view('frontend.pages.about_us', compact('record'));
    }

    public function blog()
    {
       return view('frontend.pages.blog');
    }

    public function privacyPolicy()
    {
         $record = Page::select('pages.*', 'seos.meta_title', 'seos.meta_keyword', 'seos.meta_description')
        ->leftJoin('seos', 'seos.page_id', '=', 'pages.id')->where('seos.page_type', 0)->where('slug', 'privacy-policy')->first();
        return view('frontend.pages.privacy-policy', compact('record'));
    }

    public function refundPolicy()
    {
        $record = Page::select('pages.*', 'seos.meta_title', 'seos.meta_keyword', 'seos.meta_description')
        ->leftJoin('seos', 'seos.page_id', '=', 'pages.id')->where('seos.page_type', 0)->where('slug', 'refund-policy')->first();
        return view('frontend.pages.refund_policy', compact('record'));
    }

    public function termsService()
    {
        $record = Page::select('pages.*', 'seos.meta_title', 'seos.meta_keyword', 'seos.meta_description')
        ->leftJoin('seos', 'seos.page_id', '=', 'pages.id')->where('seos.page_type', 0)->where('slug', 'term-of-use')->first();
        return view('frontend.pages.terms-service', compact('record'));
    }

    public function videos()
    {
        
        $record = Page::select('pages.*', 'seos.meta_title', 'seos.meta_keyword', 'seos.meta_description')
        ->leftJoin('seos', 'seos.page_id', '=', 'pages.id')->where('seos.page_type', 0)->where('slug', 'video')->first();
        $record['image'] = asset($record->image);
        return view('frontend.pages.videos', compact('record'));
    }

    public function accountingCompliance()
    {
        $record = Page::where('slug', 'accounting-compliance')->first();
        return view('frontend.pages.accounting_compliance', compact('record'));
    }

    public function iprTrademark()
    {
        $record = Page::where('slug', 'ipr-trademark')->first();
        return view('frontend.pages.ipr_trademark', compact('record'));
    }

    public function licences()
    {
        $record = Page::where('slug', 'licences')->first();
        return view('frontend.pages.licences', compact('record'));
    }

    public function businessIncorporation()
    {
        $record = Page::where('slug', 'business-incorporation')->first();
        return view('frontend.pages.business_incorporation', compact('record'));
    }

    public function taxRegistrations()
    {
        $record = Page::where('slug', "tax-registrations")->first();        
        return view('frontend.pages.tax_registrations', compact('record'));
    }

    public function internationalBusinessSetup()
    {
        $record = Page::where('slug', "international-business-setup")->first();        
        return view('frontend.pages.international_business_setup', compact('record'));
    }

    public function legalAgreements()
    {
        $record = Page::where('slug', "legal-agreements")->first();        
        return view('frontend.pages.legal_agreements', compact('record'));
    }
    
    public function fundraisingServices()
    {
        $record = Page::where('slug', "fundraising-services")->first();        
        return view('frontend.pages.fundraising_services', compact('record'));
    }

    public function fundraisingCompliance()
    {
        $record = Page::where('slug', "fundraising-compliance")->first();        
        return view('frontend.pages.fundraising_compliance', compact('record'));
    }

    public function secratarialCompliance()
    {
        $record = Page::where('slug', "secratarial-compliance")->first();        
        return view('frontend.pages.secratarial_compliance', compact('record'));
    }

    public function reporting()
    {
        $record = Page::where('slug', "reporting")->first();        
        return view('frontend.pages.reporting', compact('record'));
    }

    public function statutoryRefunds()
    {
        $record = Page::where('slug', "statutory-refunds")->first();        
        return view('frontend.pages.statutory_refunds', compact('record'));
    }

    public function peopleManagement()
    {
        $record = Page::where('slug', "people-management")->first();        
        return view('frontend.pages.people_management', compact('record'));
    }

    public function taxRegistrationClosure()
    {
        $record = Page::where('slug', "tax-registration-closure")->first();        
        return view('frontend.pages.tax_registration_closure', compact('record'));
    }

    public function entityClosure()
    {
        $record = Page::where('slug', "entity-closure")->first();        
        return view('frontend.pages.entity_closure', compact('record'));
    }

    public function labourlawregistrations()
    {
        $record = Page::where('slug', "labour-law-registrations")->first(); 
        return view('frontend.pages.labour_law_registrations', compact('record'));
    }

    public function labourlawcompliances()
    {
        $record = Page::where('slug', "labour-law-compliances")->first();        
        return view('frontend.pages.labour_law_compliances', compact('record'));
    }

    public function hrpolicies()
    {
        $record = Page::where('slug', "hr-policies")->first();        
        return view('frontend.pages.hr_policies', compact('record'));
    }

    public function virtualcfo()
    {
        $record = Page::where('slug', "virtual-cfo")->first();        
        return view('frontend.pages.virtual_cfo', compact('record'));
    }

    public function subcategoryDetails(Request $request, $subcatslug)
    {
        if($_SERVER['REQUEST_URI'] == "/sitemap.xml")
        {
            $posts = Service::orderBy('id', 'desc')->get();
            $pages = Page::orderBy('id', 'desc')->get();
            $categories = Category::where("parent_id", "!=", 0)->orderBy('id', 'desc')->get();
            return response()->view('frontend.pages.sitemap', compact('posts', 'pages', 'categories'))->header('Content-Type', 'text/xml');
        }
    
       $category = Category::where('slug', $subcatslug)->first();
      
       if(isset($category->slug))
        {
            $services = Service::select('id', 'slug', 'name', 'price', 'mrp_price', 'small_description')->where('service_type', 1)->where('subcategory_id', $category->id)->where('category_id', $category->parent_id)->where('status', 1)->get();
            $seo = Seo::where('page_id', $category->id)->where('page_type', 1)->where('page_type', 1)->first();
       
            return view('frontend.pages.subcategory_details', compact('category', 'seo', 'services'));
        }
        else{
            return view('errors.404');
        }
    }

    public function contactUs()
    {
        $record = Page::where('pages.slug', 'contact-us')->first();
        $seo    = Seo::where('page_id', $record->id)->where('page_type', 0)->first();
        
        return view('frontend.pages.contact-us', compact('record', 'seo'));
    }

    public function saveContactUs(Request $request)
    {
        $this->validate($request, [
            'contact_name' => 'required|string',
            'contact_subject' => 'required',
            'contact_email' => 'required|email',
            'contact_mobile' => 'required|numeric|digits:10',
            'contact_messages'=>'required'
        ]);

        $obj = new Enquiry();
        $obj->document_center_id = 0;
        $obj->name          = $request->contact_name;
        $obj->email         = $request->contact_email;
        $obj->mobile        = $request->contact_mobile;
        $obj->subject       = $request->contact_subject;
        $obj->description   = $request->contact_messages;
        $obj->service_slug  = strip_tags($request->service_slug);
        $checkmail = strpos($obj->email,'startupfino.com');
        if($checkmail>0)
        {
           return view('frontend.pages.newthanks', compact('obj')); 
        } 
        else
        {
            $obj->save();
            return view('frontend.pages.newthanks', compact('obj'));  
        }
        //return redirect('newthanks'), compact('obj'));
        // return response()->json([
        //     'success' => 'Your Contact has been Successfully Saved.',
        // ]);
    }

    public function sendNewEmail(Request $request)
    {
        Log::info('sendNewEmail data ='.$request);

        //Send mail to user
        \Mail::send('emails.finomail', array(
            'email' => $request['email']
        ), function($message) use ($request){
            $message->from('info@startupfino.com');
            $message->to($request->email);
            $subject= ($request->email=='info@whizseed.com'?'Testing Purpose By Startupfino':'Welcome To Whizseed');
            $message->subject($subject);
        });

        //  Send mail to admin
        \Mail::send('emails.adminmail', array(
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'service_slug' => $request->service_slug
        ), function($message) use ($request){
            $message->from('info@whizseed.com');
            $message->to(['info@whizseed.com','info@whizseed.com']);
            $message->cc(['info@whizseed.com','info@whizseed.com']);
            $subject= ($request->email=='info@whizseed.com'?'Testing Purpose By Startupfino':'New Lead on Website '.date('d-m-Y'));
            $message->subject($subject);
        });
        return redirect('thanks');
    }

    //////////////////////////////////////////////////////////////////

    public function changePassword()
    {
        return view('front.pages.change-password');
    }
    
    public function forgotPassword()
    {
        return view('front.pages.forgot-password');
    }

    public function login(Request $request)
    {
        return view('front.pages.login');
    }
    
    public function signup()
    {
        return view('front.pages.signup');
    }

    

}
