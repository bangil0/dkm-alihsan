<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script>
    function idformat(date_string) {
      var date = date_string;
      var dateAr = date.split("-");
      var tanggal = dateAr[2];
      var bulan = "";
      switch (dateAr[1]) {
        case "01":
          bulan = "Januari";
          break;
        case "02":
          bulan = "Februari";
          break;
        case "03":
          bulan = "Maret";
          break;
        case "04":
          bulan = "April";
          break;
        case "05":
          bulan = "Mei";
          break;
        case "06":
          bulan = "Juni";
          break;
        case "07":
          bulan = "Juli";
          break;
        case "08":
          bulan = "Agustus";
          break;
        case "09":
          bulan = "September";
          break;
        case "10":
          bulan = "Oktober";
          break;
        case "11":
          bulan = "November";
          break;
        case "12":
          bulan = "Desember";
          break;
      };
      var tahun = dateAr[0];
      document.write(tanggal + " " + bulan + " " + tahun);
    }

    function idbulan2(month_code) {
      switch (month_code) {
        case "01":
          bulan = "Januari";
          break;
        case "02":
          bulan = "Februari";
          break;
        case "03":
          bulan = "Maret";
          break;
        case "04":
          bulan = "April";
          break;
        case "05":
          bulan = "Mei";
          break;
        case "06":
          bulan = "Juni";
          break;
        case "07":
          bulan = "Juli";
          break;
        case "08":
          bulan = "Agustus";
          break;
        case "09":
          bulan = "September";
          break;
        case "10":
          bulan = "Oktober";
          break;
        case "11":
          bulan = "November";
          break;
        case "12":
          bulan = "Desember";
          break;
      }
      return bulan;
    }

    function idbulan(month_code) {
      switch (month_code) {
        case "01":
          bulan = "Januari";
          break;
        case "02":
          bulan = "Februari";
          break;
        case "03":
          bulan = "Maret";
          break;
        case "04":
          bulan = "April";
          break;
        case "05":
          bulan = "Mei";
          break;
        case "06":
          bulan = "Juni";
          break;
        case "07":
          bulan = "Juli";
          break;
        case "08":
          bulan = "Agustus";
          break;
        case "09":
          bulan = "September";
          break;
        case "10":
          bulan = "Oktober";
          break;
        case "11":
          bulan = "November";
          break;
        case "12":
          bulan = "Desember";
          break;
        default:
          bulan = new Date().getMonth();
          bulan = bulan < 9 ? "0" + (bulan + 1) : bulan + 1;
          bulan = idbulan2(bulan);
          break;
      };
      document.write(bulan);
    }

    function getQueryVariable(variable) {
      var query = window.location.search.substring(1);
      var vars = query.split("&");
      for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split("=");
        if (pair[0] == variable) {
          return pair[1];
        }
      }
      if (variable == "year") {
        return new Date().getFullYear();
      } else {
        return new Date().getMonth();
      }
    }
  </script>
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
  <title><?= $title; ?></title>
</head>

<body>
  <?= $this->include('templates/navbar'); ?>
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
    $('.table .btn-danger').on('click', function () {
      var id = $(this).attr('data-id');
      var url = "/infaq/delete/" + id;
      var date = $(this).attr('data-date');
      var money = $(this).attr('data-money');
      var warning = "Hapus data dengan nominal " + money + " ?";
      $('#hapus-btn').attr('href', url);
      $('#data-warning').html(warning);
    });

    $('.table .btn-warning').on('click', function () {
      var id = $(this).attr('data-id');
      var money = $(this).attr('data-money');
      $('#edit-id').val(id);
      $('#edit-field').val(money);
    })
  </script>

</body>

</html>