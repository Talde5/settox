@extends('Layouts.master')

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
                @foreach ($users as $user)
                <div class="col-lg-4 col-md-8 mb-4 carta">
                  <div class="card h-100">
                    <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                              <li class="nav-item">
                                    
                                </li>
                              <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Lan Eskaintza</a>
                        </li>
                            </ul>
                            </div>

                    <div class="card-body">
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                          <h4 class="card-title">
                           
                          </h4>
                       
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                          <p class="card-text">{{ $user->email }}</p>
                          
                        
                        </div>
                      
                    </div>
                    <div class="card-footer">
                        <small><button id="bidaliCV" class="btn btn-primary btn-lg">Ezabatu</button></small>
                        
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
   