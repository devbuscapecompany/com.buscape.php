<?php
require_once 'com/buscape/php/api/APIOperation.php';

/**
 * Essa classe representa a operação viewProductDetails da
 * API do BuscaPé.
 */
class BuscapeViewProductDetailsOperation extends APIOperation {
	/**
	 * @var	integer
	 */
	private $productId;

	/**
	 * Recupera o ID do produto.
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
		return '/service/viewProductDetails/';
	}

	/**
	 * Define o ID do produto.
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