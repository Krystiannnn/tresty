<div>
         @foreach ($books[0] as $book) 

          <div> {{ $book->title }} </div>
          <div> {{ $book->price }} </div>
          <div> {{ $book->genre }} </div>
          <div>autor: {{ $book->first_name .' '. $book->last_name }} </div>
          <br>
          <br>
         @endforeach

         @foreach ($books[1] as $book1) 

            <div> {{ $book1->title }} </div>
            <div> {{ $book1->price }} </div>
            <div> {{ $book1->series }} </div>
            <div>autor: {{ $book1->first_name .' '. $book1->last_name }} </div>
            <br>
            <br>
         @endforeach

         @foreach ($books[2] as $book2) 

            <div> {{ $book2->title }} </div>
            <div> {{ $book2->price }} </div>
            <div> {{ $book2->theme }} </div>
            <div>autor: {{ $book2->first_name .' '. $book2->last_name }} </div>
            <br>
            <br>
         @endforeach
</div> 