@extends('layouts.app')

@section('content')
  <!-- Create Task Form... -->
  <!-- Bootstrap Boilerplate... -->

  <div class="panel-body">
    <!-- Display Validation Errors -->
    @include('common.errors')

    <!-- New Task Form -->
    <form action="/task" method="POST" class="form-horizontal">
      {{ csrf_field() }}

      <!-- Task Name -->
      <table id="new-task">
        <td>New Task</td>
      </table>
      <div class="form-group">
      <label for="task" class="col-sm-3 control-label"><h4 class="task">Task</h4></label>

        <div class="col-sm-6">
          <input type="text" name="name" id="task-name" class="form-control">
        </div>
      </div>

      <br>

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

  <br><br>

  <!-- Current Tasks -->
  @if (count($tasks) > 0)
    <div class="panel panel-default">
      <div class="panel-heading">
        <table id="current-task">
          <td>Current Task</td>
        </table>
      </div>

      <div class="panel-body">
        <table class="table table-striped task-table">

          <!-- Table Headings -->
          <thead>
            <th><h4 class="task">Task</h4></th>
            <th>&nbsp;</th>
          </thead>

          <!-- Table Body -->
          <tbody>
            @foreach ($tasks as $task)
              <tr>
                <!-- Task Name -->
                <td class="table-text">
                  <div>{{ $task->name }}</div>
                </td>

                <!-- Delete Button -->
                <td>
                  <form action="/task/{{ $task->id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}

                    <button id="delete-button" style="background-color: #d9534f; color: white;"><i class="far fa-trash-alt"></i> Delete Task</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  @endif
@endsection