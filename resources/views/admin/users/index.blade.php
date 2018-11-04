@extends('layouts.app')


@section('content')



<div class= "panel panel-default">
    
    
    
    <div class="panel-heading">
        <h2 class="text-center">Users</h2>

    </div>
    
    <div class="panel-body">
        
        
        
        
        
<table class= "table table-hover">
    
<tr>
    
    <th> Image </th>
    
    <th> Name </th>

    <th> Permissions </th>

    <th> Delete </th>
        
</tr>

    
    
    <tbody>
        
        
        
        
        @if($users->count() > 0)
        
        
        @foreach($users as $user)
        
        <tr> 
        
        <td>   
            <img src="{{asset($user->profile->avatar)}}" width =60px height=60px style="border-radius:50%">
            
            </td>
            
            
            <td>
            
            
            {{$user->name}}
            </td>
            
            
            
                  <td>
            
            
                @if($user->admin)
                      
                      
                      
                      
                      <a href="{{route('user.not.admin', ['id' => $user->id])}}" class= "btn btn-danger btn-xs">  Remove Permissions </a>  
                      
                      @else
                      
                      <a href="{{route('user.admin', ['id' => $user->id])}}" class= "btn btn-success btn-xs">  Make Admin </a>  
                      
                      
                      @endif
            </td>
            
            
            
            <td>
                
                

            
     <a href="{{route('user.delete', ['id' => $user->id])}}" class= "btn btn-danger btn-xs">  Delete </a>  
                
                
                

            
            </td>
        
            
        </tr>
        
        
        
        
        @endforeach
    
        
        
        @else 
        
        
        <tr><td colspan="4" class="text-center">  No Users </td></tr>
        
        
        
        @endif
    
    </tbody>


</table>
        
        
        </div>

</div>

@stop