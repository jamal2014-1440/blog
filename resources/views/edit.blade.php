@extends('layouts.app')


@section('content')


<form method="POST" action="{{route('posts.update',['post'=>$posts->id])}}">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label">title</label>
      <input name="title" type="text" class="form-control" id="exampleInputEmail1" value="{{$posts->title}}">

    </div>
    <div class="form-group">
      <label >Description</label>
      <textarea name="description" class="form-control">{{$posts->description}}</textarea>
    </div>
    <div class="form-group">
        <label >Users</label>
        <select name="user_id" id="" class="form-control">
            @foreach ($users as $user)


            <option value="{{$user->id}}" @if ($user->id == $posts->user_id) selected @endif >{{$user->name}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">update post</button>
  </form>


@endsection










