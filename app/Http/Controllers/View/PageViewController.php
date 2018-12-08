<?php

namespace App\Http\Controllers\View;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageViewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Verify the token based on the type and show verify method.
     *
     * @return \Illuminate\Http\Response
     */
    public function verify()
    {
        return view('pages.verify');
    }
}
