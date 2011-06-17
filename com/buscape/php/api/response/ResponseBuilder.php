<?php
/**
 * Classes que representam ou convertem o retorno das operações das
 * APIs do Grupo BuscaPé em entidades.
 * @package com.buscape.php.api.response
 */

require_once 'com/buscape/php/api/response/Result.php';

/**
 * Interface para criação do objeto de resposta das
 * requisições às APIs do grupo Buscapé.
 * @package com.buscape.php.api.response
 */
abstract class ResponseBuilder {
	/**
	 * @var	Result
	 */
	protected $result;

	public function __construct() {
		$this->result = new Result();
	}

	/**
	 * Recupera o objeto de resultado de uma chamada
	 * à uma operação.
	 * @return	Result
	 */
	public function getResult() {
		return $this->result;
	}

	/**
	 * Interpreta o resultado e cria o objeto de resultado.
	 * @param	string $content
	 * @return	ResponseBuilder
	 */
	abstract public function parse( $content );
}