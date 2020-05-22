<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <form class="text-left" action="{{ action('UserController@login_process' ) }}" method="post">
     @csrf
    </form>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

    <title>Hello, Admin</title>
  </head>
  <body>

      <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <a class="navbar-brand" href="">SELAMAT DATANG ADMIN | LMu.id-Learn Music.id</a>
          <form class="form-inline my-2 my-lg-0 ml-auto">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="{{ url('/template') }}">Keluar</a></button>
          </form>
          <div class="icon">
            <h5>
            </h5>
          </div>
        </div>
      </nav>


      <div class="row no-gutters mt-5">
        <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
          <ul class="nav flex-column ml-3 mb-5">
            <li class="nav-item">
              <a class="nav-link active text-white" href="dash">Dashboard</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Data Master</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="dtplg">Data Pelanggan</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="dtpmk">Data Pemusik</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="transaksi">Data Transaksi</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="ikl">Iklan</a><hr class="bg-secondary">
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="laporankita">Laporan</a><hr class="bg-secondary">
            </li>
          </ul>
        </div>
        <div class="col-md-10 pl-5 p-10 pt-5">
          <h3> DASHBOARD </h3><hr>
          <div class="row text-white pl-3">
            <div class="card bg-info" style="width: 18rem;">
              <div class="card-body">
                <div class="card-body-icon pr-3">
                  <i class="fas fa-id-card"></i>
                </div>
                <h5 class="card-title bg-i ml-2">Jumlah Pelanggan</h5>
                <div class="display-4">3</div>

                <a href=""><p class="card-text ml-2 text-white">Lihat Detail </p></a>
              </div>
            </div>

            <div class="row text-white pl-5">
            <div class="card bg-success" style="width: 18rem;">
              <div class="card-body pl-4">
                <div class="card-body-icon pr-3">
                  <i class="fas fa-music"></i>
                </div>
                <h5 class="card-title bg-i ml-2">Jumlah Pemusik</h5>
                <div class="display-4">3</div>

                <a href=""><p class="card-text ml-2 text-white">Lihat Detail </p></a>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
  </body>
</html>