@extends('layout')

@section('title')
 Home
@endsection

@section('content')
<h1> Welcome </h1>

<ul>
@foreach($tasks as $task)
      <li>{{ $task }}</li>
@endforeach
</ul>

@endsection
