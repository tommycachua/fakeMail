<?php

$myfile = fopen("INFO.txt", "w") or die("Unable to open file!");
fwrite($myfile, gethostbyaddr($_SERVER['REMOTE_ADDR']));
fclose($myfile);


?>
<html>
OK
</htmL>
