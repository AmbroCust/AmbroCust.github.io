<?php
  $fio = $_POST['fio'];
  $email = $_POST['email'];

  $fio = htmlspecialchars($fio);
  $email = htmlspecialchars($email);

  $fio = urlcode($fio);
  $email = urlcode($email);

  $fio = trim($fio);
  $email = trim($email);

  mail("example@mail.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: example2@mail.ru \r\n");
  if (mail("example@mail.ru", "Заказ с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: example2@mail.ru \r\n"))
  {
    echo "сообщение успешно отправлено";
  } else {
    echo "при отправке сообщения возникли ошибки";
  }
?>
