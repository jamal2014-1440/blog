@extends('layouts.app')


@section('content')
<form method="POST" action="{{route('posts.store')}}">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label">title</label>
      <input name="title" type="text" class="form-control" id="exampleInputEmail1">

    </div>
    <div class="form-group">
      <label >Description</label>
      <textarea name="description" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label >Users</label>
        <select name="user_id" id="" class="form-control">
            @foreach ($users as $user)


            <option value="1">{{$user->name}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">create post</button>
  </form>






@endsection








