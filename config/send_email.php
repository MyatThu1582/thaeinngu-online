<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require '../phpmailer/src/Exception.php';
  require '../phpmailer/src/PHPMailer.php';
  require '../phpmailer/src/SMTP.php';

  if (isset($_POST["send_btn"])) {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = "kaungkhantzayyar13@gmail.com";
    $mail->Password = "umfavyzsdoiszkjn";
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom($_POST['email']);

    $mail->addAddress('kaungkhantzayyar13@gmail.com');

    $mail->isHTML(true);

    $mail->Name = $_POST['name'];
    $mail->Subject = $_POST['subject'];
    $mail->Body = $_POST['message'];


    $mail->send();

    echo "<script>alert('Set Successfully');document.location.href = '../view/contact.php';</script>";
  }
?>
