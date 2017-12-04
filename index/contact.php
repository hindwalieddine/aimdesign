<?php

$sendto   = "hind.walieddine@live.com";
//$sendto = "info@aimdesignlabel.com";
$username = $_POST['name'];
$usermail = $_POST['email'];
//$usersubject = $_POST['subject'];
$userphone  = $_POST['phone'];
$content  = nl2br($_POST['message']);

$subject  = "New Feedback Message From Aim Design Website";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=UTF-8 \r\n";

$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>New User Feedback</h2>\r\n";
$msg .= "<p><strong>name:</strong>".$username."</p>\r\n";
//$msg .= "<p><strong>subject:</strong>".$usersubject."</p>\r\n";
$msg .= "<p><strong>Sent by:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>Phone:</strong> ".$userphone."</p>\r\n";
$msg .= "<p><strong>Message:</strong> ".$content."</p>\r\n";
$msg .= "</body></html>";

//$index->send_one ($message, $_POST['subject'], $_POST['name'], $_POST['email'], 'hind.walieddine@live.com');

/*echo 'msg '.$msg; echo '<br>';
echo 'sendto '.$sendto; echo '<br>';
echo 'username '.$username; echo '<br>';
echo 'usermail '.$usermail; echo '<br>';
//echo 'usersubject '.$usersubject; echo '<br>';
echo 'content '.$content;  echo '<br>';
echo 'msg '.$msg; echo '<br>';
*/
//index->send_one ($msg, $usersubject, $username, $usermail, $sendto);

if(@mail($sendto, $subject, $msg, $headers)) {
    echo "true";
    //header( 'index.html' );
} else {
    echo "false";
}

header('Location:contactus.php');
?>
