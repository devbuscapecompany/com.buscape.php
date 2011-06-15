<?php
require_once 'com/buscape/php/api/APIOperation.php';

/**
 * Essa classe representa a operação viewSellerDetails da
 * API do BuscaPé.
 */
class BuscapeViewSellerDetailsOperation extends APIOperation {
	/**
	 * @var	integer
	 */
	private $sellerId;

	/**
	 * Recupera o ID do vendedor.
	 * @return	integer
	 */
	public function getSellerId() {
		return $this->sellerId;
	}

	/**
	 * @return	string
	 * @see		APIOperation::getOperationPath()
	 */
	protected function getOperationPath() {
		return '/service/viewSellerDetails/';
	}

	/**
	 * Define o ID do vendedor.
	 * @param	integer $sellerId
	 * @throws	InvalidArgumentException Se o ID do vendedor não for
	 * um inteiro
	 */
	public function setSellerId( $sellerId ) {
		if ( is_int( $sellerId ) ) {
			$this->sellerId = $sellerId;
			$this->apiInterface->getHTTPConnection()->setParam( 'sellerId' , $sellerId );
		} else {
			throw new InvalidArgumentException( 'O ID do vendedor precisa ser um inteiro' );
		}
	}
}