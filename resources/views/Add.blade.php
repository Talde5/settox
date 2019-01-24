@extends('Layouts.master')

@section('content')

    <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            Choose your xls/csv File : <input type="file" name="file" class="form-control">
         
            <input type="submit" class="btn btn-primary btn-lg" style="margin-top: 3%">
        </form>

@stop
   