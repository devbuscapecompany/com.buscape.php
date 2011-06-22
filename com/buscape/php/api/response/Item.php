<?php
/**
 * @brief	Resposta das operações
 * @details	Classes que representam ou convertem o retorno das operações das
 * 			APIs do Grupo BuscaPé em entidades.
 * @package com.buscape.php.api.response
 */

/**
 * @brief	Representação de um Item.
 */
class Item {
	/**
	 * @var	string
	 */
	private $label;

	/**
	 * @var	array
	 */
	private $value = array();

	/**
	 * Adiciona um valor.
	 * @param	string $value
	 */
	public function addValue( $value ) {
		$this->value[] = $value;
	}

	/**
	 * Recupera o valor de $label
	 * @return	string
	 */
	public function getLabel() {
		return $this->label;
	}

	/**
	 * Recupera o valor de $value
	 * @return	array
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * Recupera um Iterator de valor.
	 * @return	Iterator
	 */
	public function getValueIterator() {
		return new ArrayIterator( $this->value );
	}

	/**
	 * @param string $label
	 */
	public function setLabel( $label ) {
		$this->label = $label;
	}

	/**
	 * @param array $value
	 */
	public function setValue( array $value ) {
		$this->value = $value;
	}
}