<?php
/**
 * Classes e interfaces relacionadas com o protocolo HTTP
 * @package com.buscape.php.http
 */

/**
 * Constantes para identificar o método de requisição HTTP
 * @package com.buscape.php.http
 */
interface HTTPRequestMethod {
	const DELETE = 'DELETE';
	const GET = 'GET';
	const HEAD = 'HEAD';
	const OPTIONS = 'OPTIONS';
	const POST = 'POST';
	const PUT = 'PUT';
	const TRACE = 'TRACE';
}