
<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])){
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $message = htmlspecialchars($_POST['message']);


  require 'PHPMailer/PHPMailer.php';
  require 'PHPMailer/SMTP.php';
  require 'PHPMailer/Exception.php';



  $mail=new PHPMailer(true);

 

  try{

    $mail->isSMTP();
    $mail->Host = 'tls://smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username='dhavaletejas90@gmail.com';
    $mail->Password='xnoxvjjhvqshorwz';
    $mail->SMTPSecure=PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port=587;

    $mail->setFrom('dhavaletejas90@gmail.com','Contact Form');
    $mail->addAddress('sales@hinglajmachinery.com', 'Hinglaj Machinery Jalna');

    $mail->isHTML(true);
    $mail->Subject='Query';
    $mail->Body= "Sender Name - $name<br> Sender Email - $email<br>Sender Phone no - $phone<br> Query - $message";

    $mail->send();
     
    echo "<script type='text/javascript'>alert('Your Message has been sent. Thanks for visiting.')";
  }catch(Exception $e){
    echo"<script type='text/javascript'>
    alert('Your Message has been sent. Thanks for visiting.');
  </script>{$mail->ErrorInfo}";
  }
}
 
?>
   