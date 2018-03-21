    <?php include '../conn/koneksi.php'; ?>
    <!-- menu tengah -->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?page=buku">Buku Data</a> <a href="?page=buku_input" class="current">Detail Buku</a> </div>
    <h1>Detail Buku</h1>
  </div>
		
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
	<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Personal-info</h5>
        </div>
		
             
				<div class="widget-content nopadding">
                <table class="table table-bordered table-invoice">
			<?php
            $judul	= isset($_GET['judul']) ? $_GET['judul'] : "";
			$query=mysql_query("SELECT * FROM tabel_buku WHERE judul='$judul'", $konek);
			$data=mysql_fetch_array($query);
			?> 
                  <tbody>
                    <tr>
                    <tr>
                      <td class="width30">Judul Buku </td>
                      <td class="width70"><strong><?php echo $data[1]; ?></strong></td>
                    </tr>
					<tr>
                      <td class="width30">Kelas </td>
                      <td class="width70"><strong><?php echo $data[2]; ?></strong></td>
                    </tr>
					<tr>
                      <td class="width30">Pengarang </td>
                      <td class="width70"><strong><?php echo $data[3]; ?></strong></td>
                    </tr>
					<tr>
                      <td class="width30">Penerbit </td>
                      <td class="width70"><strong><?php echo $data[4]; ?></strong></td>
                    </tr>
					<tr>
                      <td class="width30">Tahun Terbit </td>
                      <td class="width70"><strong><?php echo $data[5]; ?></strong></td>
                    </tr>
					<tr>
                      <td class="width30">Jumlah Buku </td>
                      <td class="width70"><strong><?php echo $data[6]; ?></strong></td>
                    </tr>
					<tr>
                      <td class="width30">Tanggal input </td>
                      <td class="width70"><strong><?php echo $data[7]; ?></strong></td>
                    </tr>
					<tr>
                      <td class="width30">Status Buku </td>
                      <td class="width70"><strong><?php echo $data[8]; ?></strong></td>
                    </tr>
					<tr>
                      <td class="width30">Keterangan Buku </td>
                      <td class="width70"><strong><?php echo $data[9]; ?></strong></td>
                    </tr>

                  </tr>
                    </tbody>
                  
                </table>
              </div>
   	    
   	  </div>
    </div>
    </div>
    </div>
