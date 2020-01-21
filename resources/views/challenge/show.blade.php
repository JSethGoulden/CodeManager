@extends('layouts.app')
@section('content')
<script src="/js/challenge.js"></script>
<h1 class="row"> {{ $challenge->title }} </h1>
<div class="row">
    <div class="col">
        <div> {{ $challenge->language }}</div> <br />
        <div> {{ $challenge->description }} </div> <br />
        <div>{{ $challenge->comments }}</div>
    </div>
    <div class="col cm-container">
        <textarea id="cm"> {{ $challenge->code }} </textarea>
    </div>
</div>
@endsection