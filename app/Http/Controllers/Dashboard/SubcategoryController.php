<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\Constants;
use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = PostCategory::with('subcategory')->where('parent_id' , null)->get();
        // dd($categories);
        return view('dashboards.subcategory.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'parent_id' => 'required:exists,post_categories',
            'name' => 'required|max:30',
             'cat_image' => 'required',
          //    'is_trending' => 'required'
          ]);
  
          $cat_image =  $request->name . '_' . Constants::APP_NAME . '.' .
          $request->cat_image->extension();
          $request->cat_image->move(public_path('categoryImages'), $cat_image);
  
          
          $data =  PostCategory::create([
           'name' => $request->input('name'),
           'parent_id' => $request->input('parent_id'),
           'cat_image' => $cat_image,
          ]);
         

          return redirect()->route('admin.category.index')->with('success_message', 'Subcategory added successfully');
      
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
