<?php
$conn = new mysqli("localhost","leopardt_allen","leopardallen","leopardt_gajyatra");


$name=$_POST['name'];
$email=$_POST['email'];
$day1 = $_POST['day1'];
$day2 = $_POST['day2'];
$day3 = $_POST['day3'];
$day4 = $_POST['day4'];
$alldays = $_POST['all'];
$type = $_POST['type'];
$mob = $_POST['phone'];
if($_POST['day1'] == 'no' && $_POST['day2'] == 'no' && $_POST['day3'] == 'no' && $_POST['day4'] == 'no' && $_POST['all'] == 'no'){
     $response = array(
        'status' => false,
        'message' => 'Please choose at least one date',
    );
    echo json_encode($response);
}
else{
    

$code=substr(md5(mt_rand()),0,15);

$sql = "select count(*) as tot from magreg where confirm='verified'";
    $rs = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($rs);
    $counter = $row['tot'];
    $rem = 100 - $counter ;
if($counter < 100001)
{
    $echeck="select email from magreg where email='$email' ";
   $echk=mysqli_query($conn,$echeck);
   $ecount=mysqli_num_rows($echk);
  if($ecount!=0)
   {
     $response = array(
        'status' => false,
        'message' => 'Email already exists',
    );
    echo json_encode($response);
   }
else{
$sql="INSERT into magreg(name,email,phone,type,day1,day2,day3,day4,alldays,code,confirm) VALUES('$name','$email','$mob','$type','$day1','$day2','$day3','$day4','$alldays','$code','no')";
if ($conn->query($sql) === TRUE) {
    
  mysql_close($db);
    	$link = "http://gajyatra.co.in/registration/verify.php?email=$email&code=$code";
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
$msg .= ' <img src="http://gajyatra.leopardtechlabs.com/img/gajmahotsav.png" alt="Gajsutra" style="display: block;" />';
$msg .= ' <hr>';
$msg .= ' </td';
$msg .= ' </tr>';
$msg .= ' <tr>';
$msg .= ' <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">';
$msg .= ' <table border="0" cellpadding="0" cellspacing="0" width="100%">';
$msg .= '  <tr>';
$msg .= '   <td style="text-align:center;">';
$msg .= '    <h2><p align="center"><font color="#000;">Welcome to Gaj Mahotsav</font></h2><font color="#000;">You have succesfully registered</p></font>';
$msg .= ' <br>  Please confirm by clicking on the following button.<br>';
$msg .= '   </td>';
$msg .= '  </tr>';
$msg .= '  <tr>';
$msg .= '   <td style="padding: 20px 0 30px 0;text-align:center;">';
$msg .= " <a href='{$link}' target='_blank' style='padding:1em; font-weight:bold; background-color:green; color:#fff;'>CONFIRM NOW</a>";
$msg .= '   </td>';
$msg .= '  </tr>';
$msg .= '  <tr>';
$msg .= '   <td>';

 
$msg .= '   <font color="#88a67d"><b> Thank you,<br>Team Gaj sutra</b></font>';
$msg .= '   </td>';
$msg .= '  </tr>';
$msg .= ' </table>';
$msg .= '</td>';
$msg .= ' </tr>';
$msg .= '  </td>';
$msg .= ' </tr>';
$msg .= '</table>';
$msg .= '</body></html>';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: po.campaigns@wti.org.in' . "\r\n" .
    'Reply-To: po.campaigns@wti.org.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to,"Activation Link",$msg,$headers);  
 $response = array(
        'status' => true,
        'msg' => $rem,
    );
    echo json_encode($response);
}
else 
{
   $response = array(
        'status' => 'registration finished',
        'message' => $rem
    );
    echo json_encode($response);
}

}
}
else{
	 $response = array(
        'status' => 'registration finished',
        'message' => $counter
    );
    echo json_encode($response);
}
}

$mysqli->close();
?>