<html>
    <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Current Quene - COS : Blacklight Series</title>

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
                    <h5> จำนวนนักแสดงรอคิว : <a id="countQuene">0</a> คน
                    </h5>
                    <hr>
                    </center>

                    <form role="form" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @if(isset($empty))
                            <div class="alert alert-danger">ไม่มีนักแสดงรอแคส</div>
                        @else
                        <input type="hidden" name="diagid" value="{{ $diagid }}">
                        <div class="row">
                        <div id="rotateQuene">
                            <img src="{{ url('download/img') }}/{{$image}}" height="250">
                        </div>
                        <hr class="colorgraph">
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="form-group">
                                <h4>ชื่อ : {{$firstname}}</h4>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="form-group">
                                    <h4>นามสกุล : {{$lastname}}</h4>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <h4>ชื่อเล่น : {{$nickname}}</h4>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <h4>อายุ : {{$age}}</h4>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <h4>น้ำหนัก : {{$weight}}</h4>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-3">
                                <div class="form-group">
                                    <h4>ส่วนสูง : {{$height}}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <h4>การศึกษา : {{$education}}</h4>
                        </div>
                        <div class="form-group">
                            <h4>ผลงานแสดง : {{$port}}</h4>
                        </div>
                        <div class="form-group">
                            <h4>โมเดลลิ่ง : {{$modeling}}</h4>
                        </div>
                        <div class="form-group">
                            <h4>E-mail : {{$email}}</h4>
                        </div>
                        <div class="form-group">
                            <h4>เบอร์โทรศัพท์ ส่วนตัว : {{$tel_self}}</h4>
                        </div>
                        <div class="form-group">
                            <h4>เบอร์โทรศัพท์ โมเดลลิ่ง : {{$tel_modeling}}</h4>
                        </div>
                        <hr class="colorgraph">
                        <div class="row">
                            <input type="submit" value="คนต่อไป" class="btn btn-success btn-block btn-lg" tabindex="7">
                        </div>
                        @endif
                    </form>
                    <hr>
                    @include('components.footer')
                </div>
            </div>
        </div>
    <script src="{{ URL::asset('js/caster.js') }}"></script>


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
    @if(isset($empty))
        <script type="text/javascript">
        var countQueneUrl = "{{ route('api.countQuene') }}";
            $(document).ready(w8refresh());
            var timer = setInterval(w8refresh(), 1000);
        </script>
    @else
        <script type="text/javascript">
            var countQueneUrl = "{{ route('api.countQuene') }}";
            $(document).ready(countQuene());
            var timer = setInterval(countQuene(), 2000);
        </script>
    @endif
    </body>
</html>