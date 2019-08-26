<?php
if(!isset($_POST['name'])) {
    header('Location: index.html');
    exit();
}

$name = $_POST['name'];
$from = $_POST['email'];
$to = "info@fightproof.io";
$subject = "Client Mail";

$msg = "Message: ".$_POST['msg'];
$headers  = "From: FightProof < info@fightproof.io >\r\n";
$headers .= "Reply-to: $from\r\n";
$headers .= "Cc: FightProof < info@fightproof.io >\r\n"; 
$headers .= "X-Sender: FightProof < info@fightproof.io >\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();
$headers .= "X-Priority: 1\r\n"; // Urgent message!
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=iso-8859-1\r\n";

if(@mail($to, $subject, $msg, $header, '-f{$from}')) {
    echo "<div class='alert alert-success'>Thank You for Contacting Us!</div>";
}
else {
    echo "<div class='alert alert-danger'>Failed to Send Mail! Try Again.</div>";
}

?>





















