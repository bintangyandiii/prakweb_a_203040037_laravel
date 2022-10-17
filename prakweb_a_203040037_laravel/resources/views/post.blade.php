@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post["title"] }}</h2>
    <h5>{{ $post["autor"] }}</h5>
    <p>{{ $post["Body"] }}</p>
</article>

<a href="/blog">Back</a>
@endsection