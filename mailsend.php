<?php 
  
//print_r($_POST);
 
$to = "sachin.goyal.sjr@gmail.com";
$subject = "Stuwa contact Details";

$message = '
<html>
<head>
<title>Stuwa Contact Details</title>
</head>
<body style="margin:0px; padding:0px; font-family: "Open Sans", sans-serif;">
<table cellpadding="0" cellspacing="0" align="center" style="width:450px;">
    	<tr>
        	<td>
            	<div style="width:100%; margin:0px; padding:10px 0px; background:#4D9900;">
                	<h1 style="margin:0px; padding:0px; font-weight:normal; color:#fff; text-align:center; text-transform:uppercase">Sucess</h1>
					 
                </div>
            </td>
        </tr>
        <tr>
        	<td>
            	<table style="width:100%; margin:0px; padding:20px 0px; background:#e9e9e9;">
            		<tr>
                		<td>
                            <p style="margin:0px 0px 10px; padding:0px 25px; float:left;">
                            <label style="width:80px; font-size:15px; float:left;color: #323232;">Naam:</label>
                            <span style="font-size:15px; float:left;color: #323232;">
							'.$_POST['naam'].'</span>
                            </p>
                    	</td>
               		<tr>
                    <tr>
                		<td>
                            <p style="margin:0px 0px 10px; padding:0px 25px; float:left">
                            <label style="width:80px; font-size:15px; float:left;color: #323232;">Email:</label>
                            <span style="font-size:15px; float:left;color: #323232;">
							'.$_POST['email'].'</span>
                            </p>
                    	</td>
               		<tr>
					<tr>
                		<td>
                            <p style="margin:0px 0px 10px; padding:0px 25px; float:left">
                            <label style="width:80px; font-size:15px; float:left;color: #323232;">Telefoonnumber:</label>
                            <span style="font-size:15px; float:left;color: #323232;">
							'.$_POST['telefoonnumber'].'</span>
                            </p>
                    	</td>
               		<tr>
					<tr>
                		<td>
                            <p style="margin:0px 0px 10px; padding:0px 25px; float:left">
                            <label style="width:80px; font-size:15px; float:left;color: #323232;">bericht:</label>
                            <span style="font-size:15px; float:left;color: #323232;">
							'.$_POST['bericht'].'</span>
                            </p>
                    	</td>
               		<tr>
			  </table>
            </td>
        </tr>
    </table>
	</body>
</html>';

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <sachin.goyal.sjr@gmail.com>' . "\r\n";
$headers .= 'Cc: sachin.goyal.sjr@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);
 

?>
<script>
 window.location="http://phpdotnetsolutions.com/clients/Stuwa/tahnkyou.html";
</script>