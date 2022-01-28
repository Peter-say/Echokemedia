<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\Constants;
use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    public function index()
    {
        $categories =  PostCategory::get();
        return view('dashboards.category.index' , [
          'categories' => $categories,  
        //    '$options' => $options,
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $options = [
        //     Constants::ACTIVE => "Yes",
        //     Constants::INACTIVE => "No",
        // ];

        //  dd($boolOptions);
        $categories =  PostCategory::get();
        return view('dashboards.category.create' , [
         
        ]);
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
          'name' => 'required|max:20',
           'cat_image' => 'required',
        //    'is_trending' => 'required'
        ]);

        $cat_image =  $request->name . '_' . Constants::APP_NAME . '.' .
        $request->cat_image->extension();
       $request->cat_image->move(public_path('categoryImages'), $cat_image);

         PostCategory::create([
         'name' => $request->input('name'),
         'cat_image' => $cat_image,
        ]);
        return back()->with('success_message', 'Category added successfully');
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
