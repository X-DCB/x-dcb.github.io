<?php
include_once 'hdr.php';
$ips=preg_split('/\n/', file_get_contents("ipx.php"), 0,PREG_SPLIT_NO_EMPTY);
$res=json_encode($ips);
sethead($res);
echo $res;
?>