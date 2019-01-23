<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" >
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
    {{-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> --}}
</head>

<body>
    @include('layouts.nav')

    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="jumbotron jumbotron-fluid" >
                        <div class="container">
                            <h1 class="display-4 text-center" id="homebtn">64Chan</h1>
                            <p class="lead text-center" id="homebtn">-Post whatever, whenever.</p>
                            <hr>
                            <p class="lead text-center" id="boardsbtn">[BOARDS]</p>
                            
                            @if (preg_match('/\b\/board\/\b/i',url()->current()))
                                <h1 class="display-4 text-center" id="boardbtn" onclick="getID({{$board->id}})">{{$board->name}}</h1>
                                {{$board->message}}
                                <br>
                                <form action="/post" method="POST">
                                    @csrf
                                    <input type="text" name="board_id" value="{{$board->id}}" hidden>
                                    <div class="form-group">
                                        <label for="title">Title:</label>
                                        <input type="text" class="form-control" id="title" name="title" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message:</label>
                                        <textarea class="form-control" name="message" id="message" rows="3" required></textarea>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control" name="image" id="image">
                                    </div> --}}
                                    <button type="submit" class="btn btn-primary">Post</button>
                                </form>
                            @elseif (preg_match('/\b\/board\b/i',url()->current()))
                                <form action="/board" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">Name:</label>
                                        <input type="text" class="form-control" id="title" name="name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Message:</label>
                                        <textarea class="form-control" name="message" id="message" rows="3" required></textarea>
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control" name="image" id="image">
                                    </div> --}}
                                    <button type="submit" class="btn btn-primary">Post</button>
                                </form>

                                
                            @elseif (preg_match('/\bpost\/\b/i',url()->current()))
                                <h1 class="display-4 text-center" id="boardbtn" onclick="getID({{$post->board->id}})">{{$post->board->name}}</h1>
                            @endif
                        </div>    
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>
