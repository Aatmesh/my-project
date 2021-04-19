<?php

require_once 'PHPMailerAutoload.php';
require_once 'class.phpmailer.php';
require_once 'class.smtp.php';



$name=$_POST['name'];
$phone= $_POST['phone'];
$email=$_POST['email'];
// $phone=$_POST['phone'];
$company=$_POST['company'];
$msg=$_POST['message'];

$secret=$_POST["secret"];
$response=$_POST["response"];
// $url="https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$response;
$verify=file_get_contents($url);
echo $verify;

/* CONFIGURATION */
 $crendentials = array(
    'email'     => 'info@gain.ae',    
 );

$smtp = array(

	'host' => 'smtp.sendgrid.net',
	'port' => 587, //587
	'username' => 'apikey',
	'password' => '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',
	'secure' => 'tls' //SSL or TLS
	
	);
	
	
// You will get client inquiry email on below Email Address.
// $to = "info@gain.ae";

$subject = $name." Wants To Contact You.";
$message = "
<html>
<head>
<title>GAIN </title>
<style>
	table{
		width: 650px;
	    border-collapse: collapse;
	    border: 1px solid #017cb7;
	}

	table, th, tr{
		border: 1px solid #017cb7;
	}

	th{
		width: 100px;
	    padding: 10px;
	    background: #ebfdb8;
	    color: #333333;
	}
	
	td{
		padding-left: 10px;
	}

</style>
</head>
<body>

<table>
<tr>
<th>Name</th>
<td>$name</td>
</tr>


<tr>
<th>Phone</th>
<td>$phone</td>
</tr>

<tr>
<th>Email</th>
<td>$email</td>
</tr>
 
<tr>
<th>Company</th>
<td>$company</td>
</tr>
<tr>
<th>Message</th>
<td>$msg</td>
</tr>
</table>
</body>
</html>
";


$mailer = new PHPMailer();

//SMTP Configuration
$mailer->isSMTP();
$mailer->SMTPAuth   = true; //We need to authenticate
$mailer->Host       = $smtp['host'];
$mailer->Port       = $smtp['port'];
$mailer->Username   = $smtp['username'];
$mailer->Password   = $smtp['password'];
$mailer->SMTPSecure = $smtp['secure']; 

//Now, send mail :
//From - To :
$mailer->From       = $crendentials['email'];
$mailer->FromName   = 'Gain'; //Optional
$mailer->addAddress ("info@gain.ae");  // Add a recipient
//Subject - Body :
$mailer->Subject        = $subject;
$mailer->Body           = $message;
$mailer->isHTML(true); //Mail body contains HTML tags

if (!$mailer->send()) {
    $errorMessage = $mailer->ErrorInfo;
    echo "no";
}

//second
$to2 = $email;
$subject2 = "Thank you for Contacting Gain";

$message2 = "
<html>
<head>
<title>Gain</title>
</head>
<body>

<h3><b>Dear $name,</b></h3>
 
<h4>Thank you for showing your interest in our products and services.</h4>
 
<h4>One of our representatives will get in touch with you soon.</h4>
 
<h4>Thanks &amp; Regards,<br><b>Team<br>Gain</b></h4> 

</body>
</html>
";

// Always set content-type when sending HTML email
$headers2 = "MIME-Version: 1.0" . "\r\n";
$headers2 .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers2 .= 'From: <info@gain.ae>' . "\r\n";



$mailer->ClearAddresses();
$mailer->addAddress($to2);

$mailer->Subject        = $subject2;
$mailer->Body           = $message2;
$mailer->isHTML(true);

$mailer->send();


// mail($to,$subject2,$message2,$headers2);



// $success2 = mail($to2,$subject2,$message2,$headers2);
// if (!$success2) {
//     $errorMessage = error_get_last()['message'];
//     echo "no";
// }


// $success = mail($to,$subject2,$message2,$headers2);
// if (!$success) {
//    $errorMessage = error_get_last()['message'];
//    echo "no";
// } 
 
 
echo "yes";
 
?>
