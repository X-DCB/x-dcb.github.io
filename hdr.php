<?php
function sethead($res) {
	header("Content-Type: application/json; charset=utf-8");
	header("Content-Length:". strlen($res));
	header('Access-Control-Allow-Origin: *');
    return $res;
}
?>