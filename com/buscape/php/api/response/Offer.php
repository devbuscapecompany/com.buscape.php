<?php
/**
 * @brief	Resposta das operações
 * @details	Classes que representam ou convertem o retorno das operações das
 * 			APIs do Grupo BuscaPé em entidades.
 * @package com.buscape.php.api.response
 */

/**
 * @brief	Representação de uma oferta
 */
class Offer {
	/**
	 * @var	integer
	 */
	private $categoryId;

	/**
	 * @var	integer
	 */
	private $id;

	/**
	 * @var	LinkList
	 */
	private $links;

	/**
	 * @var	string
	 */
	private $offerName;

	/**
	 * @var	Price
	 */
	private $price;

	/**
	 * @var	integer
	 */
	private $productId;

	/**
	 * @var	Seller
	 */
	private $seller;

	/**
	 * @var	Thumbnail
	 */
	private $thumbnail;

	/**
	 * Recupera o valor de $categoryId
	 * @return	integer
	 */
	public function getCategoryId() {
		return $this->categoryId;
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
	 * @return	LinkList
	 */
	public function getLinks() {
		return $this->links;
	}

	/**
	 * Recupera o valor de $offerName
	 * @return	string
	 */
	public function getOfferName() {
		return $this->offerName;
	}

	/**
	 * Recupera o valor de $price
	 * @return	Price
	 */
	public function getPrice() {
		return $this->price;
	}

	/**
	 * Recupera o valor de $productId
	 * @return	integer
	 */
	public function getProductId() {
		return $this->productId;
	}

	/**
	 * Recupera o valor de $seller
	 * @return	Seller
	 */
	public function getSeller() {
		return $this->seller;
	}

	/**
	 * Recupera o valor de $thumbnail
	 * @return	Thumbnail
	 */
	public function getThumbnail() {
		return $this->thumbnail;
	}

	/**
	 * @param integer $categoryId
	 */
	public function setCategoryId( $categoryId ) {
		$this->categoryId = $categoryId;
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
	public function setLinks( $links ) {
		$this->links = $links;
	}

	/**
	 * @param string $offerName
	 */
	public function setOfferName( $offerName ) {
		$this->offerName = $offerName;
	}

	/**
	 * @param Price $price
	 */
	public function setPrice( $price ) {
		$this->price = $price;
	}

	/**
	 * @param integer $productId
	 */
	public function setProductId( $productId ) {
		$this->productId = $productId;
	}

	/**
	 * @param Seller $seller
	 */
	public function setSeller( $seller ) {
		$this->seller = $seller;
	}

	/**
	 * @param Thumbnail $thumbnail
	 */
	public function setThumbnail( $thumbnail ) {
		$this->thumbnail = $thumbnail;
	}
}