<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\page;

class pageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = page::all();
        return view('page', ['page' => $page]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_page');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        page::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect(route('page.index'))->with(['success' => 'Page Added!!']);
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
        $pageedit  = page::where('id' , $id)->first();
        return view('edit_page',['pageedit' => $pageedit] );
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
        page::where('id' , $id)->update([

            'title' => $request->title,
            'content' => $request->content,
        ]);
        return redirect(route('page.index'))->with(['success' => 'page Updated!!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        page::where('id' , $id)->delete();
        return redirect(route('page.index'))->with(['success' => 'page Deleted!!']);
    }
}
