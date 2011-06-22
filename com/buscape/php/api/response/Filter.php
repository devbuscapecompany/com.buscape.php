<?php
/**
 * @brief	Resposta das operações
 * @details	Classes que representam ou convertem o retorno das operações das
 * 			APIs do Grupo BuscaPé em entidades.
 * @package com.buscape.php.api.response
 */

/**
 * @brief	Representação de um filtro.
 */
class Filter {
	/**
	 * @var	integer
	 */
	private $id;

	/**
	 * @var	string
	 */
	private $name;

	/**
	 * @var	array
	 */
	private $value = array();

	/**
	 * Adiciona um valor ao filtro.
	 * @param FilterValue $value
	 */
	public function addValue( FilterValue $value ) {
		$this->value[] = $value;
	}

	/**
	 * Recupera o valor de $id
	 * @return	integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Recupera o valor de $name
	 * @return	string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Recupera o valor de $value
	 * @return	array
	 */
	public function getValue() {
		return $this->value;
	}

	/**
	 * Recupera um Iterator com os valores do filtro
	 * @return	Iterator
	 */
	public function getValueIterator() {
		return new ArrayIterator( $this->value );
	}

	/**
	 * @param integer $id
	 */
	public function setId( $id ) {
		$this->id = $id;
	}

	/**
	 * @param string $name
	 */
	public function setName( $name ) {
		$this->name = $name;
	}

	/**
	 * @param array $value
	 */
	public function setValue( array $value ) {
		foreach ( $value as $filterValue ) {
			if ( $filterValue instanceof FilterValue ) {
				$this->addValue( $filterValue );
			}
		}
	}
}