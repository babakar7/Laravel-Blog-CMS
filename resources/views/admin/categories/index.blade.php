@extends('layouts.app')


@section('content')



<div class= "panel panel-default">
    
    
        
    <div class="panel-heading">
        <h2 class="text-center">All categories</h2>

    </div>
    
    <div class="panel-body">
<table class= "table table-hover">
<tr>
    
    <th>Category Name</th>
    
    <th> Edit </th>
    
    
    
    <th> Delete </th>
    </tr>

    
    
    <tbody>
        
        
        
     
        
        @if($categories->count() > 0)
        
        
        @foreach($categories as $category)
        
        <tr> 
        
        
        <td>
            {{$category->name}}
            
            </td>
            
            
            
            
            <td>  <a href="/admin/category/edit/{{$category->id}}"> <button class="btn btn-primary btn-sm"> EDIT </button>  </a> </td>
            
            
            

            
             <td>  <a  href="{{route('category.delete', ['id' => $category->id]   )}}"> <button class="btn btn-danger btn-sm"> DELETE </button>  </a>  </td>

            
        </tr>
        
        
        
        
        @endforeach
        
        
        
        @else
    
        
        
        <tr><td class="text-center" colspan="3">No categories created</td></tr>
        
        @endif
    
    </tbody>


</table>
        
        
        </div>

</div>

@stop