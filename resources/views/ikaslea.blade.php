@extends('Layouts.ikasleaLayout')

@section('content')
    
    <div class="row">

        <div class="col-lg-3">
          
        </div>
        <div class="col-lg-9">
            <div class="row">
                @foreach ($eskaintzak as $i => $eskaintza)
                <div class="col-lg-4 col-md-8 mb-4 carta">
                  <div class="card h-100">
                    <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                              <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home{{$i}}" role="tab" aria-controls="home" aria-selected="true">{{ $eskaintza->enpresa_Izena }}</a>
                                </li>
                              <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile{{$i}}" role="tab" aria-controls="profile" aria-selected="false">Lan Eskaintza</a>
                        </li>
                            </ul>
                            </div>

                    <div class="card-body">
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home{{$i}}" role="tabpanel" aria-labelledby="home-tab">
                          <h4 class="card-title">
                            {{ $eskaintza->enpresa_Izena }}
                          </h4>
                          
                          <p class="card-text">{{ $eskaintza->deskripzioa}}</p>
                          <p class="card-text">{{ $eskaintza->amaierako_Data }}</p>
                        </div>
                        <div class="tab-pane fade" id="profile{{$i}}" role="tabpanel" aria-labelledby="profile-tab">
                          <p class="card-text">{{ $eskaintza->departamentua }}</p>
                          <p class="card-text">{{ $eskaintza->lan_Postua }}</p>
                          <p class="card-text">{{ $eskaintza->plaza_Hutsak }}</p>
                        
                        </div>
                      
                    </div>
                    
                  </div>
                </div>
              </div>
              @endforeach
            </div>
        </div>
    </div>

@stop
   