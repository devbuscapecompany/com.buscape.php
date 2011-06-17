<?php
/**
 * Classes e interfaces relacionadas com o protocolo HTTP
 * @package com.buscape.php.http
 */

require_once 'com/buscape/php/http/HTTPRequest.php';

/**
 * Interface para definição de um autenticador HTTP.
 * @package com.buscape.php.http
 */
interface HTTPAuthenticator {
	/**
	 * Autentica uma requisição HTTP.
	 * @param	HTTPRequest $httpRequest
	 */
	public function authenticate( HTTPRequest $httpRequest );
}