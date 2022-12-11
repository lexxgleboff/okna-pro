<?php

$sendto   = "lexxgleboff@gmail.com";
$username = $_POST['username'];
$userphone = $_POST['userphone'];
// Формирование заголовка письма
$subject  = "Заявка с сайта";
$headers  = "From: " . strip_tags($username) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";
// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Заявка с сайта</h2>\r\n";
$msg .= "<p><strong>Имя:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Номер телефона:</strong> ".$userphone."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
if(mail($sendto, $subject, $msg, $headers)) {
	echo "true";
} else {
	echo "false";
}

?>