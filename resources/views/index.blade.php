@extends('layouts.app')





@section('content')



<a href="{{route('posts.create')}}" class="btn btn-success mb-3">create post</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Bosted By</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @php
                $i=1;
                @endphp
                @foreach ($posts as $post)

                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{$post->title}}</td>
                        <td>{{$post->user ? $post->user->name : 'user not found'}}</td>
                        {{-- @dd($post->user(),$post->user) --}}
                        <td>{{$post->created_at->format('y-m-d')}}</td>
                        <td>
                            <a class="btn btn-info" href="{{route('posts.show',['post'=>$post->id])}}" >View</a>
                            <a class="btn btn-primary" href="{{route('posts.edit',['post'=>$post->id])}}" >Edite</a>
                            <form style="display: inline " method="POST" action="{{route('posts.destroy',['post'=>$post->id])}}">
                                @method('DELETE')
                                @csrf
                            <button class="btn btn-danger" type="submit" >Delete</button>
                            </form>
                        </td>
                    </tr>
              @endforeach
            </tbody>
          </table>



@endsection



























































