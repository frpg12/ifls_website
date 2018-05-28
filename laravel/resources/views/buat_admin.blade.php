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
    <title>Buat Admin</title>

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
                <h1>Buat Akun Admin</h1>
          <form id="buatAdmin" method="POST">
            <div>
            <label>Username</label>
            <br>
            <input type="text" name="username" id="username">
            </div>
            <div>
            <label>Nama</label>
            <br>
            <input type="text" name="nama" id="nama">
            </div>
            <div>
            <label>Email</label>
            <br>
            <input type="email" name="email" id="email">
            </div>
            <div>
            <label>Password</label>
            <br>
            <input type="password" name="password" id="password">
            </div>
            <div>
            <label>Konfirmasi Password</label>
            <br>
            <input type="password" name="confPassword" id="confPassword">
            </div>
          </form>
           <input type="submit" class="btn btn-success btn-lg float-right" id="buatbtn" onclick="document.location.href='manajemen_admins'" value="Buat" />
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>

    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
