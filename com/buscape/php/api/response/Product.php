<?php
/**
 * @brief	Resposta das operações
 * @details	Classes que representam ou convertem o retorno das operações das
 * 			APIs do Grupo BuscaPé em entidades.
 * @package com.buscape.php.api.response
 */

/**
 * @brief	Representação de um produto.
 */
class Product {
	/**
	 * @var	integer
	 */
	private $categoryId;

	/**
	 * @var	string
	 */
	private $currency;

	/**
	 * @var	boolean
	 */
	private $eco;

	/**
	 * @var	boolean
	 */
	private $fullDescription;

	/**
	 * @var	boolean
	 */
	private $hasMetaSearch;

	/**
	 * @var	integer
	 */
	private $id;

	/**
	 * @var	LinkList
	 */
	private $links;

	/**
	 * @var	float
	 */
	private $priceMax;

	/**
	 * @var	float
	 */
	private $priceMin;

	/**
	 * @var	string
	 */
	private $productName;

	/**
	 * @var	string
	 */
	private $productShortName;

	/**
	 * @var	Rating
	 */
	private $rating;

	/**
	 * @var	Thumbnail
	 */
	private $thumbnail;

	/**
	 * @var	integer
	 */
	private $totalSellers;

	/**
	 * @var	Specification
	 */
	private $specification;

	/**
	 * Recupera o valor de $categoryId
	 * @return	integer
	 */
	public function getCategoryId() {
		return $this->categoryId;
	}

	/**
	 * Recupera o valor de $currency
	 * @return	string
	 */
	public function getCurrency() {
		return $this->currency;
	}

	/**
	 * Recupera o valor de $id
	 * @return	integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Recupera o valor de $links
	 * @return	array
	 */
	public function getLinks() {
		return $this->links;
	}

	/**
	 * Recupera o valor de $priceMax
	 * @return	float
	 */
	public function getPriceMax() {
		return $this->priceMax;
	}

	/**
	 * Recupera o valor de $priceMin
	 * @return	float
	 */
	public function getPriceMin() {
		return $this->priceMin;
	}

	/**
	 * Recupera o valor de $productName
	 * @return	string
	 */
	public function getProductName() {
		return $this->productName;
	}

	/**
	 * Recupera o valor de $productShortName
	 * @return	string
	 */
	public function getProductShortName() {
		return $this->productShortName;
	}

	/**
	 * Recupera o valor de $rating
	 * @return	Rating
	 */
	public function getRating() {
		return $this->rating;
	}

	/**
	 * Recupera o valor de $thumbnail
	 * @return	Thumbnail
	 */
	public function getThumbnail() {
		return $this->thumbnail;
	}

	/**
	 * Recupera o valor de $totalSellers
	 * @return	integer
	 */
	public function getTotalSellers() {
		return $this->totalSellers;
	}

	/**
	 * Recupera o valor de $specification
	 * @return	Specification
	 */
	public function getSpecification() {
		return $this->specification;
	}

	/**
	 * Recupera o valor de $fullDescription
	 * @return	boolean
	 */
	public function hasFullDescription() {
		return $this->fullDescription;
	}

	/**
	 * Recupera o valor de $hasMetaSearch
	 * @return	boolean
	 */
	public function hasMetaSearch() {
		return $this->hasMetaSearch;
	}

	/**
	 * Recupera o valor de $eco
	 * @return	boolean
	 */
	public function isEco() {
		return $this->eco;
	}

	/**
	 * @param integer $categoryId
	 */
	public function setCategoryId( $categoryId ) {
		$this->categoryId = $categoryId;
	}

	/**
	 * @param string $currency
	 */
	public function setCurrency( $currency ) {
		$this->currency = $currency;
	}

	/**
	 * @param boolean $eco
	 */
	public function setEco( $eco ) {
		$this->eco = !!$eco;
	}

	/**
	 * @param boolean $fullDescription
	 */
	public function setFullDescription( $fullDescription ) {
		$this->fullDescription = !!$fullDescription;
	}

	/**
	 * @param boolean $hasMetaSearch
	 */
	public function setHasMetaSearch( $hasMetaSearch ) {
		$this->hasMetaSearch = !!$hasMetaSearch;
	}

	/**
	 * @param integer $id
	 */
	public function setId( $id ) {
		$this->id = $id;
	}

	/**
	 * @param LinkList $links
	 */
	public function setLinks( LinkList $links ) {
		$this->links = $links;
	}

	/**
	 * @param float $priceMax
	 */
	public function setPriceMax( $priceMax ) {
		$this->priceMax = $priceMax;
	}

	/**
	 * @param float $priceMin
	 */
	public function setPriceMin( $priceMin ) {
		$this->priceMin = $priceMin;
	}

	/**
	 * @param string $productName
	 */
	public function setProductName( $productName ) {
		$this->productName = $productName;
	}

	/**
	 * @param string $productShortName
	 */
	public function setProductShortName( $productShortName ) {
		$this->productShortName = $productShortName;
	}

	/**
	 * @param Rating $rating
	 */
	public function setRating( Rating $rating ) {
		$this->rating = $rating;
	}

	/**
	 * @param Thumbnail $thumbnail
	 */
	public function setThumbnail( Thumbnail $thumbnail ) {
		$this->thumbnail = $thumbnail;
	}

	/**
	 * @param integer $totalSellers
	 */
	public function setTotalSellers( $totalSellers ) {
		$this->totalSellers = $totalSellers;
	}

	/**
	 * @param Specification $specification
	 */
	public function setSpecification( Specification $specification ) {
		$this->specification = $specification;
	}
}