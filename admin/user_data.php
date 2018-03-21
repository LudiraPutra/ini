   <?php
   include '../conn/koneksi.php';
   ?>
   
   <!-- menu tengah -->
   <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">User</li>
      </ol>
	<div id="menu-tengah">
    	<div id="bg_menu">
		<h2><center>Data Admin</h2></center><hr>
    	</div>
    	<div id="content_menu">
        <div id="menu_header">
        	<form action="?page=user_search" method="post">
        	<table width="100%" height="100%">
            	<tr>
                	<td width="50%">
                    <td width="50%" align="right"><input type="text" name="cari" size="30" placeholder="Cari nama, username"></td>
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
   	            <th align="center" width="5%" >No</th>
   	            <th width="30%">Nama</th>
   	            <th width="40%">Email</th>
   	            <th width="15%">Level</th>
                <th width="8%">Edit</th>
                <th width="8%">Hapus</th>
              </tr>
            </thead>
            <?php
				$query = "SELECT * FROM tbl_user ORDER by id";
				$sql = mysql_query($query);
				$total = mysql_num_rows($sql);
				$no = 1;
				
				while ($data=mysql_fetch_array($sql)) {
			?>
   	        <tbody>
   	          <tr>
   	            <td align=""><?php echo $no; ?></td>
   	            <td><a href="?page=user_detil&id=<?=$data['id']?>"><?php echo $data['nama']; ?></a></td>
   	            <td><?php echo $data['email']; ?></td>
   	            <td><?php echo $data['level']; ?></td>
                <td align=""><a href="?page=user_edit&id=<?=$data['id']?>"><img src="../images/edit.png"/ width="15px" height="15px"></a></td>
                <td align=""><a href="?page=user_hapus&id=<?=$data['id']?>" onclick="return confirm('Anda yakin ingin menghapus data user <?=$data['nama']?> ?')"><img src="../images/delete.png"/ width="15px" height="15px"></a></td>
                
              </tr>
              
            <?php $no++; } ?>
            
            </tbody>
          </table>
          </div>
          <div id="menu_bottom">
        	<table width="100%" style="border:0px solid #9cc;">
            	<tr>
                	<td width="50%">Jumlah : <?php echo $total; ?> Admin </td>
					<td align="right"><a href="?page=user_input">Tambah Admin <img src="../images/plus.jpg"/ width="18px" height="18px"></a></td>
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