<!DOCTYPE html>
<html>
    <head>
        @if(isset($empty))
            <meta http-equiv="refresh" content="5" />
        @endif
        <title>Quene System</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <form role="form" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <h2>Blacklight Series <small>ข้อมูลนักแสดง</small></h2>
                        <hr class="colorgraph">
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
                        <hr class="colorgraph">
                        @endif
                    </form>
                </div>
            </div>
        </div>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/caster.css') }}">
    <!-- Optional theme -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.min.css') }}">

    <!-- Latest compiled and minified JavaScript -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/caster.js') }}"></script>
    </body>
</html>