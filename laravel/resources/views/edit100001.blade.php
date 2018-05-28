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
    <title>Edit Artikel</title>

    <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="../../css/simple-sidebar.css" rel="stylesheet">

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
                  <li><a href="../buat_artikel">Buat Artikel</a></li>
                  <li><a href="../manajemen_artikel">Manajemen Artikel</a></li>
                </ul></li>
                <li class=""><a href="#akunSubmenu" data-toggle="collapse">
                 Akun <i class="fa fa-caret-down"></i>

                     </a>
            <ul class="collapse list-unstyled" id="akunSubmenu">
              <li><a href="../buat_admin">Buat Akun</a></li>
                <li><a href="../manajemen_admin">Manajemen Akun</a></li>

                </ul></li>
               <li class=""><a href="../edit_profil_ukm">Edit Profil UKM</a></li>
                <li>
                    <a href="../login">Logout</a>
                </li>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Menu</a>
                <h1>Edit Artikel : 100001</h1>

            <form class="form" role="form" autocomplete="off" id="buatArtikel" novalidate="">
                <div>
                <label>Judul</label>
                <input type="text" class="form-control form-control-lg rounded-0" name="judul" id="judul" required="" value="Welcome to IFLS">
                </div>
                <div>
                  <textarea form="" style="min-width: 100%; min-height: 500px;"  id="artikel" name="artikel">
[P ALIGN=CENTER][IMG WIDTH=700px]http://ifls.lmb.its.ac.id/images/chion1.png[IMG][/P]

Lorem ipsum dolor sit amet, pri ad ferri posse, ea quo dolore placerat. Sint libris omittam sea et, affert ullamcorper philosophia eum id, id eos quas mentitum. Ea elit mundi adipiscing pri. Cu eos mutat quaeque scriptorem. Pro cu possit philosophia, eius fierent quo te.

Et sit dicam periculis. Stet viderer reprimique ne sit. Illud mandamus ex duo, ad qui tamquam oblique iracundia. At eum quas malorum, no pri scaevola partiendo periculis. Mei ne eius atqui, petentium mnesarchum at usu, at mei expetenda complectitur.

Cu per virtute intellegebat, pro graeco nominavi democritum ad. Duo at affert utroque vituperatoribus, quodsi persius deserunt ex mel. Ea quod nihil mandamus mei, ei semper omnesque pertinacia mea. Sit possit sanctus no, accusam ullamcorper ei mea, ne putant intellegam est.

Qui ut porro populo albucius, eam vero mucius senserit id. Altera bonorum fierent ei mel, ei phaedrum contentiones eum, his ei elit dicit docendi. Vim mazim convenire honestatis te, sed tota comprehensam conclusionemque ne. Vel et semper impetus vulputate. Ea vis etiam maiorum vivendum.

Cum ridens assentior omittantur te, errem maluisset instructior pri ne. Ei natum habemus inimicus eum, errem maiestatis cu usu. Sit ne labitur omnesque, te pro modo prima sadipscing, dicant dictas aperiri pri et. Modus tamquam omittantur has cu, ea pri denique definiebas, brute melius qui cu. Eu qui audire prodesset temporibus, eu atqui commodo scripta his.
                  </textarea>
              </div>
              <div>
                 
              </div>
            </form>
            <input type="submit" class="btn btn-success btn-lg float-right" id="simpanartbtn" onclick="document.location.href='../manajemen_artikel'" value="Simpan" />
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
