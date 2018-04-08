@extends('layout');

@section('content')
<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <form method="post" action="/create/todo">
            {{csrf_field()}}
            <input type="text" placeholder="Create a new job" class="form-control input-lg" name="todo"/>
        </form>
    </div>
</div>
<div class='row' style="">
    
        @foreach ($todos as $todo)
            <div class="col-lg-12">
                <hr>
                    <div class="col-lg-6 col-lg-offset-3">
                                <p style="text-align: right;">{{$todo->todo}} 
                                <a href="{{route('todo.delete',['id' => $todo->id])}}" class="btn btn-danger btn-xs">X</a> 
                                <a href="{{route('todo.update',['id' => $todo->id])}}" class="btn btn-primary btn-xs">update</a>
                                @if (!$todo->status)
                                    <a href="{{route('todo.status',['id' => $todo->id])}}" class="btn btn-success btn-xs">Mark as complete</a>
                                @else
                                    <a href="{{route('todo.statusundone',['id' => $todo->id])}}" class="btn btn-info btn-xs">Undone</a>
                                    <span>Completed</span>
                                @endif
                                </p>
                                
                    </div>
                
            </div>
        @endforeach
    
</div>
@stop