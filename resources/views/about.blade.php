@extends('layout')

@section('content')

    <h3>About Page</h3>

    @foreach ($data as $data)
        <p>{{ $data }}</p>
    @endforeach

@endsection

