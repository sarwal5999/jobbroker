<?php
include_once 'connection.php';
@session_start();
$email = $_POST["email"];
$otp = "";
$i = 1;
$num = 0;
for ($i = 0; $i < 6; $i++) {
    $randno = rand(0, 10);
    if ($randno < 5) {
        $otp .= rand(0, 9);
    } else {
        $otp .= chr(rand(65, 90));
    }
}
echo $otp;
$sql = "select * from student where email='$email'";
$res = mysqli_query($conn, $sql);
if (mysqli_num_rows($res) > 0) {
    $result = mysqli_fetch_array($res);
    $_SESSION["admin1"] = $result["email"];
    $email = $result["email"];
    $sql1 = "UPDATE `student` SET `otp`='$otp' WHERE `email`='$email'";
    if (mysqli_query($conn, $sql1)) {
        error_reporting(E_STRICT);

        date_default_timezone_set('NZ');

        require_once('PHPMailer/class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

        $mail = new PHPMailer();

        /*$body             = file_get_contents('contents.html');
        $body             = preg_replace('/[\]/','',$body);*/

        $mail->IsSMTP(); // telling the class to use SMTP
        $mail->Host = "mail.yourdomain.com"; // SMTP server
        $mail->SMTPDebug = 2;                     // enables SMTP debug information (for testing)
        // 1 = errors and messages
        // 2 = messages only
        $mail->SMTPAuth = true;                  // enable SMTP authentication
        $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
        $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
        $mail->Port = 465;                   // set the SMTP port for the GMAIL server
        $mail->Username   = "jobbroker786@gmail.com";  // GMAIL username
        $mail->Password   = "jobbroker123";            // GMAIL password

        $mail->SetFrom('jobbroker786@gmail.com', 'Job Broker');

        $mail->AddReplyTo("jobbroker786@gmail.com","Job Broker");

        $mail->Subject = "Recovery Of Password";

        $mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
        $body = "Your Otp verification code is:-<br>$otp<br>You may follow the Following Link and recover your password <br><a class='btn btn-success' href='http://localhost/jobbroker/studententerotp.php'>Enter Otp</a>";
        $mail->MsgHTML($body);

        $address = $email;
        $mail->AddAddress($address, "John Doe");

        /*$mail->AddAttachment("images/phpmailer.gif");      // attachment
        $mail->AddAttachment("images/phpmailer_mini.gif"); */// attachment

        if (!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        }
        header("Location:studententerotp.php?er=2");
    } else {
        header("Location:studentforgotpassword.php?er=0");
    }
//    echo $sql1;
} else {
    header("Location:studentforgotpassword.php?er=1");

}
