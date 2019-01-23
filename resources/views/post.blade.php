@extends('layouts.app')

{{--@section('title', 'Page Title')--}}

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">{{$post->title}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    {{date_format($post->created_at, "F d, Y")}}
                </h6>
            </div>
            <div class="card-body">
                <p class="card-text">
                    {{$post->message}}
                </p>
                <hr>
                <form action="/comment" method="POST">
                    @csrf
                    <input type="text" name="post_id" value="{{$post->id}}" hidden>
                    <div class="form-group">
                        <label for="message">Comment:</label>
                        <textarea class="form-control" name="message" id="message" rows="3" required></textarea>
                    </div>
                    {{-- <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image" id="image">
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Comment</button>
                </form>
            </div>
        </div>

        <br>

        @foreach ($comments as $comment)
        <div class="card">
            <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted">
                    {{date_format($comment->created_at, "F d, Y")}}
                </h6>
                <p class="card-text"> 
                    {{$comment->message}}
                </p>
            </div>
        </div>
        <br>
        @endforeach

    </div>
    {{$comments->links()}}
@endsection