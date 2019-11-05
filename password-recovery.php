<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Password Recevery | Kiaalap - Kiaalap Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center ps-recovered">
				<h3>PASSWORD RECOVERY</h3>
				<p>Hello! Let us know whether it's you</p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body poss-recover">
                        <p style="font-size: 4mm;">
                            Answer the following question
                        </p>
                        <form action="#" id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="username" style="font-size: 5mm;">What's your Email-ID?</label>
                                <input type="text" placeholder="Please enter you institute email address" title="Please enter you email address" required="" value="" name="email" id="email" class="form-control">
                                <span class="help-block small">For further queries, contact support</span>
                            </div>

                            <button class="btn btn-success btn-block">Reset password</button>
                        </form>
                    </div>
                </div>
			</div>
			<div class="text-center login-footer">
				<p>Copyright © 2018. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
			</div>
		</div>
    </div>
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="js/icheck/icheck.min.js"></script>
    <script src="js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>
</html>

<?php

/* Namespace alias. */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Include the Composer generated autoload.php file. */
require '';

/* If you installed PHPMailer without Composer do this instead: */
/*
require 'C:\PHPMailer\src\Exception.php';
require 'C:\PHPMailer\src\PHPMailer.php';
require 'C:\PHPMailer\src\SMTP.php';
*/

/* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
$mail = new PHPMailer(TRUE);

/* Open the try/catch block. */
try {
   /* Set the mail sender. */
   $mail->setFrom('darth@empire.com', 'Darth Vader');

/* Add a recipient. */
$mail->addAddress('palpatine@empire.com', 'Emperor');

/* Set the subject. */
$mail->Subject = 'Force';

/* Set the mail message body. */
$mail->Body = 'There is a great disturbance in the Force.';

/* Finally send the mail. */
$mail->send();
}
catch (Exception $e)
{
/* PHPMailer exception. */
echo $e->errorMessage();
}
catch (\Exception $e)
{
/* PHP exception (note the backslash to select the global namespace Exception class). */
echo $e->getMessage();
}
?>

<?php

/* Namespace alias (don't need Exception this time). */
use PHPMailer\PHPMailer\PHPMailer;

/* Include the Composer generated autoload.php file. */
require 'C:\xampp\composer\vendor\autoload.php';

/* Create a new PHPMailer object. */
$mail = new PHPMailer();

/* Set the mail sender. */
$mail->setFrom('contact@sanatanshrivastava.me', 'Sanatan Shrivastava');

/* Add a recipient. */
$mail->addAddress('2018kucp1096@iiitkota.ac.in', 'SANATAN SHRIVASTAVA');

/* Set the subject. */
$mail->Subject = 'Force';

/* Set the mail message body. */
$mail->Body = 'There is a great disturbance in the Force.';

/* Finally send the mail. */
if (!$mail->send())
{
/* PHPMailer error. */
echo $mail->ErrorInfo;
}
?>


<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'C:\xampp\composer\vendor\autoload.php';

$mail = new PHPMailer(TRUE);

try {

   $mail->setFrom('darth@empire.com', 'Darth Vader');
$mail->addAddress('palpatine@empire.com', 'Emperor');
$mail->Subject = 'Force';
$mail->Body = 'There is a great disturbance in the Force.';

/* SMTP parameters. */

/* Tells PHPMailer to use SMTP. */
$mail->isSMTP();

/* SMTP server address. */
$mail->Host = 'smtp.empire.com';

/* Use SMTP authentication. */
$mail->SMTPAuth = TRUE;

/* Set the encryption system. */
$mail->SMTPSecure = 'tls';

/* SMTP authentication username. */
$mail->Username = 'smtp@empire.com';

/* SMTP authentication password. */
$mail->Password = 'iamyourfather';

/* Set the SMTP port. */
$mail->Port = 587;

/* Finally send the mail. */
$mail->send();
}
catch (Exception $e)
{
echo $e->errorMessage();
}
catch (\Exception $e)
{
echo $e->getMessage();
}
?>

<?php

$from = 'Darth Vader <darth@empire.com>';
$to = 'Emperor <palpatine@empire.com>';
$subject = 'Force';
$message = 'There is a great disturbance in the Force.';
$headers = 'From: ' . $from;

if (!mail($to, $subject, $message, $headers))
{
echo "Error.";
}
else
{
echo "Message sent.";
}
?>