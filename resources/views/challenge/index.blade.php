@extends('layouts.app')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Submitted</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($challenges as $challenge)
            <tr>
                <td><a href="/challenges/{{ $challenge->id }}">{{ $challenge->title }}</a></td>
                <td>{{  $challenge->description }}</td>
                <td>{{ $challenge->created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection