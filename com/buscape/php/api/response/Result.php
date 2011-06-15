<?php
require_once 'com/buscape/php/api/response/Category.php';
require_once 'com/buscape/php/api/response/Product.php';
require_once 'com/buscape/php/api/response/Offer.php';
require_once 'com/buscape/php/api/response/ResultDetails.php';

/**
 *
 */
class Result {
	/**
	 * @var	string
	 */
	private $match;

	/**
	 * @var	integer
	 */
	private $totalResultsReturned;

	/**
	 * @var	integer
	 */
	private $totalResultsAvailable;

	/**
	 * @var	integer
	 */
	private $totalResultsSellers;

	/**
	 * @var	integer
	 */
	private $page;

	/**
	 * @var	integer
	 */
	private $totalPages;

	/**
	 * @var	ResultDetails
	 */
	private $details;

	/**
	 * @var	Category
	 */
	private $category;

	/**
	 * @var	array
	 */
	private $subCategory = array();

	/**
	 * @var	array
	 */
	private $top5Category = array();

	/**
	 * @var	array
	 */
	private $product = array();

	/**
	 * @var	array
	 */
	private $offer = array();

	/**
	 * @var	Seller
	 */
	private $seller;

	/**
	 * Recupera o valor de $seller
	 * @return	Seller
	 */
	public function getSeller() {
		return $this->seller;
	}

	/**
	 * @param Seller $seller
	 */
	public function setSeller( Seller $seller ) {
		$this->seller = $seller;
	}

	/**
	 * Adiciona um produto.
	 * @param	Product $product
	 */
	public function addProduct( Product $product ) {
		$this->product[] = $product;
	}

	/**
	 * Adiciona uma subcategoria.
	 * @param	Category $subCategory
	 */
	public function addSubCategory( Category $subCategory ) {
		$this->subCategory[] = $subCategory;
	}

	/**
	 * Adiciona uma categoria Top5
	 * @param	Category $top5Category
	 */
	public function addTop5Category( Category $top5Category ) {
		$this->top5Category[] = $top5Category;
	}

	/**
	 * Adiciona uma oferta.
	 * @param	Offer $offer
	 */
	public function addOffer( Offer $offer ) {
		$this->offer[] = $offer;
	}

	/**
	 * Recupera o valor de $match
	 * @return	string
	 */
	public function getMatch() {
		return $this->match;
	}

	/**
	 * Recupera o valor de $totalResultsReturned
	 * @return	integer
	 */
	public function getTotalResultsReturned() {
		return $this->totalResultsReturned;
	}

	/**
	 * Recupera o valor de $totalResultsAvailable
	 * @return	integer
	 */
	public function getTotalResultsAvailable() {
		return $this->totalResultsAvailable;
	}

	/**
	 * Recupera o valor de $totalResultsSellers
	 * @return	integer
	 */
	public function getTotalResultsSellers() {
		return $this->totalResultsSellers;
	}

	/**
	 * Recupera o valor de $page
	 * @return	integer
	 */
	public function getPage() {
		return $this->page;
	}

	/**
	 * Recupera o valor de $totalPages
	 * @return	integer
	 */
	public function getTotalPages() {
		return $this->totalPages;
	}

	/**
	 * Recupera o valor de $details
	 * @return	ResultDetails
	 */
	public function getDetails() {
		return $this->details;
	}

	/**
	 * Recupera o valor de $category
	 * @return	Category
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Recupera um Iterator de subcategorias
	 * @return	Iterator
	 */
	public function getSubCategoryIterator() {
		return new ArrayIterator( $this->subCategory );
	}

	/**
	 * Recupera um Iterator de categorias top 5
	 * @return	Iterator
	 */
	public function getTop5CategoryIterator() {
		return new ArrayIterator( $this->top5Category );
	}

	/**
	 * Recupera um Iterator de produtos
	 * @return	Iterator
	 */
	public function getProductIterator() {
		return new ArrayIterator( $this->product );
	}

	/**
	 * Recupera um Iterator de ofertas
	 * @return	Iterator
	 */
	public function getOfferIterator() {
		return new ArrayIterator( $this->offer );
	}

	/**
	 * @param string $match
	 */
	public function setMatch( $match ) {
		$this->match = $match;
	}

	/**
	 * @param integer $totalResultsReturned
	 */
	public function setTotalResultsReturned( $totalResultsReturned ) {
		$this->totalResultsReturned = $totalResultsReturned;
	}

	/**
	 * @param integer $totalResultsAvailable
	 */
	public function setTotalResultsAvailable( $totalResultsAvailable ) {
		$this->totalResultsAvailable = $totalResultsAvailable;
	}

	/**
	 * @param integer $totalResultsSellers
	 */
	public function setTotalResultsSellers( $totalResultsSellers ) {
		$this->totalResultsSellers = $totalResultsSellers;
	}

	/**
	 * @param integer $page
	 */
	public function setPage( $page ) {
		$this->page = $page;
	}

	/**
	 * @param integer $totalPages
	 */
	public function setTotalPages( $totalPages ) {
		$this->totalPages = $totalPages;
	}

	/**
	 * @param ResultDetails $details
	 */
	public function setDetails( ResultDetails $details ) {
		$this->details = $details;
	}

	/**
	 * @param Category $category
	 */
	public function setCategory( Category $category ) {
		$this->category = $category;
	}

	/**
	 * @param array $subCategories
	 */
	public function setSubCategory( array $subCategories ) {
		$this->subCategory = array();

		foreach ( $subCategories as $subCategory ) {
			if ( $subCategory instanceof Category ) {
				$this->addSubCategory( $subCategory );
			}
		}
	}

	/**
	 * @param array $top5Categories
	 */
	public function setTop5Category( array $top5Categories ) {
		$this->subCategory = array();

		foreach ( $top5Categories as $top5Category ) {
			if ( $top5Category instanceof Category ) {
				$this->addTop5Category( $top5Category );
			}
		}
	}

	/**
	 * @param array $product
	 */
	public function setProduct( array $products ) {
		$this->product = array();

		foreach ( $products as $product ) {
			if ( $product instanceof Product ) {
				$this->addProduct( $product );
			}
		}
	}

	/**
	 * @param array $offers
	 */
	public function setOffer( array $offers ) {
		$this->offer = array();

		foreach ( $offers as $offer ) {
			if ( $offer instanceof Offer ) {
				$this->addOffer( $offer );
			}
		}
	}
}