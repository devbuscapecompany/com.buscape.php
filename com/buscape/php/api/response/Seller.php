<?php
/**
 * @brief	Resposta das operações
 * @details	Classes que representam ou convertem o retorno das operações das
 * 			APIs do Grupo BuscaPé em entidades.
 * @package com.buscape.php.api.response
 */

/**
 * @brief	Representação de um vendedor.
 */
class Seller {
	/**
	 * @var	boolean
	 */
	private $digitalPayment;

	/**
	 * @var	boolean
	 */
	private $isTrustedStore;

	/**
	 * @var	integer
	 */
	private $id;

	/**
	 * @var	string
	 */
	private $sellerName;

	/**
	 * @var	Thumbnail
	 */
	private $thumbnail;

	/**
	 * @var	LinkList
	 */
	private $links;

	/**
	 * @var	array
	 */
	private $extra;

	/**
	 * @var	ContactList
	 */
	private $contacts;

	/**
	 * @var	Rating
	 */
	private $rating;

	/**
	 * @var	Coupon
	 */
	private $coupon;

	/**
	 * @var	AddressList
	 */
	private $addresses;

	/**
	 * Recupera o valor de $id
	 * @return	integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Recupera o valor de $sellerName
	 * @return	string
	 */
	public function getSellerName() {
		return $this->sellerName;
	}

	/**
	 * Recupera o valor de $thumbnail
	 * @return	Thumbnail
	 */
	public function getThumbnail() {
		return $this->thumbnail;
	}

	/**
	 * Recupera o valor de $links
	 * @return	LinkList
	 */
	public function getLinks() {
		return $this->links;
	}

	/**
	 * Recupera o valor de $extra
	 * @return	array
	 */
	public function getExtra() {
		return $this->extra;
	}

	/**
	 * Recupera o valor de $contacts
	 * @return	ContactList
	 */
	public function getContacts() {
		return $this->contacts;
	}

	/**
	 * Recupera o valor de $rating
	 * @return	Rating
	 */
	public function getRating() {
		return $this->rating;
	}

	/**
	 * Recupera o valor de $coupon
	 * @return	Coupon
	 */
	public function getCoupon() {
		return $this->coupon;
	}

	/**
	 * Recupera o valor de $addresses
	 * @return	AddressList
	 */
	public function getAddresses() {
		return $this->addresses;
	}

	/**
	 * Recupera o valor de $digitalPayment
	 * @return	boolean
	 */
	public function hasDigitalPayment() {
		return $this->digitalPayment;
	}

	/**
	 * Recupera o valor de $isTrustedStore
	 * @return	boolean
	 */
	public function isTrustedStore() {
		return $this->isTrustedStore;
	}

	/**
	 * @param boolean $digitalPayment
	 */
	public function setDigitalPayment( $digitalPayment ) {
		$this->digitalPayment = $digitalPayment;
	}

	/**
	 * @param boolean $isTrustedStore
	 */
	public function setIsTrustedStore( $isTrustedStore ) {
		$this->isTrustedStore = $isTrustedStore;
	}

	/**
	 * @param integer $id
	 */
	public function setId( $id ) {
		$this->id = $id;
	}

	/**
	 * @param string $sellerName
	 */
	public function setSellerName( $sellerName ) {
		$this->sellerName = $sellerName;
	}

	/**
	 * @param Thumbnail $thumbnail
	 */
	public function setThumbnail( Thumbnail $thumbnail ) {
		$this->thumbnail = $thumbnail;
	}

	/**
	 * @param LinkList $links
	 */
	public function setLinks( LinkList $links ) {
		$this->links = $links;
	}

	/**
	 * @param array $extra
	 */
	public function setExtra( $extra ) {
		$this->extra = $extra;
	}

	/**
	 * @param ContactList $contacts
	 */
	public function setContacts( ContactList $contacts ) {
		$this->contacts = $contacts;
	}

	/**
	 * @param Rating $rating
	 */
	public function setRating( Rating $rating ) {
		$this->rating = $rating;
	}

	/**
	 * @param Coupon $coupon
	 */
	public function setCoupon( Coupon $coupon ) {
		$this->coupon = $coupon;
	}

	/**
	 * @param AddressList $addresses
	 */
	public function setAddresses( AddressList $addresses ) {
		$this->addresses = $addresses;
	}
}