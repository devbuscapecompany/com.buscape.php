<?php
/**
 * @brief	Pacote base da biblioteca do grupo BuscaPé
 * @details	Esse pacote contém as classes e interfaces
 * necessárias para integração com as APIs do Grupo BuscaPé
 * @package	com.buscape.php.api
 */

require_once 'com/buscape/php/api/APIInterface.php';
require_once 'com/buscape/php/api/response/JSONResponseBuilder.php';
require_once 'com/buscape/php/api/response/XMLResponseBuilder.php';

/**
 * @brief	Interface de uma operação de uma API
 * @details	Interface para criação de uma operação das APIs
 * do Grupo BuscaPé.
 */
abstract class APIOperation {
	/**
	 * @var	APIInterface
	 */
	protected $apiInterface;

	/**
	 * @var	string
	 */
	protected $countryCode;

	/**
	 * @var	string
	 */
	protected $clientIP;

	/**
	 * @var	string
	 */
	protected $format;

	/**
	 * @var	HTTPResponse
	 */
	private $httpResponse;

	/**
	 * @details Constroi o objeto que representa uma operação da API
	 * @param	APIInterface $apiInterface Objeto que representa
	 * a API.
	 */
	public function __construct( APIInterface $apiInterface ) {
		$this->apiInterface = $apiInterface;

		/**
		 * Como o PHP é uma linguagem de servidor, o IP do usuário
		 * é definido por padrão nas chamadas das operações.
		 */
		if ( ( $xip = isset( $_SERVER[ 'HTTP_X_IP' ] ) ) != false || isset( $_SERVER[ 'REMOTE_ADDR' ] ) ) {
			$this->setClientIP( $_SERVER[ $xip ? 'HTTP_X_IP' : 'REMOTE_ADDR' ] );
		}

		$this->setFormat( 'json' );
	}

	/**
	 * @brief	Última resposta HTTP
	 * @details	Recupera o objeto HTTPResponse com a resposta HTTP
	 * da última chamada à operação.
	 * @return	HTTPResponse
	 */
	public function __getLastResponse() {
		return $this->httpResponse;
	}

	/**
	 * @brief	Faz a chamada à uma operação de API
	 * @details	Efetua a chamada à uma operação da API.
	 * @return	Result
	 */
	public function call() {
		$path = $this->getOperationPath() . $this->apiInterface->getApplicationId();

		if ( !is_null( $this->countryCode ) ) {
			$path .= '/' . $this->countryCode;
		}

		$path .= '/';

		$this->httpResponse = $this->apiInterface->getHTTPConnection()->execute( $path );

		switch ( $this->httpResponse->getContentType() ) {
			case 'application/xml' :
				$responseBuilder = new XMLResponseBuilder();
				break;
			case 'application/json' :
			default:
				$responseBuilder = new JSONResponseBuilder();
		}

		return $responseBuilder->parse( $this->httpResponse->getContent() )->getResult();
	}

	/**
	 * @brief	Recupera o IP do usuário.
	 * @return	string
	 */
	public function getClientIP() {
		return $this->clientIP;
	}

	/**
	 * @details Recupera o código do país utilizado na
	 * internacionalização dos resultados das chamadas à operação.
	 * @return	string
	 */
	public function getCountryCode() {
		return $this->countryCode;
	}

	/**
	 * @details	Recupera o formato que será retornado a resposta
	 * das requisições.
	 * @return	string
	 */
	public function getFormat() {
		return $this->format;
	}

	/**
	 * @details Recupera o caminho onde a chamada à operação deverá
	 * ser realizado.
	 * @return	string
	 */
	protected function getOperationPath() {
		throw new BadMethodCallException( 'Não implementado' );
	}

	/**
	 * @brief	Define o IP do usuário.
	 * @param	string $clientIP O IP do usuário.
	 * @throws	InvalidArgumentException Se o IP for inválido.
	 */
	public function setClientIP( $clientIP ) {
		if ( filter_var( $clientIP , FILTER_VALIDATE_IP ) ) {
			$this->clientIP = $clientIP;
		} else {
			throw new InvalidArgumentException( 'IP inválido' );
		}
	}

	/**
	 * @details Define o código do país para internacionalização dos
	 * resultados das operações da API.
	 * @param	string $countryCode Código do país com dois caracteres (BR, AR, etc...)
	 * @throws	InvalidArgumentException
	 */
	public function setCountryCode( $countryCode ) {
		if ( !is_string( $countryCode ) || strlen( $countryCode ) != 2 ) {
			throw new InvalidArgumentException( 'O código do país deve ser uma string com 2 caracteres.' );
		} else {
			$this->countryCode = strtoupper( $countryCode );
		}
	}

	/**
	 * @brief	Define o formato da resposta.
	 * @param	string $format
	 */
	public function setFormat( $format ) {
		$this->format = $format;
		$this->apiInterface->getHTTPConnection()->setParam( 'format' , $format );
	}
}