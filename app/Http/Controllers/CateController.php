<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Sex;
use Illuminate\Http\Request;

class CateController extends Controller
{
    public function apiCate(){
        $cates = Category::orderBy('id' , 'desc')->paginate(request('limit') ?? 7); 
        return response()->json(
            [ 
                'status' => 200,
                'cate' => $cates
           ]
        );
    }

    // List cate
    public function index(){
        $cates = Category::orderBy('id' , 'desc')->paginate(request('limit') ?? 7); 
        return view('category.list' , compact('cates'));
    }

    // Add cate
    public function store(Request $request){
        try {
            $cate = new  Category();
            $cate->fill($request->all());
            $cate->save();
            return redirect()->back()->with('Add success !!!');
        } catch (\Throwable $th) {
            return 'Error';
        }
    }

    // Deletecate
    public function distroy($id){
        
       try {
          $cate = Category::find($id);
          if($cate){
            $cate->delete();
          }
          return redirect()->back()->with('success' , 'Add success !!!');
       } catch (\Throwable $th) {
           return  'Error';
       }
    }

      // Deletecate
      public function edit($id){
        $cates = Category::orderBy('id' , 'desc')->paginate(request('limit') ?? 7); 
        try {
           $cate = Category::find($id);
          if($cate){
            return view('category.list' , compact('cate' , 'cates'));
          }
        } catch (\Throwable $th) {
            return  'Error';
        }
     }

       // Udpate
       public function Update(Request $request){
           $cate = Category::find($request->id);
          if($cate){
            $cate->fill($request->all());
            try {
                $cate->save();
                return redirect()->back()->with('success' , 'Update success !!!');
            } catch (\Throwable $th) {
                return  'Error';
            }
            
          }
      
     }
}
