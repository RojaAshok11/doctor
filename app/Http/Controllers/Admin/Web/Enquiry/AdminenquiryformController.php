<?php

namespace App\Http\Controllers\Admin\Web\Enquiry;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AdminenquiryformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminenquiryform(): View
    {
        return view('admin.enquiry.enquiryform');

    }
}
