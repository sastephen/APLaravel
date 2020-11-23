@extends('layout')

@section('content')
    <div class="container">
        <div>
            <a href="posts/create" class="btn btn-success">New Post</a>
        </div><br>
        <div class="card">
            <div class="card-header" style="text-align:center">
                Contents
            </div>
            <div class="card-body">
                @foreach ($data as $post)

                    <div>
                        <h5 class="card-title">{{ $post->name }}</h5>
                        <p class="card-text">{{ $post->description }}</p>
                        <div class="form-row">
                            <a href="/posts/{{ $post->id }}" class="m-2 btn btn-primary">View</a>
                            <a href="/posts/{{ $post->id }}/edit" class="m-2 btn btn-warning">Edit</a>
                            <form action="/posts/{{ $post->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="m-2 btn btn-danger">Del</button>
                            </form>
                        </div>
                    </div>
                    <hr>

                @endforeach

            </div>
        </div>
    </div>

@endsection
