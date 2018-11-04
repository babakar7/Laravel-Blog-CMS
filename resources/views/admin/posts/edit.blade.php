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
    
    
    <h2 class="text-center">Edit Post: {{$data['post']->title}} </h2>

    
    </div>
    
    
    
    
    <div class ="panel-body">
    
        
        
     
        
           <form action="/admin/post/update/{{$data['post']->id}}" method="post" enctype="multipart/form-data">
        
        
        {{csrf_field()}}
            
            
            
            <div class="form-group">
            
            
                <label for="featured"> Image </label>
                
                <input type="file" name="featured" class="form-control" value="{{ $data['post']->featured}}">   
                
                
            </div>
               
               
               
                  <div class="form-group">
            
            
                <label for="title"> Title </label>
                
                <input type="text" name="title" class="form-control" value="{{$data['post']->title}}">   
                
                
            </div>
               
               
               
                  <div class="form-group">
            
            
                <label for="content"> Content </label>
                      
                
                      
                      <textarea id="summernote" type="text" name="content" class="form-control" rows="5" value="">  {{$data['post']->content}}  </textarea>
  
                                
                
            </div>
               
               
                               
                
               
               
               
               
               
                   <div class="form-group">
            
            
                <label for="category"> Category </label>
                       
                    
                       
                       
                       
                          <select name="category_id" id="category" class="form-control">  
                    
                    
                    @foreach($data['categories'] as $category)
                        
                        
                        
                        <option value="{{$category->id}}"   <?php if($category->id == $data['post']->category_id ){echo " selected";} ?>  >   
                            
                            
                            
                            {{$category->name}}</option>
                              
                              
                              
                        
                        @endforeach
                    
                    </select>  
                
                
            </div>
               
               
               
               
               
            
                <div class="form-group" >
            
            
                <label for="group"> Select tags </label>

                @foreach($data['tags'] as $tag)

                    
    
                    <div class="form-check" id="group">

                        
                        
              <input class="form-check-input" type="checkbox" value="{{$tag->id}}" id="defaultCheck1" name="tags[]" 
                     
                     @foreach($data['post']->tags as $t)
                     
                        
                        @if($t->id == $tag->id)
                        
                        checked
                        
                        @endif
                     
                     
                     @endforeach
                     
                     >
                        
                        
                        
              <label class="form-check-label" for="defaultCheck1">
                  
                  
                  
                  
                    {{$tag->tag}}
                        
                        </label>
            </div>
                    
                    
                    
                    
                    
                    @endforeach
                
            </div>
               
               
               
               
               
               
               
               
               
               
            
            
            <div class="form-group"> 
                
                
                
                <div class="text-center">
                
            <button class="btn btn-success" type="submit"> Update Post</button>
            
               </div>
            
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