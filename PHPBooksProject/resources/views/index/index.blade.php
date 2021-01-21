@extends('layouts.app')

@section('content')
    <div class="inner">
        <div class="content">
            <header>
				<h2><center>{{$title}}</center></h2>
			<h4><center>	{!! $text !!}</center> </h4>
				
				<form action="/search" method="get">
                <div>
                    <input type="text" id="searchTextInput"  name="searchTextInput" style="float: right" />
                    <br>
                    <br>
                    <br>
                    <input type="submit" id="submitSearch" style="float: right" />
                </div>
            </form>
			<br> 
			
                <hr>
				@foreach($books as $book)
                <p>Име на книгата: {{$book->name}}</p>
				<p>Година на публикуване: {{$book->yearOfPublishment}}</p>
				<p>Жанр:	{{$book->genre->name}} </p>
				<p>Автор:  {{$book->author->name}}  <img src="{{$book->author->image}}" width="30px" height="30px">  </p>

                <hr>
			@endforeach
			
            </header>
        </div>
    </div>
@endsection