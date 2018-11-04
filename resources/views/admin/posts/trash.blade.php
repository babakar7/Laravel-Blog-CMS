@extends('layouts.app')


@section('content')



<div class= "panel panel-default">
    
    
    
    <div class= "panel-heading text-center">
    <h2> Trashed Posts</h2>
    
    </div>
    
    
    <div class="panel-body">
<table class= "table table-hover">
<tr>
    
    <th>  Image </th>
    
    <th> Title </th>
    
    
    
    <th> Edit </th>
    
    
    
       <th> Restore </th>

    
    
           <th> Destroy </th>

    
    </tr>

    
    
    <tbody>
        
        
        @if($posts->count() > 0)
        
        
        
        @foreach($posts as $post)
        
        <tr> 
        
        
        <td>
           <img src=" {{$post->featured}}" alt = "{{$post->title}}" width=50px height=50px>
            
            </td>
            
            
            
               <td>
            {{$post->title}}
            
            </td>
            
            
            
            
            <td>  <a href="/admin/post/edit/{{$post->id}}"> <button class="btn btn-primary btn-sm"> EDIT </button>  </a> </td>
            
            
            

            
             <td>  <a  href="/admin/post/restore/{{$post->id}}"> <button class="btn btn-success btn-sm"> RESTORE </button>  </a>  </td>

            
            
            
             <td>  <a  href="/admin/post/kill/{{$post->id}}"> <button class="btn btn-danger btn-sm"> DELETE  </button>  </a>  </td>

            
        </tr>
        
        
        
        
        @endforeach
    
                @else

        
        
        <tr><td colspan="5" class="text-center"> No trashed posts</td></tr>
        
        @endif
        
        
        
        
        
        
    
    </tbody>


</table>
        
        
        </div>

</div>

@stop