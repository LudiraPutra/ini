<?php
session_start();
if(!isset($_SESSION['nama'])){
	echo "<script>alert('Silahkan login terlebih dahulu')</script>";
	echo "<meta http-equiv='refresh' content='0; url=../index.php'>";
} else {

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../css/fullcalendar.css" />
<link rel="stylesheet" href="../css/matrix-style.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="../css/jquery.gritter.css" />
<link rel="stylesheet" href="../css/uniform.css" />
<link rel="stylesheet" href="../css/select2.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="index.php">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->

<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="user-nav" class="navbar navbar-inverse"> 
  <ul class="nav">
    <li class="">
		<a title="" href="../logout.php">
			<i class="icon icon-share-alt"></i> 
			<span align='right' class="text">Logout</span>
		</a>
	</li>
  </ul>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="index.php" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li><a href="index.php"><i class="icon icon-home"></i> <span>Home</span></a> </li>
    <li><a href="?page=buku"><i class="icon icon-signal"></i><span>Buku</span></a></li>
    <li><a href="?page=anggota"><i class="icon icon-inbox"></i><span>Anggota</span></a></li>
    <li><a href="?page=transaksi"><i class="icon icon-th"></i><span>Transaksi</span></a></li>
    <li><a href="?page=laporan"><i class="icon icon-fullscreen"></i><span>Laporan</span></a></li>
    <li><a href="?page=user"><i class="icon icon-fullscreen"></i><span>Admin</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->

  
           <?php
				 error_reporting(0);
				 switch($_GET['page'])
				 	{
						default:
						include "../home.php";
						break;
						
						case "ass";
						include "ass.php";
						break;
						
						
						// menu buku				
						case "buku";
						include "buku_data.php";
						break;
						case "bukuterpakai";
						include "bukuterpakai.php";
						break;
						case "bukutidakterpakai";
						include "bukutidakterpakai.php";
						break;
						case "detil-buku";
						include "buku_detil.php";
						break;						
						case "buku_detil_tdk";
						include "buku_detil_tdk.php";
						break;
						case "buku_input";
						include "buku_input.php";
						break;						
						case "buku_input_tdk";
						include "buku_input_tdk.php";
						break;						
						case "buku_proses_tdk";
						include "buku_proses_tdk.php";
						break;
						case "buku_proses";
						include "buku_proses.php";
						break;
						case "buku_search";
						include "buku_search.php";
						break;
						case "buku_edit";
						include "buku_edit.php";
						break;
						case "buku_proses_edit";
						include "buku_proses_edit.php";
						break;
						case "buku_hapus";
						include "buku_hapus.php";
						break;
												
						// anggota
						case "anggota";
						include "anggota_data.php";
						break;
						case "anggota_detil";
						include "anggota_detil.php";
						break;
						case "anggota_input";
						include "anggota_input.php";
						break;
						case "anggota_proses";
						include "anggota_proses.php";
						break;
						case "anggota_search";
						include "anggota_search.php";
						break;
						case "anggota_edit";
						include "anggota_edit.php";
						break;
						case "anggota_proses_edit";
						include "anggota_proses_edit.php";
						break;
						case "anggota_hapus";
						include "anggota_hapus.php";
						break;
						
						
						// transaksi
						case "transaksi";
						include "transaksi_data.php";
						break;
						case "transaksi_input";
						include "transaksi_input.php";
						break;
						case "transaksi_proses";
						include "transaksi_proses.php";
						break;
						case "transaksi_search";
						include "transaksi_search.php";
						break;
						case "transaksi_proses_kembali";
						include "transaksi_proses_kembali.php";
						break;
						case "transaksi_proses_perpanjang";
						include "transaksi_proses_perpanjang.php";
						break;
						
						
						// laporan
						case "laporan";
						include "../laporan.php";
						break;
						case "table";
						include "table.html";
						break;
						
						// User
						case "user";
						include "user_data.php";
						break;
						case "user_search";
						include "user_search.php";
						break;
						case "user_input";
						include "user_input.php";
						break;
						case "user_proses";
						include "user_proses.php";
						break;
						case "user_detil";
						include "user_detil.php";
						break;
						case "user_edit";
						include "user_edit.php";
						break;
						case "user_proses_edit";
						include "user_proses_edit.php";
						break;
						case "user_hapus";
						include "user_hapus.php";
						break;
					
}}
			?>
        </div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->

<script src="../js/excanvas.min.js"></script> 
<script src="../js/jquery.min.js"></script> 
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.flot.min.js"></script> 
<script src="../js/jquery.flot.resize.min.js"></script> 
<script src="../js/jquery.peity.min.js"></script> 
<script src="../js/fullcalendar.min.js"></script> 
<script src="../js/matrix.js"></script> 
<script src="../js/matrix.dashboard.js"></script> 
<script src="../js/jquery.gritter.min.js"></script> 
<script src="../js/matrix.interface.js"></script> 
<script src="../js/matrix.chat.js"></script> 
<script src="../js/jquery.validate.js"></script> 
<script src="../js/matrix.form_validation.js"></script> 
<script src="../js/jquery.wizard.js"></script> 
<script src="../js/jquery.uniform.js"></script> 
<script src="../js/select2.min.js"></script> 
<script src="../js/matrix.popover.js"></script> 
<script src="../js/jquery.dataTables.min.js"></script> 
<script src="../js/matrix.tables.js"></script> 



<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
