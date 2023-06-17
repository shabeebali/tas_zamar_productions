<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use App\Models\NewsLetterRegistration;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class EnquiryController extends Controller
{
    public function index(Request $request): Response
    {
        $page = (int)$request->input('page',1);
        $sortBy = $request->input('sort');
        $descending = $request->input('descending','0') == 1;
        $rowsPerPage = (int)$request->input('rpp',20);
        $enquiries = Enquiry::select(['id','first_name','last_name','email','phone','comment','created_at']);
        if($sortBy && $sortBy !== 'null') {
            $enquiries->orderBy($sortBy,$descending ? 'DESC' : 'ASC');
        }
        $data = $enquiries->paginate($rowsPerPage);
        Inertia::share('title','Enquiries');
        return Inertia::render('Admin/Enquiries/Index',[
            'items' => $data->items(),
            'pagination' => [
                'page' => $page,
                'sort' => $sortBy ?? '',
                'rpp' => $rowsPerPage,
                'total' => $data->total(),
                'descending' => $descending
            ]
        ]);
    }

    public function newsletterIndex(Request $request): Response
    {
        $page = (int)$request->input('page',1);
        $sortBy = $request->input('sort');
        $descending = $request->input('descending','0') == 1;
        $rowsPerPage = (int)$request->input('rpp',20);
        $enquiries = NewsLetterRegistration::select(['id','email','created_at']);
        if($sortBy && $sortBy !== 'null') {
            $enquiries->orderBy($sortBy,$descending ? 'DESC' : 'ASC');
        }
        $data = $enquiries->paginate($rowsPerPage);
        Inertia::share('title','Enquiries');
        return Inertia::render('Admin/NewsletterRegistrations/Index',[
            'items' => $data->items(),
            'pagination' => [
                'page' => $page,
                'sort' => $sortBy ?? '',
                'rpp' => $rowsPerPage,
                'total' => $data->total(),
                'descending' => $descending
            ]
        ]);
    }

    public function destroy($id): RedirectResponse
    {
        $enquiry = Enquiry::find($id);
        $enquiry?->delete();
        return Redirect::back()->with('success','Record Deleted Successfully');
    }

    public function newsletterDestroy($id): RedirectResponse
    {
        $enquiry = NewsLetterRegistration::find($id);
        $enquiry?->delete();
        return Redirect::back()->with('success','Record Deleted Successfully');
    }
}
