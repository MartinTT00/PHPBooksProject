@extends('layouts.app')

@section('content')
    <div class="inner">
        <div class="content">
            <header>
				<h2>{{$title}}</h2>
				
                <hr>
				@foreach($books as $book)
                <p>Name of the Book: {{$book->name}}</p>
				<p>Year of Publishment: {{$book->yearOfPublishment}}</p>
				<p>Genre of the Book:	{{$book->genre->name}} </p>
				<p>Author of the Book:	{{$book->author->name}}   <img src="{{$book->author->image}}" width="30px" height="30px"> </p>

                <hr>
			@endforeach
			
            </header>
            {!! $text !!}
        </div>
    </div>
@endsection