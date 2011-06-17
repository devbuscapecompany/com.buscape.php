<?php
/**
 * @brief	Classes relacionadas com a API BuscaPé
 * @package	com.buscape.php.api.buscape
 */

require_once 'com/buscape/php/api/APIInterface.php';
require_once 'com/buscape/php/api/buscape/BuscapeFindCategoryListOperation.php';
require_once 'com/buscape/php/api/buscape/BuscapeFindOfferListOperation.php';
require_once 'com/buscape/php/api/buscape/BuscapeFindProductListOperation.php';
require_once 'com/buscape/php/api/buscape/BuscapeTopProductsOperation.php';
require_once 'com/buscape/php/api/buscape/BuscapeViewProductDetailsOperation.php';
require_once 'com/buscape/php/api/buscape/BuscapeViewSellerDetailsOperation.php';
require_once 'com/buscape/php/api/buscape/BuscapeViewUserRatingsOperation.php';

/**
 * @brief	API BuscaPé
 * @details	Essa classe representa a API Buscapé, com ela pode-se
 * utilizar todas as operações para localizar ofertas de produtos,
 * categorias informações sobre vendedores e opinião de clientes.
 */
class BuscapeAPI extends APIInterface {
	/**
	 * Cria um objeto que representa uma operação findCategoryList.
	 * @return	BuscapeFindCategoryListOperation
	 */
	public function findCategoryList() {
		return new BuscapeFindCategoryListOperation( $this );
	}

	/**
	 * Cria um objeto que representa uma operação findOfferList.
	 * @return	BuscapeFindOfferListOperation
	 */
	public function findOfferList() {
		return new BuscapeFindOfferListOperation( $this );
	}

	/**
	 * Cria um objeto que representa a operação findProductList.
	 * @return	BuscapeFindProductListOperation
	 */
	public function findProductList() {
		return new BuscapeFindProductListOperation( $this );
	}

	/**
	 * Cria um objeto que representa a operação topProducts.
	 * @return	BuscapeTopProductsOperation
	 */
	public function topProducts() {
		return new BuscapeTopProductsOperation( $this );
	}

	/**
	 * Cria um objeto que representa a operação viewProductDetails.
	 * @return	BuscapeViewProductDetailsOperation
	 */
	public function viewProductDetails() {
		return new BuscapeViewProductDetailsOperation( $this );
	}

	/**
	 * Cria um objeto que representa a operação viewSellerDetails.
	 * @return	BuscapeViewSellerDetailsOperation
	 */
	public function viewSellerDetails() {
		return new BuscapeViewSellerDetailsOperation( $this );
	}

	/**
	 * Cria um objeto que representa a operação viewUserRatings.
	 * @return	BuscapeViewUserRatingsOperation
	 */
	public function viewUserRatings() {
		return new BuscapeViewUserRatingsOperation( $this );
	}
}