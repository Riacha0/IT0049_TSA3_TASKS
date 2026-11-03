@extends('layouts.app')

@section('title', 'All Tasks')

@section('content')
    <section class="hero">
        <p class="eyebrow">Task Collection</p>
        <h1>All Tasks</h1>
        <p class="subtitle">
            View all pending and completed tasks arranged according to their scheduled dates.
        </p>
    </section>

    <div class="section-heading">
        <div>
            <h2>Complete Task List</h2>
            <p>{{ $tasks->count() }} tasks found</p>
        </div>
    </div>

    <div class="card">
        @if ($tasks->isEmpty())
            <div class="empty-state">
                <h3>No task records were found.</h3>
            </div>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Status</th>
                        <th>Scheduled Date</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $task->title }}</td>
                            <td>
                                <span class="badge badge-{{ $task->status }}">
                                    {{ $task->status }}
                                </span>
                            </td>
                            <td>{{ $task->task_date->format('F d, Y') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection