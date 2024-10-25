@extends('layouts.main')
@section('content')
    @foreach($posts as $post) 
    <p>
        {{
            $post
        }}
    </p>
    @endforeach
    <div>{{$posts->links()}}</div>
@endsection('content')
