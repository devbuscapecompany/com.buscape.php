<?php
/**
 * @brief	Pacote base da biblioteca do grupo BuscaPé
 * @details	Esse pacote contém as classes e interfaces
 * necessárias para integração com as APIs do Grupo BuscaPé
 * @package	com.buscape.php.api
 */

require_once 'com/buscape/php/http/HTTPConnection.php';

/**
 * @brief	Base para a implementação de uma API do Grupo BuscaPé.
 * @details	Essa classe reúne código comum para todas as APIs do Grupo
 * BuscaPé.
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
	 * @brief	Recupera o ID da aplicação.
	 * @return	string
	 */
	public function getApplicationId() {
		return $this->applicationId;
	}

	/**
	 * @brief	Recupera o objeto de conexão HTTP relacionado.
	 * @return	HTTPConnection
	 */
	public function getHTTPConnection() {
		return $this->httpConnection;
	}

	/**
	 * @brief	Recupera o host da API.
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
	 * @brief	Define o ID da aplicação.
	 * @param	string $applicationId
	 */
	public function setApplicationId( $applicationId ) {
		$this->applicationId = $applicationId;
	}

	/**
	 * @brief	Define o objeto de conexão HTTP
	 * @param	HTTPConnection $httpConnection Objeto de conexão
	 * HTTP que será utilizado para realizar as chamadas às operações
	 * da API.
	 */
	public function setHTTPConnection( HTTPConnection $httpConnection ) {
		$this->httpConnection = $httpConnection;
	}

	/**
	 * @brief	Define que as operações serão executadas no sandbox.
	 * @param	boolean $sandbox Indica se a API utilizará
	 * o sandbox.
	 */
	public function setSandbox( $sandbox = true ) {
		$this->sandbox = !!$sandbox;
	}
}