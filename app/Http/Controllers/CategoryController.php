<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryStoreRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('lottery.category');
    }

    public function store(CategoryStoreRequest $request)
    {
        dd($request->all());
    }
}
