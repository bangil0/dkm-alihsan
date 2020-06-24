<?= $this->extend('templates/fixed'); ?>
<?= $this->section('content'); ?>
<div class="jumbotron jumbotron-fluid intro pt-5">
  <div class="container">
    <img src="/assets/images/logo.png" alt="" class=" img-fluid mx-auto d-block" style="max-width: 240px;">
    <h1 class="display-4">DKM Al-Ihsan</h1>
    <p class="lead font-weight-lighter">Official Website of Garis DKM Al-Ihsan SMAN 1 CIWIDEY</p>
    <a href="" class="btn btn-primary shadow">Lihat Profil</a>
  </div>
</div>

<hr>
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-6">
      <h3>Infaq
        <div class="font-weight-normal badge badge-success shadow">Bulan Juli</div>
        <div class="font-weight-normal badge badge-info shadow">2020</div>
      </h3>
    </div>
    <div class="col-sm-6 text-right">
      <select class="custom-select w-auto">
        <option value="">Januari</option>
        <option value="">Februari</option>
        <option value="">Maret</option>
      </select>
      <select class="custom-select w-auto">
        <option value="">2020</option>
        <option value="">2021</option>
        <option value="">2022</option>
      </select>
    </div>
  </div>

  <hr>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Tanggal</th>
        <th>Nominal</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1 Juli 2020</td>
        <td>Rp15.000</td>
      </tr>

    </tbody>
  </table>
</div>
<div class="container">
  <div class="alert alert-primary">
    Tidaklah akan berkurang harta yang kita infaq/sedekahkan dengan ikhlas karena Allah, melainkan Allah akan
    menggantinya dengan berlipat ganda.
  </div>
</div>

<?= $this->endSection(); ?>