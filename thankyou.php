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
	<title>Thank You, ManyCerts</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </head>
	<body>
    <div class="container">
	<div class="page-header">
        <h1><a href="index.php">ManyCerts Payment</a></h1>
        <p class="lead">You will receive the materials you requested to your email ID in few minutes</p>
    </div>
	<h3 style="color:#6da552">Thank You, Your Payment is success!!</h3>
<?php
include 'src/instamojo.php';
$api = new Instamojo\Instamojo('6dcdc7a627a360c9483f6d01f91d9c8a', '74161df4b28ba8583eb37942d1b0ce89','https://www.instamojo.com/api/1.1/');
$payid = $_GET["payment_request_id"];
try {
    $response = $api->paymentRequestStatus($payid);
	echo "<h4>Payment ID: " . $response['payments'][0]['payment_id'] . "</h4>" ;
    echo "<h4>Payment Name: " . $response['payments'][0]['buyer_name'] . "</h4>" ;
    echo "<h4>Payment Email: " . $response['payments'][0]['email'] . "</h4>" ;
echo "<pre>";
   print_r($response);
echo "</pre>";
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}
?>
</div> <!-- /container -->
</body>
</html>

