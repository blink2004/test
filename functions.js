/**
 * JavaScript additional functions library
 * E-mail: blink2004@mail.ru
 *
 * @author Moklyakov Konstyanty
 * © 2014
 */

'use strict';

/**
 * Function generate random number
 *
 * @return number from 0 to 1
 */
 function getRandom(){
 	return Math.random();
 }

 function getRandomArbitary(min, max){
 	return Math.random() * ( max - min ) + min;
 }

 function getRandomInt(min, max){
 	return Math.floor( Math.random() * ( max - min + 1 ) + min );
 }

/**
 * Convert integer number to hexadecimal string
 *
 * @param int integer number
 * @return hexadecimal string
 *
 */
 function int2hex(int){
 	return int.toString( 16 );
 }

/**
 * Functions for work with cookie
 */

function setCookie ( name, value, exp_y, exp_m, exp_d, path, domain, secure ){
	var cookie_string = name + "=" + escape ( value );

	if ( exp_y )
	{
	var expires = new Date ( exp_y, exp_m, exp_d );
	cookie_string += "; expires=" + expires.toGMTString();
	}

	if ( path )
	cookie_string += "; path=" + escape ( path );

	if ( domain )
	cookie_string += "; domain=" + escape ( domain );

	if ( secure )
	cookie_string += "; secure";

	document.cookie = cookie_string;
}

function deleteCookie ( cookie_name )
{
	var cookie_date = new Date ( );  // Текущая дата и время
	cookie_date.setTime ( cookie_date.getTime() - 1 );
	document.cookie = cookie_name += "=; expires=" + cookie_date.toGMTString();
}

function getCookie ( cookie_name )
{
	var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|$)' );

	if ( results )
	return ( unescape ( results[2] ) );
	else
	return null;
}

