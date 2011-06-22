<?php
/**
 * @brief	Resposta das operações
 * @details	Classes que representam ou convertem o retorno das operações das
 * 			APIs do Grupo BuscaPé em entidades.
 * @package com.buscape.php.api.response
 */

/**
 * @brief	Representação do preço de uma oferta
 */
class OfferPrice {
	/**
	 * @var	string
	 */
	private $currency;

	/**
	 * @var	float
	 */
	private $value;

	/**
	 * @var	OfferParcel
	 */
	private $parcel;

	/**
	 * Recupera o valor de $currency
	 * @return	string
	 */
	public function getCurrency() {
		return $this->currency;
	}

	/**
	 * Recupera o valor de $value
	 * @return	float
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * Recupera o valor de $parcel
	 * @return	OfferParcel
	 */
	public function getParcel() {
		return $this->parcel;
	}

	/**
	 * @param string $currency
	 */
	public function setCurrency( $currency ) {
		$this->currency = $currency;
	}

	/**
	 * @param float $value
	 */
	public function setValue( $value ) {
		$this->value = $value;
	}

	/**
	 * @param OfferParcel $parcel
	 */
	public function setParcel( OfferParcel $parcel ) {
		$this->parcel = $parcel;
	}
}