@extends('layouts.app')

@section('title', 'Today\'s Tasks')

@section('content')
    <section class="hero">
        <p class="eyebrow">Today’s Schedule</p>
        <h1>Make today productive.</h1>
        <p class="subtitle">
            Keep track of today’s responsibilities while enjoying a calm beachside atmosphere.
        </p>
    </section>

    <div class="section-heading">
        <div>
            <h2>Tasks for Today</h2>
            <p>{{ today()->format('F d, Y') }}</p>
        </div>
    </div>

    <div class="card">
        @if ($tasks->isEmpty())
            <div class="empty-state">
                <h3>No tasks scheduled today.</h3>
                <p>Enjoy your free time by the shore!</p>
            </div>
        @else
            <table>
                <thead>
                    <tr>
                        <th>Task</th>
                        <th>Status</th>
                        <th>Date</th>
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