<?php
$ipxz=$_POST['ipx'];
$contx=file_get_contents("ipx.php");
if (!preg_match("/$ipxz/", $contx)) @file_put_contents("ipx.php", (strlen($contx) > 0 ? "\n":'').$ipxz, FILE_APPEND);
?>