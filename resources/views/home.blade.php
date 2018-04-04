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
                                <h4 style="text-align: right;">{{$todo->todo}}</h4>
                    </div>
                    <div class="col-lg-2">
                        <button class="btn btn-danger">Delete</button>
                    </div>
                
            </div>
        @endforeach
    
</div>
@stop