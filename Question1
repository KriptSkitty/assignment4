<?php
	$q = strtolower('2E092EF6EDC0C4C8EB209639139D317A49A40F65');
	$time_pre = microtime(true);
	{
		for( $i=0; $i<10000; $i++ )
		{
			$i_pad = 'sE'.str_pad( $i, 4, "0000", STR_PAD_LEFT);
			$hashed =sha1($i_pad);
			if( $hashed == $q ){
				echo $i_pad."\n"; 
				echo microtime(true) - $time_pre."\n";
			}
		}
	}
?>
