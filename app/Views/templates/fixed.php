<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link
    href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
  <!-- CSS Custom -->
  <link rel="stylesheet" href="custom.css">
  <title>DKM Al-Ihsan</title>
</head>

<body>
  <?= $this->include('navbar'); ?>
  <?= $this->renderSection('content'); ?>
  <footer class="bg-dark text-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>Info DKM Al-Ihsan</h3>
          <ul>
            <li>
              Telepon/WA : <a href="tel:+6285720155784">+6285720155784</a>
            </li>
            <li>
              JL. BABAKAN TIGA NO.125, Panyocokan, Kec. Ciwidey, Kab. Bandung Prov. Jawa Barat
            </li>
          </ul>
        </div>
        <div class="col-md-6">
          <h3>Sosial Media</h3>
          IG : dkmsmansadey
        </div>
      </div>
      <p class="text-light text-center mt-5 small">
        &copy; 2020 DKM Al-Ihsan. All rights reserved. Developed By <b>WidiCahyana_404</b>
      </p>
    </div>
  </footer>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
  <script>
    $('.table .btn-danger').on('click', function(){
      var id   = $(this).attr('data-id');
      var url  = "/infaq/delete/" + id;
      var date = $(this).attr('data-date');
      var money = $(this).attr('data-money');
      var warning = "Hapus data tanggal " + date + " dengan nominal " + money + " ?";
      $('#hapus-btn').attr('href', url);
      $('#data-warning').html(warning);
    });

    $('.table .btn-warning').on('click', function(){
      var id = $(this).attr('data-id');
      var money = $(this).attr('data-money');
      $('#edit-field').val(money);
    })
  </script>
</body>

</html>