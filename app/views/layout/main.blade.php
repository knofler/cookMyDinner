<!DOCTYPE html>
<html lang="en">
  <head>
    
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
	 
   <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="{{ url('css/bootstrap.css')}}">
   <link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">

   @include('custom_css')

  <title>Cook My Dinner</title>
</head>

    <body>
       @if(Session::has('global'))
       <p>{{Session::get('global')}}</p>

       @endif

        @include('layout.nav.carouselNav')
          

       
        @yield('content')

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <hr class="featurette-divider">


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ url('js/bootstrap.min.js')}}"></script>

    @include('config.custom_js')
    
    </body>
</html>