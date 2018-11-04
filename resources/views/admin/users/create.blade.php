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
    
    
    <h2 class="text-center">Create a new user </h2>

    
    </div>
    
    
    
    
    <div class ="panel-body">
    
        
        
     
        
           <form action="{{route('user.store')}}" method="post" >
        
        
        {{csrf_field()}}
            
            
            
            <div class="form-group">
            
            
                <label for="user"> User </label>
                
                <input type="text" name="name" class="form-control" id="user">   
                
                
            </div>
               
               
               
                  <div class="form-group">
            
            
                <label for="email"> Email </label>
                
                <input type="email" name="email" class="form-control" id="email">   
                
                
            </div>
            
            
            <div class="form-group"> 
                
                
                
                
                <div class="text-center">
                
            <button class="btn btn-success" type="submit"> Add User</button>
            
               </div>
            
            </div>
            
            
            
        
        
        </form>
    
        
    
    
    </div>
    
    
    

</div>


@stop