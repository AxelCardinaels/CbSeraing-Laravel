@extends('app')

@section('content')
<H1>Notre comité</h1>

{{$type->users}}

@if($type->id == 6)

  {{$users}}

@endif

@endsection
