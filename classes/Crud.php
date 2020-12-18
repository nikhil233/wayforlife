<?php
include_once 'DbConfig.php';
include_once('smtp/PHPMailerAutoload.php');
include_once('constant.php');

class Crud extends DbConfig
{
	public function __construct()
	{
		parent::__construct();
	}
	
	public function getData($query)
	{		
		$result = $this->connection->query($query);
		
		if ($result == false) {
			return false;
			echo "false";
		} 
		
		$rows = array();
		
		
		while ($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}
		
		return $rows;
	}
		
	public function execute($query) 
	{
		$result = $this->connection->query($query);
		
		if ($result == false) {
			echo 'Error: cannot execute the command';
			return false;
		} else {
			return true;
		}		
	}
	
	public function delete($id, $table) 
	{ 
		$query = "DELETE FROM $table WHERE id = $id";
		
		$result = $this->connection->query($query);
	
		if ($result == false) {
			echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
			return false;
		} else {
			return true;
		}
	}
	
	public function escape_string($value)
	{
		$res = $this->connection->real_escape_string($value);
		return htmlspecialchars($res);
	}

	public function send_mail($to_email, $html ,$subject)
	{
		$mail=new PHPMailer(true);
		$mail->isSMTP();
		$mail->Host="smtp.gmail.com";
		$mail->Port=587;
		$mail->SMTPSecure="tls";
		$mail->SMTPAuth=true;
		$mail->Username="l.gouri1234@gmail.com";
		$mail->Password="gourishankarnikhil";
		$mail->setFrom("l.gouri1234@gmail.com");
		$mail->addAddress($to_email);
		$mail->IsHTML(true);
		$mail->Subject=$subject;
		$mail->Body=$html;
		$mail->SMTPOptions=array('ssl'=>array(
			'verify_peer'=>false,
			'verify_peer_name'=>false,
			'allow_self_signed'=>false
		));
		if($mail->send()){
			// echo "done";
		}else{
			// echo "Error occur";
		}
	}
	public function get_mail_template($name,$msg)
	{

		$html='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html>
		  <head>
			<meta name="viewport" content="width=device-width, initial-scale=1.0" />
			<meta name="x-apple-disable-message-reformatting" />
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<title></title>
			<style type="text/css" rel="stylesheet" media="all">
			/* Base ------------------------------ */
			
			@import url("https://fonts.googleapis.com/css?family=Nunito+Sans:400,700&display=swap");
			body {
			  width: 100% !important;
			  height: 100%;
			  margin: 0;
			  -webkit-text-size-adjust: none;
			}
			
			a {
			  color: #3869D4;
			}
			
			a img {
			  border: none;
			}
			
			td {
			  word-break: break-word;
			}
			
			.preheader {
			  display: none !important;
			  visibility: hidden;
			  mso-hide: all;
			  font-size: 1px;
			  line-height: 1px;
			  max-height: 0;
			  max-width: 0;
			  opacity: 0;
			  overflow: hidden;
			}
			/* Type ------------------------------ */
			
			body,
			td,
			th {
			  font-family: "Nunito Sans", Helvetica, Arial, sans-serif;
			}
			
			h1 {
			  margin-top: 0;
			  color: #333333;
			  font-size: 22px;
			  font-weight: bold;
			  text-align: left;
			}
			
			h2 {
			  margin-top: 0;
			  color: #333333;
			  font-size: 16px;
			  font-weight: bold;
			  text-align: left;
			}
			
			h3 {
			  margin-top: 0;
			  color: #333333;
			  font-size: 14px;
			  font-weight: bold;
			  text-align: left;
			}
			
			td,
			th {
			  font-size: 16px;
			}
			
			p,
			ul,
			ol,
			blockquote {
			  margin: .4em 0 1.1875em;
			  font-size: 16px;
			  line-height: 1.625;
			}
			
			p.sub {
			  font-size: 13px;
			}
			/* Utilities ------------------------------ */
			
			.align-right {
			  text-align: right;
			}
			
			.align-left {
			  text-align: left;
			}
			
			.align-center {
			  text-align: center;
			}
			/* Buttons ------------------------------ */
			
			.button {
			  background-color: #3869D4;
			  border-top: 10px solid #3869D4;
			  border-right: 18px solid #3869D4;
			  border-bottom: 10px solid #3869D4;
			  border-left: 18px solid #3869D4;
			  display: inline-block;
			  color: #FFF;
			  text-decoration: none;
			  border-radius: 3px;
			  box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16);
			  -webkit-text-size-adjust: none;
			  box-sizing: border-box;
			}
			
			.button--green {
			  background-color: #22BC66;
			  border-top: 10px solid #22BC66;
			  border-right: 18px solid #22BC66;
			  border-bottom: 10px solid #22BC66;
			  border-left: 18px solid #22BC66;
			}
			
			.button--red {
			  background-color: #FF6136;
			  border-top: 10px solid #FF6136;
			  border-right: 18px solid #FF6136;
			  border-bottom: 10px solid #FF6136;
			  border-left: 18px solid #FF6136;
			}
			
			@media only screen and (max-width: 500px) {
			  .button {
				width: 100% !important;
				text-align: center !important;
			  }
			}
			/* Attribute list ------------------------------ */
			
			.attributes {
			  margin: 0 0 21px;
			}
			
			.attributes_content {
			  background-color: #F4F4F7;
			  padding: 16px;
			}
			
			.attributes_item {
			  padding: 0;
			}
			/* Related Items ------------------------------ */
			
			.related {
			  width: 100%;
			  margin: 0;
			  padding: 25px 0 0 0;
			  -premailer-width: 100%;
			  -premailer-cellpadding: 0;
			  -premailer-cellspacing: 0;
			}
			
			.related_item {
			  padding: 10px 0;
			  color: #CBCCCF;
			  font-size: 15px;
			  line-height: 18px;
			}
			
			.related_item-title {
			  display: block;
			  margin: .5em 0 0;
			}
			
			.related_item-thumb {
			  display: block;
			  padding-bottom: 10px;
			}
			
			.related_heading {
			  border-top: 1px solid #CBCCCF;
			  text-align: center;
			  padding: 25px 0 10px;
			}
			/* Discount Code ------------------------------ */
			
			.discount {
			  width: 100%;
			  margin: 0;
			  padding: 24px;
			  -premailer-width: 100%;
			  -premailer-cellpadding: 0;
			  -premailer-cellspacing: 0;
			  background-color: #F4F4F7;
			  border: 2px dashed #CBCCCF;
			}
			
			.discount_heading {
			  text-align: center;
			}
			
			.discount_body {
			  text-align: center;
			  font-size: 15px;
			}
			/* Social Icons ------------------------------ */
			
			.social {
			  width: auto;
			}
			
			.social td {
			  padding: 0;
			  width: auto;
			}
			
			.social_icon {
			  height: 20px;
			  margin: 0 8px 10px 8px;
			  padding: 0;
			}
			/* Data table ------------------------------ */
			
			.purchase {
			  width: 100%;
			  margin: 0;
			  padding: 35px 0;
			  -premailer-width: 100%;
			  -premailer-cellpadding: 0;
			  -premailer-cellspacing: 0;
			}
			
			.purchase_content {
			  width: 100%;
			  margin: 0;
			  padding: 25px 0 0 0;
			  -premailer-width: 100%;
			  -premailer-cellpadding: 0;
			  -premailer-cellspacing: 0;
			}
			
			.purchase_item {
			  padding: 10px 0;
			  color: #51545E;
			  font-size: 15px;
			  line-height: 18px;
			}
			
			.purchase_heading {
			  padding-bottom: 8px;
			  border-bottom: 1px solid #EAEAEC;
			}
			
			.purchase_heading p {
			  margin: 0;
			  color: #85878E;
			  font-size: 12px;
			}
			
			.purchase_footer {
			  padding-top: 15px;
			  border-top: 1px solid #EAEAEC;
			}
			
			.purchase_total {
			  margin: 0;
			  text-align: right;
			  font-weight: bold;
			  color: #333333;
			}
			
			.purchase_total--label {
			  padding: 0 15px 0 0;
			}
			
			body {
			  background-color: #F4F4F7;
			  color: #51545E;
			}
			
			p {
			  color: #51545E;
			}
			
			p.sub {
			  color: #6B6E76;
			}
			
			.email-wrapper {
			  width: 100%;
			  margin: 0;
			  padding: 0;
			  -premailer-width: 100%;
			  -premailer-cellpadding: 0;
			  -premailer-cellspacing: 0;
			  background-color: #F4F4F7;
			}
			
			.email-content {
			  width: 100%;
			  margin: 0;
			  padding: 0;
			  -premailer-width: 100%;
			  -premailer-cellpadding: 0;
			  -premailer-cellspacing: 0;
			}
			/* Masthead ----------------------- */
			
			.email-masthead {
			  padding: 25px 0;
			  text-align: center;
			}
			
			.email-masthead_logo {
			  width: 94px;
			}
			
			.email-masthead_name {
			  font-size: 16px;
			  font-weight: bold;
			  color: #A8AAAF;
			  text-decoration: none;
			  text-shadow: 0 1px 0 white;
			}
			/* Body ------------------------------ */
			
			.email-body {
			  width: 100%;
			  margin: 0;
			  padding: 0;
			  -premailer-width: 100%;
			  -premailer-cellpadding: 0;
			  -premailer-cellspacing: 0;
			  background-color: #FFFFFF;
			}
			
			.email-body_inner {
			  width: 570px;
			  margin: 0 auto;
			  padding: 0;
			  -premailer-width: 570px;
			  -premailer-cellpadding: 0;
			  -premailer-cellspacing: 0;
			  background-color: #FFFFFF;
			}
			
			.email-footer {
			  width: 570px;
			  margin: 0 auto;
			  padding: 0;
			  -premailer-width: 570px;
			  -premailer-cellpadding: 0;
			  -premailer-cellspacing: 0;
			  text-align: center;
			}
			
			.email-footer p {
			  color: #6B6E76;
			}
			
			.body-action {
			  width: 100%;
			  margin: 30px auto;
			  padding: 0;
			  -premailer-width: 100%;
			  -premailer-cellpadding: 0;
			  -premailer-cellspacing: 0;
			  text-align: center;
			}
			
			.body-sub {
			  margin-top: 25px;
			  padding-top: 25px;
			  border-top: 1px solid #EAEAEC;
			}
			
			.content-cell {
			  padding: 35px;
			}
			.logo-img{
				max-width:150px;
			}
			/*Media Queries ------------------------------ */
			
			@media only screen and (max-width: 600px) {
			  .email-body_inner,
			  .email-footer {
				width: 100% !important;
			  }
			}
			
			@media (prefers-color-scheme: dark) {
			  body,
			  .email-body,
			  .email-body_inner,
			  .email-content,
			  .email-wrapper,
			  .email-masthead,
			  .email-footer {
				background-color: #333333 !important;
				color: #FFF !important;
			  }
			  p,
			  ul,
			  ol,
			  blockquote,
			  h1,
			  h2,
			  h3 {
				color: #FFF !important;
			  }
			  .attributes_content,
			  .discount {
				background-color: #222 !important;
			  }
			  .email-masthead_name {
				text-shadow: none !important;
			  }
			}
			</style>
			<!--[if mso]>
			<style type="text/css">
			  .f-fallback  {
				font-family: Arial, sans-serif;
			  }
			</style>
		  <![endif]-->
		  </head>
		  <body>
			<span class="preheader">This is an '.FRONT_SITE_NAME.'</span>
			<table class="email-wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
			  <tr>
				<td align="center">
				  <table class="email-content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
					<tr>
					  <td class="email-masthead">
						
						<a href="https://ibb.co/kSdcGWh" class="f-fallback email-masthead_name"><img src="https://i.ibb.co/tJdCHWb/logo-new.png" alt="logo-new" border="0" class="logo-img"></a>
					  
					  </td>
					</tr>
					<!-- Email Body -->
					<tr>
					  <td class="email-body" width="100%" cellpadding="0" cellspacing="0">
						<table class="email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
						  <!-- Body content -->
						  <tr>
							<td class="content-cell">
							  <div class="f-fallback">
								<h1>Hi '.$name.',</h1>
								
								<div style="text-align:cenetr;">
										  '.$msg.'
								</div>
								
								
								<p>If you have any questions about this invoice, simply reply to this email or reach out to our <a href="'.FRONT_SITE_PATH.'">support team</a> for help.</p>
								<p>Cheers,
								  <br>'.FRONT_SITE_NAME.'</p>
								<!-- Sub copy -->
								
							  </div>
							</td>
						  </tr>
						</table>
					  </td>
					</tr>
					
				  </table>
				</td>
			  </tr>
			</table>
		  </body>
		</html>';
		return $html;
	}

	function sendsms($mobileno,$msg){
		$mobile='91'.$mobileno;
		$message=$msg;
		$apiKey = urlencode('4zwAOJBH8hE-8DKZ590doeMW8SpHZsnx3q55Y8w9QH');
		$numbers = array($mobile);
		$sender = urlencode('TXTLCL');
		$message = rawurlencode($message);
		$numbers = implode(',', $numbers);
		$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
		$ch = curl_init('https://api.textlocal.in/send/');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);
		// echo $response;
		
	}

	public function get_mail_template2($name,$msg){
		$html='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office" style="width:100%;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0">
		 <head> 
		  <meta charset="UTF-8"> 
		  <meta content="width=device-width, initial-scale=1" name="viewport"> 
		  <meta name="x-apple-disable-message-reformatting"> 
		  <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		  <meta content="telephone=no" name="format-detection"> 
		  <title></title> 
		  <!--[if (mso 16)]>
			<style type="text/css">
			a {text-decoration: none;}
			</style>
			<![endif]--> 
		  <!--[if gte mso 9]><style>sup { font-size: 100% !important; }</style><![endif]--> 
		  <!--[if gte mso 9]>
		<xml>
			<o:OfficeDocumentSettings>
			<o:AllowPNG></o:AllowPNG>
			<o:PixelsPerInch>96</o:PixelsPerInch>
			</o:OfficeDocumentSettings>
		</xml>
		<![endif]--> 
		  <!--[if !mso]><!-- --> 
		  <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i" rel="stylesheet"> 
		  <!--<![endif]--> 
		  <style type="text/css">
		#outlook a {
			padding:0;
		}
		.ExternalClass {
			width:100%;
		}
		.ExternalClass,
		.ExternalClass p,
		.ExternalClass span,
		.ExternalClass font,
		.ExternalClass td,
		.ExternalClass div {
			line-height:100%;
		}
		.es-button {
			mso-style-priority:100!important;
			text-decoration:none!important;
			transition:all 100ms ease-in;
		}
		a[x-apple-data-detectors] {
			color:inherit!important;
			text-decoration:none!important;
			font-size:inherit!important;
			font-family:inherit!important;
			font-weight:inherit!important;
			line-height:inherit!important;
		}
		.es-button:hover {
			background:#555555!important;
			border-color:#555555!important;
		}
		.es-desk-hidden {
			display:none;
			float:left;
			overflow:hidden;
			width:0;
			max-height:0;
			line-height:0;
			mso-hide:all;
		}
		@media only screen and (max-width:600px) {p, ul li, ol li, a { font-size:17px!important; line-height:150%!important } h1 { font-size:30px!important; text-align:center; line-height:120%!important } h2 { font-size:26px!important; text-align:left; line-height:120%!important } h3 { font-size:20px!important; text-align:left; line-height:120%!important } h1 a { font-size:30px!important; text-align:center } h2 a { font-size:20px!important; text-align:left } h3 a { font-size:20px!important; text-align:left } .es-menu td a { font-size:16px!important } .es-header-body p, .es-header-body ul li, .es-header-body ol li, .es-header-body a { font-size:16px!important } .es-footer-body p, .es-footer-body ul li, .es-footer-body ol li, .es-footer-body a { font-size:17px!important } .es-infoblock p, .es-infoblock ul li, .es-infoblock ol li, .es-infoblock a { font-size:12px!important } *[class="gmail-fix"] { display:none!important } .es-m-txt-c, .es-m-txt-c h1, .es-m-txt-c h2, .es-m-txt-c h3 { text-align:center!important } .es-m-txt-r, .es-m-txt-r h1, .es-m-txt-r h2, .es-m-txt-r h3 { text-align:right!important } .es-m-txt-l, .es-m-txt-l h1, .es-m-txt-l h2, .es-m-txt-l h3 { text-align:left!important } .es-m-txt-r img, .es-m-txt-c img, .es-m-txt-l img { display:inline!important } .es-button-border { display:inline-block!important } a.es-button { font-size:14px!important; display:inline-block!important; border-width:15px 25px 15px 25px!important } .es-btn-fw { border-width:10px 0px!important; text-align:center!important } .es-adaptive table, .es-btn-fw, .es-btn-fw-brdr, .es-left, .es-right { width:100%!important } .es-content table, .es-header table, .es-footer table, .es-content, .es-footer, .es-header { width:100%!important; max-width:600px!important } .es-adapt-td { display:block!important; width:100%!important } .adapt-img { width:100%!important; height:auto!important } .es-m-p0 { padding:0px!important } .es-m-p0r { padding-right:0px!important } .es-m-p0l { padding-left:0px!important } .es-m-p0t { padding-top:0px!important } .es-m-p0b { padding-bottom:0!important } .es-m-p20b { padding-bottom:20px!important } .es-mobile-hidden, .es-hidden { display:none!important } tr.es-desk-hidden, td.es-desk-hidden, table.es-desk-hidden { width:auto!important; overflow:visible!important; float:none!important; max-height:inherit!important; line-height:inherit!important } tr.es-desk-hidden { display:table-row!important } table.es-desk-hidden { display:table!important } td.es-desk-menu-hidden { display:table-cell!important } .es-menu td { width:1%!important } table.es-table-not-adapt, .esd-block-html table { width:auto!important } table.es-social { display:inline-block!important } table.es-social td { display:inline-block!important } }
		</style> 
		 </head> 
		 <body style="width:100%;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;padding:0;Margin:0;background-color:#fff;"> 
		  <div class="es-wrapper-color" style="background-color:#F1F1F1"> 
		   <!--[if gte mso 9]>
					<v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
						<v:fill type="tile" color="#f1f1f1"></v:fill>
					</v:background>
				<![endif]--> 
		   <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;padding:0;Margin:0;width:100%;height:100%;background-repeat:repeat;background-position:center top"> 
			 <tr style="border-collapse:collapse"> 
			  <td valign="top" style="padding:0;Margin:0"> 
			   <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
				 <tr style="border-collapse:collapse"> 
				  <td align="center" style="padding:0;Margin:0"> 
				   <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px" cellspacing="0" cellpadding="0" align="center"> 
					 <tr style="border-collapse:collapse"> 
					  <td align="left" style="Margin:0;padding-left:10px;padding-right:10px;padding-top:15px;padding-bottom:15px"> 
					   <!--[if mso]><table style="width:580px" cellpadding="0" cellspacing="0"><tr><td style="width:282px" valign="top"><![endif]--> 
					   <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"> 
						 <tr style="border-collapse:collapse"> 
						  <td align="left" style="padding:0;Margin:0;width:282px"> 
						   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
							 <tr style="border-collapse:collapse"> 
							  <td class="es-infoblock es-m-txt-c" align="left" style="padding:0;Margin:0;line-height:14px;font-size:12px;color:#CCCCCC"> Way For Life<br></td> 
							 </tr> 
						   </table></td> 
						 </tr> 
					   </table> 
					   <!--[if mso]></td><td style="width:20px"></td><td style="width:278px" valign="top"><![endif]--> 
					   <table class="es-right" cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:right"> 
						 <tr style="border-collapse:collapse"> 
						  <td align="left" style="padding:0;Margin:0;width:278px"> 
						   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
							 <tr style="border-collapse:collapse"> 
							 
							 </tr> 
						   </table></td> 
						 </tr> 
					   </table> 
					   <!--[if mso]></td></tr></table><![endif]--></td> 
					 </tr> 
				   </table></td> 
				 </tr> 
			   </table> 
			   <table class="es-header" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
				 <tr style="border-collapse:collapse"> 
				  <td align="center" style="padding:0;Margin:0"> 
				   <table class="es-header-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center"> 
					 <tr style="border-collapse:collapse"> 
					  <td style="Margin:0;padding-top:30px;padding-bottom:30px;padding-left:40px;padding-right:40px;background-color:#666666" bgcolor="#666666" align="left"> 
					   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
						 <tr style="border-collapse:collapse"> 
						  <td valign="top" align="center" style="padding:0;Margin:0;width:520px"> 
						   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
							 <tr style="border-collapse:collapse"> 
							  <td align="center" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:21px;font-family:helvetica, line-height:32px;color:#FFFFFF"><strong>Welcome to Way For Life Family💓</strong></p></td> 
							 </tr> 
						   </table></td> 
						 </tr> 
					   </table></td> 
					 </tr> 
				   </table></td> 
				 </tr> 
			   </table> 
			   <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
				 <tr style="border-collapse:collapse"> 
				  <td align="center" style="padding:0;Margin:0"> 
				   <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#333333;width:600px" cellspacing="0" cellpadding="0" bgcolor="#333333" align="center"> 
					 <tr style="border-collapse:collapse"> 
					  <td style="padding:40px;Margin:0;background-image:url(https://imrftb.stripocdn.email/content/guids/CABINET_52dfefeea98bb78ed0aa3468fb239622/images/38201601210625129.jpeg);background-repeat:no-repeat;background-position:left top" background="https://imrftb.stripocdn.email/content/guids/CABINET_52dfefeea98bb78ed0aa3468fb239622/images/38201601210625129.jpeg" align="left"> 
					   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
						 <tr style="border-collapse:collapse"> 
						  <td valign="top" align="center" style="padding:0;Margin:0;width:520px"> 
						   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
							 <tr style="border-collapse:collapse"> 
							  <td align="left" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;color:#555555"><strong><span><span></span></span></strong><br></p></td> 
							 </tr> 
							 <tr style="border-collapse:collapse"> 
							  <td align="left" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;color:#555555"><br></p></td> 
							 </tr> 
							 <tr style="border-collapse:collapse"> 
							  <td align="left" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;color:#555555"><br></p></td> 
							 </tr> 
							 <tr style="border-collapse:collapse"> 
							  <td align="left" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;color:#555555"><br></p></td> 
							 </tr> 
							 <tr style="border-collapse:collapse"> 
							  <td align="left" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;color:#555555"><br></p></td> 
							 </tr> 
							 <tr style="border-collapse:collapse"> 
							  <td align="left" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;color:#555555"><br></p></td> 
							 </tr> 
							 <tr style="border-collapse:collapse"> 
							  <td align="left" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;color:#555555"><br></p></td> 
							 </tr> 
							 <tr style="border-collapse:collapse"> 
							  <td align="left" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;color:#555555"><br></p></td> 
							 </tr> 
							 <tr style="border-collapse:collapse"> 
							  <td align="left" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;color:#555555"><br></p></td> 
							 </tr> 
							 <tr style="border-collapse:collapse"> 
							  <td align="left" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;color:#555555"><br></p></td> 
							 </tr> 
							 <tr style="border-collapse:collapse"> 
							  <td align="center" style="padding:0;Margin:0"><br></td> 
							 </tr> 
						   </table></td> 
						 </tr> 
					   </table></td> 
					 </tr> 
				   </table></td> 
				 </tr> 
			   </table> 
			   <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
				 <tr style="border-collapse:collapse"> 
				  <td align="center" style="padding:0;Margin:0"> 
				   <table class="es-content-body" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px"> 
					 <tr style="border-collapse:collapse"> 
					  <td align="left" style="padding:0;Margin:0;padding-top:40px;padding-left:40px;padding-right:40px"> 
					   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
						 <tr style="border-collapse:collapse"> 
						  <td valign="top" align="center" style="padding:0;Margin:0;width:520px"> 
						   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
							 <tr style="border-collapse:collapse"> 
							  <td class="es-m-txt-c" align="left" style="padding:0;Margin:0;padding-top:5px;padding-bottom:15px"><h2 style="Margin:0;line-height:24px;mso-line-height-rule:exactly;font-family:lato, "helvetica neue", helvetica, arial, sans-serif;font-size:20px;font-style:normal;font-weight:bold;color:#333333">Hello '.$name.'<br></h2></td> 
							 </tr> 
							 <tr style="border-collapse:collapse"> 
							  <td align="left" style="padding:0;Margin:0;padding-bottom:10px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;color:#555555"><strong>Welcome to Way For Life Family.<br><br>You are now part of the Volunteering family which works on various social causes and Thank you for showing interest. <br>Please click the below button to join our WhatsApp community. <br></strong></p></td> 
							 </tr> 
							 <tr style="border-collapse:collapse"> 
							  <td align="center" style="padding:0;Margin:0"><span class="es-button-border" style="border-style:solid;border-color:#26A4D3;background:#26A4D3;border-width:0px;display:inline-block;border-radius:50px;width:auto"><a href="https://chat.whatsapp.com/JOoRon6KBHOLheB6Hi0D9D" class="es-button" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;transition:all 100ms ease-in;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, "helvetica neue", helvetica, sans-serif;font-size:14px;color:#FFFFFF;border-style:solid;border-color:#26A4D3;border-width:15px 30px 15px 30px;display:inline-block;background:#26A4D3;border-radius:50px;font-weight:bold;font-style:normal;line-height:17px;width:auto;text-align:center">Click here</a></span></td> 
							 </tr> 
							 <tr style="border-collapse:collapse"> 
							  <td align="left" style="padding:0;Margin:0;padding-top:10px;padding-bottom:10px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;color:#555555">We are looking forward to see you in our upcoming activities which will be notified via email and whatsapp.<br><br>Keep Volunteering because everything <strong>#starts_with_you</strong></p></td> 
							 </tr> 
							 <tr style="border-collapse:collapse"> 
							  <td align="left" style="padding:0;Margin:0;padding-top:10px;padding-bottom:10px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:15px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:23px;color:#555555">Yours sincerely,</p></td> 
							 </tr> 
						   </table></td> 
						 </tr> 
					   </table></td> 
					 </tr> 
					 <tr style="border-collapse:collapse"> 
					  <td align="left" style="Margin:0;padding-top:10px;padding-bottom:40px;padding-left:40px;padding-right:40px"> 
					   <!--[if mso]><table style="width:520px" cellpadding="0"
									cellspacing="0"><tr><td style="width:40px" valign="top"><![endif]--> 
					   <table class="es-left" cellspacing="0" cellpadding="0" align="left" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;float:left"> 
						 <tr style="border-collapse:collapse"> 
						  <td class="es-m-p0r es-m-p20b" valign="top" align="center" style="padding:0;Margin:0;width:40px"> 
						   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
							 <tr style="border-collapse:collapse"> 
							  <td style="padding:0;Margin:0;font-size:0px" align="center"><a target="_blank" href="https://www.wayforlife.org" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;font-size:15px;text-decoration:underline;color:#26A4D3"><img src="https://imrftb.stripocdn.email/content/guids/CABINET_52dfefeea98bb78ed0aa3468fb239622/images/80841601210245871.png" alt style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" width="40"></a></td> 
							 </tr> 
						   </table></td> 
						 </tr> 
					   </table> 
					   <!--[if mso]></td><td style="width:20px"></td><td style="width:460px" valign="top"><![endif]--> 
					   <table cellspacing="0" cellpadding="0" align="right" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
						 <tr style="border-collapse:collapse"> 
						  <td align="left" style="padding:0;Margin:0;width:460px"> 
						   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
							 <tr style="border-collapse:collapse"> 
							  <td align="left" style="padding:0;Margin:0;padding-top:10px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:14px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:21px;color:#222222"><strong>Team Way For Life</strong></p></td> 
							 </tr> 
							 <tr style="border-collapse:collapse"> 
							  <td align="left" style="padding:0;Margin:0"><br></td> 
							 </tr> 
						   </table></td> 
						 </tr> 
					   </table> 
					   <!--[if mso]></td></tr></table><![endif]--></td> 
					 </tr> 
				   </table></td> 
				 </tr> 
			   </table> 
			   <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
				 <tr style="border-collapse:collapse"> 
				  <td align="center" style="padding:0;Margin:0"> 
				   <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#26A4D3;width:600px" cellspacing="0" cellpadding="0" bgcolor="#26a4d3" align="center"> 
					 <tr style="border-collapse:collapse"> 
					  <td style="Margin:0;padding-bottom:20px;padding-top:40px;padding-left:40px;padding-right:40px;background-color:#26A4D3" bgcolor="#26a4d3" align="left"> 
					   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
						 <tr style="border-collapse:collapse"> 
						  <td valign="top" align="center" style="padding:0;Margin:0;width:520px"> 
						   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
							 <tr style="border-collapse:collapse"> 
							  <td class="es-m-txt-c" align="center" style="padding:0;Margin:0"><h2 style="Margin:0;line-height:24px;mso-line-height-rule:exactly;font-family:lato, "helvetica neue", helvetica, arial, sans-serif;font-size:20px;font-style:normal;font-weight:bold;color:#FFFFFF">Reach us<br></h2></td> 
							 </tr> 
							 <tr style="border-collapse:collapse"> 
							  <td align="center" style="padding:0;Margin:0;padding-top:5px;padding-bottom:10px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:17px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:26px;color:#AAD4EA">You can reach us anytime by clicking the below button<br></p></td> 
							 </tr> 
							 <tr style="border-collapse:collapse"> 
							  <td align="center" style="padding:10px;Margin:0"><span class="es-button-border" style="border-style:solid;border-color:#26A4D3;background:#FFFFFF none repeat scroll 0% 0%;border-width:0px;display:inline-block;border-radius:50px;width:auto"><a href="https://wa.me/919902560105" class="es-button" target="_blank" style="mso-style-priority:100 !important;text-decoration:none;transition:all 100ms ease-in;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:arial, "helvetica neue", helvetica, sans-serif;font-size:14px;color:#26A4D3;border-style:solid;border-color:#FFFFFF;border-width:15px 25px;display:inline-block;background:#FFFFFF none repeat scroll 0% 0%;border-radius:50px;font-weight:bold;font-style:normal;line-height:17px;width:auto;text-align:center">Contact us</a></span></td> 
							 </tr> 
						   </table></td> 
						 </tr> 
					   </table></td> 
					 </tr> 
				   </table></td> 
				 </tr> 
			   </table> 
			   <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
				 <tr style="border-collapse:collapse"> 
				  <td align="center" style="padding:0;Margin:0"> 
				   <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#292828;width:600px" cellspacing="0" cellpadding="0" bgcolor="#292828" align="center"> 
					 <tr style="border-collapse:collapse"> 
					  <td align="left" style="Margin:0;padding-top:30px;padding-bottom:30px;padding-left:40px;padding-right:40px"> 
					   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
						 <tr style="border-collapse:collapse"> 
						  <td valign="top" align="center" style="padding:0;Margin:0;width:520px"> 
						   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
							 <tr style="border-collapse:collapse"> 
							  <td style="padding:0;Margin:0;font-size:0" align="center"> 
							   <table class="es-table-not-adapt es-social" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
								 <tr style="border-collapse:collapse"> 
								  <td valign="top" align="center" style="padding:0;Margin:0;padding-right:10px"><a target="_blank" href="https://facebook.com/wayforlifeofficial" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;font-size:15px;text-decoration:underline;color:#26A4D3"><img title="Facebook" src="https://imrftb.stripocdn.email/content/assets/img/social-icons/circle-white/facebook-circle-white.png" alt="Fb" width="24" height="24" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a></td> 
								  <td valign="top" align="center" style="padding:0;Margin:0;padding-right:10px"><a target="_blank" href="https://twitter.com/wayforlifeindia" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;font-size:15px;text-decoration:underline;color:#26A4D3"><img title="Twitter" src="https://imrftb.stripocdn.email/content/assets/img/social-icons/circle-white/twitter-circle-white.png" alt="Tw" width="24" height="24" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a></td> 
								  <td valign="top" align="center" style="padding:0;Margin:0;padding-right:10px"><a target="_blank" href="https://instagram.com/wayforlifeofficial/" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;font-size:15px;text-decoration:underline;color:#26A4D3"><img title="Instagram" src="https://imrftb.stripocdn.email/content/assets/img/social-icons/circle-white/instagram-circle-white.png" alt="Inst" width="24" height="24" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a></td> 
								  <td valign="top" align="center" style="padding:0;Margin:0"><a target="_blank" href="https://www.linkedin.com/company/13303169/admin/?share=true" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;font-size:15px;text-decoration:underline;color:#26A4D3"><img title="Linkedin" src="https://imrftb.stripocdn.email/content/assets/img/social-icons/circle-white/linkedin-circle-white.png" alt="In" width="24" height="24" style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic"></a></td> 
								 </tr> 
							   </table></td> 
							 </tr> 
						   </table></td> 
						 </tr> 
					   </table></td> 
					 </tr> 
				   </table></td> 
				 </tr> 
			   </table> 
			   <table class="es-footer" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%;background-color:transparent;background-repeat:repeat;background-position:center top"> 
				 <tr style="border-collapse:collapse"> 
				  <td align="center" style="padding:0;Margin:0"> 
				   <table class="es-footer-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:#FFFFFF;width:600px" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center"> 
					 <tr style="border-collapse:collapse"> 
					  <td align="left" style="Margin:0;padding-top:40px;padding-bottom:40px;padding-left:40px;padding-right:40px"> 
					   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
						 <tr style="border-collapse:collapse"> 
						  <td valign="top" align="center" style="padding:0;Margin:0;width:520px"> 
						   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
							 <tr style="border-collapse:collapse"> 
							  <td align="center" style="padding:0;Margin:0;padding-bottom:10px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:12px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:18px;color:#666666">www.wayforlife.org<br></p></td> 
							 </tr> 
							 <tr style="border-collapse:collapse"> 
							  <td align="center" style="padding:0;Margin:0;padding-bottom:10px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:12px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:18px;color:#666666">This email was sent to you from Way For Life</p></td> 
							 </tr> 
							 <tr style="border-collapse:collapse"> 
							  <td align="center" style="padding:0;Margin:0;padding-bottom:10px"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:12px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:18px;color:#666666">#28, 1st cross, 4th main, BTM 4th stage, Bangalore-560076<br></p></td> 
							 </tr> 
							 <tr style="border-collapse:collapse"> 
							  <td align="center" style="padding:0;Margin:0"><p style="Margin:0;-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-size:12px;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;line-height:18px;color:#666666">Copyright © 2020 <strong>Way For Life</strong>, All Rights Reserved.<br></p></td> 
							 </tr> 
						   </table></td> 
						 </tr> 
					   </table></td> 
					 </tr> 
				   </table></td> 
				 </tr> 
			   </table> 
			   <table class="es-content" cellspacing="0" cellpadding="0" align="center" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;table-layout:fixed !important;width:100%"> 
				 <tr style="border-collapse:collapse"> 
				  <td align="center" style="padding:0;Margin:0"> 
				   <table class="es-content-body" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px;background-color:transparent;width:600px" cellspacing="0" cellpadding="0" align="center"> 
					 <tr style="border-collapse:collapse"> 
					  <td align="left" style="Margin:0;padding-left:20px;padding-right:20px;padding-top:30px;padding-bottom:30px"> 
					   <table width="100%" cellspacing="0" cellpadding="0" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
						 <tr style="border-collapse:collapse"> 
						  <td valign="top" align="center" style="padding:0;Margin:0;width:560px"> 
						   <table width="100%" cellspacing="0" cellpadding="0" role="presentation" style="mso-table-lspace:0pt;mso-table-rspace:0pt;border-collapse:collapse;border-spacing:0px"> 
							 <tr style="border-collapse:collapse"> 
							  <td class="es-infoblock made_with" style="padding:0;Margin:0;line-height:0px;font-size:0px;color:#CCCCCC" align="center"><a target="_blank" href="https://www.wayforlife.org" style="-webkit-text-size-adjust:none;-ms-text-size-adjust:none;mso-line-height-rule:exactly;font-family:helvetica, "helvetica neue", arial, verdana, sans-serif;font-size:12px;text-decoration:underline;color:#CCCCCC"><img src="https://imrftb.stripocdn.email/content/guids/CABINET_52dfefeea98bb78ed0aa3468fb239622/images/80841601210245871.png" alt style="display:block;border:0;outline:none;text-decoration:none;-ms-interpolation-mode:bicubic" width="135"></a></td> 
							 </tr> 
						   </table></td> 
						 </tr> 
					   </table></td> 
					 </tr> 
				   </table></td> 
				 </tr> 
			   </table></td> 
			 </tr> 
		   </table> 
		  </div>  
		 </body>
		</html>';
		return $html;
	}
}
?>
