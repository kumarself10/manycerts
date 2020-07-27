<?php 
$purpose = "Payment";
$amount = $_POST["amount"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$email = $_POST["email"];
include 'instamojo.php';
$api = new Instamojo\Instamojo('6dcdc7a627a360c9483f6d01f91d9c8a', '74161df4b28ba8583eb37942d1b0ce89','https://test.instamojo.com/api/1.1/');
try {
    $response = $api->paymentRequestCreate(array(
        "purpose" => $purpose,
        "amount" => $amount,
        "buyer_name" => $name,
        "phone" => $phone,
		"email" => $email,
        "send_email" => true,
        "send_sms" => true,
        'allow_repeated_payments' => false,
        "redirect_url" => "https://manycerts.com/thankyou.php",
        "webhook" => "https://manycerts.com/webhook.php"
        ));
   $pay_ulr = $response['longurl'];
    header("Location: $pay_ulr");
    exit();
}
catch (Exception $e) {
    print('Error: ' . $e->getMessage());
}     
 ?>
 