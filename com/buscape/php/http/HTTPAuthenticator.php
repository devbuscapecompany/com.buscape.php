<?php
require_once 'com/buscape/php/http/HTTPRequest.php';

/**
 * Interface para definição de um autenticador HTTP.
 */
interface HTTPAuthenticator {
	/**
	 * Autentica uma requisição HTTP.
	 * @param	HTTPRequest $httpRequest
	 */
	public function authenticate( HTTPRequest $httpRequest );
}