<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\Constants;
use App\Http\Controllers\Controller;
use App\Models\PostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostCategoryController extends Controller
{
    public function index()
    {
        $categories =  PostCategory::whereNull('parent_id')->with('subcategory')->get();
        return view('dashboards.category.index', [
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

        //  dd($boolOptions);
        $categories =  PostCategory::get();
        return view('dashboards.category.create', [
            'categories' => $categories
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

        $cat_image =  $request->file('cat_image')->getClientOriginalName();
            $request->cat_image->extension();
        $request->cat_image->move(public_path('categoryImages'), $cat_image);

        PostCategory::create([
            'name' => $request->input('name'),
            'cat_image' => $cat_image,
        ]);
        return redirect()->route('admin.category.index')->with('success_message', 'Category added successfully');
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
        $category =  PostCategory::where('id', $id)->first();
        return view('dashboards.category.edit', compact('category'));
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
        // $data = array();
        $data['name'] = $request->input('name');
        $image = $request->file('cat_image');

        if (($image != null)) {
            $previous_image = Storage::delete('categoryImages/'.$image);
            // unlink($previous_image);
                $cat_image =  $request->file('cat_image')->getClientOriginalName();
                $request->cat_image->extension();
                $request->cat_image->move(public_path('categoryImages'), $cat_image);
                $data['cat_image'] = $cat_image;


            $category = PostCategory::where('id',$id)->update($data);
            return redirect()->route('admin.category.index')->with('success_message', 'Category Updated successfully');
        } else {
            $category = PostCategory::where('id', $id)->update($data);
            return redirect()->route('admin.category.index')->with('success_message', 'Category Updated successfully');
        }
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

    public function deleteImageFromStorage($value)
    {
        $path_explode = explode('/', (parse_url($value))['path']); //breaking the full url 
        $path_array = [];
        array_push($path_array, $path_explode[2], $path_explode[3]); // storing the value of path_explode 2 and 3 in path_array array
        $old_image = implode('/', $path_array);

        if ($old_image) {
            Storage::delete($old_image);
        }
    }
}
