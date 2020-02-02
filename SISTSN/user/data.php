<?php $thisPage="Data"; ?>
<?php $title = "Data Mahasiswa" ?>
<?php $description = "Data Mahasiswa" ?>
<?php 
include("header.php"); 
include("../koneksi.php"); 
?>
	<div class="container">
		<div class="content">
			<h2>Data Mahasiswa</h2>
			<hr />

			
			
			<br />
			
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						<th>No</th>
						<th>NIM</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Tempat Lahir</th>
						<th>Tanggal Lahir</th>
						<th>No Telepon</th>
						<th>Agama</th>
						<th>Fakultas</th>
					</tr>
					<?php
					
						$sql = mysqli_query($koneksi, "SELECT * FROM tbl_mahasiswa ORDER BY nim ASC"); 
					
					if(mysqli_num_rows($sql) == 0){ 
						echo '<tr><td colspan="14">Data Tidak Ada.</td></tr>'; 
					}else{ 
						$no = 1; 
						while($row = mysqli_fetch_assoc($sql)){ 
							echo '
							<tr>
								<td>'.$no.'</td>
								<td>'.$row['nim'].'</td>
								<td><a href="profile_mahasiswa.php?nim='.$row['nim'].'">'.$row['nama'].'</a></td>
								<td>'.$row['jenis_kelamin'].'</td>
								<td>'.$row['tempat_lahir'].'</td>
								<td>'.$row['tanggal_lahir'].'</td>
								<td>'.$row['no_telepon'].'</td>
								<td>'.$row['agama'].'</td>
								<td>';
								if($row['fakultas'] == 'RPLK'){
									echo '<span class="label label-success">RPLK</span>';
								}
								else if ($row['fakultas'] == 'RSK' ){
									echo '<span class="label label-success">RSK</span>';
								}
								else if ($row['fakultas'] == 'RPKK' ){
									echo '<span class="label label-success">RPKK</span>';
								}
								else if ($row['fakultas'] == 'RKS' ){
									echo '<span class="label label-success">RKS</span>';
								}
							echo '
								</td>
							</tr>
							';
							$no++; 
						}
					}
					?>
				</table>
			</div> 
		</div> 
	</div> 
<?php 
include("footer.php"); 
?>