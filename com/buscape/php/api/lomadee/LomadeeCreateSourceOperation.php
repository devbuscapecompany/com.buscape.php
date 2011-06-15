<?php
require_once 'com/buscape/php/api/APIOperation.php';

/**
 * Essa classe representa a operação createSource da
 * API do Lomadee.
 *
 * Serviço utilizado somente na integração do Aplicativo com
 * a Lomadee. Dentro do fluxo de integração, o aplicativo utiliza
 * esse serviço para criar sourceId (código) para o Publisher que
 * deseja utiliza-lo.
 */
class LomadeeCreateSourceOperation extends APIOperation {
	/**
	 * @var	string
	 */
	private $campaignList;

	/**
	 * @var	integer
	 */
	private $publisherId;

	/**
	 * @var	integer
	 */
	private $siteId;

	/**
	 * @var	string
	 */
	private $sourceName;

	/**
	 * @var	string
	 */
	private $token;

	/**
	 * Recupera a Lista de IDs das campanhas separados por virgula.
	 * @return	string
	 */
	public function getCampaignList() {
		return $this->campaignList;
	}

	/**
	 * Recupera o ID do publisher
	 * @return	integer
	 */
	public function getPublisherId() {
		return $this->publisherId;
	}

	/**
	 * Recupera o ID do site selecionado pelo publisher.
	 * @return	integer
	 */
	public function getSiteId() {
		return $this->siteId;
	}

	/**
	 * Recupera o Nome do código
	 * @return	string
	 */
	public function getSourceName() {
		return $this->sourceName;
	}

	/**
	 * Recupera o Token utilizado para validação da requisição.
	 * @return	string
	 */
	public function getToken() {
		return $this->token;
	}

	/**
	 * @return	string
	 * @see		APIOperation::getOperationPath()
	 */
	protected function getOperationPath() {
		return '/service/createSource/lomadee/';
	}

	/**
	 * Define a Lista de IDs das campanhas separados por virgula.
	 * @param string $campaignList
	 */
	public function setCampaignList( $campaignList ) {
		$this->campaignList = $campaignList;
	}

	/**
	 * Define o ID do publisher
	 * @param integer $publisherId
	 */
	public function setPublisherId( $publisherId ) {
		$this->publisherId = $publisherId;
	}

	/**
	 * Define o ID do site selecionado pelo publisher.
	 * @param integer $siteId
	 */
	public function setSiteId( $siteId ) {
		$this->siteId = $siteId;
	}

	/**
	 * Define o Nome do código.
	 * @param string $sourceName
	 */
	public function setSourceName( $sourceName ) {
		$this->sourceName = $sourceName;
	}

	/**
	 * Define o Token utilizado para validação da requisição.
	 * @param string $token
	 */
	public function setToken( $token ) {
		$this->token = $token;
	}
}