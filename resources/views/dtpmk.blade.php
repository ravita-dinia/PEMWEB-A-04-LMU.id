<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

    <title>Hello, Admin</title>
  </head>
  <body>

      <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
        <a class="navbar-brand" href="#">SELAMAT DATANG ADMIN | LMu.id-Learn Music.id</a>
          <form class="form-inline my-2 my-lg-0 ml-auto">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Keluar</button>
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
          <h3><i class="fas fa-music"></i> DATA PEMUSIK</h3><hr>

          <a href="{{ url ('dtpmk/createpmk')}}" class="btn btn-primary mb-3"> Tambah Data</a>
          <table class="table table-striped table-bordered pr-5">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nama Pemusik</th>
                  <th scope="col">TTL</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Email</th>
                  <th colspan="3" scope="col">Aksi</th>
                </tr>
              </thead>


              @foreach($musician as $m)
              <tr>
                <td>{{ $m->id }}</td>
                <td>{{ $m->nama_pemusik }}</td>
                <td>{{ $m->TTL }}</td>
                <td>{{ $m->Alamat }}</td>
                 <td>{{ $m->Email }}</td>
                <td>
                  <a href="/dtpmk/editpmk/{{ $m->id }}">Edit</a>
                  |
                  <a href="/dtpmk/hapuspmk/{{ $m->id }}">Hapus</a>
                </td>
              </tr>
              @endforeach
            </table>




          <!--     <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>123</td>
                  <td>Haniv Dika</td>
                  <td>Yogyakarta, 5 Desember 1997</td>
                  <td>Surabaya</td>
                  <td>haniv@gmail.com</td>
                  <td><a href="" class="btn btn-primary">Ubah</a> </td>
                  <td><a href="" class="btn btn-primary">Hapus</a> </td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                   <td>124</td>
                  <td>Lutfi Chandra</td>
                  <td>Jakarta, 2 Januari 2000</td>
                  <td>Surabaya</td>
                  <td>lutfi@gmail.com</td>
                  <td><a href="" class="btn btn-primary">Ubah</a> </td>
                  <td><a href="" class="btn btn-primary">Hapus</a> </td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                   <td>125</td>
                  <td>Dara Sita</td>
                  <td>Mojokerto, 20 Maret 1996</td>
                  <td>Surabaya</td>
                  <td>dara@gmail.com</td>
                  <td><a href="" class="btn btn-primary">Ubah</a> </td>
                  <td><a href="" class="btn btn-primary">Hapus</a> </td>
                </tr>
              </tbody> -->
            </table>
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