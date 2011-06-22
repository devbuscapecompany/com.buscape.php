<?php
/**
 * @brief	Resposta das operações
 * @details	Classes que representam ou convertem o retorno das operações das
 * 			APIs do Grupo BuscaPé em entidades.
 * @package com.buscape.php.api.response
 */

/**
 * @brief	Representação de uma lista de endereços
 */
class AddressList implements IteratorAggregate {
	/**
	 * @var	array
	 */
	private $address = array();

	/**
	 * Adiciona um endereço
	 * @param	Address $address
	 */
	public function addAddress( Address $address ) {
		$this->address[] = $address;
	}

	/**
	 * Recupera o valor de $address
	 * @return	array
	 */
	public function getAddress() {
		return $this->address;
	}

	/**
	 * @return	Iterator
	 * @see		IteratorAggregate::getIterator()
	 */
	public function getIterator() {
		return new ArrayIterator( $this->address );
	}

	/**
	 * @param array $address
	 */
	public function setAddress( array $addresses ) {
		foreach ( $addresses as $address ) {
			if ( $address instanceof Address ) {
				$this->addAddress( $address );
			}
		}
	}
}