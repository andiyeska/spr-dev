<!DOCTYPE html>
<html>
<head>
	<title>Email title</title>
		<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<style>
	@media only screen and (max-width : 640px) {
	
	table[class="container"] {
        width: 98% !important;
    } 
    td[class="bodyCopy"] p {
		padding: 0 15px !important; 
		text-align: left !important;
	}
    td[class="spacer"] {
	    width: 15px !important;
    }
    td[class="belowFeature"] {
	    width: 95% !important;
	    display: inline-block;
	    padding-left: 15px;
	    margin-bottom: 20px;
    }
    td[class="belowFeature"] img {
	    float: left;
	    margin-right: 15px;
    }
    
    table[class="belowConsoles"] {
		width: 100% !important;
		display: inline-block;
	}
	table[class="belowConsoles"] img {
		margin-right: 15px;
		margin-bottom: 15px;
		float: left;
	}
   
	
	}
	
	@media only screen and (min-width: 481px) and (max-width: 560px) {
	
	td[class="Logo"] {
		width: 560px !important;
		text-align: center;
	}
	
	td[class="viewWebsite"] {
		width: 560px !important;
		height: inherit !important;
		text-align: center;
	}    
	}
	
	@media only screen and (min-width: 250px) and (max-width: 480px) {
	
	td[class="Logo"] {
		width: 480px !important;
		text-align: center;
	}
	
	td[class="viewWebsite"] {
		width: 480px !important;
		height: inherit !important;
		text-align: center;
	}
	
	td[class="spacer"] {
	    display: none !important;
    }
	
	td[class="bodyCopy"] p {
		padding: 0 15px !important; 
		text-align: left !important;
	}
	
	td[class="bodyCopy"] h1 {
		padding: 0 10px !important;
	}
	
	h1, h2 {
		line-height: 120% !important;
	}
	
	td[class="force-width"] {width: 98% !important; padding: 0 10px;}
	
	[class="consoleImage"] {
		display: inline-block;
	}
	[class="consoleImage"] img {
		text-align: center !important;
		display: inline-block;
	}
	table[class="belowConsoles"] {
		text-align: center;
		float: none;
		margin-bottom: 15px;
		width: 100% !important;
	}
	table[class="belowConsoles"] img {
		margin-bottom: 0;
	}
	
	}
.header-img{
  clip: auto rect(100px,100px,100px,100px);
}
.contact-social {
  text-align: right;
  margin: 10px 0px;
}

.contact-social a {
  display: inline-block;
  width: 30px;
  height: 30px;
  text-align: center;
  border-radius: 50%;
  background: #dd0a37;
  color: #fff;
  line-height: 30px;
  margin-right: 15px;
  -webkit-transition: 0.3s all;
  transition: 0.3s all;
}

.contact-social a:hover {
  opacity: 0.8;
}
</style>
<body bgcolor="white" style="font-family: Arial; background-color:white;">
	<table align="center" cellpadding="0" cellspacing="0" class="container" width="630" style="border-radius: 5pt;">
		<tr>
			<td>
				<table align="left">
					<tr>
						<td class="Logo" width="200"><img src="<?php echo $message->embed(public_path().'/ix/img/'.'spare-xii-neo-bromello.png'); ?>" width="80"></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<table align="center" bgcolor="#FCFCFC" cellpadding="0" cellspacing="0" class="container" style="line-height: 135%;" width="630">
		<tr>
			<td bgcolor="#FCFCFC" colspan="3" height="10" width="100%">&nbsp;</td>
		</tr>
		<tr>
			<td align="center" bgcolor="#FCFCFC" colspan="3"><img class="header-img" src="<?php echo $message->embed(public_path().'/ix/img/'.'email-header-register.jpg'); ?>" width="100%"></td>
		</tr>
		<tr>
			<td bgcolor="#FCFCFC" colspan="3">
				<table>
					<tr>
						<td class="spacer" width="30">&nbsp;</td>
						<td align="left" class="bodyCopy">
							<h1 class="headline" style="font-family: Arial, Helvetica, sans-serif; font-size: 32px; color: #404040; margin-top: 0; margin-bottom: 20px; padding: 0; line-height: 135%"></h1><br>
							<p style="font-family: Arial, Helvetica, sans-serif; color: #555555; font-size: 14px; padding: 0 40px;text-align:left;">
								Hi {{$user->details->first_name}} {{$user->details->last_name}}!<br><br>
							<span th:text="'Thank you for registering the ' + ${event} + '!'"></span><br>
							Your order has been placed and this is the details:<br><br>
							@if($isFunRun)
								Shirt Size: {{$registration->funRun->shirt_size}}<br>
								Medical Record:
								@if(is_null($registration->funRun->medical_record))
									-
								@else
								<br>
								{{$registration->funRun->medical_record}}
								@endif
								<br><strong>(Free)</strong>
							@endif
							Festival Ticket: {{$registration->festival->quantity}}<br><br>
							Kindly note that you can no longer make any changes to your order.<br><br>
							Please settle your payment with details below:<br>
							Total Payment: Rp{{number_format($total, '0', ',', '.')}}</span><br>
							Unique Code: {{$registration->unique_fee}}<br>
							Transfer to: <strong>Bank BNI 0714205634 (Nadya Islamiyati)</strong><br><br>
							Please transfer all amount given above to accelerate payment confirmation then you should confirm your payment by clicking this link
							<a href="https://www.google.com/{{$registration->registration_code}}">here</a><br><br>
							Don’t forget to do the payment confirmation after you made your payment or we won’t be
							able to process your order and our system will automatically cancel it. So don&#39;t ever let that
							happen!<br><br>
							If you have further question, please don’t be hesitate to email us at [email]
							Thank you.</p><br>	
							<div class="contact-social">
								<a href="https://www.twitter.com/sparefkmui" target="_blank"><i class="fa fa-twitter"></i></a>
								<a href="https://www.instagram.com/sparefkmui" target="_blank"><i class="fa fa-instagram"></i></a>
							</div>					
						</td>
						<td class="spacer" width="30">&nbsp;</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>