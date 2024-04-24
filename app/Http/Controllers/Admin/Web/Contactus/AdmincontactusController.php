<?php

namespace App\Http\Controllers\Admin\Web\Contactus;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class AdmincontactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admincontactus(): View
    {
        return view('admin.contactus.contactus');

    }
}
