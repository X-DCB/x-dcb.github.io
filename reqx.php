<?php
include_once 'hdr.php';
//$_POST['urlx']='167.99.64.218';
$urx='http://'.$_POST['urlx'].'/home/stats.php';
$knds=[
    28=>"Ooops, cannot retrieve data from the server.",
    6=>"Invalid IP Address/Host.",
    7=>"Unknown server."
];
$ch = curl_init($urx);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_HEADER         => 1,
    CURLOPT_AUTOREFERER => 1,
    CURLOPT_TIMEOUT        => 3
]);
$contx = curl_exec($ch);
$hdr = curl_getinfo($ch);
$ern = curl_errno($ch);
$erm = curl_error($ch);
curl_close($ch);
//echo json_encode($hdr).'x';
if ($hdr['http_code'] != 200) {
    http_response_code($ern);
    $msg=json_encode(['code'=>$knds[$ern], 'host_ip'=>$_POST['urlx']]);
    echo $erm;//$knds[$ern];// sethead($msg);
} else {
	$ccont = substr($contx, $hdr['header_size']);
	$ard = json_decode($ccont,1);
	$ard['host_ip']=$_POST['urlx'];
	echo sethead(json_encode($ard));
	
}
?>