<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function homepage()
    {
        /* $flag = flag::find(1)->Product;
        $veggiesid = Category::select('id')->where('category_name', 'Vegetables')->first();
        $veggies = Category::find($veggiesid->id)->Product; */
        return view('store.pages.homepage')/* ->with('featured', $flag)->with('vegetables', $veggies) */;
    }
}
