<?php require APPROOT . '/views/pages/inc/header.php' ?>

<div class="row">
  <div class="col-md-6 mx-auto">
    <div class="card card-body bg-light mt-5 shadow-sm">
      <h2>Login</h2>
      <p>Please fill in your credentials</p>
      
      <form action="<?php echo URLROOT; ?>/users/login" method="post">

        <div class="mb-3">
          <label for="email" class="form-label">Email: <sup>*</sup></label>
          <input type="email" name="email" class="form-control form-control-lg <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['email']; ?>">
          <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
        </div>

        <div class="mb-3">
          <label for="password" class="form-label">Password: <sup>*</sup></label>
          <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
          <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
        </div>

        <div class="row g-2 mt-4">
          <div class="col">
            <input type="submit" value="Login" class="btn btn-success w-100">
          </div>
          <div class="col">
            <a href="<?php echo URLROOT; ?>/users/register" class="btn btn-light border w-100">Don't have an account? <strong>Register</strong></a>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>

<?php require APPROOT . '/views/pages/inc/footer.php' ?>