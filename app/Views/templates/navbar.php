<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/">DKM Al-Ihsan</a>
    <?php if (!session()->get('user')) : ?>
    <a href="/login" class="btn btn-normal border-secondary">Log in</a>
    <?php endif; ?>
    <?php if (session()->get('user')) : ?>
    <a href="/logout" class="btn btn-normal border-secondary">Log out</a>
    <a href="/panel" class="btn btn-normal border-secondary">Panel</a>
    <?php endif; ?>
    <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
      <span class="navbar-toggler-icon"></span>
    </button> -->

    <!-- <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kontak</a>
        </li>
      </ul>
    </div> -->
</nav>