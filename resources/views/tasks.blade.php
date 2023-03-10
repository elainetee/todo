@extends('layouts.app')

@section('content')
<!-- 
@php
    $lastModified = isset($lastModified) ? $lastModified : '';
@endphp
<meta name="csrf-token" content="{{ csrf_token() }}">
<script>
var lastModified = '{{ $lastModified }}';

window.addEventListener('beforeunload', function (event) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/clear-todo');
    xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
        
        var currentTime = new Date().getTime();
        var lastModifiedTime = new Date(lastModified).getTime();
        
        if (lastModifiedTime > currentTime) {
            xhr.send();
        }
    console.log(lastModifiedTime);
console.log(currentTime);
});
</script> -->

 <!-- Bootstrap Boilerplate... -->
 <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')

        <!-- New Task Form -->
        <form action="{{ url('task') }}" method="POST" class="form-horizontal">
            {!! csrf_field() !!}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Current Tasks -->
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Task</th>
                        <th> </th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $task->name }}</div>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection