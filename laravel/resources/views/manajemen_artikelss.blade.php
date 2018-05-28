<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <title>Manajemen Artikel</title>

    <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="../css/simple-sidebar.css" rel="stylesheet">

</head>
<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li>
                    <a href="#">
                        Halo, anip97
                    </a>
                </li>
                  <li class=""><a href="#artikelSubmenu" data-toggle="collapse">
                     Artikel <i class="fa fa-caret-down"></i>

                    </a>
                <ul class="collapse list-unstyled" id="artikelSubmenu">
                  <li><a href="buat_artikel">Buat Artikel</a></li>
                  <li><a href="manajemen_artikelss">Manajemen Artikel</a></li>
                </ul></li>
                <li class=""><a href="#akunSubmenu" data-toggle="collapse">
                 Akun <i class="fa fa-caret-down"></i>

                     </a>
            <ul class="collapse list-unstyled" id="akunSubmenu">
              <li><a href="buat_admin">Buat Akun</a></li>
                <li><a href="manajemen_admin">Manajemen Akun</a></li>

                </ul></li>
               <li class=""><a href="edit_profil_ukm">Edit Profil UKM</a></li>
                <li>
                    <a href="login">Logout</a>
                </li>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Menu</a>
                <h1>Manajemen Artikel</h1>
                <table id="manajemenArtikel">
                  <thead>
                    <tr>
                      <th>ID Artikel</th>
                      <th>Judul Artikel</th>
                      <th>Manajemen</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>100001</td>
                      <td>Welcome to IFLS</td>
                      <td>
                        <input type="button" class="btn btn-warning" onclick="document.location.href='edit_artikel/100001'" value="Edit" />
                         <input type="button" class="btn btn-danger" onclick="document.location.href='manajemen_artikels'" value="Hapus" />
                      </td>
                    </tr>
                    <tr>
                      <td>100002</td>
                      <td>Test123</td>
                      <td>
                         <input type="button" class="btn btn-warning" onclick="document.location.href='edit_artikel/100002'" value="Edit" />
                         <input type="button" class="btn btn-danger" onclick="document.location.href='manajemen_artikel'" value="Hapus" />
                      </td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>

    <script>

    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });


    $(document).ready( function () {
    $('#manajemenArtikel').DataTable();
} );
 
    </script>

</body>

</html>
