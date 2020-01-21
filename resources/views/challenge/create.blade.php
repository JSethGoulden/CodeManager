@extends('layouts.app')
@section('content')
<div>
    Challenge submission
</div>
<form method="POST" action="/challenges">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input 
            class="form-control" 
            type="text" 
            name="title" 
            id="title" 
            required 
            value="{{ old('title') }}"/>
            @error('title')
                <small class="warning">{{ $errors->first('title') }}</small>
             @enderror
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input 
            class="form-control" 
            type="text" 
            name="description" 
            id="description" 
            required 
            value="{{ old('description') }}"/>
            @error('description')
                <small class="warning">{{ $errors->first('description') }}</small>
            @enderror
    </div>
    <div class="form-group">
        <label for="language">Language</label>
        <input 
            class="form-control" 
            type="text" 
            value="javascript" 
            name="language" 
            id="language">
            @error('language')
                <small class="warning">{{ $errors->first('language') }}</small>
            @enderror
    </div>
    <div class="form-group">
        <label for="comments">Comments</label>
        <input 
            class="form-control" 
            type="text" 
            name="comments" 
            id="comments" 
            value="{{ old('comments') }}"/>
            @error('commends')
             <small class="warning">{{ $errors->first('comments') }}</small>
            @enderror
    </div>
    <div class="form-group">
        <label for="code">Code</label>
        <textarea 
            class="form-control" 
            name="code" 
            id="code" 
            cols="60" 
            rows="9" 
            id="code"
            required>{{ old('code', 'Console.log("Hello world!");') }}</textarea>
            @error('code')
                <small class="warning">{{ $errors->first('code') }}</small>
            @enderror
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