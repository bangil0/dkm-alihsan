
  <section class="container login-page" style="margin-top: 75px;">
    <h3>Login Admin</h3>
    <hr>
    <div class="alert alert-danger">
      Username atau password salah!
    </div>
    <form action="/u/login" method="post">
      <div class="form-group row">
        <label for="u_name" class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-10">
          <input type="text" class="form-control border-0 shadow-sm" id="u_name" autofocus>
          <small class="text-danger">Username harus diisi!</small>
        </div>
      </div>
      <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
          <input type="password" class="form-control border-0 shadow-sm" id="password">
          <small class="text-danger">Password harud diisi</small>
        </div>
      </div>
      
      
      <div class="form-group row">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary shadow">Log in</button>
        </div>
      </div>
    </form>
  </section>