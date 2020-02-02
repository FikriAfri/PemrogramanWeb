<?php $thisPage="Edit Mahasiswa"; ?>
<?php $title = "Edit Nilai Mahasiswa" ?>
<?php $description = "Edit Nilai Mahasiswa" ?>
<?php 
include("header.php"); 
include("../koneksi.php"); 
?>
	<div class="container">
		<div class="content">
			<h2>Nilai Mahasiswa &raquo; Edit Nilai</h2>
			<hr />
			
			<?php
			$nim = $_GET['nim']; 
			$sql = mysqli_query($koneksi, "SELECT * FROM tbl_mahasiswa WHERE nim='$nim'"); 
			if(mysqli_num_rows($sql) == 0){
				header("Location: index.php");
			}else{
				$row = mysqli_fetch_assoc($sql);
			}
			if(isset($_POST['save'])){ 
				$username		 = $_POST['username'];
				$level		     = $_POST['level'];
				$nim		     = $_POST['nim'];
				$nama		     = $_POST['nama'];
				$IPS1   		 = $_POST['IPS1'];
				$IPS2			 = $_POST['IPS2'];
				$IPS3			 = $_POST['IPS3'];
				$IPS4  			 = $_POST['IPS4'];
				$IPS5			 = $_POST['IPS5'];
				$IPS6		     = $_POST['IPS6'];
				$IPS7		     = $_POST['IPS7'];
				$IPS8		     = $_POST['IPS8'];
								
				$update = mysqli_query($koneksi, "UPDATE tbl_mahasiswa SET username='$username', level='$level', nama='$nama', IPS1='$IPS1', IPS2='$IPS2', IPS3='$IPS3', IPS4='$IPS4', IPS5='$IPS5', IPS6='$IPS6', IPS7='$IPS7', IPS8='$IPS8' WHERE nim='$nim'") or die(mysqli_error($koneksi)); 
				if($update){ 
					header("Location: edit_nilai.php?nim=".$nim."&pesan=sukses"); 
				}else{ 
					echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data gagal disimpan, silahkan coba lagi.</div>'; 
				}
			}
			
			if(isset($_GET['pesan']) == 'sukses'){ 
				echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan. <a href="nilai.php"><- Kembali</a></div>'; 
			}
			?>
			
			<form class="form-horizontal" action="" method="post">
				<div class="form-group">
					<label class="col-sm-3 control-label">Username</label>
					<div class="col-sm-2">
						<input type="text" name="username" value="<?php echo $row ['username']; ?>" class="form-control" placeholder="username" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Level</label>
					<div class="col-sm-2">
						<select name="level" class="form-control" required>
							<option value="<?php echo $row ['level']; ?>"><?php echo $row ['level']; ?></option>
							<option value="admin">Admin</option>
							<option value="user">User</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NIM</label>
					<div class="col-sm-2">
						<input type="text" name="nim" value="<?php echo $row ['nim']; ?>" class="form-control" placeholder="NIM" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Nama</label>
					<div class="col-sm-4">
						<input type="text" name="nama" value="<?php echo $row ['nama']; ?>" class="form-control" placeholder="Nama" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">IPS1</label>
					<div class="col-sm-3">
						<input type="text" name="IPS1" value="<?php echo $row ['IPS1']; ?>" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">IPS2</label>
					<div class="col-sm-3">
						<input type="text" name="IPS2" value="<?php echo $row ['IPS2']; ?>" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">IPS3</label>
					<div class="col-sm-3">
						<input type="text" name="IPS3" value="<?php echo $row ['IPS3']; ?>" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">IPS4</label>
					<div class="col-sm-3">
						<input type="text" name="IPS4" value="<?php echo $row ['IPS4']; ?>" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">IPS5</label>
					<div class="col-sm-3">
						<input type="text" name="IPS5" value="<?php echo $row ['IPS5']; ?>" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">IPS6</label>
					<div class="col-sm-3">
						<input type="text" name="IPS6" value="<?php echo $row ['IPS6']; ?>" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">IPS7</label>
					<div class="col-sm-3">
						<input type="text" name="IPS7" value="<?php echo $row ['IPS6']; ?>" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">IPS8</label>
					<div class="col-sm-3">
						<input type="text" name="IPS8" value="<?php echo $row ['IPS6']; ?>" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="save" class="btn btn-sm btn-primary" value="Simpan" data-toggle="tooltip" title="Simpan Data Mahasiswa">
						<a href="nilai.php" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Batal">Batal</a>
					</div>
				</div>
			</form>
		</div> 
	</div> 
<?php 
include("footer.php"); 
?>