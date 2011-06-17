<?php
/**
 * Classes e interfaces para integração com as APIs do
 * Grupo BuscaPé
 * @package	com.buscape.php.api
 */

require_once 'com/buscape/php/http/HTTPConnection.php';

/**
 * Base para a implementação de uma API do Grupo BuscaPé.
 *
 * Essa classe reúne código comum para todas as APIs do Grupo
 * BuscaPé.
 * @abstract
 * @package	com.buscape.php.api
 */
abstract class APIInterface {
	/**
	 * @var	string
	 */
	protected $applicationId;

	/**
	 * @var	HTTPConnection
	 */
	protected $httpConnection;

	/**
	 * @var	boolean
	 */
	protected $sandbox = false;

	/**
	 * Recupera o ID da aplicação.
	 * @return	string
	 */
	public function getApplicationId() {
		return $this->applicationId;
	}

	/**
	 * Recupera o objeto de conexão HTTP relacionado.
	 * @return	HTTPConnection
	 */
	public function getHTTPConnection() {
		return $this->httpConnection;
	}

	/**
	 * Recupera o host da API.
	 * @return	string
	 */
	public function getTargetHost() {
		if ( $this->sandbox ) {
			return 'sandbox.buscape.com';
		} else {
			return 'bws.buscape.com';
		}
	}

	/**
	 * Define o ID da aplicação.
	 * @param	string $applicationId
	 */
	public function setApplicationId( $applicationId ) {
		$this->applicationId = $applicationId;
	}

	/**
	 * Define o objeto de conexão HTTP
	 * @param	HTTPConnection $httpConnection Objeto de conexão
	 * HTTP que será utilizado para realizar as chamadas às operações
	 * da API.
	 */
	public function setHTTPConnection( HTTPConnection $httpConnection ) {
		$this->httpConnection = $httpConnection;
	}

	/**
	 * Define que as operações serão executadas no sandbox.
	 * @param	boolean $sandbox Indica se a API utilizará
	 * o sandbox.
	 */
	public function setSandbox( $sandbox = true ) {
		$this->sandbox = !!$sandbox;
	}
}