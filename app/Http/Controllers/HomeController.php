<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$categories = DB::table('categories')->get();  //query builder
        
        $categories = Category::all();  //Elequent ORM
        return view('home', ['categories' => $categories]);
    }

}
