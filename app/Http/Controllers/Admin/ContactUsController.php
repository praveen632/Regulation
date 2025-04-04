<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;

class ContactUsController extends Controller
{
    public function index()
    {
        // $results = Enquiry::all();
        $results = Enquiry::orderBy('created_at', 'DESC')->get();
        return view('admin.enquiry.index', compact('results'));
    }

    public function destroy(Request $request, $id)
    {
        try{
            Enquiry::where('id', $id)->delete();
            return redirect()->route('leads.index')
                        ->with('success','Lead deleted successfully');
        }
        catch(Exception $e)
        {
            return redirect()->route('leads.index')
            ->with('success','Lead Unable to delete');
        }
    }
}
