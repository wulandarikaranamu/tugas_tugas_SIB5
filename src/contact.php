<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 4, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome/css/all.min.css" />

  </head>
  <body>

	<div class="container-fluid">
		<!-- Awal Header -->
		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<h1 align="center">
						Contact Me 
					</h1>
				</div>
			</div>
		</div>
		<!-- Akhir Header -->

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<form role="form">
				<div class="form-group">
					 
					<label for="exampleInputEmail1">
						Email address
					</label>
					<input type="email" class="form-control" id="exampleInputEmail1">
				</div>
				<div class="form-group">
					 
					<label for="exampleInputPassword1">
						Password
					</label>
					<input type="password" class="form-control" id="exampleInputPassword1">
				</div>
				<div class="checkbox">
					 
					<label>
						<input type="checkbox"> Remember Me 
					</label>
				</div> 
				<button type="submit" class="btn btn-primary">
					Submit
				</button>
                <button type="button" class="btn btn-success" onclick="goToIndex()">
					Back
				</button>
			</form>
		</div>
	</div>
</div>
<br>
<br>
<br>
<br>
<!-- Awal Footer -->
	<div class="row">
		<div class="col-md-12">
			<h6 align="center">
				<div class="footer">Layoutit &copy Merry Wulandari. S 2023 </div>
			</h6> 
			<div>
				<a href="https://wa.me/+6285240591592" target="_blank">
					<i class="fa-brands fa-whatsapp fa-3x"></i>
				</a>
			</div>
		</div>
	</div>
</div>
<!-- Akhir Footer -->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>

    
	<script type="text/javascript">
		function goToIndex() {
		
			window.location.href = "index.php";

			alert("Anda akan diarahkan ke halaman Home.");
		}
	</script>
  </body>
</html>