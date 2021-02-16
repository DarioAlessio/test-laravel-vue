@extends('layouts.main-layout')
@section('content')
    <h1>POSTS</h1>

        @foreach ($posts as $post)

            <post
                :title="'{{ $post -> title }}'"
                :content="'{{ $post -> content }}'"
                :likes="{{ $post -> likes }}"
            ></post>

        @endforeach
        
@endsection
