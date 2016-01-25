@extends('app')

@section('content')
<H1>Les photos</h1>

  {{$album}}

  @if($album->childrens->count() == 0)

    @if($album->photos->count() == 0)

      <p>Pas de contenu pour ce album !</p>

    @else

      @foreach($album->photos as $photo)
        {{$photo}}
      @endforeach

    @endif

  @else
  {{$album->childrens}}

@endif

@endsection
