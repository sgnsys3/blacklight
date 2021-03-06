<!DOCTYPE html>
<html>
    <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="_token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Page') - COS : Blacklight Series</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" type="text/css">

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ URL::asset('font-awesome/css/font-awesome.min.css') }}" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ URL::asset('css/caster.css') }}" type="text/css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/creative.css') }}" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <center><h2>Blacklight Series</h2>
                    <h4>@yield('head', 'Alternative')</h4>
                    <hr>
                    <h5> <a href="{{ url('/') }}">Register</a> | 
                    <a href="{{ url('/getall') }}"> Edit Profile </a> | 
                    <a href="{{ url('/quene') }}">Current Quene </a>
                    </h5>
                    <hr>
                    </center>
                    @yield('content')
                    <hr>
                    @include('components.footer')
                </div>
            </div>
        </div>
    <!-- jQuery -->
    <script src="{{ URL::asset('js/jquery.js') }}"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{ URL::asset('js/scrollreveal.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.fittext.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.magnific-popup.min.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ URL::asset('js/creative.js') }}"></script>
    <script type="text/javascript">
        var updateUrl = "{{ route('api.updateTable') }}";
        var skipUrl = "{{ route('getall') }}";
        
    </script>
    <script src="{{ url('js/caster.js') }}"></script>
    @yield('addonScript')
    </body>
</html>