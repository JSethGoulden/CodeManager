@extends('layouts.app')
@section('content')
Update Challenge
<form method="POST" action="/challenges/ {{ $challenge->id }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" id="title" value="{{ $challenge->title }}" required />
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input class="form-control" type="text" name="description" id="description"
            value="{{ $challenge->description }}" required />
    </div>
    <div class="form-group">
        <label for="language">Language</label>
        <input class="form-control" type="text" value="javascript" name="language" id="language"
            value="{{ $challenge->language }}" disabled>
    </div>
    <div class="form-group">
        <label for="comments">Comments</label>
        <textarea class="form-control" type="text" name="comments" id="comments">{{ $challenge->comments }}</textarea>
    </div>
    <div class="form-group">
        <label for="code">Code</label>
        <textarea class="form-control" name="code" id="code" cols="60" rows="9" required id="code">{{ $challenge->code }}</textarea>
    </div>
    <button type="submit">Submit</button>
</form>
<script>
    window.onload = function() { 
        let CMInstance = CodeMirror.fromTextArea(document.getElementById("code"), {
            mode: "javascript",
            theme: "darcula"
        }); 
      }
</script>
@endsection