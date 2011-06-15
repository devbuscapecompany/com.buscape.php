<?php
/**
 */
class FilterValue {
	/**
	 * @var	integer
	 */
	private $id;

	/**
	 * @var	string
	 */
	private $value;

	/**
	 * Recupera o valor de $id
	 * @return	integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Recupera o valor de $value
	 * @return	string
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * @param integer $id
	 */
	public function setId( $id ) {
		$this->id = $id;
	}

	/**
	 * @param string $value
	 */
	public function setValue( $value ) {
		$this->value = $value;
	}
}