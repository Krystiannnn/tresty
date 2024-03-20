@extends('./layouts/layout')

@section('title', 'Authors')

@section('content')

 <div class="form">  
    add {{ $key }}
   @if ($key == 'book')

    <form method="POST" action="{{ route('addDb') }}">
        @csrf <!-- Dodaj pole ukrytego CSRF token -->
        <div class="form-group">
            <label for="name">title:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">price:</label>
            <input type="text" name="price" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">author:</label>
            <input type="text" name="author" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">genre:</label>
            <input type="text" name="genre" id="g" class="form-control" required>
        </div>
        <button type="submit" class="buttons">add</button>
    </form>

   @endif

   @if ($key == 'comic')

    <form method="POST" action="{{ route('addproduct') }}">
        @csrf <!-- Dodaj pole ukrytego CSRF token -->
        <div class="form-group">
            <label for="name">title:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">price:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">author:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">series:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <button type="submit" class="buttons">add</button>
    </form>

   @endif

   @if ($key == 'short_story_collection')

    <form method="POST" action="{{ route('addproduct') }}">
        @csrf <!-- Dodaj pole ukrytego CSRF token -->
        <div class="form-group">
            <label for="name">title:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">price:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">author:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">theme:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <button type="submit" class="buttons">add</button>
    </form>

   @endif

   
   @if ($key == 'author')

    <form method="POST" action="{{ route('addproduct') }}">
        @csrf <!-- Dodaj pole ukrytego CSRF token -->
        <div class="form-group">
            <label for="name">first name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">last name:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="name">place of birth:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
       
        <button type="submit" class="buttons">add</button>
    </form>

   @endif

 </div>

@endsection
