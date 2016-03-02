@extends('app')

@section('content')
<H1>{{$categorie->nom}}</h1>


{{$categorie->subjects}}

@foreach ($categorie->subjects as $subject)
{{var_dump($subject->author)}}

@endforeach
@endsection
