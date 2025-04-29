<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    function index($id=null){
        // Get all categories
        $categories = Category::oldest()->get();
        $editedCategory = null;
        if ($id) {
            $editedCategory = ($categories->where('id', $id)->first());
        }
        
        return view('backend.category.index', compact('categories', 'editedCategory'));
    }

    function storeOrUpdate(Request $request, $id = null)
    {
        // Validate the request
        $request->validate([
            'title' => 'required | min:3',
        ]);

        $isExist = Category::where('id', '!=', $id)->where('slug', str()->slug($request->title))->exists();
        if ($isExist) {
            return back()->withErrors(['title' => 'This category already exists.']);
        }

        $category = Category::findOrNew($id);
        $category->title = $request->title;
        $category->slug = str()->slug($request->title);
        if($id){
            $category->status = $request->status ?? false;
        }
        $category->save();
        return back();
    }
    function delete($id)
    {
        Category::findOrFail($id)->delete();
        return back();
        
    }
        
}

