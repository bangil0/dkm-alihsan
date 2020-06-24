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
<div class="container mt-5" id="infaq">
  <div class="row">
    <div class="col-sm-6">
      <h3>Infaq
        <div class="font-weight-normal badge badge-success shadow"><script>if (getQueryVariable('month')) { idbulan(getQueryVariable('month')); }</script></div>
        <div class="font-weight-normal badge badge-info shadow"><?php ?></div>
      </h3>
    </div>
    <div class="col-sm-6 text-right">
      <select class="custom-select w-auto" onchange="window.location.href = '/?month='+ this.value +'&year='+ getQueryVariable('year') + '#infaq'">
        <option value="">Bulan</option>
        <option value="01">Januari</option>
        <option value="02">Februari</option>
        <option value="03">Maret</option>
        <option value="04">April</option>
        <option value="05">Mei</option>
        <option value="06">Juni</option>
        <option value="07">Juli</option>
        <option value="08">Agustus</option>
        <option value="09">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
      </select>
      <select class="custom-select w-auto" onchange="window.location.href = '/?month='+ getQueryVariable('month') +'&year='+ this.value + '#infaq'">
        <option value="">Tahun</option>
        <option value="2020">2020</option>
        <option value="2021">2021</option>
        <option value="2022">2022</option>
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
      <?php if (!empty($infaq)) { ?>
      <?php foreach ($infaq as $inf) : ?>
      <tr>
        <td><script>idformat("<?= $inf['date']; ?>")</script></td>
        <td><?= $inf['money']; ?></td>
      </tr>
      <?php endforeach; ?>
      <?php } else { ?>
      <tr>
        <td colspan="2">Data tidak ada</td>
      </tr>
      <?php }; ?>
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