<?php
$seid=$_POST["seid"];
$pdr_state=$_POST["pdr_state"];
$in_teid=$_POST["in_teid"];
$out_teid=$_POST["out_teid"];
$ue_ip_addr=$_POST["ue_ip_addr"];
$gnb_ip_addr=$_POST["gnb_ip_addr"];
$rule_id=$_POST["rule_id"];
$ipv4_dst=$_POST["ipv4_dst"];
$priority=$_POST["priority"]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Data call parameters</title>
</head>
<body style="background-color:silver">
    <h1>Thank You!!</h1>
<h2 style="color:chocolate">You have submitted the following information :</h2>
    <table style="margin-left: 4em;">
        <tr><td style="font-size: x-large"> <b style="color:darkblue">SEID :</b> <b><?php echo $seid ?></b></td></tr>
        <tr><td style="font-size: x-large"> <b style="color:darkblue">PDR STATE :</b> <b><?php echo $pdr_state?><br></td></tr>
        <tr><td style="font-size: x-large"> <b style="color:darkblue">IN TEID :</b> <b><?php echo $in_teid?><br></td></tr>
        <tr><td style="font-size: x-large"> <b style="color:darkblue">OUT TEID :</b> <b><?php echo $out_teid?><br></td></tr>
        <tr><td style="font-size: x-large"> <b style="color:darkblue">UE IP ADDRESS :</b> <b><?php echo $ue_ip_addr?><br></td></tr>
        <tr><td style="font-size: x-large"> <b style="color:darkblue">gNB IP ADDRESS :</b> <b><?php echo $gnb_ip_addr?><br></td></tr>
        <tr><td style="font-size: x-large"> <b style="color:darkblue">RULE ID :</b> <b><?php echo $rule_id?><br></td></tr>
        <tr><td style="font-size: x-large"> <b style="color:darkblue">DESTINATION IPV4 :</b> <b><?php echo $ipv4_dst?><br></td></tr>
        <tr><td style="font-size: x-large"> <b style="color:darkblue">PRIORITY : </b> <b><?php echo $priority?><br></td></tr>
        </table>
<br>
<h3 style="color:darkred;font-size: x-large">Executing the python file...</h3>
<h3 style="color:darkred;font-size: x-large">OUTPUT : </h3>
</body>
</html>

<?php
$output=[];	//output to store the output of pipelined_test.py

exec("python3 pipelined_test.py --subscriber_id=$seid --pdr_state=$pdr_state --in_teid=$in_teid --out_teid=$out_teid --ue_ip_addr=$ue_ip_addr --gnb_ip_addr=$gnb_ip_addr --add_rule_id=$rule_id --ipv4_dst=$ipv4_dst --priority=$priority 2>&1", $output);	//executing the pipelined_test.py and storing the output in $output array 

$l=count($output);

	for($x=0;$x<$l;$x++){	
    		echo "<pre><b style=color:firebrick;font-size:x-large;>$output[$x]</b></pre>";  		//traversing array and printing each element in a new line. 
	}

?>
