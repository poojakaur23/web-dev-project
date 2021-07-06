<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AutocompleteController extends Controller
{
    public function viewSearch()
    {
    	return view('welcome');
    }

    public function autocomplete(Request $request)
    {
        $data = Product::select("name")
                ->where("name","LIKE","%{$request->query}%")
                ->get();
   
        return response()->json($data);
    }
}
