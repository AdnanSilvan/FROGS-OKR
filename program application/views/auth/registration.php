<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> <?= $title; ?> </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url('assets/assets/css/register.css'); ?>" />
</head>

<body>
  <!-- register start -->
  <div class="login-container">
    <div class="login-right">
      <h2>Register</h2>
      <form class="user" method="post" action="<?= base_url('auth/registration') ?>">
        <div class="mb-3">
          <input type="text" class="form-control mb-0" id="name" name="name" placeholder="Nama"
            value="<?= set_value('name'); ?>" />
          <?= form_error('name', '<small class="text-danger">', '</small> '); ?>
        </div>

        <div class="mb-3">
          <input type="email" class="form-control mb-0" id="email" name="email" placeholder="Email address"
            value="<?= set_value('email'); ?>" />
          <?= form_error('email', '<small class="text-danger">', '</small> '); ?>
        </div>

        <div class="mb-3">
          <input type="password" class="form-control mb-0" id="password1" name="password1" placeholder="Password" />
          <?= form_error('password1', '<small class="text-danger">', '</small> '); ?>
        </div>

        <div class="mb-3">
          <select class="mb-0 form-select" name="role" id="role" aria-label="Default select example">
            <option selected disabled>Pilih Role</option>
            <?php foreach ($roles as $role): ?>
              <option value="<?= $role['id']; ?>"><?= $role['role']; ?></option>
            <?php endforeach; ?>
          </select>
          <?= form_error('role', '<small class="text-danger">', '</small> '); ?>
        </div>

        <button type="submit" class="btn btn-register">Register</button>
        <div class="text-center mt-3">
          <p>
            Already have an account? <a href="<?= base_url('auth/index') ?>">Login</a>
          </p>
        </div>
      </form>
    </div>
    <div class="login-left">
      <img src="<?php echo base_url('assets/assets/img/frogs.png'); ?>" alt="Logo">
    </div>
  </div>
  <!-- register end -->


</body>

</html>