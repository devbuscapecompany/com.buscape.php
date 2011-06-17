<?php
/**
 * @brief	Protocolo HTTP
 * @details	Classes e interfaces relacionadas com o protocolo HTTP
 * @package com.buscape.php.http
 */

require_once 'com/buscape/php/http/HTTPRequest.php';

/**
 * @brief	Interface para definição de um autenticador HTTP.
 */
interface HTTPAuthenticator {
	/**
	 * @brief	Autentica uma requisição HTTP.
	 * @param	HTTPRequest $httpRequest
	 */
	public function authenticate( HTTPRequest $httpRequest );
}