@extends('layouts.admin')

@section('content')
  {!! Form::open(['method' => 'post', 'action' => 'AdminUsersController@store', 'files' => true]) !!}
     {{-- <form method="post" action="/posts"> --}}
        {{csrf_field()}}
        <div class="form-group">
            {!! Form::label('name', 'User Name') !!}

            {!! Form::text('name', null, [
                'class' => 'form-control'           
            ]) !!}
        
        </div>    
              <div class="form-group">
                   {!! Form::label('email', 'User Email') !!}
                  
                   {!! Form::email('email', null, [
                       'class' => 'form-control'           
                   ]) !!}
                    
               </div>    
        
                     <div class="form-group">
                          {!! Form::label('status', 'User Status') !!}                 
                         

                          {!! Form::select('is_active', ['1' => 'Active','0'=>'Inactive'], 0, ['class' => 'form-control']) !!}
                           
                      </div>    

                  <div class="form-group">
                       {!! Form::label('user role', 'User Role') !!}
                      
                       {!! Form::select('role_id', ['' => 'choose options'] + $roles, null, ['class' => 'form-control']) !!}
                        
                   </div>   
                   
                         <div class="form-group">
                              {!! Form::label('password', 'User Password') !!}
                            
                              {!! Form::password('password', ['class' => 'form-control']) !!}
                               
                          </div>    
                         
                     <div class="form-group">
                        {!! Form::label('photo_id', 'User Image') !!}
                             {!! Form::file('photo_id', ['class' => 'form-control']) !!}
                    </div> 
              
                  @include('includes.form_error')
               
                     
                  
           
        <div class="form-group">    
         {!! Form::submit('SAVE', [
             'class' => 'btn btn-primary'
         ]) !!}        
          </div>
     {!! Form::close() !!}
@stop   