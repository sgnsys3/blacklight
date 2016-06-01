<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
    </head>
    <body>
      <form class="form-horizontal" action='' method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <fieldset>
          <div id="legend">
            <legend class="">Register</legend>
          </div>
          <div class="control-group">
            <!-- Username -->
            <label class="control-label"  for="name">ชื่อจริง</label>
            <div class="controls">
              <input type="text" id="name" name="name" placeholder="ชื่อจริง" required="">
            </div>
          </div>
       
          <div class="control-group">
            <!-- E-mail -->
            <label class="control-label" for="email">E-mail</label>
            <div class="controls">
              <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
              <p class="help-block">Please provide your E-mail</p>
            </div>
          </div>
       
          <div class="control-group">
            <!-- Password-->
            <label class="control-label" for="password">Password</label>
            <div class="controls">
              <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
              <p class="help-block">Password should be at least 4 characters</p>
            </div>
          </div>
       
          <div class="control-group">
            <!-- Password -->
            <label class="control-label"  for="password_confirm">Password (Confirm)</label>
            <div class="controls">
              <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
              <p class="help-block">Please confirm password</p>
            </div>
          </div>
       
          <div class="control-group">
            <!-- Button -->
            <div class="controls">
              <button class="btn btn-success">Register</button>
            </div>
          </div>
        </fieldset>
      </form>
    </body>
</html>