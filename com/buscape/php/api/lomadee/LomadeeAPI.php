<?php
/**
 * Classes relacionadas com a API Lomadee
 * @package	com.buscape.php.api.lomadee
 */

require_once 'com/buscape/php/api/APIInterface.php';
require_once 'com/buscape/php/api/lomadee/LomadeeCreateSourceOperation.php';
require_once 'com/buscape/php/api/lomadee/LomadeeFindAdvertiserListOperation.php';
require_once 'com/buscape/php/api/lomadee/LomadeeFindCategoryListOperation.php';
require_once 'com/buscape/php/api/lomadee/LomadeeFindOfferListOperation.php';
require_once 'com/buscape/php/api/lomadee/LomadeeFindProductListOperation.php';

/**
 * Essa classe representa a API Lomadee.
 * @package	com.buscape.php.api.lomadee
 */
class LomadeeAPI extends APIInterface {
	/**
	 * Cria um objeto que representa a operação createSource.
	 * @return	LomadeeCreateSourceOperation
	 */
	public function createSource() {
		return new LomadeeCreateSourceOperation( $this );
	}

	/**
	 * Cria um objeto que representa a operação findAdvertiserList.
	 * @return	LomadeeFindAdvertiserListOperation
	 */
	public function findAdvertiserList() {
		return new LomadeeFindAdvertiserListOperation( $this );
	}

	/**
	 * Cria um objeto que representa uma operação findCategoryList.
	 * @return	LomadeeFindCategoryListOperation
	 */
	public function findCategoryList() {
		return new LomadeeFindCategoryListOperation( $this );
	}

	/**
	 * Cria um objeto que representa uma operação findOfferList.
	 * @return	LomadeeFindOfferListOperation
	 */
	public function findOfferList() {
		return new LomadeeFindOfferListOperation( $this );
	}

	/**
	 * Cria um objeto que representa a operação findProductList.
	 * @return	LomadeeFindProductListOperation
	 */
	public function findProductList() {
		return new LomadeeFindProductListOperation( $this );
	}
}