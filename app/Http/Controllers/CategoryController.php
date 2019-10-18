<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class CategoryController extends Controller
{
    /**
     * Returns create view
     *
     * @return void
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Validates date then inserts to database
     *
     * @param Request $request
     * @return void
     */
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

    /**
     * Gets specific category with id then returns view
     *
     * @param [type] $id
     * @return void
     */
    public function edit($id)
    {
        $category = App\Category::find($id);
        return view('categories.edit', compact('category'));
    }

    /**
     * Gets specific category then inserts to database
     *
     * @param Request $request
     * @param [type] $id
     * @return void
     */
    public function postEdit(Request $request, $id)
    {
        $category = App\Category::find($id);

        $category->title = $request->title;
        $category->save();
        return redirect(url('/admin'));
    }

    /**
     * Get specific category then deleted from database
     *
     * @param [type] $id
     * @return void
     */
    public function delete($id)
    {
        $category = App\Category::find($id);
        $category->delete();
        return redirect()->back();
    }
}
