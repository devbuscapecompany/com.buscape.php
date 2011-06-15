<?php
/**
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