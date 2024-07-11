
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Form</title>
  <link rel="stylesheet" href="css/contactstyle.css">
  
</head>
<body>
  <section class="section1">
    <img class="img1" src="image/WhatsApp_Image_2023-12-25_at_15.13.41_546743ca-removebg-preview (1).png">
    <div class="a3">
        <div class="a1">
             <img class="wh1" src="image/whatsapp.png"></img>
             <a class="wh3" href="https://wa.me/+918668861767">+918668861767</a>
             <a class="wh3" href="https://wa.me/+919422205939">+919422205939</a>
         </div>
        <div class="a2"> 
             <img class="wh2" src="image/gmail.png"></img>
             <a class="wh4" href="https://wa.me/+918668861767">hinglajmachineryjalna@gmail.com</a>
         </div>
    </div>

</section>
<header class="header1">
   
    <h1 id="headline">Hinglaj Machinery Jalna</h1>
    
    <nav class="navbar">
        <ul class = "navbarlist">

                <li><a class ="navbar-link homelink" href = "index.html">Home</a></li>
                <li><a class ="navbar-link servicelink" href = "Service.html"target="_blank">Accessories</a></li>
                <li><a class ="navbar-link aboutuslink" href = "#product"target="_blank">Machines</a></li>
                <li><a class ="navbar-link loginlink" href = "index.html#i1">About</a></li>
                <li><a class="navbar-link contactlink" href="Contact.html">Contact</a></li>
            </ul>
        </nav>
   

</header>
<!--Body-->
  <div class="divi">
    <div class="wrapper">
      <header>Send us a Message</header>
      <form action=" " method="post">
        <div class="dbl-field">
          <div class="field">
            <input type="text" name="name" placeholder="Enter your name" required>

          </div>
          <div class="field">
            <input type="text" name="email" placeholder="Enter your email" required>

          </div>
        </div>
        <div class="dbl-field">
          <div class="field">
            <input type="text" name="phone" placeholder="Enter your phone" required>

          </div>
        
        </div>
        <div class="message">
          <textarea placeholder="Write your message" name="message" required></textarea>

        </div>
        <div class="button-area">
          <button name ="submit"type="submit">Send Message</button>
          
        </div>
      </form>
    </div>
  </div>
 <!--End Body-->
  <footer class="bk">


    <div class="wp-block-colnwide" > 
        <div class="wp-block-column" style="flex-basis:40%;" >
            <h4 class="wp-block-headingmargin-bottom-halfhas-background-colorhas-text-color" >Hinglaj Machinery Jalna</h4>
        
            <p class="margin-top-halfhas-text-color" >We are a local organization that provides support within the local community to organizations that involve volunteers.</p>
        </div>
    
    
    
        <div class="wp-block-column" style="flex-basis:20%;">
            <h4 class="wp-block-headingmargin-bottom-halfhas-background-colorhas-text-color" >Get in touch</h4>  
            <p class="margin-top-halfhas-text-color" ><a class="wh" href="#getin">Contact Us</a><br>+91 8668861767<br><a class="wh" href="mailto:sales@hinglajmachinery.com">sales@hinglajmachinery.com</a></p>
        </div>
    
    
    
        <div class="wp-block-column" style="flex-basis:20%;">
            <h4 class="wp-block-headingmargin-bottom-halfhas-background-colorhas-text-color" >Who we are</h4>   
            <p class="margin-top-halfhas-text-color" ><a class="wh" href="#">About</a><br><a class="wh" href="#">Terms of Service</a><br><a class="wh" href="#">Privacy Policy</a></p>
        </div>

        <div class="wp-block-column" style="flex-basis:20%;">
            <h4 class="wp-block-headingmargin-bottom-halfhas-background-colorhas-text-color" >Follow us</h4>
        
            <p class="margin-top-halfhas-text-color" ><a class="wh" href="#">Facebook</a><br><a class="wh" href="#">Twitter</a><br><a class="wh" href="#">Instagram</a></p>
        </div>
    </div>



  </footer>

</body>
</html>


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
    $mail->addAddress('dhavaletejas21@gmail.com', 'Hinglaj Machinery Jalna');

    $mail->isHTML(true);
    $mail->Subject='Query';
    $mail->Body= "Sender Name - $name<br> Sender Email - $email<br>Sender Phone no - $phone<br> Query - $message";

    $mail->send();
     
    echo"<script type='text/javascript'>alert('Your Message has been sent. Thanks for visiting.');</script><div id='popup'>
    <img src='image/correct.png' style='width: 80px;'>
    <h2>Thanks for visiting</h2>
    <p>Your Message has been sent</p>
    <button id='togglebutton' onclick=toggle()>Close</button>
</div>
<script type='text/javascript'>
toggle();
function toggle(){
    
    var popup = document.getElementById('popup');
    popup.classList.toggle('active');
}
</script>";
  }catch(Exception $e){
    echo"<div class='alert'>Message couldnt sent:</div>{$mail->ErrorInfo}";
  }
}
 
?>

