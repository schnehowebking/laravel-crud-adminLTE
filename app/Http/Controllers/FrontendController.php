<?php

namespace App\Http\Controllers;

class FrontendController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('frontend.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function about()
     {

         return view('frontend.about');
     }
     public function blog()
     {

         return view('frontend.blog');
     }
     public function contact()
     {

         return view('frontend.contact');
     }
     public function payment()
     {

         return view('frontend.payment');
     }
     public function pricing()
     {

         return view('frontend.pricing');
     }


}
