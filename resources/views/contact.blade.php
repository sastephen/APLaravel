@extends('layout')

@section('content')

    <h3>Contact Page</h3>

    @foreach ($data as $data)
        <p>{{ $data }}</p>
    @endforeach

@endsection

