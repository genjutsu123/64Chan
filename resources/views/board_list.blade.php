@extends('layouts.app')

{{--@section('title', 'Page Title')--}}

@section('content')
    <div class="container">
        @foreach ($boards as $board)
            @php $count = 0; @endphp
            <div class="card" id="boardbtn" onclick="getID({{$board->id}})">
                <div class="card-header">
                    <h5 class="card-title">{{$board->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        Posts: {{$board->posts->count()}} | Comments: 
                        @foreach ($board->posts as $post)
                            @php
                                $count = $count + $post->comments->count();
                            @endphp
                        @endforeach
                        {{$count}}
                    </h6>
                </div>
            </div>
            <br>
        @endforeach
    </div>
    {{$boards->links()}}
@endsection