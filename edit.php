<?php
	$out =  bin2hex(file_get_contents("p2 - research.exe"));
	echo substr($out, 151584, 40);
	$new = str_replace(substr($out, 151584, 40), sha1($argv[1]), $out);
	$new_bin = hex2bin($new);
	file_put_contents ( 'p2 - research.exe.exe', $new_bin );
?>
