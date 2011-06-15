<?php
/**
 */
class Contact {
	/**
	 * @var	string
	 */
	private $label;

	/**
	 * @var	string
	 */
	private $value;

	/**
	 * Recupera o valor de $label
	 * @return	string
	 */
	public function getLabel() {
		return $this->label;
	}

	/**
	 * Recupera o valor de $value
	 * @return	string
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * @param string $label
	 */
	public function setLabel( $label ) {
		$this->label = $label;
	}

	/**
	 * @param string $value
	 */
	public function setValue( $value ) {
		$this->value = $value;
	}
}