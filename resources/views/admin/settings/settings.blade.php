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
    
    
    <h2 class="text-center"> Edit blog setting </h2>

    
    </div>
    
    
    
    
    <div class ="panel-body">
    
        
        
     
        
           <form action="{{route('settings.update')}}" method="post" >
        
        
        {{csrf_field()}}
            
            
            
            <div class="form-group">
            
            
                <label for="user"> Sitename </label>
                
                <input type="text" name="site_name" class="form-control" id="user" value="{{$settings->site_name}}">   
                
                
            </div>
               
               
               
                  <div class="form-group">
            
            
                <label for="email"> Address </label>
                
                <input type="text" name="address" class="form-control" id="email" value="{{$settings->address}}">   
                
                
            </div>
               
               
               
                    
                  <div class="form-group">
            
            
                <label for="email"> Contact Number </label>
                
                <input type="text" name="contact_number" class="form-control" id="email" value="{{$settings->contact_number}}">   
                
                
            </div>
               
               
               
               
                   <div class="form-group">
            
            
                <label for="email"> Contact email </label>
                
                <input type="text" name="contact_email" class="form-control" id="email" value="{{$settings->contact_email}}">   
                
                
            </div>
            
            
            <div class="form-group"> 
                
                
                
                
                <div class="text-center">
                
            <button class="btn btn-success" type="submit"> Update Settings</button>
            
               </div>
            
            </div>
            
            
            
        
        
        </form>
    
        
    
    
    </div>
    
    
    

</div>


@stop