@extends('Layouts.administratzaileaLayout')

@section('content')



    <form method="POST" action="{{route('insert')}}" id="adminIrakSortu">
        {{ csrf_field() }}
        
        <div class="form-group">
            <label for="email">Name:</label>
            <input type="text" class="form-control" id="Name" name="Name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
 
        <div class="form-group">
            <label for="pasahitza">Password:</label>
            <input type="password" class="form-control" id="pasahitza" name="pasahitza">
        </div>
        
        <div class="form-group">
            <label for="departamentua">departamentua:</label>
            <input type="text" class="form-control" id="departamentua" name="departamentua">
        </div>
         
 
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>

</form>

@stop
