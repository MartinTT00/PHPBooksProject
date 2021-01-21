@extends('layouts.app')
@section('content')
<header>
<div class="inner">
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
</div>
<div style="text-align:center">
    <h1>Резултатите от търсенето:</h1>
    <br>
    @foreach($authors as $author)
<hr>
                 <h3 >Име на автора: {{$author->name}}</h3>
                 <h3>Починал на възраст от: {{$author->age}} години</h3>
            <h3>Написал е: {{$author->countOfBooks}} книги</h3>
                        @foreach($author->books as $book)
                            <h3>Една от книгите е: {{$book->name}}</h3>

                 @endforeach
                 @foreach($author->genres as $genre)
                        

                <strong><h3>Жанр в който е писал автора: {{$genre->name}}</h3>
                        @endforeach


            <h3>Снимка на автора: </br> <img src="{{$author->image}}" width="300" height="350" alt="no image"> <br> <br></h3>
             <hr>
        </strong> 

    </div>
    </header>
    @endforeach
@endsection