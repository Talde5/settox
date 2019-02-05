@extends('Layouts.master')

@section('content')



    <form method="GET" action="sortu">
        {{ csrf_field() }}
        
 
        <div class="form-group">
            <label for="enpresa_Izena">enpresa_Izena:</label>
            <input type="text" class="form-control" id="enpresa_Izena" name="enpresa_Izena">
        </div>
 
        <div class="form-group">
            <label for="lan_Postua">lan_Postua:</label>
            <input type="text" class="form-control" id="lan_Postua" name="lan_Postua">
        </div>
        
         <div class="form-group">
            <label for="egoera">deskripzioa:</label>
            <input type="text" class="form-control" id="deskripzioa" name="deskripzioa">
        </div>
        <div class="form-group">
            <label for="egoera">egoera:</label>
            <input type="text" class="form-control" id="egoera" name="egoera">
        </div>
 
 <div class="form-group">
            <label for="egoera">plaza_Hutsak:</label>
            <input type="text" class="form-control" id="plaza_Hutsak" name="plaza_Hutsak">
        </div>
 
 <div class="form-group">
            <label for="egoera">departamentua:</label>
            <input type="text" class="form-control" id="departamentua" name="departamentua">
        </div>
 
 
        <div class="form-group">
               <input href="irakaslea/sortu"  type="submit" value="Gehitu Ikasleak" class="btn btn-primary btn-lg" style="margin-top: 3%">
        </div>

</form>

@stop
