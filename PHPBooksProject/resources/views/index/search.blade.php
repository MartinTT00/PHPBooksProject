@extends('layouts.app')
@section('content')
<header>
<div class="inner">

			<br> 
</div>
<div style="text-align:center">
    <h1>Резултатите от търсенето:</h1>
    <br>

            @foreach($books as $book)
            @if(isset($book))
                <p>Име на книгата: {{$book->name}}</p>
				<p>Година на публикуване: {{$book->yearOfPublishment}}</p>
				<p>Жанр:	{{$book->genre->name}} </p>
				<p>Автор:  {{$book->author->name}}  <img src="{{$book->author->image}}" width="30px" height="30px">  </p>
        @endif

             <hr>

    </div>
    </header>
    @endforeach
@endsection