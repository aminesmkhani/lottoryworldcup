<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('lottery.category',compact('categories'));
    }

    public function store(CategoryStoreRequest $request)
    {
         Category::create(['title' => $request->title]);
        return redirect()->back()->with('success','Successfully Create Title!');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect()->back()->with('success','Category Successfully Delete!');

    }
}
