<?php 
	include '../conn/koneksi.php';
	$tanggal = date('Y-m-d');
	$jam = date('H:i:s');
	$waktu = $tanggal.' '.$jam;
	
	$id		= $_GET['id'];
	
	$query = "SELECT * FROM tabel_buku WHERE id=$id";
	$sql = mysql_query($query);
	$data = mysql_fetch_array($sql);
	$id = $data['id'];
	$judul = $data['judul'];
	$kelas = $data['kelas'];
	$pengarang = $data['pengarang'];
	$penerbit = $data['penerbit'];
	$thn_terbit = $data['thn_terbit'];
	$isbn = $data['isbn'];
	$jumlah = $data['jumlah_buku'];


$tgl_input = $data['tgl_input'];
$pake = $data['pake'];
$keterangan= $data['keterangan'];
?>

<!-- menu tengah -->
<div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?page=buku">Buku Data</a> <a href="?page=buku_input" class="current">Edit Buku</a> </div>
    <h1>Edits Buku</h1>
  </div>

  
  <div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
	<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Personal-info</h5>
        </div>
   	   <div class="widget-content nopadding">
          <form action="?page=buku_proses_edit" method="post" class="form-horizontal">
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <input type="hidden" name="tgl_input" value="<?php echo $tgl_input; ?>"  />
		
            <div class="control-group">
              <label class="control-label">Judul Buku :</label>
              <div class="controls">
                <input type="text" name="judul" class="" value=<?php echo $judul ?> />
              </div>
            </div>
			
			<div class="control-group">
              <label class="control-label">Kelas :</label>
              <div class="controls" >
                <select name="kelas">
                  <option value="VII" <?php if( $kelas=='VII'){echo "selected"; } ?>>VII</option>
                  <option value="VIII" <?php if( $kelas=='VIII'){echo "selected"; } ?>>VIII</option>
                  <option value="IX" <?php if( $kelas=='IX'){echo "selected"; } ?>>IX</option>
                </select>
              </div>
            </div>
			
			<div class="control-group">
              <label class="control-label">Pengarang :</label>
              <div class="controls">
                <input type="text" name="pengarang" class="" value="<?=$pengarang ?>" >
              </div>
            </div>
			

            <div class="control-group">
              <label class="control-label">Penerbit :</label>
              <div class="controls">
                <input type="text" name="penerbit" class="" value="<?=$penerbit ?>"/>
              </div>
            </div>
			
			<div class="control-group">
              <label class="control-label">Tahun Terbit :</label>
              <div class="controls">
                <select name="thn_terbit">
                  <option value="">Pilih Tahun</option>
				  <option value="2018" <?php if( $thn_terbit=='2018'){echo "selected"; } ?>>2018</option>
				  <option value="2017" <?php if( $thn_terbit=='2017'){echo "selected"; } ?>>2017</option>
				  <option value="2016" <?php if( $thn_terbit=='2016'){echo "selected"; } ?>>2016</option>
                  <option value="2015" <?php if( $thn_terbit=='2015'){echo "selected"; } ?>>2015</option>
                  <option value="2014" <?php if( $thn_terbit=='2014'){echo "selected"; } ?>>2014</option>
                  <option value="2013" <?php if( $thn_terbit=='2013'){echo "selected"; } ?>>2013</option>
                  <option value="2012" <?php if( $thn_terbit=='2012'){echo "selected"; } ?>>2012</option>
                  <option value="2011" <?php if( $thn_terbit=='2011'){echo "selected"; } ?>>2011</option>
                  <option value="2010" <?php if( $thn_terbit=='2010'){echo "selected"; } ?>>2010</option>
                  <option value="2009" <?php if( $thn_terbit=='2009'){echo "selected"; } ?>>2009</option>
                  <option value="2008" <?php if( $thn_terbit=='2008'){echo "selected"; } ?>>2008</option>
                  <option value="2007" <?php if( $thn_terbit=='2007'){echo "selected"; } ?>>2007</option>
                  <option value="2006" <?php if( $thn_terbit=='2006'){echo "selected"; } ?>>2006</option>
                  <option value="2005" <?php if( $thn_terbit=='2005'){echo "selected"; } ?>>2005</option>
                  <option value="2004" <?php if( $thn_terbit=='2004'){echo "selected"; } ?>>2004</option>
                  <option value="2003" <?php if( $thn_terbit=='2003'){echo "selected"; } ?>>2003</option>
                  <option value="2002" <?php if( $thn_terbit=='2002'){echo "selected"; } ?>>2002</option>
                  <option value="2001" <?php if( $thn_terbit=='2001'){echo "selected"; } ?>>2001</option>
                  <option value="2000" <?php if( $thn_terbit=='2000'){echo "selected"; } ?>>2000</option>
                  <option value="1999" <?php if( $thn_terbit=='1999'){echo "selected"; } ?>>1999</option>
                  <option value="1998" <?php if( $thn_terbit=='1998'){echo "selected"; } ?>>1998</option>
                  <option value="1997" <?php if( $thn_terbit=='1997'){echo "selected"; } ?>>1997</option>
                  <option value="1996" <?php if( $thn_terbit=='1996'){echo "selected"; } ?>>1996</option>
                  <option value="1995" <?php if( $thn_terbit=='1995'){echo "selected"; } ?>>1995</option>
                  <option value="1994" <?php if( $thn_terbit=='1994'){echo "selected"; } ?>>1994</option>
                  <option value="1993" <?php if( $thn_terbit=='1993'){echo "selected"; } ?>>1993</option>
                  <option value="1992" <?php if( $thn_terbit=='1992'){echo "selected"; } ?>>1992</option>
                  <option value="1991" <?php if( $thn_terbit=='1991'){echo "selected"; } ?>>1991</option>
                  <option value="1990" <?php if( $thn_terbit=='1990'){echo "selected"; } ?>>1990</option>
                </select>
              </div>
            </div>
			
            <div class="control-group">
              <label class="control-label">Jumlah Buku :</label>
              <div class="controls">
                <input type="number" name="jumlah_buku" value="<?=$jumlah ?>" class="" />
			  </div>
            </div>               
				
			<div class="control-group">
              <label class="control-label">Status Buku :</label>
              <div class="controls">
                <select name="pake">
					<option value="">Pilih :</option>
                    <option value="TERPAKAI" <?php if( $pake=='TERPAKAI'){echo "selected"; } ?>>TERPAKAI</option>
                    <option value="TIDAK" <?php if( $pake=='TIDAK'){echo "selected"; } ?>>TIDAK TERPAKAI</option>
                </select>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label">Keterangan :</label>
              <div class="controls">
                <textarea class="" name="keterangan" value="<?=$keterangan ?>" ></textarea>
              </div>
            </div>
            <div class="form-actions">
              <button class="btn btn-success" type="submit" name="sub">Submit
            </div>
            

          </form>
 	      </div>
   	  </div>
    </div>