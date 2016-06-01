<!DOCTYPE html>
<html>
    <head>
        <title>ลงทะเบียน นักแสดง</title>
    </head>
    <body>
        <div class="container">

        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <form role="form" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <h2>Blacklight Series <small>ลงทะเบียน นักแสดง</small></h2>
                    <hr class="colorgraph">
                    @if(isset($successful))
                        <div class="alert alert-success">ส่งข้อมูลเรียบร้อยแล้ว</div>
                    @endif
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="firstname" id="firstname" class="form-control input-lg" placeholder="ชื่อจริง" tabindex="1" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="lastname" id="lastname" class="form-control input-lg" placeholder="นามสกุล" tabindex="2" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="form-group">
                                <input type="text" name="nickname" id="nickname" class="form-control input-lg" placeholder="ชื่อเล่น" tabindex="3" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="form-group">
                                <input type="text" name="age" id="age" class="form-control input-lg" placeholder="อายุ" tabindex="4" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="form-group">
                                <input type="text" name="weight" id="weight" class="form-control input-lg" placeholder="น้ำหนัก" tabindex="5" required>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <div class="form-group">
                                <input type="text" name="height" id="height" class="form-control input-lg" placeholder="ส่วนสูง" tabindex="6" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="education" id="education" class="form-control input-lg" placeholder="การศึกษา" tabindex="7"required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="port" id="port" class="form-control input-lg" placeholder="ผลงานการแสดง" tabindex="8">
                    </div>
                    <div class="form-group">
                        <input type="text" name="modeling" id="modeling" class="form-control input-lg" placeholder="สังกัด / โมเดลลิ่ง" tabindex="9">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control input-lg" placeholder="อีเมล" tabindex="10">
                    </div>
                    <div class="form-group">
                        <input type="text" name="tel_self" id="tel_self" class="form-control input-lg" placeholder="เบอร์โทรศัพท์ติดต่อ : ส่วนตัว" tabindex="11">
                    </div>
                    <div class="form-group">
                        <input type="text" name="tel_modeling" id="tel_modeling" class="form-control input-lg" placeholder="เบอร์โทรศัพท์ติดต่อ : โมเดลลิ่ง" tabindex="12">
                    </div>
                    <div class="form-group">
                        <label for="image">
                        อัพโหลดรูปภาพ</label>
                            <input type="file" name="image" id="image" accept=".jpg">
                    </div>
                    <hr class="colorgraph">
                    <div class="row">
                        <input type="submit" value="ลงทะเบียน" class="btn btn-primary btn-block btn-lg" tabindex="13">
                    </div>
                    <hr class="colorgraph">
                </form>
            </div>
        </div>
        </div>


    <link rel="stylesheet" href="./css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="./css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="./js/bootstrap.min.js"></script>
    </body>
</html>