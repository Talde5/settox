@extends('Layouts.master')

@section('content')

<div class="row">

        <div class="col-lg-3">
          <div class="list-group filtroak">
            
          
              <form action="{{ route('IrakasleakSortu') }}" method="get" enctype="multipart/form-data" class="list-group-item">
                    {{ csrf_field() }}
                    
                 
                    <input type="submit" value="Gehitu Irasleak" class="btn btn-primary btn-lg" style="margin-top: 3%">
            </form>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="row">
             
                @foreach ($users as $user )
                <div class="col-lg-4 col-md-8 mb-4 carta">
                  <div class="card h-100">
                    <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                              <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home{{$i}}" role="tab" aria-controls="home" aria-selected="true">Enpresa</a>
                                </li>
                              <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile{{$i}}" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                        </li>

                            </ul>
                            </div>

                    <div class="card-body">
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home{{$i}}" role="tabpanel" aria-labelledby="home-tab">
                          <h4 class="card-title">
                            {{$user -> email}}
                          </h4>
                          
                          <p class="card-text">{{$user -> rol}}</p>
                          <p class="card-text">{{$user -> departamentua}}</p>
                        </div>
                        <div class="tab-pane fade" id="profile{{$i}}" role="tabpanel" aria-labelledby="profile-tab">
                          <p class="card-text">Departamentua</p>
                          <p class="card-text">Lan postua</p>
                          <p class="card-text">Plaza hutsak</p>
                        
                        </div>
                      
                    </div>
                    <div class="card-footer">
                        <td><a href="borrar/{{$user->email}}"id="bidaliCV" class="btn btn-primary btn-lg">Delete</a></td>
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
