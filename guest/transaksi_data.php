   <?php
   include '../conn/koneksi.php';
   include 'transaksi_fungsi.php';
   ?>
   
   <!-- menu tengah -->
   <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Transaksi</li>
      </ol>
	<div id="menu-tengah">
    	<div id="bg_menu">
		<h2><center>Data Transaksi</h2></center><hr>
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<form action="?page=transaksi_search" method="post">
        	<table width="100%" height="100%">
            	<tr>
                	<td width="50%">
                    <td width="50%" align="right"><input type="text" name="cari" size="30" placeholder="Nama Peminjam"></td>
                    <td><input type="submit" id="submit" value="cari"></td>
                </tr>
            
            </table>
            </form>
            <br>
    	</div>
   	    <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
   	    <div class="widget-content nopadding">
   	      <table class="table table-bordered data-table" >
   	        <thead align="center">
   	          <tr>
   	            
   	            <th width="25%">Judul Buku</th>
   	            <th width="25%">Peminjam</th>
   	            <th width="15%">Tgl Pinjam</th>
   	            <th width="15%">Tgl Kembali</th>
                <th width="10%">Terlambat</th>
                <th width="10%">Kembali</th>
                <th width="10%">Perpanjang</th>
              </tr>
            </thead>
   	        <tbody>
            <?php
				$query = "SELECT * FROM tbl_transaksi WHERE status='Pinjam' ORDER by id";
				$sql = mysql_query($query);
				$total = mysql_num_rows($sql);
				$no = 1;
				
				while ($data=mysql_fetch_array($sql)) {
					
$id=$data['id'];
$judul=$data['judul'];
$nama=$data['nama'];
$tgl_pinjam=$data['tgl_pinjam'];
$tgl_kembali=$data['tgl_kembali'];


echo "					                     
<tr class='gradeA'>
<td><a href='?page=detil-buku&judul=$judul' class='detil'>$judul</a></td>
<td>$nama</td>
<td>$tgl_pinjam</td>
<td>$tgl_kembali</td>
<td>
";
$tgl_dateline=$data['tgl_kembali'];
					$tgl_kembali=date('d-m-Y');
					$lambat=terlambat($tgl_dateline, $tgl_kembali);
					$denda=$lambat*$denda1;
					if ($lambat>0) {
						echo "<font color='red'>$lambat hari<br>(Rp $denda)</font>";
					}
					else {
						echo $lambat." hari";
					}
echo "</td>


                <td ><a href='?page=transaksi_proses_kembali&id=$id&judul= $judul'>kembali</a></td>
                <td ><a href='?page=transaksi_proses_perpanjang&id=id &judul=judul&tgl_kembali=$tgl_kembali&lambat=$lambat; ?>'>perpanjang</a></td>

</td>
</tr>";
 }							
			?>

                
<!-- YANG ERROR MENU PERPANJANG MASA PINJAMAN -->
            
            </tbody>
          </table>
          </div>
          <div id="menu_bottom">
        	<table width="100%" style="border:0px solid #9cc;">
            	<tr>
                	<td width="50%">Jumlah : <?php echo $total; ?> Transaksi</td>
					<td align="right"><a href="?page=transaksi_input">Input Transaksi  <img src="../images/plus.jpg"/ width="18px" height="18px"></a></td>

                </tr>
            </table>
    	</div>
   	  </div>
    </div>
    </div>
    <script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.tables.js"></script>