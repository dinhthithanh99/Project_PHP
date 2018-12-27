<?php 
error_reporting(1);
$servername = "localhost";
$username = "root";
$password = "";
$file="project";

$mysqli = new mysqli($servername, $username, $password, $file);

if ($mysqli===false) {
	die("ERROR: could not connect." .$mysqli-> connect_error);
} 

$sql= "INSERT INTO project.products(pname, price, quantity,description,category_id,comments) Values ('?',?,?,'?',?,'?');";

if ($stmt=$mysqli-> prepare($sql)) {
	$stmt-> bind_param("siisis", $pname, $price, $quantity,$description, $category_id, $comment);

	$pname=$_POST["pname"];
	$price=$_POST["price"];
	$quantity=$_POST["quantity"];
	$description=$_POST["description"];
	$category_id=$_POST["category_id"];
	$comment=$_POST["comment"];

	$stmt-> execute();
	/*check lỗi
	$str="INSERT INTO products(pname, price, quantity,description,category_id,comments) Values ($pname, $price, $quantity,$description, $category_id, $comment);";*/
	echo 'Records inserted successfully.';
}
else {
	echo 'ERROR: could not prepare query: $sql .'.$mysqli-> error;
}

	$stmt-> close();

	$mysqli-> close();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="row">

		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

		</div>

		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="border: 1px solid black; margin-top: 20px; padding-bottom: 20px">
			<form action="form_product.php" method="POST" role="form">
				<center><h2>INSERT PRODUCTS </h2></center>

				<div class="row">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<label>Product name: </label>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
						<input type="text" name="pname" size="35" placeholder="pname" value="<?php echo $_POST["pname"]; ?>"><br></br>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<label>Price: </label>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
						<input type="number" name="price" size="50" placeholder="price" value="<?php echo $_POST["price"]; ?>"><br></br>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<label>Quantity: </label>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
						<input type="number" name="quantity" size="35" placeholder="quantity" value="<?php echo $_POST["quantity"]; ?>"><br></br>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<label>Description: </label>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
						<input type="text" name="description" size="35" placeholder="description" value="<?php echo $_POST["description"]; ?>"><br></br>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<label>Category_id: </label>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
						<select name="category_id" value="<?php echo $_POST["category_id"]; ?>">
							<option>1 </option>
							<option>2 </option>
							<option>3 </option>
							<option>4 </option>
							<option>5 </option>
						</select><br></br>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<label>Comment: </label>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
						<textarea name="comment" id="comment" class="form-control" rows="3" required="comment" value="<?php echo $_POST["comment"]; ?>"></textarea><br></br>
					</div>
				</div>

				<div class="row">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
						<input type="submit" class="btn btn-info" style="width: 280px" value="Insert"></input>
					</div>
				</div>
			</form>
		</div>

		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

		</div>
	</div>


</body>
</html>