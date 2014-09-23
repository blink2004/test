<?php

   	/**
   	 * This is an example of using XML in PHP
   	 *
   	 * @author Konstyantyn Moklyakov blink2004@mail.ru
   	 * @version 0.0.1
   	 *
	 */

   	$fileName = 'simple.xml';

   	$xmlDom = simplexml_load_file( $fileName );
   	
   	$xml = new SimpleXMLElement( $xmlDom );

   	try {

   		print_r( $xml );
   	
   	} catch (Exception $e){

   		var_dump( $e );
   	
   	}

   	// echo $xml->movie->{'great-line'}->line;
