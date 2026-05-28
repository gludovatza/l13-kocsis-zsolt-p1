@extends('layout')

@section('title')
Post
@endsection

@section('content')
<p>{{ $post }}</p>
<p>length: {{ $length }} character(s)</p>
@endsection
