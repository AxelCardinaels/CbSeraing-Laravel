@extends('app')

@section('content')
<H1>Les photos</h1>

  {{$albums}}

  @foreach ($albums as $album)
    {{$album}}
    @foreach ($album->childrens as $children)
      {{$children}}

      @foreach ($children->photos as $photo)
        {{$photo}}
      @endforeach
    @endforeach
  @endforeach


@endsection
