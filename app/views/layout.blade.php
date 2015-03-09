<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome</title>
  <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
  {{ HTML::style('css/bootstrap.css') }}
  {{ HTML::style('css/bootstrap-theme.css') }}
</head>
<body>

	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      @if (Auth::check())
      	<a class="navbar-brand" href="#">Hello, {{ Auth::user()->name }}</a>
      @else
      	<a class="navbar-brand" href="#">Welcome</a>
      @endif
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      	@if (Auth::user())
        	<li>{{ HTML::link('/', 'Home') }}</li>
        	<li>{{ HTML::link('logout', 'Logout') }}</li>
        	@if (Request::path() == 'customers/' . Auth::user()->id)
        		<li>{{ link_to_route('customers.edit', 'Edit info', array($customer->id), array('class' => 'link')) }}</li>
        		<li>{{ HTML::linkRoute( 'Customers/delete', 'Delete account' , [ 'id' => $customer->id ]) }}</li>
        	@endif
        	
        @endif
        {{-- --}}
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


	@if(Session::has('message'))
		<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
	@endif

	@yield('content')

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
