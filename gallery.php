<?php include 'header.php';?>

<div class="container-fluid">
		<div class="container konten-wrapper">
			<div class="panel panel-default">
				<div class="panel-body main">
					<?php
						$query = mysqli_query($mysqli, "SELECT * FROM gallery");
						while ($hasil = mysqli_fetch_array($query)){
					 ?>
						<div class="col-sm-10 col-md-4">
					 	<div class="thumbnail">
								| <?php echo $hasil['nama'];?></a> |
					 	<img src="./webadmin/image/<?php echo $hasil['file'];?>" height="50%" width="50%"/><br>
			 		</div>
				</div>
		<?php } ?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php include 'footer.php';
