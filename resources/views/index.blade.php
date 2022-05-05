@extends('layouts/layout')

@section('title', 'List of Tasks')

@section('main')
<div class="mb-5">
    <a href="/" class="button">Order by creation date</a>
    <a href="/order" class="button">Order by title</a>
</div>

    <div class="task-list">
        @foreach ($tasks as $task)
            <div class="card">
                <div class="card-content">
                    <div class="content">
                        <h3>{{ $task->title }}</h3>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/task/{{ $task->id }}" class="card-footer-item">Show task ></a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
