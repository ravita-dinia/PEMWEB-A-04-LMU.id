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

    <title>Laporan</title>
  </head>

   <div class="container">
 	  <div class="col-md-10 pl-5 p-15 pr-5 pt-5 text-center">
          <h3><i class="fas fa-id-card"></i> LAPORAN DATA TRANSAKSI</h3><hr>
         
          
          <table class="table table-striped table-bordered pr-5">
              <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Jenis Transaksi</th>
                  <th scope="col">Status Tansaksi</th>
                   <th scope="col">Total</th>
                </tr>
              </thead>
              @foreach($report as $r)
              <tr>
                <td>{{ $r->id_laporan }}</td>
                <td>{{ $r->nama_laporan }}</td>
                <td>{{ $r->jenis_laporan }}</td>
                <td>{{ $r->status_laporan }}</td>
                <td>{{ $r->total_laporan }}</td>
              </tr>
              @endforeach
          	</table>


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