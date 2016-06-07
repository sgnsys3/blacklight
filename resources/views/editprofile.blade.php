@extends('layouts.app')

@section('title', 'Edit Profile')

@section('head', 'แก้ไขข้อมูลนักแสดง')

@section('content')

                <form role="form" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @if(isset($successful))
                        <script type="text/javascript">
                            window.onload = window.close();
                        </script>
                    @endif
                    <div class="row">
                    <center>
                        <div id="newrotate">
                            <img src="{{ url('download/img') }}/{{$image}}" height="250" class="newrotate">
                        </div>
                    </center>
                    <hr class="colorgraph">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                            <label for="firstname">ชื่อจริง</label>
                                <input type="text" name="firstname" id="firstname" class="form-control input-lg" placeholder="ชื่อจริง" value="{{$firstname}}" tabindex="1" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                            <label for="lastname">นามสกุล</label>
                                <input type="text" name="lastname" id="lastname" class="form-control input-lg" placeholder="นามสกุล" value="{{$lastname}}" tabindex="2" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="form-group">
                            <label for="nickname">ชื่อเล่น</label>
                                <input type="text" name="nickname" id="nickname" class="form-control input-lg" placeholder="ชื่อเล่น" value="{{$nickname}}" tabindex="3" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="form-group">
                            <label for="age">อายุ</label>
                                <input type="text" name="age" id="age" class="form-control input-lg" placeholder="อายุ" value="{{$age}}" tabindex="4" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="form-group">
                            <label for="weight">น้ำหนัก</label>
                                <input type="text" name="weight" id="weight" class="form-control input-lg" placeholder="น้ำหนัก" value="{{$weight}}" tabindex="5" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="form-group">
                            <label for="height">ส่วนสูง</label>
                                <input type="text" name="height" id="height" class="form-control input-lg" placeholder="ส่วนสูง" value="{{$height}}" tabindex="6" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="education">การศึกษา</label>
                        <input type="text" name="education" id="education" class="form-control input-lg" placeholder="การศึกษา" value="{{$education}}" tabindex="7"required>
                    </div>
                    <div class="form-group">
                    <label for="port">ผลงาน</label>
                        <input type="text" name="port" id="port" class="form-control input-lg" placeholder="ผลงานการแสดง" value="{{$port}}" tabindex="8">
                    </div>
                    <div class="form-group">
                    <label for="modeling">โมเดลลิ่ง</label>
                        <input type="text" name="modeling" id="modeling" class="form-control input-lg" placeholder="สังกัด / โมเดลลิ่ง" value="{{$modeling}}" tabindex="9">
                    </div>
                    <div class="form-group">
                    <label for="email">อีเมลล์</label>
                        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="อีเมล" value="{{$email}}" tabindex="10">
                    </div>
                    <div class="form-group">
                    <label for="tel_self">เบอร์โทรศัพท์ ส่วนตัว</label>
                        <input type="text" name="tel_self" id="tel_self" class="form-control input-lg" placeholder="เบอร์โทรศัพท์ติดต่อ : ส่วนตัว" value="{{$tel_self}}" tabindex="11">
                    </div>
                    <div class="form-group">
                    <label for="tel_modeling">เบอร์โทรศัพท์ โมเดลลิ่ง</label>
                        <input type="text" name="tel_modeling" id="tel_modeling" class="form-control input-lg" placeholder="เบอร์โทรศัพท์ติดต่อ : โมเดลลิ่ง" value="{{$tel_modeling}}" tabindex="12">
                    </div>
                    <div class="form-group">
                        <label for="image">
                        อัพโหลดรูปภาพ</label>
                            <input type="file" name="image" id="image" accept=".jpg">
                    </div>
                    <hr class="colorgraph">
                    <div class="row">
                        <input type="submit" value="แก้ไขข้อมูล" class="btn btn-primary btn-block btn-lg" tabindex="13">
                    </div>
                </form>
            @endsection