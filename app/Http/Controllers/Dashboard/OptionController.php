<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use Appstract\Options\Option;
use Illuminate\Http\Client\Request;

class OptionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admins');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        $options = Option::all();

        return view('dashboard.system-options.index',compact('options'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $option = Option::findOrFail($id);

        return view('dashboard.system-options.edit',compact('option'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        option([request()->key => request()->value]);
        toast(__('Edited successfully'),'success');
        //return redirect()->back();
        return redirect(route('dashboard.system-options.index'));
    }

}
