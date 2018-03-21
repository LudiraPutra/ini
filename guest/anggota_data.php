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
		<a href="?page=anggota" class="current">
			Data Anggota
		</a> 
	</div>
    <h1>
			Data Anggota
	</h1>

</div>
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
   	    	<div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
   	    <div class="widget-content nopadding">
   	      <table class="table table-bordered data-table" >
   	        <thead align="center">
   	          <tr>
   	            
   	            <th>Nim</th>
   	            <th>Nama</th>
   	            <th>Kelas</th>
   	            <th>Thn Masuk</th>
                <th>Option</th>
                
              </tr>
            </thead>
			   	        <tbody>

            <?php
				$query = "SELECT * FROM tbl_anggota ORDER by nim";
				$sql = mysql_query($query);
				$total = mysql_num_rows($sql);
				$no = 1;
				
				while ($data=mysql_fetch_array($sql)) {
					

$nim=$data['nim'];
$nama=$data['nama'];
$prodi=$data['prodi'];
$thn_masuk=$data['thn_masuk'];


echo "					                     
<tr class='gradeA'>
<td>$nim</td>
<td><a href='?page=anggota_detil&nim=$nim' class='detil'>$nama</a></td>
<td>$prodi</td>
<td>$thn_masuk</td>

<td>
<a href='?page=anggota_edit&nim=$nim'> <span class=' fa fa-pencil' aria-hidden='true'>Edit</span></a> |
<a href='?page=anggota_hapus&nim=$nim'> <span class='navbar-right fa fa-trash' aria-hidden='true'>Hapus</span></a>  

</td>
</tr>";
 }							
			?>

            <!-- YANG VAR "PRODI" ITU GANTI SAMA VAR "KELAS" --> 
            </tbody>
          </table>
          </div>
          <div id="menu_bottom">
        	<table width="100%" style="border:0px solid #9cc;">
            	<tr>
                	<td width="50%">Jumlah : <?php echo $total; ?> Anggota</td>
                    <td align="right"><a href="?page=anggota_input">Tambah Anggota  <img src="../images/plus.jpg"/ width="18px" height="18px"></a></td>
                </tr>
            </table>
    	</div>
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