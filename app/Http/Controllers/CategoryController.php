<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
    public function category(){
    	$category=Category::all();
    	return view('frontend/category',compact('category'));
    }
    public function delete($id){
       $category=Category::find($id);
       $category->delete();
       return redirect('category');
    }
   

}
