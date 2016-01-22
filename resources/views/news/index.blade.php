@extends('app')

@section('content')
<h1>Historiques des activités</h1>


  @foreach ($news as $new)

  <p>{{$new}}</p>
  @endforeach


@endsection
