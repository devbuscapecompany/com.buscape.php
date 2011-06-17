<?php
/**
 * Classes e interfaces para integração com as APIs do
 * Grupo BuscaPé
 * @package	com.buscape.php.api
 */

require_once 'com/buscape/php/api/APIInterface.php';
require_once 'com/buscape/php/api/buscape/BuscapeAPI.php';
require_once 'com/buscape/php/api/lomadee/LomadeeAPI.php';
require_once 'com/buscape/php/http/HTTPConnection.php';
require_once 'com/buscape/php/http/HTTPCookieManager.php';

/**
 * A classe GrupoBuscape define uma interface para se criar objetos
 * de integração com as várias APIs do Grupo BuscaPé.
 *
 * Essa classe configura o objeto de integração, diminuindo a dificuldade
 * de implementação de uma integração com a API escolhida.
 * @package	com.buscape.php.api
 */
class GrupoBuscape {
	/**
	 * @var	string
	 */
	private $applicationId;

	/**
	 * @var	boolean
	 */
	private $sandbox = false;

	/**
	 * Constroi o objeto que engloba todas as APIs do Grupo BuscaPé
	 * @param	string $applicationId ID da aplicação
	 */
	public function __construct( $applicationId ) {
		$this->applicationId = $applicationId;
	}

	/**
	 * Recupera o objeto de integração com a API do BuscaPé.
	 * @return	BuscapeAPI
	 */
	public function buscapeAPI() {
		return $this->prepare( new BuscapeAPI() );
	}

	/**
	 * Recupera o objeto de integração com a API do Lomadee.
	 * @return	LomadeeAPI
	 */
	public function lomadeeAPI() {
		return $this->prepare( new LomadeeAPI() );
	}

	/**
	 * Cria um objeto de conexão HTTP para ser utilizado nas chamadas
	 * às operações de uma API do Grupo Buscapé.
	 * @param	string $hostname Nome do host onde as operações serão
	 * executadas.
	 * @return	HTTPConnection
	 */
	private function createHTTPConnection( $hostname ) {
		$httpConnection = new HTTPConnection();
		$httpConnection->setCookieManager( new HTTPCookieManager() );
		$httpConnection->initialize( $hostname , false );

		return $httpConnection;
	}

	/**
	 * Configura o objeto de integração de uma API do Grupo BuscaPé
	 * para ser facilmente utilizada pelo desenvolvedor.
	 * @param	APIInterface $api
	 * @return	APIInterface O mesmo objeto, porém configurado.
	 */
	private function prepare( APIInterface $api ) {
		$api->setSandbox( $this->sandbox );
		$api->setApplicationId( $this->applicationId );
		$api->setHTTPConnection( $this->createHTTPConnection( $api->getTargetHost() ) );

		return $api;
	}

	/**
	 * Utiliza o sandbox para testes de integração com uma API do
	 * Grupo BuscaPé.
	 * @return	GrupoBuscape
	 */
	public function sandbox() {
		$this->sandbox = true;

		return $this;
	}
}