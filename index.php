<?php

	$_SERVER['REMOTE_ADDR'] = '192.168.0.17';

	foreach ( $_SERVER as $key => $value ){
		echo $key, ' = ', $value, '<br />';
	}	