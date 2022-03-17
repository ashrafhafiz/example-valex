<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param $locale
     * @param $page
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index($locale, $page)
    {
        if (!in_array($locale, ['en', 'ar'])) {
            return view('404');
        }

        App::setLocale($locale);

        if (view()->exists($page)) {
            return view($page);
        } else {
            return view('404');
        }

        //   return view($page);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $page
     * @return \Illuminate\Http\Response
     */
    public function show($page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy($page)
    {
        //
    }
}
