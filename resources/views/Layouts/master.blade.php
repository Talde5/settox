<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">

    <link href="{{ URL::asset('css/shop-homepage.css') }}" rel="stylesheet">


    <title>Settox</title>
  </head>
  <body>
    @include('Partials.navbar')

    <div class="container">
       @yield('content')

   

    </div>


    @include('Partials.footer')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ URL::asset('js/jquery.min.js') }}" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/addRemoveInputTitulazioak.js')}}"></script>
    <script src="{{ URL::asset('js/addRemoveInputHizkuntzak.js')}}"></script>
  </body>
</html>