<?php
/**
 * @brief	Resposta das operações
 * @details	Classes que representam ou convertem o retorno das operações das
 * 			APIs do Grupo BuscaPé em entidades.
 * @package com.buscape.php.api.response
 */

/**
 * @brief	Representação de um preço de oferta que é parcelado.
 */
class OfferParcel {
	/**
	 * @var	float
	 */
	private $interest;

	/**
	 * @var	integer
	 */
	private $number;

	/**
	 * @var	float
	 */
	private $value;

	/**
	 * Recupera o valor de $interest
	 * @return	float
	 */
	public function getInterest() {
		return $this->interest;
	}

	/**
	 * Recupera o valor de $number
	 * @return	integer
	 */
	public function getNumber() {
		return $this->number;
	}

	/**
	 * Recupera o valor de $value
	 * @return	float
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * @param float $interest
	 */
	public function setInterest( $interest ) {
		$this->interest = $interest;
	}

	/**
	 * @param integer $number
	 */
	public function setNumber( $number ) {
		$this->number = $number;
	}

	/**
	 * @param float $value
	 */
	public function setValue( $value ) {
		$this->value = $value;
	}
}