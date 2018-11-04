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
    
    
    <h2 class="text-center">Edit Profile </h2>

    
    </div>
    
    
    
    
    <div class ="panel-body">
    
        
        
     
        
           <form action="{{route('user.profile.update')}}" method="post" enctype="multipart/form-data">
        
        
        {{csrf_field()}}
            
            
            
            <div class="form-group">
            
            
                <label for="user"> User name </label>
                
                <input type="text" name="name" class="form-control" id="user" value="{{$user->name}}">   
                
                
            </div>
               
               
                  <div class="form-group">
            
            
                <label for="user"> New Password </label>
                
                <input type="text" name="password" class="form-control" >   
                
                
            </div>
               
               
               
                 
                  <div class="form-group">
            
            
                <label for="user"> Email </label>
                
                <input type="email" name="email" class="form-control" value="{{$user->email}}" >   
                
                
            </div>
               
               
                  <div class="form-group">
            
            
                <label for="user"> Upload new avatar </label>
                
                <input type="file" name="avatar" class="form-control" >   
                
                
            </div>
               
               
               
                  <div class="form-group">
            
            
                <label for="email"> Facebook Profile </label>
                
                <input type="text" name="facebook" class="form-control" id="email" value="{{$user->profile->facebook}}">   
                
                
            </div>
               
               
               
        
               
               
               
               <div class="form-group">
            
            
                <label for="about"> About  </label>
                
<textarea name="about" id="about" cols="100" rows="6" value="{{$user->profile->about}}">  </textarea>                
                
            </div>
            
               
               
               
               
            
            <div class="form-group"> 
                
                
                
                
                <div class="text-center">
                
            <button class="btn btn-success" type="submit"> Update Profile</button>
            
               </div>
            
            </div>
            
            
            
        
        
        </form>
    
        
    
    
    </div>
    
    
    

</div>


@stop