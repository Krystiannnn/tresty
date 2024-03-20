@extends('./layouts/layout')

@section('title', 'Items')

@section('content')
  
@foreach ($items as $tableName => $records)
    @foreach ($records as $record)
        <div class="card">  
            @foreach ($keys[$tableName] as $key)
                @if ($key !== 'author_id')
                    <div>{{ $record->$key }}</div>
                @endif
            @endforeach
            <div>author: {{ $record->first_name .' '. $record->last_name }}</div>
        </div>
    @endforeach
@endforeach

@endsection