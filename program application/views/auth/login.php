<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> <?= $title; ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/login.css'); ?>"/>
  </head>
  <body>
    <!-- login start -->
    <div class="login-container">
      <div class="login-left">
      <img src="<?php echo base_url('assets/assets/img/frogs.png'); ?>" alt="Logo">
      </div>
      <div class="login-right">
        <h2>Login</h2>

        <?= $this->session->flashdata('message'); ?>



        <form class="user" method="post" action="<?= base_url('auth') ?>">
          <div id="error" class="error"></div>
          <div class="mb-3">
            <input type="email" class="form-control mb-0" id="email" name="email" placeholder="Email address" value="<?= set_value('email'); ?>"/>
            <?= form_error('email', '<small class="text-danger">', '</small> '); ?>
          </div>
          <div class="mb-3">
            <input type="password" class="form-control mb-0" id="password" name="password" placeholder="Password"/>
            <?= form_error('password', '<small class="text-danger">', '</small> '); ?>
          </div>
          <div class="d-flex justify-content-between mb-3">
            <a href="#">Forgot password?</a>
          </div>
          <button type="submit" class="btn btn-login">Login</button>
          <div class="text-center mt-3">
            <p>
              Don't have an account yet?
              <a href="<?= base_url('auth/registration')?>">Sign up</a>
            </p>
          </div>
        </form>
      </div>
    </div>
    <!-- login end -->


  </body>
</html>
