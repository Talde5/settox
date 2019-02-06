@extends('Layouts.ikasleaLayout')

@section('content')
    <!-- <div class="row">
        <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data" class="col-12">
                {{ csrf_field() }}
                Choose your xls/csv File : <input type="file" name="file" class="form-control">
             
                <input type="submit" value="Gehitu Ikasleak" class="btn btn-primary btn-lg" style="margin-top: 3%">
        </form>
    </div> -->
    <div class="row">

        <div class="col-lg-3">
          <div class="list-group filtroak">
            <a href="#" class="list-group-item">Category 1</a>
            <a href="#" class="list-group-item">Category 2</a>
            <a href="#" class="list-group-item">Category 3</a>
          
              <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data" class="list-group-item">
                    {{ csrf_field() }}
                    Aukeratu zeure xlsx/xls/csv artxiboa : <input type="file" name="file" class="form-control">
                 
                    <input type="submit" value="Gehitu Ikasleak" class="btn btn-primary btn-lg" style="margin-top: 3%">
            </form>
            </div>
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
                    <div class="card-footer">
                        <small><button id="bidaliCV" class="btn btn-primary btn-lg">Bidali CV</button></small>
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
   