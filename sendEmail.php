<?php 

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer();

  //check if user coming from a request
    $user = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone =  filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
    $nationality = filter_var($_POST['nationality'], FILTER_SANITIZE_STRING);
    $startDuration = $_POST['start'];
    $endDuration = $_POST['end'];
    $adults = $_POST['adultsValue'];
    $kids = $_POST['kidsValue'];

    $message = $_POST['message'];

    $headers = 'Form: ' . $email . '\r\n';
    $myEmail = 'ahmedhamada_fci@yahoo.com';
    $subject = 'Contact Form';


    // smtp settings

    // $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Port = '587';
    $mail->SMTPSecure = 'tls';
    $mail->Username = ""; // email
    $mail->Password = ""; //password
    
    // mail settings
    $mail->isHTML(true);
    $mail->setFrom($email, $user);
    $mail->addAddress(""); //email that we send data to it
    $mail->Subject = $subject;
    $mail->Body = "Email : $email <br> name: $user <br> Phone: $phone <br> Nationality: $nationality <br> Start Duration: $startDuration <br> End Duration: $endDuration <br> Adults: $adults <br> Kids: $kids <br> Message: $message";

    if($mail->send()){
        $success = '<div class="alert alert-success custom-alert">We have Recieved Your Message </div>';
        header("Location: thank-you.html");
    } else {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }

?>
