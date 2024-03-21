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
            <input type="text" name="title" id="name" class="@error('title') is-invalid @enderror" required>

            @if (isset($_SESSION['e_tytul']))
              <br>   {{ $_SESSION['e_tytul'] }}
            @endif

            @if (isset( $_SESSION['e_tytul2']))
              <br>   {{  $_SESSION['e_tytul2'] }}
            @endif

           
        </div>

        <div class="form-group">
            <label for="name">price:</label>
            <input type="text" name="price" id="name" class="@error('price') is-invalid @enderror" required>
            @if (isset( $_SESSION['e_price']))
              <br>   {{  $_SESSION['e_price'] }}
            @endif
        </div>

        <div class="form-group">
            <label for="name">author:</label>
            <select id="author" name="author" class="@error('author') is-invalid @enderror">
            @foreach ($authors as $author) 

               <option value= "{{ $author->id }}" >{{ $author->first_name }} {{ $author->last_name }}</option>
            
            @endforeach
            </select>
            @error('author')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="name">genre:</label>
            <input type="text" name="genre" id="g" class="@error('genre') is-invalid @enderror" required>
            @if (isset($_SESSION['e_genre']))
              <br>   {{ $_SESSION['e_genre'] }}
            @endif

            @if (isset( $_SESSION['e_genre1']))
              <br>   {{  $_SESSION['e_genre1'] }}
            @endif

        </div>
        <button type="submit" class="buttons">add</button>
    </form>

   @endif

   @if ($key == 'comic')

     <p>site under construction</p>



   @endif 

   @if ($key == 'short_story_collection')

      <p>site under construction</p>

   @endif

   
   @if ($key == 'author')

      <p>site under construction</p>

   @endif

 </div>

 @if (isset($_SESSION['query']))
  {{ $_SESSION['query'] }}
 @endif

@endsection
