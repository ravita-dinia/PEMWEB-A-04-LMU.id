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
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">

    <title>LMu.id-Learn Music.id</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-2">
          
        </div>
        <div class="col-sm-8">
          <h1 class ="text-center">LMu.id-Learn Music.id</h1>
        </div>
        <div class="col-sm-2">
          <a href="{{ url('/template') }}"class="btn btn-default">Keluar</a>
        </div>    
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="{{asset('/js/jquery.min.js')}}"></script>
    <script src="{{asset('/js/propper.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
  </body>
</html>

  <div class="container">
  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-7 px-0">
      <h1 class="display-4 font-italic">Selamat Datang Pemusik</h1>
      <p class="lead my-3">Mengelola kursus musik dengan berbagai artikel & musik pilihan kepada pelanggan</p>
    </div>
  </div>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="pmk">Pemusik</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="profilpmk">Profil<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="iklan" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Kelola Iklan & Pembayaran Pelanggan
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
  </div>
</nav>

  <div class="col-md-10 pl-5 p-10 pt-5">
          <h3><i class="fas fa-id-card"></i> DATA SAYA </h3><hr>

          <a href="" class="btn btn-primary mb-3">Status Penghasilan</a>
          <table class="table table-striped table-bordered pr-5">
              <thead>
                <tr>
                  
                  <!-- <th scope="col">ID</th> -->
                  <th scope="col">Nama</th>
                  <th scope="col">TTL</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Email</th>
                  <th scope="col">No. Rekening</th>
                  <th scope="col">Password</th>
                  <th colspan="3" scope="col">Aksi</th>
                </tr>
              </thead>
              @foreach($office as $o)
              <tr>
              <!--   <td>{{ $o->id_pemusik }}</td> -->
                <td>{{ $o->nama_pemusik }}</td>
                <td>{{ $o->TTL }}</td>
                <td>{{ $o->Alamat }}</td>
                <td>{{ $o->Email }}</td>
                <td>{{ $o->nomor_rekening}}</td>
                <td>{{ $o->password}}</td>
                <td>
                  <a href="/profilpmk/edit/{{ $o->id_pemusik }}">Edit</a>
                </td>
              </tr>
              @endforeach
           <!--    <tbody>
                <tr>
                   <td>124</td>
                  <td>Haniv</td>
                  <td>Yogyakarta, 5 Desember 1997</td>
                  <td>Surabaya</td>
                  <td>haniv@gmail.com</td>
                   <td>085190331320</td>
                    <td>1234******</td>
                  <td><a href="" class="btn btn-primary">Ubah</a> </td>
                </tr>
              </tbody> -->
            </table>
        </div>
      </div>
    </div>
  </div>
</div>
