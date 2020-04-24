@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                {{-- <img class="card-img-top" src="holder.js/100x180/" alt=""> --}}
                <div class="card-body">
                <h3 class="card-title" name="title" id="title">{{$book->title}}</h3>
                <h4 class="card-title" name="author" id="author">
                    @foreach ($book->authors as $author)
                    {{ $loop->first ? '' : ', ' }}{{ $author->name }}
                    @endforeach
                </h4>
                    <p class="card-text" name="blurb" id="blurb">{{$book->blurb}}</p>
                    <p class="card-text" name="status" id="status">{{$book->status->status}}</p>
                    <p class="card-text" name="checkouts" id="checkouts">{{$book->user}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection