@extends('layout')

@section('content')
    <div class="card-group">
        @foreach($books as $book)
        <div class="card">
            {{-- <img class="card-img-top" data-src="holder.js/100x180/" alt="Card image cap"> --}}
            <div class="card-body">
            <h4 class="card-title" name="title" id="title">Title:<a href="/books/{{$book->id}}">{{$book->title}}</a></h4>
            <h5 class="card-title" name="author" id="author">Authors:
                @foreach ($book->authors as $author)
                {{ $loop->first ? '' : ', ' }}{{ $author->name }}
                @endforeach
            </h5>
            {{-- <p class="card-text" name="blurb" id="blurb">{{$book->blurb}}</p> --}}
            {{-- <p class="card-text" name="status" id="status">{{$book->status}}</p> --}}
            </div>
        </div>
        @endforeach
    </div>
@endsection