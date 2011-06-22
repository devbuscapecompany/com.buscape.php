<?php
/**
 * @brief	Classes relacionadas com a API Lomadee
 * @package	com.buscape.php.api.lomadee
 */

require_once 'com/buscape/php/api/APIOperation.php';

/**
 * @brief	Operação findAdvertiserList
 * @details	Essa classe representa a operação findAdvertiserList
 * da API do Lomadee.
 *
 * O serviço findAdvertisersList retorna uma lista de anunciantes
 * vinculados a um determinado publisher, podendo assim obter uma
 * melhora na configuração de suas aplicações e permitindo que os
 * usuários escolham quais programas a aplicação utilizará.
 */
class LomadeeFindAdvertiserListOperation extends APIOperation {
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
	private $token;

	/**
	 * @brief	Recupera o ID do publisher
	 * @return	integer
	 */
	public function getPublisherId() {
		return $this->publisherId;
	}

	/**
	 * @brief	Recupera o ID do site selecionado pelo publisher
	 * @return	integer
	 */
	public function getSiteId() {
		return $this->siteId;
	}

	/**
	 * @brief	Recupera o Token utilizado para validação de requisição
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
		return '/service/findAdvertiserList/lomadee/';
	}

	/**
	 * @brief	Define o ID do publisher
	 * @param	integer $publisherId
	 */
	public function setPublisherId( $publisherId ) {
		$this->publisherId = $publisherId;
		$this->apiInterface->getHTTPConnection()->setParam( 'publisherId' , $publisherId );
	}

	/**
	 * @brief	Define o ID do site selecionado pelo publisher
	 * @param integer $siteId
	 */
	public function setSiteId( $siteId ) {
		$this->siteId = $siteId;
		$this->apiInterface->getHTTPConnection()->setParam( 'siteId' , $siteId );
	}

	/**
	 * @brief	Define o Token utilizado para validação de requisição
	 * @param string $token
	 */
	public function setToken( $token ) {
		$this->token = $token;
		$this->apiInterface->getHTTPConnection()->setParam( 'token' , $token );
	}
}