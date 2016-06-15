  @extends('layouts.master')

   @section('content')

    <div class="container">
    	<div class="row">
    		<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    			
    	  <h3>Enter your blog information</h3>
    	  <hr>

	 <form method="post" action="article/store" enctype="multipart/form-data">
	
        
        <input type="hidden" name="_token" value="{{csrf_token()}}">

      <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
	        <label >Title</label> 
	        <input name="title" type="text" class="form-control"  placeholder="Title">
        </div> 
      </div>
        
        <div class="row control-group">
	        <div class="form-group col-xs-12 floating-label-form-group controls">
		    
		        <label for="description">Description</label>
		        <textarea name="description" class="form-control" 
		        placeholder="Description"></textarea> 
	        </div>
	      </div>
        
        <div class="row control-group">
	        <div class="form-group col-xs-12 floating-label-form-group controls">
		    
		    <label> Image</label>
		    <input type="file" class="form-control"  name="image" >
		    <p class="help-block">Choose a picture</p>
		    </div>
		 </div>  

		<div class="row control-group">
		    <div class="form-group col-xs-12 floating-label-form-group controls">
	        
	        <label> UserName </label> 
	        <input  type="text" class="form-control" name="username" placeholder="UserName">
	        </div>
        </div>
        
       <div class="row">

	       <div class="form-group col-xs-12 "> <br>
	        <button type="submit" class="btn btn-default">Submit</button> 
	        </div>
        </div>
     </form> 

     	</div>
    	</div>
    </div>
 
 @stop