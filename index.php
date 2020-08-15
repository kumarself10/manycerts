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
		<title>ManyCerts For Certifications and Trainings</title>
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
        <h1><a href="index.php">Courses and Cerfitications </a></h1>
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
			<label>Training or Certification you want to Enroll </label>
			<select name="category" id="category">
            <option value="Amazon Web Services">Training</option>
            <option value="Microsoft Azure">Certification</option>
            </select>
			</div>
			
			<div class="form-group">
			<label>Name</label>
			<select name="Course" id="courses">
            <option value="Amazon Web Services">AWS Solution Architect Associate</option>
			<option value="Amazon Web Services">AWS Developer Associate</option>
			<option value="Amazon Web Services">AWS SysOps Administrator Associate</option>
			<option value="Amazon Web Services">AWS Solution Architect Professional</option>
			<option value="Amazon Web Services">AWS DevOps Professional</option>
			<option value="Amazon Web Services">AWS Networking Speciality </option>
			<option value="Amazon Web Services">AWS Security Speciality</option>
            <option value="Microsoft Azure">Azure Administrator AZ-104</option>
			<option value="Microsoft Azure">Azure Developer AZ-204</option>
			<option value="Microsoft Azure">Azure Architect - Implementing AZ-300</option>
			<option value="Microsoft Azure">Azure DevOps AZ-400</option>
			<option value="Microsoft Azure">Azure Security AZ-500</option>
			<option value="Microsoft Azure">Azure Architect - Designing AZ-301</option>
			<option value="Microsoft Azure">Azure Data Implemeting DP-200</option>
			<option value="Microsoft Azure">Azure Data Designing DP-201</option>
			<option value="Microsoft Azure">Azure Artificial Intelligence  AI-100</option>
			<option value="Microsoft Azure">Azure SAP Workloads AZ-120</option>
            <option value="Microsoft Azure">Google Cloud Architect Professional </option>
			<option value="Microsoft Azure">Google Cloud Data Engineer </option>
            <option value="DevOps">DevOps</option>
            <option value="Python">Python</option>
            <option value="CISSP">CISSP</option>
            <option value="Data Science">Data Science</option>
            <option value="Workday SaaS HCM">Workday SaaS HCM</option>
            <option value="Workday SaaS Financethon">Workday SaaS Finance</option>
            <option value="Redhat Ansible">Redhat Ansible</option>
            <option value="Redhat OpenShift">Redhat OpenShift</option>
            <option value="Redhat Linux 8">Redhat Linux 8</option>
            <option value="Docker and Kubernetes">Docker and Kubernetes</option>
            <option value="Tabelu">Tabelu</option>
            </select>
			</div>
            <label>Amount</label>
			<input type="text" class="form-control" name="amount" Value="">
			</div>
			<h3> Cert Dumps Cost Rs 1000 per exam - Training Videos Cost Rs 5000 per Course </h3>
			<p><input type="submit" class="btn btn-success btn-lg" value="Click here to Pay"></p>
		</form>
 
    
    </div> <!-- /container -->
		</div>


  </body>
</html>