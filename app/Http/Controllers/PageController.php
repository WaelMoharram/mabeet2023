<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Page;

class PageController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $pages = Page::all();

        return view('dashboard.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        $page=new Page();
        return view('dashboard.pages.create',compact('page'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PageRequest $request)
    {

        $requests = $request->all();
        $requests['type']='page';
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }
        Page::create($requests);

        toast(__('Added successfully'),'success');
        return redirect(route('dashboard.pages.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

        $page = Page::findOrFail($id);

        return view('dashboard.pages.show',compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {

        $page = Page::findOrFail($id);

        return view('dashboard.pages.edit',compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, PageRequest $request)
    {

        $requests=$request->all();
        if ($request->hasFile('image')) {
            $requests['image'] = saveImage($request->image, 'images');
            $request->files->remove('image');
        }
        $page = Page::findOrFail($id);
        $page->fill($requests)->save();
        toast(__('Edited successfully'),'success');
        return redirect(route('dashboard.pages.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        abort(404);
        $page= Page::findOrFail($id);
        $page->delete();
        toast(__('Deleted successfully'),'success');
        return redirect(route('dashboard.pages.index'));
    }

}
