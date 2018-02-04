<?php


$to = "vlados200257@gmail.com";

$from = $_POST["from"];

$subject = $_POST["subject"];

$message = $_POST["message"];

$headers = "Content-type: text/plain ;\n\t charset=UTF-8\r\n From: $from\r\n Replay-to: $from\r\n ";



 if(mail($to , $subject , $message , $headers)) {
  echo "Сообщение доставлено успешно";
}
 else {
  echo "Сообщение не доставлено";
}
