<?php
	$email_order = 'dbulgakov3452@gmail.com';

	$headers  = "Content-type: text/html; charset=utf-8 \r\n";
	$headers = "From: aksinterier.com" . "\r\n" .

	$msg =
	"<html>
		<head>
			<title></title>
		</head>
		<body>
			<h4>Aksinterier</h4>";

			if (!empty($_POST['fio']))
			{
				$subject = "Обратная связь";
				$name = htmlspecialchars($_POST['fio']);
				$msg .="<p><strong>Сообщение от:</strong> ".$name."</p>\n";
			}
			if (!empty($_POST['name']))
			{
				$subject = "Заявка на заказ";
				$name = htmlspecialchars($_POST['name']);
				$msg .="<p><strong>Сообщение от:</strong> ".$name."</p>\n";
			}
			if (!empty($_POST['email']))
			{
				$email = htmlspecialchars($_POST['email']);
				$msg .="<p><strong>Контактный email:</strong> ".$email."</p>\n";
				$headers .= "From: " . $email . "\r\n";
			}
			if (!empty($_POST['phone']))
			{
				if(!isset($name)) $subject = 'Перезвоните мне';
				$phone = htmlspecialchars($_POST['phone']);
				$msg .="<p><strong>Контактный телефон:</strong> ".$phone."</p>\n";
			}
			if (!empty($_POST['input_phone']))
			{
				$subject = 'Перезвоните мне';
				$phone = htmlspecialchars($_POST['input_phone']);
				$msg .="<p><strong>Контактный телефон:</strong> ".$phone."</p>\n";
			}
			if (!empty($_POST['text']))
			{
				$text = htmlspecialchars($_POST['text']);
				$msg .="<p><strong>Комментарий:</strong> ".$text."</p>\n";
			}
	$msg .=
		"</body>
	</html>";

	echo mail($email_order, $subject, $msg, $headers);