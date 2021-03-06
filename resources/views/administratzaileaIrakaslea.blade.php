@extends('Layouts.administratzaileaLayout')

@section('content')

<div class="row">

        <div class="col-lg-3">
          <div class="list-group filtroak">
            
          
              <form action="{{ route('IrakasleakSortu') }}" method="get" enctype="multipart/form-data" class="list-group-item">
                    {{ csrf_field() }}
                    
                 
                    <input type="submit" value="Gehitu Irakasleak" class="btn btn-primary btn-lg" style="margin-top: 3%">
            </form>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="row">
             
                @foreach ($users as $i => $user )
                <div class="col-lg-4 col-md-8 mb-4 carta">
                  <div class="card h-100">
                    <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                              <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home{{$i}}" role="tab" aria-controls="home" aria-selected="true">Irakaslea</a>
                                </li>
                              

                            </ul>
                            </div>

                    <div class="card-body">
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home{{$i}}" role="tabpanel" aria-labelledby="home-tab">
                          <h4 class="card-title">
                            {{$user -> name}}
                          </h4>
                          
                          <p class="card-text">{{$user -> email}}</p>
                          <p class="card-text">{{$user -> departamentua}}</p>
                        </div>
                        
                      
                    </div>
                    <div class="card-footer">
                        <td><a href="borrar/{{$user->id}}"id="bidaliCV" class="btn btn-primary btn-lg">Ezabatu</a></td>
                      <!-- <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small> -->
                    </div>
                  </div>
                  
                </div>

              </div>
              @endforeach

            </div>
        </div>
    </div>

@stop
