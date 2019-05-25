<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>AZIZI</title>
		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<?php
			include ("koneksi.php");
		?>
		<!-- Page Content -->
		<div class="container">
			<div class="card card-register mx-auto mt-3 mb-4">
				<div class="card-header bg-secondary text-white"><i class="fa fa-user"></i> Tambah Programmer Baru</div>
				<div class="card-body">
					<form name="tambah" action="tambah.php" method="post" enctype="multipart/form-data">
						<div class="form-group">
							<div class="form-row">
								<label>Nama Lengkap</label>
								<input class="form-control" name="nama" type="text" placeholder="Nama Lengkap" required data-validation-required-message="Silahkan masukkan nama anda.">
							</div>
						</div>
						<button type="submit" class="btn btn-info btn-block" name="btn_tambah"><i class="fa fa-external-link"></i> Tambah</button>
					</form>
				</div>
			</div>
	        <div class="row" style="margin-bottom: 10px">
				<div class="col-md-4">
					<h2 style="margin-top:0px"></h2>
				</div>
				<div class="col-md-4 text-center">
					<div style="margin-top: 4px"  id="message"></div>
				</div>
			</div>
			<div class="card mb-3">
				<div class="card-header bg-secondary text-white"><i class="fa fa-table"></i> List Programmer</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered" id="mytable" width="100%" cellspacing="0">
							<thead>
								<tr align="center">
									<th>Data Programmer</th>
									<th>Action Skill</th>
								</tr>
							</thead>
							<tbody>
								<?php
									$sql = "SELECT * FROM users";
									$query = mysqli_query($db,$sql);
									while($data = mysqli_fetch_array($query)){
								?>
								<tr>
									<td><?php echo $data['name']; ?></td>
									<td rowspan=2>
										<form action='tambah_skill.php' method='post' enctype='multipart/form-data'>
											<div class='form-group'>
												<div class='form-row'>
													<label>Masukkan skill</label>
													<input class='form-control' name='nama_skill' type='text' placeholder='Skill' required data-validation-required-message='Silahkan masukkan skill anda.'>
													<input class='form-control' name='id' type='hidden' value="<?php echo $data['id'];?>">
												</div>
											</div>
											<button type='submit' class='btn btn-info btn-block' name='btn_skill'><i class='fa fa-external-link'></i> Tambah</button>					
										</form>
									</td>
								</tr>
								<tr>
									<td>
										<?php
											$sql1 = "SELECT * FROM skills where user_id=".$data['id'];
											$query1 = mysqli_query($db,$sql1);
											while($data1 = mysqli_fetch_array($query1)){										
											echo $data1['name'].", ";					
										}
										?>
									</td>
								</tr>
								<?php  
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>