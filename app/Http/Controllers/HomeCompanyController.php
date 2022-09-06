<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return '<a href = "https://www.educastudio.com/contact-us">https://www.educastudio.com/contact-us</a>';
    }

    public function home()
    {
        return "Halaman awal website";
        // return redirect('https://www.educastudio.com');
    }

    public function product($id)
    {
        return '<a href = "https://www.educastudio.com/category/' . $id . '">https://www.educastudio.com/category/' . $id . '</a>';
    }

    public function news($id = null)
    {
        if ($id == null) {
            return '<a href = "https://www.educastudio.com/news">https://www.educastudio.com/news</a>';
        } else {
            return '<a href = "https://www.educastudio.com/news/' . $id . '">https://www.educastudio.com/news/' . $id . '</a>';
        }
    }

    public function program($id)
    {
        return '<a href = "https://www.educastudio.com/program/' . $id . '">https://www.educastudio.com/program/' . $id . '</a>';
    }

    public function aboutUs()
    {
        return '<a href = "https://www.educastudio.com/about-us">https://www.educastudio.com/about-us</a>';
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
