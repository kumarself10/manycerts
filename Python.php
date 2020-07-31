<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../../favicon.ico">
		<title>ManyCerts Payment</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
    <div class="container">
	<div class="page-header">
        <h1><a href="index.php">Python Training Videos By Real Time Expert - 25 hours plus - 500 Rs Only</a></h1>
		<form action="pay.php" method="POST" accept-charset="utf-8">
			<input type="hidden" name="product_name" value="<?php echo $prd_name; ?>"> 
			<input type="hidden" name="product_price" value="<?php echo $prd_price; ?>"> 
			<div class="form-group">
			<label>Your Name</label>
			<input type="text" class="form-control" name="name" placeholder="Enter your name">	 
			</div>
			<div class="form-group">
			<label>Your Phone</label>
			<input type="text" class="form-control" name="phone" placeholder="Enter your phone number"> 
			</div>
			<div class="form-group">
			<label>Your Email</label>
			<input type="email" class="form-control" name="email" placeholder="Enter you email"> 
			</div>
			<div class="form-group">
			<div class="form-group">
			<label>Training</label>
			<select name="Course" id="courses">
            
            <option value="Python">Python</option>
			</select>
            		
			</div>
            <label>Amount</label>
			<a href="https://www.instamojo.com/@manycerts/l81e87f7ec29e43caaf50dd511fe46398/" rel="im-checkout" data-text="Pay" data-css-style="color:#ffffff; background:#008b02; width:300px; border-radius:4px"   data-layout="vertical"></a>
			<script src="https://js.instamojo.com/v1/button.js"></script>
           
		</form>
 
    
    </div> <!-- /container -->
		</div>


  </body>
</html>