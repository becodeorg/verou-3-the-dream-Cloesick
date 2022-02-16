<?php
if(isset($_POST['submit'])){
	
$amount = $_POST['amount'];
$cur1 = $_POST['cur1'];
$cur2 = $_POST['cur2'];

if($cur1=="AUD" AND $cur2=="JPY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*82.463 . "</center>";
}

if($cur1=="AUD" AND $cur2=="INR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 51.09 . "</center>";
}

if($cur1=="AUD" AND $cur2=="PHP"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 37.15 . "</center>";
}

if($cur1=="USD" AND $cur2=="JPY"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 109.49 . "</center>";
}

if($cur1=="USD" AND $cur2=="INR"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount* 67.83 . "</center>";
}

if($cur1=="USD" AND $cur2=="PHP"){
echo "<center><b>Your Converted Amount is:</b><br></center>";
echo "<center>" . $amount*49.32  . "</center>";
}
}