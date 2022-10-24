<?php

namespace App\Http\Controllers;

use App\Models\Tax;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post=new Tax;
        $post->driver_name=$request->get('dname');
        $post->owner_name=$request->get('oname');
        $post->amount=$request->get('amount');
        $post->purpose=$request->get('purpose');
        $post->save();

        echo "<h1>Date send successfully</h1>";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tax  $tax
     * @return \Illuminate\Http\Response
     */
    public function show(Tax $tax)
    {
        $allTax = Tax::all();
        return view('show',['allTax'=>$allTax]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tax  $tax
     * @return \Illuminate\Http\Response
     */
    public function edit(Tax $tax, $id)
    {
        $posts = Tax::find($id);
        return view('edit',['posts'=>$posts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tax  $tax
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tax $tax, $id)
    {
        $post = Tax::find($id);
        $post->driver_name=$request->get('dname');
        $post->owner_name=$request->get('oname');
        $post->amount=$request->get('amount');
        $post->purpose=$request->get('purpose');
        $post->save();

        return redirect('show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tax  $tax
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tax $tax, $id)
    {
        $post = Tax::find($id);
        $post->delete();
        return redirect('show');
    }
}