<?php 
	include 'conn/koneksi.php';
	$tanggal = date('Y-m-d');
	$jam = date('H:i:s');
	$waktu = $tanggal.' '.$jam;
?>

<!-- menu tengah -->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="?page=buku">Buku Data</a> <a href="?page=buku_input" class="current">Input Buku</a> </div>
    <h1>Input Buku</h1>
  </div>
		
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
	<div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Personal-info</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="?page=buku_proses" method="post" class="form-horizontal">
		  <input type="hidden" name="tgl_input" value="<?php echo $waktu; ?>">
		  
            <div class="control-group">
              <label class="control-label">Judul Buku :</label>
              <div class="controls">
                <input type="text" name="judul" class="" placeholder="Judul Buku" />
              </div>
            </div>
			
            <div class="control-group">
              <label class="control-label">Kelas :</label>
              <div class="controls" >
                <select name="kelas">
                  <option value="VII">VII</option>
                  <option value="VIII">VIII</option>
                  <option value="IX">IX</option>
                </select>
              </div>
            </div>
			
            <div class="control-group">
              <label class="control-label">Pengarang :</label>
              <div class="controls">
                <input type="text" name="pengarang" class="" placeholder="Pengarang"  />
              </div>
            </div>
			
            <div class="control-group">
              <label class="control-label">Penerbit :</label>
              <div class="controls">
                <input type="text" name="penerbit" class="" placeholder="Penerbit" />
              </div>
            </div>
			
			<div class="control-group">
              <label class="control-label">Tahun Terbit :</label>
              <div class="controls">
                <select name="thn_terbit">
                  <option value="">Pilih Tahun</option>
				  <option value="2015">2018</option>
				  <option value="2015">2017</option>
				  <option value="2015">2016</option>
                  <option value="2015">2015</option>
                  <option value="2014">2014</option>
                  <option value="2013">2013</option>
                  <option value="2012">2012</option>
                  <option value="2011">2011</option>
                  <option value="2010">2010</option>
                  <option value="2009">2009</option>
                  <option value="2008">2008</option>
                  <option value="2007">2007</option>
                  <option value="2006">2006</option>
                  <option value="2005">2005</option>
                  <option value="2004">2004</option>
                  <option value="2003">2003</option>
                  <option value="2002">2002</option>
                  <option value="2001">2001</option>
                  <option value="2000">2000</option>
                  <option value="1999">1999</option>
                  <option value="1998">1998</option>
                  <option value="1997">1997</option>
                  <option value="1996">1996</option>
                  <option value="1995">1995</option>
                  <option value="1994">1994</option>
                  <option value="1993">1993</option>
                  <option value="1992">1992</option>
                  <option value="1991">1991</option>
                  <option value="1990">1990</option>
                </select>
              </div>
            </div>
			
			
            <div class="control-group">
              <label class="control-label">Jumlah Buku :</label>
              <div class="controls">
                <input type="number" name="jumlah_buku" class="" />
			  </div>
            </div>
			
			<div class="control-group">
              <label class="control-label">Status Buku :</label>
              <div class="controls">
                <select name="pake">
					<option value="">Pilih :</option>
                    <option value="TERPAKAI">TERPAKAI</option>
                    <option value="TIDAK">TIDAK TERPAKAI</option>
                </select>
              </div>
            </div>
			
            <div class="control-group">
              <label class="control-label">Keterangan :</label>
              <div class="controls">
                <textarea class="" name="keterangan" ></textarea>
              </div>
            </div>
			
            <div class="form-actions">
              <button class="btn btn-success" type="submit" name="sub">Submit
            </div>
			
          </form>
        </div>
		 
      </div>
		
		
   	   
 	      </div>
   	  </div>
   	  </div> 
    