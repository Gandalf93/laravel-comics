@extends ('layouts.app')

@section('title','Comics')

@section('content')

<div class="main">
    <div class="card-container">   
        @foreach($cardsData as $cardData)
        <div class="card">
            <img src="{{$cardData['thumb']}}" :alt="{{$cardData['series']}}">
            <div> {{$cardData['series']}} </div>
          </div>
        @endforeach
    </div>
</div>

@endsection