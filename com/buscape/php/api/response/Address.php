<?php
/**
 * @brief	Resposta das operações
 * @details	Classes que representam ou convertem o retorno das operações das
 * 			APIs do Grupo BuscaPé em entidades.
 * @package com.buscape.php.api.response
 */

/**
 * @brief	Representação de um endereço.
 */
class Address {
	/**
	 * @var	string
	 */
	private $name;

	/**
	 * @var	string
	 */
	private $postalArea;

	/**
	 * @var	string
	 */
	private $complement;

	/**
	 * @var	string
	 */
	private $district;

	/**
	 * @var	string
	 */
	private $city;

	/**
	 * @var	string
	 */
	private $state;

	/**
	 * @var	string
	 */
	private $postalCode;

	/**
	 * @var	string
	 */
	private $fone;

	/**
	 * @var	Map
	 */
	private $map;

	/**
	 * Recupera o valor de $name
	 * @return	string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Recupera o valor de $postalArea
	 * @return	string
	 */
	public function getPostalArea() {
		return $this->postalArea;
	}

	/**
	 * Recupera o valor de $complement
	 * @return	string
	 */
	public function getComplement() {
		return $this->complement;
	}

	/**
	 * Recupera o valor de $district
	 * @return	string
	 */
	public function getDistrict() {
		return $this->district;
	}

	/**
	 * Recupera o valor de $city
	 * @return	string
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * Recupera o valor de $state
	 * @return	string
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Recupera o valor de $postalCode
	 * @return	string
	 */
	public function getPostalCode() {
		return $this->postalCode;
	}

	/**
	 * Recupera o valor de $fone
	 * @return	string
	 */
	public function getFone() {
		return $this->fone;
	}

	/**
	 * Recupera o valor de $map
	 * @return	Map
	 */
	public function getMap() {
		return $this->map;
	}

	/**
	 * @param string $name
	 */
	public function setName( $name ) {
		$this->name = $name;
	}

	/**
	 * @param string $postalArea
	 */
	public function setPostalArea( $postalArea ) {
		$this->postalArea = $postalArea;
	}

	/**
	 * @param string $complement
	 */
	public function setComplement( $complement ) {
		$this->complement = $complement;
	}

	/**
	 * @param string $district
	 */
	public function setDistrict( $district ) {
		$this->district = $district;
	}

	/**
	 * @param string $city
	 */
	public function setCity( $city ) {
		$this->city = $city;
	}

	/**
	 * @param string $state
	 */
	public function setState( $state ) {
		$this->state = $state;
	}

	/**
	 * @param string $postalCode
	 */
	public function setPostalCode( $postalCode ) {
		$this->postalCode = $postalCode;
	}

	/**
	 * @param string $fone
	 */
	public function setFone( $fone ) {
		$this->fone = $fone;
	}

	/**
	 * @param Map $map
	 */
	public function setMap( Map $map ) {
		$this->map = $map;
	}
}