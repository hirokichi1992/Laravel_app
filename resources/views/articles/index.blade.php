@extends('layout')

@section('content')
<h1>All Articles</h1>
    @foreach($articles as $num => $article)
    <article>
            <h2>
                <a href="{{ url('articles', $article->id) }}">
                    {{ $num+1 }} : {{ $article->title }}
                </a>
            </h2>
        </article>
    @endforeach
@endsection