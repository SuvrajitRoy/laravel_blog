<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Article;

class ArticleController extends Controller
{
     public function get_index()
      {
      
      $blogs = Article::all();
    	return view('blog.index')
        ->with(compact('blogs'));
    

      }

     public function post_store(Request $request)
    {
        //dd($request->except('_token'));
      $input= $request->except('_token');
     
      if ($request->hasFile('image')) 
      {
      //dd($request->file('image'));

      $filename =$request->file('image')->getClientOriginalName();
     
      $request->file('image')->move(public_path("uploads"),$filename);
      
      $input['image'] = $filename;
      
      }
      //dd($input);
      Article::create($input);
      $msg= "Successfully saved";
      return redirect("article")
       ->with ('edit_msg',$msg);

    }

   public function get_create()
   {
      return view('blog.create');
   }

   public function get_show($id)
   {
    
   }

    public function get_edit($id)
    {
      $blog= Article::find($id);
      return view('blog.edit',compact('blog'));
     
     
    }

     
     public function post_update($id, Request $request)
     {
       
      $input= $request->except(['_token','_method']);
     
      if ($request->hasFile('image')) 
      {
         
      $filename =$request->file('image')->getClientOriginalName();
     
      $request->file('image')->move(public_path("uploads"),$filename);
      
      $input['image'] = $filename;
      
      }
       $m = 'Successfully updated';
      Article::where('id',$id)->update($input);
      return redirect("article")
       ->with ('update_msg',$m);
    }


    public function get_destroy($id)
    {
        Article::destroy($id);
        $msgD= "Successfully delete";
        return redirect('article')
        ->with ('delete_msg',$msgD);;
    }



}
