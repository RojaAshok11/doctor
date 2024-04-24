<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class WebsiteController extends Controller
{

    public function home(): View
    {
        return view('website.home');
    }


}
