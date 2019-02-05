@extends('Layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="post">
                    {{ csrf_field() }}
                    <fieldset>
                        <legend class="text-center header">CV</legend>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="fname" name="name" type="text" placeholder="{{$perfila->izena}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="lname" name="name" type="text" placeholder="{{$perfila->apellidos}}" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="{{$perfila->email}}" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" placeholder="{{$perfila->dni}}" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="textbox" placeholder="{{$perfila->jaiotze_Data}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" placeholder="{{$perfila->helbidea}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" placeholder="{{$perfila->kontaktua}}" class="form-control">
                            </div>
                        </div>
                        
                       <div class="form-group">
                            <!--Titulazioak-->
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-8" id="TextBoxesGroup1">
                                @foreach ($titulazioak as $titulazioa)
                                <div class="TextBoxTitulazioa">
                                    <input name="titulazioa1" placeholder="{{ $titulazioa -> titulazio_Izena}}" type="text"  class="form-control titulazioa" ><br/> 
                                    
                                </div>
                                @endforeach
                                
                                
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
                                @foreach ($hizkuntzak as $hizkuntza)
                                <div class="TextBoxHizkuntza">
                                    <input hizkuntza name="hizkuntza1" type="text" class="form-control hizkuntza" placeholder="{{$hizkuntza -> hizkuntza}}"><br/>
                                    <input name="maila1" type="text"  class="form-control maila" placeholder="{{$hizkuntza -> maila}}"><br/>
                                </div>
                                @endforeach
                            </div>
<<<<<<< HEAD
                            <div class="form-group">
                            
                                <div class="col-md-8">
                                    <textarea name="lanEsperientzia" class="form-control" placeholder="{{$interesak->lan_Esperientzia}}" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <legend class="col-md-8">Gida Baimena</legend>
                                <div class="col-md-8">
                                    <label class="form-check-label" >Ez<input id="phone" name="phone" type="radio" value="0" class="form-control radio-inline" {{ ($interesak->gida_Baimena=="0")? "checked" : "" }}></label>
                                    <label class="form-check-label" >Bai<input id="phone" name="phone" type="radio" value="1" class="form-control radio-inline" {{ ($interesak->gida_Baimena=="1")? "checked" : "" }}></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <legend class="col-md-8">Kotxea</legend>
                                <div class="col-md-8">
                                    <label class="form-check-label" >Ez<input id="phone" name="phone" type="radio" value="0" class="form-control radio-inline" {{ ($interesak->kotxea=="0")? "checked" : "" }}></label>
                                    <label class="form-check-label" >Bai<input id="phone" name="phone" type="radio" value="1" class="form-control radio-inline" {{ ($interesak->kotxea=="1")? "checked" : "" }}></label>
                                </div>
                            </div>
                            <div class="form-group">
                                
                                <div class="col-md-8">
                                    <input id="phone" name="phone" type="text" placeholder="{{$interesak->erabilgarritasuna}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                
                                <div class="col-md-8">
                                    <textarea name="lanEsperientzia" class="form-control" placeholder="{{$interesak->zure_Deskripzioa}}" rows="4"></textarea>
                                </div>
=======
                            <div class="col-md-8">
                                <input type='button' value='Hizkuntza gehitu' id='addButton1' class="btn btn-primary btn-lg">
                                <input type='button' value='Hizkuntza kendu' id='removeButton1' class="btn btn-primary btn-lg">
                            </div>
                        </div>
                        <div class="form-group">
                        
                            <div class="col-md-8">
                                <textarea name="lanEsperientzia" class="form-control" placeholder="{{$interesak->lan_Esperientzia}}" rows="4"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <legend class="col-md-8">Gida Baimena</legend>
                            <div class="col-md-8">
                                <label class="form-check-label" >Ez<input  name="gida_baimena" type="radio" value="0" class="form-control radio-inline" {{ ($interesak->gida_Baimena=="0")? "checked" : "" }}></label>
                                <label class="form-check-label" >Bai<input  name="gida_baimena" type="radio" value="1" class="form-control radio-inline" {{ ($interesak->gida_Baimena=="1")? "checked" : "" }}></label>
>>>>>>> 75ed5ac47c468bc47c16b48c1d99684b12ea0fed
                            </div>
                        </div>
                        <div class="form-group">
                            <legend class="col-md-8">Kotxea</legend>
                            <div class="col-md-8">
                                <label class="form-check-label" >Ez<input  name="kotxea" type="radio" value="0" class="form-control radio-inline" {{ ($interesak->kotxea=="0")? "checked" : "" }}></label>
                                <label class="form-check-label" >Bai<input  name="kotxea" type="radio" value="1" class="form-control radio-inline" {{ ($interesak->kotxea=="1")? "checked" : "" }}></label>
                            </div>
                        </div>
                        <div class="form-group">
                            
                            <div class="col-md-8">
                                <input id="phone" name="phone" type="text" placeholder="{{$interesak->erabilgarritasuna}}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            
                            <div class="col-md-8">
                                <textarea name="lanEsperientzia" class="form-control" placeholder="{{$interesak->zure_Deskripzioa}}" rows="4"></textarea>
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