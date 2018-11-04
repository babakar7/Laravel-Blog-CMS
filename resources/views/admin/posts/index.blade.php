@extends('layouts.app')


@section('content')



<div class= "panel panel-default">
    
    
    
    <div class="panel-heading">
        <h2 class="text-center">All posts</h2>

    </div>
    
    <div class="panel-body">
        
        
        
        
        
<table class= "table table-hover">
<tr>
    
    <th>  Image </th>
    
    <th> Title </th>
    
    
    
    <th> Edit </th>
    
    
    
       <th> Delete </th>
    
    
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
            
            
            

            
             <td>  <a  href="/admin/post/delete/{{$post->id}}"> <button class="btn btn-danger btn-sm"> TRASH </button>  </a>  </td>

            
        </tr>
        
        
        
        
        @endforeach
    
        
        
        @else 
        
        
        <tr><td colspan="4" class="text-center">  No Published Posts </td></tr>
        
        
        
        @endif
    
    </tbody>


</table>
        
        
        </div>

</div>

@stop