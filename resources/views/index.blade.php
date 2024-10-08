@extends('layouts.app')

@section('title', 'The list of Tasks')

@section('content')
    <p>You have {{ count($tasks) }} Tasks</p>
    <div>
        <ul>
            @forelse ($tasks as $task)
            <li><a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a></li>
            @empty
            <span>No Tasks to display</span>
            @endforelse
        </ul>
    </div>
@endsection