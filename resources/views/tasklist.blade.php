@extends('layout')

@section('title')
Feladatlista
@endsection

@section('content')
<ul>
    @foreach ($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
</ul>
@endsection
