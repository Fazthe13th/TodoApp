@extends('layout');
<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <form method="post" action="/create/todo">
            {{csrf_field()}}
            <input type="text" placeholder="Create a new job" class="form-control input-lg" name="todo"/>
        </form>
    </div>
</div>
@section('content')
<div class='row' style="">
    
        @foreach ($todos as $todo)
            <div class="col-lg-12">
                <hr>
                    <div class="col-lg-6 col-lg-offset-3">
                                <p style="text-align: right;">{{$todo->todo}} 
                                <a href="{{route('todo.delete',['id' => $todo->id])}}" class="btn btn-danger">X</a></p>
                                
                    </div>
                
            </div>
        @endforeach
    
</div>
@stop