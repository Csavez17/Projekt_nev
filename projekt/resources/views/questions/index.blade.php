
@extends('layout')

@section('content')
<h1>Kérdések:</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<ul>

    @foreach($questions as $question)
        <li class="question-box">{{$question->id}} - {{ $question->question_name }}</li>
    @endforeach
</ul>
@endsection