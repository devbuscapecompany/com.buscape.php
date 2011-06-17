<?php
/**
 * @brief	Classes relacionadas com a API BuscaPé
 * @package	com.buscape.php.api.buscape
 */

require_once 'com/buscape/php/api/APIOperation.php';

/**
 * @brief	Avaliação de usuários
 * @details	Essa classe representa a operação viewUserRatings
 * da API do BuscaPé.
 */
class BuscapeViewUserRatingsOperation extends APIOperation {
	/**
	 * @var	integer
	 */
	private $productId;

	/**
	 * @brief	Recupera o ID do produto.
	 * @return	integer
	 */
	public function getProductId() {
		return $this->productId;
	}

	/**
	 * @return	string
	 * @see		APIOperation::getOperationPath()
	 */
	protected function getOperationPath() {
		return '/service/viewUserRatings/';
	}

	/**
	 * @brief	Define o ID do produto.
	 * @param	integer $productId
	 * @throws	InvalidArgumentException Se o ID do produto não for
	 * um inteiro
	 */
	public function setProductId( $productId ) {
		if ( is_int( $productId ) ) {
			$this->productId = $productId;
			$this->apiInterface->getHTTPConnection()->setParam( 'productId' , $productId );
		} else {
			throw new InvalidArgumentException( 'O ID do produto precisa ser um inteiro' );
		}
	}
}