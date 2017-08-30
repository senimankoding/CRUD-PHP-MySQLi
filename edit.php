<?php
	require_once'lib/db.php';
	$id = $_GET['id'];
	$hasil = $db->QUERY("SELECT * FROM satu WHERE id=$id");
	$rows = $hasil->fetch_object();
	//echo '<pre>',print_r($rows);
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
			<form class="form-horizontal" action="aksi/update.php" method="post">
									<div class="form-group">
										<label class="col-sm-3 control-label">Nama</label>
										<div class="col-sm-4">
											<input type="text" name="nama" class="form-control" value="<?php echo $rows->nama;?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Nim</label>
										<div class="col-sm-4">
											<input type="text" name="nim" class="form-control" value="<?php echo $rows->nim;?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label">Email</label>
										<div class="col-sm-4">
											<input type="text" name="email" class="form-control" value="<?php echo $rows->email;?>">
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label">Alamat</label>
										<div class="col-sm-4">
											<textarea name="alamat" class="form-control" ><?php echo $rows->alamat;?></textarea>
										</div>
									</div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label">&nbsp;</label>
										<div class="col-sm-6">
											<input type="hidden" name="id" value="<?php echo $rows->id;?>">
											<input type="submit" name="add" class="btn btn-sm btn-primary" value="Update">
											
										</div>
									</div>
								</form><br></br>
		</div>
	</div>

</body>
</html>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>