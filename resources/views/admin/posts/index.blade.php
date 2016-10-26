@extends('layouts.admin')


@section('content')

<h1>Posts</h1>

<table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Photo</th>
        <th>Owner</th>
        <th>Category</th>
        <th>Title</th>
        <th>Body</th>
        <th>Created at</th>
        <th>Updated at</th>
      </tr>
    </thead>
    <tbody>

    @foreach($posts as $post)

      <tr>
        <td>{{$post->id}}</td>
        <td><img src="{{$post->photo ? $post->photo->file : 'http://placehold.it/400x400'}}" alt="" height="50" width="50"></td>
        <td>{{$post->user->name}}</td>
        <td>{{$post->category ? $post->category->name : 'no category'}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->body}}</td>
        <td>{{$post->created_at->diffForHumans()}}</td>
        <td>{{$post->updated_at->diffForHumans()}}</td>
      </tr>

     @endforeach
     
    </tbody>
  </table>

@stop