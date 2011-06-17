<?php
/**
 * @brief	Classes relacionadas com a API Lomadee
 * @package	com.buscape.php.api.lomadee
 */

require_once 'com/buscape/php/api/APIInterface.php';
require_once 'com/buscape/php/api/lomadee/LomadeeCreateSourceOperation.php';
require_once 'com/buscape/php/api/lomadee/LomadeeFindAdvertiserListOperation.php';
require_once 'com/buscape/php/api/lomadee/LomadeeFindCategoryListOperation.php';
require_once 'com/buscape/php/api/lomadee/LomadeeFindOfferListOperation.php';
require_once 'com/buscape/php/api/lomadee/LomadeeFindProductListOperation.php';

/**
 * @brief	Essa classe representa a API Lomadee.
 */
class LomadeeAPI extends APIInterface {
	/**
	 * @brief	Criar sourceId (código) para o Publisher
	 * @details	Cria um objeto que representa a operação createSource
	 * para criação de um sourceIf (código) para o Publisher.
	 * @return	LomadeeCreateSourceOperation
	 */
	public function createSource() {
		return new LomadeeCreateSourceOperation( $this );
	}

	/**
	 * @brief	Lista de anunciantes
	 * @details	Cria um objeto que representa a operação findAdvertiserList.
	 * @return	LomadeeFindAdvertiserListOperation
	 */
	public function findAdvertiserList() {
		return new LomadeeFindAdvertiserListOperation( $this );
	}

	/**
	 * @brief	Lista de categorias
	 * @details	Cria um objeto que representa uma operação findCategoryList.
	 * @return	LomadeeFindCategoryListOperation
	 */
	public function findCategoryList() {
		return new LomadeeFindCategoryListOperation( $this );
	}

	/**
	 * @brief	Lista de ofertas
	 * @details	Cria um objeto que representa uma operação findOfferList.
	 * @return	LomadeeFindOfferListOperation
	 */
	public function findOfferList() {
		return new LomadeeFindOfferListOperation( $this );
	}

	/**
	 * @brief	Lista de produtos
	 * @details	Cria um objeto que representa a operação findProductList.
	 * @return	LomadeeFindProductListOperation
	 */
	public function findProductList() {
		return new LomadeeFindProductListOperation( $this );
	}
}