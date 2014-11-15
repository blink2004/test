<?php

	/**
	 * Example for using php
	 *
	 * @author Konstyantyn M
	 * 
	 */

	class A {

		/**
		* @var string user login
		*/
		private $login = null;

		/**
		 * @var string password
		 */
		private $password = null;

		private function __construct(){

		}

		/**
		 * Set password
		 * @param string - user login
		 */
		public function setLogin( $login ){
			$this->login = $login;
		}

		/**
		 * Return user login
		 * 
		 */
		public function getLogin(){
			return ( $this->login !== null ) ? $this->login : null;
		}

		function checkUser(){

			if ( md5(md5( $this->getPassword() )) == '' && $this->getLogin() == '' ) {

				return true;

			} else {

				return false;

			}

		}

	}

	/**
	 * Class B extends A
	 */
	class B extends A {

	}

	class C {

		var $r = function( $a, $b ) use ( $g ){

			return $a . $b . $g;

		}

	}
