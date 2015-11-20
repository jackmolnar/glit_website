<!DOCTYPE html>
<html>

   <head>
	<meta charset="utf-8">
	<meta charset="utf-8">
      	<title></title>
      	<meta name="description" content="">

        <meta property="og:title" content="" />
        <meta property="og:site_name" content="Great Lakes Institute of Technology" />
        <meta property="og:url" content="" />
        <meta property="og:description" content="" />
        <meta property="og:image" content="" />

      	<meta name="viewport" content="width=device-width, initial-scale=1.0">
      	{{--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">--}}
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300|Roboto+Condensed|Courgette' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="{!! asset('css/all.css') !!}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
       {{--<meta name="google-site-verification" content="VHIwFyBziWdINZtx1zcdtz4htpmmLlZsI27iJOCX_io" />--}}

   </head>

   <body>

	   @include('includes.navigation')

	   @yield('main_content')

	   @include('includes.footer')

       <div class="after_footer"></div>

   </body>
   <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
   <script src="{!! asset('js/main.js') !!}"></script>
   @yield('scripts')

</html>