@extends('layout')

@section('content')
<h1>Abount me</h1>
{{--これはコメント--}}
<p>firstname : {{ $firstname }}</p>
<p>lastname : <?= $lastname ?></p>

@endsection