
   
   <?php
   include '../conn/koneksi.php';
   ?>
   
   <!-- menu tengah -->
<div id="content-header">
    <div id="breadcrumb"> 
		<a href="#" title="Go to Home" class="tip-bottom">
			<i class="icon-home"></i> 
			Home
		</a> 
		<a href="?page=buku" class="current">
			Data Buku
		</a> 
	</div>
    <h1>
			Data Buku
	</h1>

</div>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="widget-box">
				<div class="widget-title">
					<span class="icon">
						<i class="icon-th"></i>
					</span>
					<h5>
						Data Buku Perpustakaan
					</h5>
				</div>
				<div class="widget-content nopadding">
					<table class="table table-bordered data-table" >
						<thead align="center">
							<tr>
								<th>Judul Buku</th>
								<th>kelas</th>
								<th>Pengarang</th>
								<th>Penerbit</th>
								<th>Jumlah</th>
								<th>OPTION</th>
							</tr>
						</thead>
						<tbody>
		<?php
				$query = "SELECT * FROM tabel_buku ORDER by judul";
				$sql = mysql_query($query);
				$total = mysql_num_rows($sql);
				$no = 1;
				
				while ($data=mysql_fetch_array($sql)) {
					
$id=$data['id'];
$judul=$data['judul'];
$kelas=$data['kelas'];
$pengarang=$data['pengarang'];
$penerbit=$data['penerbit'];
$jumlah_buku=$data['jumlah_buku'];

echo "					                     
<tr class='gradeA'>
<td><a href='?page=detil-buku&judul=$judul' class='detil'>$judul</a></td>
<td>$kelas</td>
<td>$pengarang</td>
<td>$penerbit</td>
<td>$jumlah_buku</td>
<td>
<a href='?page=buku_edit&id=$id'> <span class=' fa fa-pencil' aria-hidden='true'>Edit</span></a> |
<a href='?page=buku_hapus&id=$id'> <span class='navbar-right fa fa-trash' aria-hidden='true'>Hapus</span></a>

</td>
</tr>";
 }		
?>
   	        
			</tbody>
          </table>
          </div>
          <div id="menu_bottom">
        	
      <table width="100%" style="border:0px solid #9cc;">
            	<tr>
                	<td width="50%">Jumlah : <?php echo $total; ?> Buku</td>
                    <td align="right"><a href="?page=buku_input">Tambah Buku  <img src="../images/plus.jpg"/ width="18px" height="18px"></a></td>
                </tr>
            </table>
    	</div>
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



