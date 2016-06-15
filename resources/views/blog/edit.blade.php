  @extends('layouts.master')

   @section('content')

    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
          
        <h3>Update your blog information</h3>
        <hr>

    <!-- <form method="post" action="update/{{$blog->id}}" enctype="multipart/form-data">
 -->   
     <form method="post" action="article/update/{{$blog->id}}" enctype="multipart/form-data">
         
        <input type="hidden" name="_token" value="{{csrf_token()}}">

      <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
          <label >Title</label> 
          <input name="title" type="text" class="form-control"  placeholder="Title"  required value="{{$blog->title}}" >

 

        </div> 
      </div>
        
        <div class="row control-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
        
            <label for="description">Description</label>
            <textarea name="description" class="form-control" 
            placeholder="Description">{{$blog->description}} </textarea> 
          </div>
        </div>
        
        <div class="row control-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
        
        <label> Image</label>
        
        @if(!empty($blog->image))
          <img src="uploads/{{$blog->image}}" alt="" width="100px">
        @endif 
        
        <input  type="file" class="form-control" name="image"  > 
        </div>
     </div>  

    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
          
          <label> UserName </label> 
          <!-- <input  type="text" class="form-control" name="username" placeholder="UserName" value="{{$blog->username}}" > -->
           <input  type="text" class="form-control" name="created_by" placeholder="UserName" value="{{$blog->username}}" >
          </div>
        </div>
        
       <div class="row">

         <div class="form-group col-xs-12 "> <br>
          <button type="submit" class="btn btn-default">Update</button> 
          </div>
        </div>
     </form> 

      </div>
      </div>
    </div>
 
 @stop