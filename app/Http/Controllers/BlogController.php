<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Blog;

class BlogController extends Controller
{
   
      public function index()
      {
      
      $blogs = Blog::all();
    	return view('blog.index')
        ->with(compact('blogs'));

      }
       
    //    public function save(Request $request){
    //     // dd($request->except('_token'));
        
    //     $input= $request->except('_token');
    //     Blog::create($input);
    //     // return redirect();
    //     // return redirect("/");
    //    return view("main");

    // }

    //   public function index2(){
    //   return view('hello');

    // }

     public function store(Request $request)
    {
        //dd($request->except('_token'));
      $input= $request->except('_token');
     
      if ($request->hasFile('image')) 
      {
      //dd($request->file('image'));

      $filename =$request->file('image')
      ->getClientOriginalName();
     
      $request->file('image')->move(public_path("uploads"),
        $filename);
      
      $input['image'] = $filename;
      
      }
      // dd($input);
      Blog::create($input);
      return redirect("/");

    }

   
    public function edit($id)
    {
      $blog= Blog::find($id);
      return view('blog.edit',compact('blog'));
    }

     
     public function update($id, Request $request)
     {
       
      $input= $request->except('_token');
     
      if ($request->hasFile('image')) 
      {
         
      $filename =$request->file('image')->getClientOriginalName();
     
      $request->file('image')->move(public_path("uploads"),$filename);
      
      $input['image'] = $filename;
      
      }
      Blog::where('id',$id)->update($input);
      return redirect("/");
    }


    public function destroy($id)
    {
        Blog::destroy($id);
        return redirect('/');
    }


     public function admin()
      {
      
      
      return view('admin.admin');

      }


}
