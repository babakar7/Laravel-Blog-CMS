@extends ('layouts.app')



@section('content')


@if(count($errors) >0)


<ul class="list-group">
           
           @foreach($errors->all() as $error)
           
           <li class="list-group-item text-danger">  {{$error}} </li>
           
           @endforeach
           
           
           </ul>

@endif

<div class="panel panel-default">


<div class="panel-heading">
    
    
    <h2 class="text-center">Create a new post </h2>

    
    </div>
    
    
    
    
    <div class ="panel-body">
    
        
        
        <form action="{{route('post.store')}}" method="post"  enctype="multipart/form-data">
        
        
        {{csrf_field()}}
            
            
            
            <div class="form-group">
            
            
                <label for="title"> Title </label>
                
                <input type="text" name="title" class="form-control">   
                
            </div>
            
            
            
                <div class="form-group">
            
            
                <label for="category"> Select a Category </label>
                
                    <select name="category_id" id="category" class="form-control">  
                    
                    
                    @foreach($categories as $category)
                        
                        
                        
                        <option value="{{$category->id}}">  {{$category->name}}</option>
                        
                        @endforeach
                    
                    </select>  
                
            </div>
            
            
            
            
            
                <div class="form-group" >
            
            
                <label for="group"> Select tags </label>

                @foreach($tags as $tag)

                    
                    
                    
                    <div class="form-check" id="group">

                        
                        
              <input class="form-check-input" type="checkbox" value="{{$tag->id}}" id="defaultCheck1" name="tags[]">
                        
                        
                        
              <label class="form-check-label" for="defaultCheck1">
                  
                  
                  
                  
                    {{$tag->tag}}
                        
                        </label>
            </div>
                    
                    
                    
                    
                    
                    @endforeach
                
            </div>
            
            
            
            
            
            
            
                <div class="form-group">
            
            
                <label for="featured"> Featured Image </label>
                
                <input type="file" name="featured" class="form-control">   
                
            </div>
            
            
            
            
                <div class="form-group">
            
            
                <label for="content"> Content </label>
                
    

                    
                  <textarea id="summernote" name="content" cols="50" rows="20"></textarea>

            
            </div>
            
            
                  <div class="form-group text-center">
            
            
                
                    <button class="btn btn-success" type="submit"> Submit post </button>
            </div>
            
            
            
        
        
        </form>
    
    
    
    </div>
    
    
    

</div>


@stop





@section('styles')

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">

@stop


@section('scripts')

<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js">    </script>


    
    <script>
$(document).ready(function() {
    
  $('#summernote').summernote();
    
    $('#summernote').summernote({
  height: 700,                 // set editor height
  minHeight: 600,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: true                  // set focus to editable area after initializing summernote
});
    
});
    
    

</script>
@stop