    <div class="sufee-login d-flex align-content-center flex-wrap">
      <div class="container">
        <div class="login-content">
          <div class="login-logo">
            <a href="index.html">
              <img class="align-content" src="images/logo.png" alt="">
            </a>
          </div>
          <div class="login-form">
            <form method="post" action="<?php echo base_url('auth/regist'); ?>">
              <div class="form-group">
                <label>Full Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Full Name" value="<?php echo set_value('name'); ?>">
                <?php echo form_error('name', '<small class="text-danger"> ', ' </small>'); ?>
              </div>
              <div class="form-group">
                <label>Email address</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="Email" value="<?php echo set_value('email'); ?>">
                <?php echo form_error('email', '<small class="text-danger"> ', ' </small>'); ?>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" id="password1" name="password1" class="form-control" placeholder="Password">
                <?php echo form_error('password1', '<small class="text-danger"> ', ' </small>'); ?>
              </div>
              <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" id="password2" name="password2" class="form-control" placeholder="Confirm Password">
              </div>
              <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
              <div class="register-link m-t-15 text-center">
                <p>Already have account ? <a href="<?php echo base_url(); ?>auth"> Sign in</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>