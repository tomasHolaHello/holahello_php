<?php

$IS_TEST = false;
$domain = "http://".$_SERVER['HTTP_HOST'].substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], "/") + 1);
$file = "form-getgloby.csv";

if(!file_exists($file)) {
	$txt = "Name;Company;Email;Phone;Message;\r\n";
	file_put_contents($file, $txt, FILE_APPEND | LOCK_EX);
}

$txt = str_replace(";", ",", utf8_decode($_POST['name'])).";";
$txt .= str_replace(";", ",", utf8_decode($_POST['company'])).";";
$txt .= str_replace(";", ",", utf8_decode($_POST['email'])).";";
$txt .= str_replace(";", ",", utf8_decode($_POST['phone'])).";";
$txt .= str_replace(";", ",", utf8_decode($_POST['message'])).";";
$txt .= "\r\n";

file_put_contents($file, $txt, FILE_APPEND | LOCK_EX);

if($IS_TEST)
	$cc = 'tomas@holahellostudio.com';
else
	$cc = 'info@getgloby.com,fucha@getgloby.com';

$to = $_POST['email'];

$subject = "GetGloby Confirmation Email";

$message .= "<head>
<meta charset='UTF-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<title>MailContent</title>
</head>
<body style='background-color: #F0F0F0; padding: 30px 0px 30px 0px;'>
<table backgroung: style='
	font-family: Arial,
	Helvetica,sans-serif;
	font-weight: 400;
	color: #222;
	margin: 25px auto 0px auto;
	max-width: 600px;
	background-color: white;
	border-radius: 0px 0px 15px 15px;
	padding: 0px;'>
	<tr>
		<td style='align-items: center; padding: 0px'>
			<img src='".$domain."/assets/img/mail/mail_header.png'>
			<table style='width: 100%; margin: 30px 0px 30px 0px;'>
				<tr>
					<td>
						<h2 style='color: #555555;  font-weight: 400;margin: 0px 0px 0px 30px; font-size: 22px'>Hi ";
							$message .="<span>".utf8_decode($_POST['name'])."</span>";
							$message .="!</h2>
						<h3 style='color: #555555; margin: 0px 0px 25px 30px; font-weight: 200; font-size: 18px'>Thank you for contacting us.</h3>
					</td>
				</tr>
				<tr>
					<td>
						<table>
							<tr style='margin-top: 0px'>
								<td>
									<p style='color: #555555;margin: 0px 0px 0px 30px; font-size: 16px'>Name:";
									$message .= " <span>".utf8_decode($_POST['name'])."</span>";
									$message .= "</p>
								</td>
							</tr>
							<tr style='margin-top: 0px'>
								<td>
									<p style='color: #555555;margin: 0px 0px 0px 30px; font-size: 16px'>Company: ";
									$message .= "<span>".utf8_decode($_POST['company'])."</span>";
									$message .= "</p>
								</td>
							</tr>
							<tr style='margin-top: 0px'>
								<td>
									<p style='color: #555555;margin: 0px 0px 0px 30px; font-size: 16px'>Email: ";
									$message .= "<span>".utf8_decode($_POST['email'])."</span>";
									$message .= "</p>
								</td>
							</tr>
							<tr style='margin-top: 0px'>
								<td>
									<p style='color: #555555;margin: 0px 0px 0px 30px; font-size: 16px'>Phone: ";
									$message .= "<span>".utf8_decode($_POST['phone'])."</span>";
									$message .= "</p>
								</td>
							</tr>
							<tr style='margin-top: 0px'>
								<td>
									<p style='color: #555555;margin: 0px 0px 0px 30px; font-size: 16px'>Message: ";
									$message .= "<span>".utf8_decode($_POST['message'])."</span>";
									$message .= "</p>
								</td>
							</tr>
							<tr>
								<td>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td style='height:20px'></td>
				</tr>
				<tr>
					<td style='font-size: 14px; color: #555555;text-align: center;'>
						<p style='margin-bottom: 0px;'>If you need help, contact us at:</p>
						<p style='margin-top: 3px; color: #8222d2;'>support@getgloby.com</p>
					</td>
				</tr>
				<tr>
					<td></td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<table style='align-content: center; margin: 30px auto 0px auto;'>
	<tr style='margin: bottom 30px;'>
			<td> <a href='https://www.instagram.com/getgloby/' target='_blank'><img style='width:31px;border:0px;display: inline!important;' src='".$domain."/assets/img/mail/rs-icons_gg_it.png'></a></td>
			<td style='width: 10px;'></td>
			<td > <a href='https://www.linkedin.com/company/getgloby/' target='_blank'><img style='width:31px;border:0px;display: inline!important;' src='".$domain."/assets/img/mail/rs-icons_gg_in.png'></a></td>
			<td style='width: 10px;'></td>
			<td > <a href='https://www.facebook.com/GetGloby-103350031482733' target='_blank'><img style='width:31px;border:0px;display: inline!important;' src='".$domain."/assets/img/mail/rs-icons_gg_fb.png'></a></td>
	</tr>
</table>
<table  style='align-content: center; margin: 10px auto 30px auto; width: 600px'>
	<tr>
			<td style='font-size: 12px; color: #555555;text-align: center'>
			<p style='margin: 0px'>This email was sent to ";
			$message .= utf8_decode($_POST['email']);
			$message .="</p>
			<p style='margin: 0px'>This email was sent by GetGloby.</p>
			<p style='margin: 0px'>Reply-To info@getgloby.com</p>
		</td>
	</tr>
	<tr>
			<td style='height:26; border-bottom: 2px solid #E4E4E4;font-size:26px;line-height:26px;'>&nbsp;</td>
	</tr>
	<tr>
			<td style='font-size: 12px; color: #555555;text-align: center;'>
			<p style='margin: 30px 0px 0px 0px'>2022 GetGloby. All Rights Reserved.</p>
			<p style='margin: 0px'>www.getgloby.com</p>
			</td>
	</tr>
</table>
</body>
</html>";

// $message .= $domain;

$from = "info@getgloby.com";
$headers = "From:" . $from . "\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "Cc: ".$cc;

mail($to,$subject,$message,$headers);


?>
<div class="px-3 py-5">
	<div class="exito text-center">
		<video autoplay muted loop playsinline style="max-width: 200px; height: 100%">
			<source src="assets/video/emoji_GetGloby-bg-white.mp4" type="video/mp4"/>
		</video>
		<h2 class="fs-3 mt-2">Thank you for contacting us!</h2>
	    <p class="lead text-muted mb-4">A confirmation email will arrive in your mailbox.</p>
	</div>
</div>
