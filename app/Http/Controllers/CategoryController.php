<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class CategoryController extends Controller
{
    public function create() {
		return view('categories.create');
    }
    
    public function PostCreate(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        $category = new App\Category;

        $category->title = $request->title;
        $category->save();
        return redirect(url('/admin'));
    }

    public function edit($id)
    {
        $category = App\Category::find($id);
        return view('categories.edit', compact('category'));
    }

    public function postEdit(Request $request, $id)
    {
        $category = App\Category::find($id);

        $category->title = $request->title;
        $category->save();
        return redirect(url('/admin'));
    }

    public function delete($id)
    {
        $category = App\Category::find($id);
        $category->delete();
        return redirect()->back();     
    }
}
