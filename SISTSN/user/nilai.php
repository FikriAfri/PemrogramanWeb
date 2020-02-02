<?php $thisPage="Nilai"; ?>
<?php $title = "Nilai Mahasiswa" ?>
<?php $description = "Nilai Mahasiswa" ?>
<?php 
include("header.php"); 
include("../koneksi.php"); 
?>
	<div class="container">
		<div class="content">
			<h2>Nilai Mahasiswa</h2>
			<hr />
			
			
			<br />
			<div class="table-responsive">
				<table class="table table-striped table-hover">
					<tr>
						<th>No</th>
						<th>NIM</th>
						<th>NAMA</th>
						<th>IPS1</th>
						<th>IPS2</th>
						<th>IPS3</th>
						<th>IPS4</th>
						<th>IPS5</th>
						<th>IPS6</th>
						<th>IPS7</th>
						<th>IPS8</th>
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
								<td>'.$row['nama'].'</td>
								<td>'.$row['IPS1'].'</td>
								<td>'.$row['IPS2'].'</td>
								<td>'.$row['IPS3'].'</td>
								<td>'.$row['IPS4'].'</td>
								<td>'.$row['IPS5'].'</td>
								<td>'.$row['IPS6'].'</td>
								<td>'.$row['IPS7'].'</td>
								<td>'.$row['IPS8'].'</td>
								
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