<?= $this->extend('/templates/fixed'); ?>
<?= $this->section('content'); ?>
<section class="container login-page" style="margin-top: 75px;">
  <h3>Login Admin</h3>
  <hr>
  <?php if (session()->getFlashdata('pesan')) : ?>
  <div class="alert alert-danger">
    <?= session()->getFlashdata('pesan'); ?>
  </div>
  <?php endif; ?>
  <form action="/user/loginprocess" method="post">
    <?= csrf_field(); ?>
    <div class="form-group row">
      <label for="u_name" class="col-sm-2 col-form-label">Username</label>
      <div class="col-sm-10">
        <input type="text" name="u_name" class="form-control border-0 shadow-sm" id="u_name" autofocus required>
      </div>
    </div>
    <div class="form-group row">
      <label for="password" class="col-sm-2 col-form-label">Password</label>
      <div class="col-sm-10">
        <input type="password" name="u_pass" class="form-control border-0 shadow-sm" id="password" required>
      </div>
    </div>


    <div class="form-group row">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary shadow">Log in</button>
      </div>
    </div>
  </form>
</section>
<?= $this->endSection(); ?>