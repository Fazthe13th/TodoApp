@extends('layout')
@section('content')
<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <form method="post" action="{{route('todo.save', ['id'=>$todo->id])}}">
            {{csrf_field()}}
            <input type="text" value="{{$todo->todo}}" placeholder="Create a new job" class="form-control input-lg" name="todo"/>
        </form>
    </div>
</div>
@stop