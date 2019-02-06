@extends('Layouts.administratzaileaLayout')

@section('content')



    <form method="POST" action="{{route('insert')}}">
        {{ csrf_field() }}
        
 
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
 
        <div class="form-group">
            <label for="pasahitza">Password:</label>
            <input type="password" class="form-control" id="pasahitza" name="pasahitza">
        </div>
        <div class="form-group">
            <label for="mota">mota:</label>
            <input type="password" class="form-control" id="mota" name="mota">
        </div>
        <div class="form-group">
            <label for="departamentua">departamentua:</label>
            <input type="password" class="form-control" id="departamentua" name="departamentua">
        </div>
         <div class="form-group">
            <label for="egoera">egoera:</label>
            <input type="password" class="form-control" id="egoera" name="egoera">
        </div>
 
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>

</form>

@stop
