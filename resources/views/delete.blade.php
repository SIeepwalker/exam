@extends('layouts/layout')

@section("title", "Task deleted succesfully !")

@section('main')
    <div class="content">
        <p class="is-size-5">The task "{{$task->title}}" has been deleted.</p>
        <a href="/" class="button">Back to the list</a>
    </div>
@endsection
