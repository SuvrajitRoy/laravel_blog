   @extends('layouts.master')

   @section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">


             <!--    <div class="post-preview">
                    <a href="post.html">
                        <h2 class="post-title">
                            Failure is not an option
                        </h2>
                        <h3 class="post-subtitle">
                            Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>
                </div> -->

             @if(Session::has('edit_msg'))
                <div class="alert alert-success">
                    {{Session::get('edit_msg') }}
                </div>
            @endif

            @if(Session::has('update_msg'))
                <div class="alert alert-warning">
                    {{Session::get('update_msg') }}
                </div>
            @endif


            @if(Session::has('delete_msg'))
                <div class="alert alert-danger">
                    {{Session::get('delete_msg') }}
                </div>
            @endif


            @foreach($blogs as $blog)

              <div class="post-preview">
                    <!-- <a href="post.html"> -->
                     <a>
                        <h2 class="post-title">
                           {{$blog->title}}
                        </h2>
                        <div class="pull-right btn-group">
                            <small><a class="btn btn-xs btn-warning" href="article/edit/{{$blog->id}}">Edit</a>
                            </small>
                             <small><a class="btn btn-xs btn-danger" href="article/destroy/{{$blog->id}}">Delete
                            </a> </small>
                            
                      <!--   <form method="post" action="article/{{$blog->id}}" >
                            <input type="hidden" name="_token" value="{{csrf_token()}}"> 
                            <input type="hidden" name="_method" value="DELETE">
                              <button type="submit">Delete</button>
                        </form> -->
                        </div>
                        
                        <h3 class="post-subtitle">
                             {{$blog->description}}
                        </h3>
                      
                             @if(!empty($blog->image))

                             <img src="/uploads/{{$blog->image}}" alt="" width="70px">
                            
                            @endif
                        
                    </a>
                    <!-- <p class="post-meta">Posted by {{$blog->username}} on {{$blog->created_at}} </p> -->
                    <p class="post-meta">Posted by {{$blog->created_by}} on {{$blog->created_at}} </p>
                </div>
            @endforeach
              <hr>


                <!-- Pager -->

                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<!--  -->
    <hr>

    @stop
    

