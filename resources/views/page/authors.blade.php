@extends('./layouts/layout')

@section('title', 'Authors')

@section('content')
  <div class="list">

    <div class="button"><a href="{{ route('addproduct', ['type' => 'author']) }}"> + add Author </a></div>

    @foreach ($authors as $author) 

      <div> {{ $author->first_name }}  {{ $author->last_name }}  {{ $author->place_of_birth }} </div>

    @endforeach
  </div> 
@endsection