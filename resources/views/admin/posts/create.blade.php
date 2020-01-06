@extends('layouts.admin')



@section('content')

<h1>Create Posts</h1>
<div class="row">
 {!! Form::open(['method' => 'post', 'action' => 'AdminPostsController@store', 'files' => true]) !!}
    {{-- <form method="post" action="/posts"> --}}
       {{csrf_field()}}
       <div class="form-group">
           {!! Form::label('title', 'Post Title') !!}          
           {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div> 
       
        <div class="form-group">
           {!! Form::label('category_id', 'Category') !!}
           {!! Form::select('category_id', ['' => 'Choose Category'] + $categories, null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id', 'Photo') !!}
            {!! Form::file('photo_id', ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
                {!! Form::label('body', 'Post Body') !!}          
                {!! Form::textarea('body', null, ['class' => 'form-control', 'rows' => 3]) !!}
        </div>    
     
        
       <div class="form-group">    
        {!! Form::submit('SAVE', [
            'class' => 'btn btn-primary'
        ]) !!}        
         </div>
    {!! Form::close() !!}
</div>
<div class="row">
    @include('includes.form_error')
</div>
    
    

@stop