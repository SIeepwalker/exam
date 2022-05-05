@extends('layouts/layout')

@section('title', $task->title)

@section('main')
    <div class="content">
        <p>{{ $task->created_at->format('F jS Y') }}</p>
        <p class="is-size-5">{{ $task->description }}</p>
    </div>


    <a href="/" class="button">
        Back to the list
    </a>
    <a class="button is-danger" href="/task/delete/{{ $task->id }}">
        Delete task
    </a>
@endsection
