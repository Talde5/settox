@extends('Layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    <fieldset>
                        <legend class="text-center header">CV</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="name" type="text" placeholder="Izena" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="lname" name="name" type="text" placeholder="Abizena" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="E-maila" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" placeholder="NAN" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="textbox" placeholder="Jaiotze Data" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" placeholder="Helbidea" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" placeholder="Kontaktua" class="form-control">
                            </div>
                        </div>

                       <div class="form-group">
                            <!--Titulazioak-->
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8" id="TextBoxesGroup1">
                                
                                <div class="TextBoxTitulazioa">
                                    <input name="titulazioa1" placeholder="Titulazioa" type="text"  class="form-control titulazioa" ><br/> 
                                    
                                </div>
                               
                                
                                
                            </div>
                            <div class="col-md-8">

                                <input type='button' value='Titulazioa gehitu' id='addButton' class="btn btn-primary btn-lg">
                                        
                                <input type='button' value='Titulazioa kendu' id='removeButton' class="btn btn-primary btn-lg"> 
                            </div>
                            
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8" id="TextBoxesGroup2">
                                <!--HIzkuntzak-->
                                <div class="TextBoxHizkuntza">
                                    <input hizkuntza name="hizkuntza1" type="text" class="form-control hizkuntza" placeholder="Hizkuntza"><br/>
                                    <input name="maila1" type="text"  class="form-control maila" placeholder="Maila"><br/>
                                </div>

                            </div>
                            <div class="col-md-8">
                                <input type='button' value='Hizkuntza gehitu' id='addButton1' class="btn btn-primary btn-lg">
                                <input type='button' value='Hizkuntza kendu' id='removeButton1' class="btn btn-primary btn-lg">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Gorde</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>

@stop