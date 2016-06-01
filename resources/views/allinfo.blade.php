<!DOCTYPE html>
<html>
    <head>
        <title>All infomation</title>
        <!-- <meta http-equiv="refresh" content="2" /> -->
    </head>
    <body>
        <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                    <h2>Blacklight Series <small>ข้อมูลนักแสดง</small></h2>
                    <hr class="colorgraph">
                    <table class="table">
                        <thead>
                            <th>ชื่อ</th>
                            <th>นามสกุล</th>
                            <th>ชื่อเล่น</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($allinfo as $user)
                                @if($user->status == 0) <tr class="info"> @else 
                                        @if($user->status == 1) <tr class="danger"> @else
                                            @if($user->status == 2) <tr class="success">
                                        @else<tr class="warning">
                                        @endif
                                    @endif
                                @endif
                                <td>{{ $user->firstname }}</td>
                                <td>{{ $user->lastname }}</td>
                                <td>{{ $user->nickname }}</td>
                                <td><button type="button" class="btn-primary btn-block" onclick="newPage({{ $user->id }})">Edit</button>
                                </td>
                                <td>
                                    <form method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name ="skipID" id="skipID" value="{{$user->id}}">
                                        @if($user->status == 1)
                                            <input type="submit" value="Skip" class="btn-danger btn-block">
                                        @else
                                            @if($user->status == 3)
                                            <input type="submit" value="Comeback" class="btn-warning btn-block">
                                            @else
                                            @endif
                                        @endif
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <hr class="colorgraph">
            </div>
        </div>
        </div>


    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">

    <!-- Optional theme -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-theme.min.css') }}">

    <!-- Latest compiled and minified JavaScript -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/caster.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-2.2.4.min.js') }}"></script>
    
    </body>
</html>