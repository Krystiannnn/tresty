

@extends('./layouts/layout')

@section('title', 'Type')

@section('content')

 <div class="contentNav"><div class="buttons"><a href="{{ route('addproduct', ['type' => $typeItem]) }}"> + add {{ $typeItem }} </a></div></div>

 @foreach ($request as $reg)
    <div class="card">
        @foreach ($key as $keyy)

            @if ($keyy !== 'author_id')
            <div> {{ $reg->$keyy }} </div>
            @endif
           
        @endforeach
           <div> {{ $reg->first_name }} {{ $reg->last_name }} </div>
           <div> {{ $reg->place_of_birth }} </div>
    </div>
 @endforeach

 <div class="contentNavGh">.</div>

@endsection