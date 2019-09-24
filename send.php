<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$service = $_REQUEST['service'];
$sum = $_REQUEST['sum'];
$design = $_REQUEST['design'];
$comment = $_REQUEST['comment'];
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html;charset=utf-8 \r\n";

$message = "<p>Нове замовлення</p>
<p><strong>Ім'я:</strong> $name</p>
<p><strong>Email:</strong> $email</p>
<p><strong>Телефон:</strong> $phone</p>
<p><strong>Послуга:</strong> $service</p>
<p><strong>Кількість:</strong> $sum</p>
<p><strong>Необхідність дизайну:</strong> $design</p>
<p><strong>Коментарій:</strong> $comment</p>";

mail( "revan1648@ukr.net", "НОВЕ ЗАМОВЛЕННЯ",
    $message, $headers );
  header( "Location: http://jc-vova/index6.html" );
?>