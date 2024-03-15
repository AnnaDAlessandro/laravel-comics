@extends('layouts.app')
@section('main')
<main>
   <div class="jumbatron">

   </div>
   <div>
     <h2> Current Series  </h2>
     <div class="section">
    <div class="row">
    @foreach($comics as $element)
    <div class="col-2">
        <figure>
            <img src="{{ $element['thumb']}}" alt="{{ $element['title']}}">
        </figure>
        <h4>{{ $element['title']}}</h4>

    </div>
    @endforeach
   </div>
     </div>
   
   </div> 
    <div class="bg-blue">
     <div>
      <ul>
        
      </ul>
    </div>

   </div> 

</main>

@endsection
