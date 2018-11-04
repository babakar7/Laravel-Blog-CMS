@extends('layouts.app')


@section('content')



<div class= "panel panel-default">
    
    
        
    <div class="panel-heading">
        <h2 class="text-center">All tags</h2>

    </div>
    
    <div class="panel-body">
<table class= "table table-hover">
<tr>
    
    <th>Tag Name</th>
    
    <th> Edit </th>
    
    
    
    <th> Delete </th>
    </tr>

    
    
    <tbody>
        
        
        
     
        
        @if($tags->count() > 0)
        
        
        @foreach($tags as $tag)
        
        <tr> 
        
        
        <td>
            {{$tag->tag}}
            
            </td>
            
            
            
            
            <td>  <a href="/admin/tag/edit/{{$tag->id}}"> <button class="btn btn-primary btn-sm"> EDIT </button>  </a> </td>
            
            
            

            
             <td>  <a  href="/admin/tag/delete/{{$tag->id}}"> <button class="btn btn-danger btn-sm"> DELETE </button>  </a>  </td>

            
        </tr>
        
        
        
        
        @endforeach
        
        
        
        @else
    
        
        
        <tr><td class="text-center" colspan="3">No tags created</td></tr>
        
        @endif
    
    </tbody>


</table>
        
        
        </div>

</div>

@stop