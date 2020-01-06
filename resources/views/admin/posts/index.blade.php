@extends('layouts.admin')



@section('content')

<h1>Posts</h1>

 <table class="table">
    <thead>
      <tr>
        <th>Photo</th>
        <th>Id</th>
        <th>Usernamey</th>
        <th>Category</th>
        <th>title</th>
        <th>body</th>
        <th>created at</th>
        <th>Updated at</th>
      </tr>
    </thead>
    <tbody>

        @if ($posts)
        @foreach ($posts as $post)
            <tr>
            <td><img height="50" src="{{$post->photo_id ? asset('images').'/'.$post->photo->file : 'http://placehold.it/400x400'}}" alt=""></td>
            <td>{{$post->id}}</td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>            
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>{{$post->created_at->diffForHumans()}}</td>
            <td>{{$post->updated_at->diffForHumans()}}</td>            
            </tr>
        @endforeach
            
        @endif
      
    </tbody>
  </table>

@stop