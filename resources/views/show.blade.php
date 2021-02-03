
@extends('layouts.app')





@section('content')

        <div class="card mt-5">
            <div class="card-header">
              Post info
            </div>
            <div class="card-body">
              <h5 class="card-title"> Title:- <p class="card-text">{{$post->title}}</p></h5>
              <h5 class="card-title"> Description :- <p class="card-text">{{$post->description}}</p></h5>

              {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
            </div>
          </div>

@endsection

























