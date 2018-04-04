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
<div class='row'>
    <div class="col-lg-6 col-lg-offset-3">
        @foreach ($todos as $todo)
                <hr>
                    <h4 style="text-align: right;">{{$todo->todo}}<button class="btn btn-danger">Delete</button></h4>
                    
                <hr>
            <br>
        @endforeach
    </div>
</div>
@stop