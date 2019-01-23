@extends('layouts.app')

{{--@section('title', 'Page Title')--}}

@section('content')
    <div class="container">
        @foreach ($posts as $post)
            <div class="card" id="postcard" onclick="getID({{$post->id}})">
                <div class="card-header">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        {{date_format($post->created_at, "F d, Y")}} |
                        Comments: {{$post->comments->count()}}
                    </h6>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        {{$post->message}}
                    </p>
                </div>
            </div>
        <br>
        @endforeach
    </div>
    
    {{$posts->links()}}
@endsection