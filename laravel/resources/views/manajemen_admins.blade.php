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
    <title>Manajemen Akun</title>

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
                  <li><a href="manajemen_artikel">Manajemen Artikel</a></li>
                </ul></li>
                <li class=""><a href="#akunSubmenu" data-toggle="collapse">
                 Akun <i class="fa fa-caret-down"></i>

                     </a>
            <ul class="collapse list-unstyled" id="akunSubmenu">
              <li><a href="buat_admin">Buat Akun</a></li>
                <li><a href="manajemen_admins">Manajemen Akun</a></li>

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
                <h1>Manajemen Akun</h1>
                <table id="manajemenArtikel">
                  <thead>
                    <tr>
                      <th>Username Akun</th>
                      <th>Nama Administrator</th>
                      <th>Email</th>
                      <th>Waktu Dibuat</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>anip97</td>
                      <td>Hanif Nashrullah</td>
                      <td>hn3692@gmail.com</td>
                      <td>2018-06-22 18:00:00</td>
                      <td>
                         <input type="button" class="btn btn-danger" onclick="document.location.href='manajemen_admin'" value="Hapus" />
                      </td>
                    </tr>
                    <tr>
                      <td>hansel97</td>
                      <td>Anip Nasrul</td>
                      <td>1234@gmail.com</td>
                      <td>2018-05-25 13:00:00</td>
                      <td>
                         <input type="button" class="btn btn-danger" onclick="document.location.href='manajemen_admin'" value="Hapus" />
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
