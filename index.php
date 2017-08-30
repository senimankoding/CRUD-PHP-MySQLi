<?php
	require_once'lib/db.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>crud</title>
	<meta charset=utf-8>
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
</head>
<body>
	<div class="row nav">
		<div class="container">
			<nav class="navbar navbar-default" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Title</a>
				</div>
			
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Link</a></li>
						<li><a href="#">Link</a></li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Link</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</nav>
		</div>
		
	</div>

	<div class="row table">
		<div class="container">
			<a href="tambah.php" class="btn btn-primary">Tambah Data</a>
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>NO</th>
						<th>NAMA</th>
						<th>NIM</th>
						<th>EMAIL</th>
						<th>ALAMAT</th>
						<th>AKSI</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$hasil = $db->QUERY("SELECT * FROM satu");
					$rows = $hasil->fetch_ALL(MYSQLI_ASSOC); 
					$no =1;
					foreach ($rows as $row):
				?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $row['nama']; ?></td>
						<td><?php echo $row['nim']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['alamat']; ?></td>
						<td>
							<a href="edit.php?id=<?php echo $row['id'];?>">Edit</a> ||
							<a href="hapus.php?id=<?php echo $row['id'];?>">Hapus</a>
						</td>
					</tr>
				<?php 
					$no++;
					endforeach; 
				?>
				</tbody>
			</table>
		</div>
	</div>

</body>
</html>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>