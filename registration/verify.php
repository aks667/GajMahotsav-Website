
<?php 
require('db.php');

	$email=$_GET['email'];
	$code=$_GET['code'];
	$echeck="select email,confirm from magreg where email='$email' and code='$code'";
	$select=mysqli_query($conn,$echeck);
	
	if(mysqli_num_rows($select)==1)
	{
		while($row=mysqli_fetch_array($select))
		{
			$email=$row['email'];
			$confirm=$row['confirm'];
		}
		if($confirm == 'no'){
	$query="UPDATE magreg SET confirm='verified' WHERE email='$email'";
	if(!mysqli_query($conn,$query))
		  {
		     echo "<script type='text/javascript'>  window.location='nil.php'; </script>";
       exit();
		      
		  }
		  else
		 {
		  $link = "Your participation for Gaj Mahotsav is
confirmed. We will keep you informed.";
	    $to=$email;

		$msg = '<html><body style="background-color:#eeeeee;">';
$msg .= '<table align="center" style="border: 2px solid  #eeeeee;" cellpadding="0" cellspacing="0" width="800">';
$msg .= ' <tr>';
$msg .= '  <td align="center" bgcolor="#eeeeee" style="padding: 15px 0 5px 0;">';
$msg .= ' </td>';
$msg .= ' </tr>';
$msg .= '<table align="center" style="border: 2px solid  #ffffff;" cellpadding="0" cellspacing="0" width="600">';
$msg .= ' <tr>';
$msg .= '  <td align="center" bgcolor="#ffffff" style="padding: 20px 0 15px 0;">';
$msg .= ' <img src="http://gajyatra.leopardtechlabs.com/img/gajmahotsav.png" alt="Creating Email Magic" style="display: block;" />';
$msg .= ' <hr>';
$msg .= ' </td';
$msg .= ' </tr>';
$msg .= ' <tr>';
$msg .= ' <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">';
$msg .= ' <table border="0" cellpadding="0" cellspacing="0" width="100%">';
$msg .= '  <tr>';
$msg .= '   <td>';
$msg .= '    <h2><p align="center"><font color="#000;"></font></h2><font color="#000;"></p></font>';
$msg .= '   </td>';
$msg .= '  </tr>';
$msg .= '  <tr>';
$msg .= '   <td style="padding: 20px 0 30px 0;">';
$msg .= $link;
$msg .= '   </td>';
$msg .= '  </tr>';
$msg .= '  <tr>';
$msg .= '   <td>';
$msg .= '   <font color="#88a67d"><b> Thank you,<br>Team Gaj Mahotsav</b></font>';
$msg .= '   </td>';
$msg .= '  </tr>';
$msg .= ' </table>';
$msg .= '</td>';
$msg .= ' </tr>';

$msg .= '</table>';
$msg .= '</table>';
$msg .= '</body></html>';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: po.campaigns@wti.org.in' . "\r\n" .
    'Reply-To: po.campaigns@wti.org.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to,"Confirmed",$msg,$headers); 
		    
	  echo "<script type='text/javascript'>  window.location='success.php'; </script>";
       exit();
		 }
	}
    else{
         echo "<script type='text/javascript'>  window.location='nil.php'; </script>";
       exit();
    }
	}
	$mysqli->close();
?>

