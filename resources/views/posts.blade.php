@extends('layouts.main')
@section('content')
    @foreach($posts as $post) 
    <p>
        {{
            $post
        }}
    </p>
    @endforeach
@endsection('content')
