


@section('css-files')
  @vite('resources/css/users.css')
@endsection

<x-app-layout>


  
<div class="container">
    {{ $testy->name}} || {{ $testy->surname }}
    <br />
        {{ $testy->showHTML() }}  <br />

        <div class="pagin">
         @foreach ($users as $user) 

           {{ $user->name }} <br />
        
         @endforeach
        </div> 

        {{ $users->links() }}
</div>

 
</x-app-layout>

 
