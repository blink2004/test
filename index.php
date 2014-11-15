<?php

	$_SERVER['REMOTE_ADDR'] = '192.168.0.17';

	// foreach ( $_SERVER as $key => $value ){
	// 	echo $key, ' = ', $value, '<br />';
	// }

	$name = 'a';
	$a = &$name;
	echo 'name = ', $$name;

	echo "-------------------";

	/*$title = 'Кроватка ВЕРЕС Соня ЛД 12';
	$brand = 'Верес';
        echo stripos( $title, $brand );
	echo substr( $title, stripos( $title, $brand ) ); */

/* End of file */