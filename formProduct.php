<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">

		<div class="row">

			<div class="panel panel-danger">
				<div class="panel-heading">
					<h3 class="panel-title">Add Category</h3>
				</div>
				<div class="panel-body">
					<form action="insertProd.php" method="post" name="forml" id="forml">

						<div class="row">

							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								Product name:
							</div>

							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

								<input type="text" name="p_name"  class="form-control" >

							</div>


						</div>
						<div class="row">

							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								Price:
							</div>

							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

								<input type="number" name="p_price" id="rong" class="form-control">

							</div>


						</div>
						<div class="row">

							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								Quantity:
							</div>

							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

								<input type="number" name="p_quan" id="dt" class="form-control">

							</div>


						</div>
						<div class="row">

							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								Description:
							</div>

							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

								<input type="text" name="p_des" id="dt" class="form-control">

							</div>


						</div>
						<div class="row">

							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								Cate_id:
							</div>

							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

								<select name="p_cate" id="inputCate_id" class="form-control" required="required">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
								</select>

							</div>


						</div>
						<div class="row">

							<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
								Comments:
							</div>

							<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

								<input type="text" name="p_com" id="dt" class="form-control">

							</div>


						</div>

						<div class="row">

							<button type="submit" name="submit" value="add" class="btn btn-primary">INSERT</button>

						</div>

					</form>






				</div>
			</div>

		</div>

	</div>

</body>

</html>