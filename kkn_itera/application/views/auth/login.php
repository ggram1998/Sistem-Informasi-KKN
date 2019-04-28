<div class="sufee-login d-flex align-content-center flex-wrap">
  <div class="container">
    <div class="login-content">
      <div class="login-logo">
        <a href="index.html">
          <img class="align-content" src="images/logo.png" alt="">
        </a>
      </div>
      <div class="login-form">
        <?php echo $this->session->flashdata('message'); ?>
        <form method="post" action="<?php echo base_url(); ?>auth">
          <div class="form-group">
            <label>Email address</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="Email" value="<?php echo set_value('email'); ?>">
            <?php echo form_error('email', '<small class="text-danger"> ', ' </small>'); ?>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
            <?php echo form_error('password', '<small class="text-danger"> ', ' </small>'); ?> 
          </div> 
          <div class="checkbox">
            <label class="pull-right">
              <a href="#">Forgotten Password?</a>
            </label>
          </div>
          <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
          <div class="register-link m-t-15 text-center">
            <p>Don't have account ? <a href="<?php echo base_url(); ?>auth/regist"> Sign Up Here</a></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>