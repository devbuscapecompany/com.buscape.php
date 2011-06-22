<?php
/**
 * @brief	Resposta das operações
 * @details	Classes que representam ou convertem o retorno das operações das
 * 			APIs do Grupo BuscaPé em entidades.
 * @package com.buscape.php.api.response
 */

/**
 * @brief	Representação de uma especificação.
 */
class Specification {
	/**
	 * @var	array
	 */
	private $item = array();

	/**
	 * @var	LinkList
	 */
	private $links;

	/**
	 * Adiciona um item
	 * @param	Item $item
	 */
	public function addItem( Item $item ) {
		$this->item[] = $item;
	}

	/**
	 * Recupera o valor de $item
	 * @return	array
	 */
	public function getItem() {
		return $this->item;
	}

	/**
	 * Recupera um Iterator de Item
	 * @return	Iterator
	 */
	public function getItemIterator() {
		return new ArrayIterator( $this->item );
	}

	/**
	 * Recupera o valor de $links
	 * @return	LinkList
	 */
	public function getLinks() {
		return $this->links;
	}

	/**
	 * @param array $item
	 */
	public function setItem( array $items ) {
		foreach ( $items as $item ) {
			if ( $item instanceof Item ) {
				$this->addItem( $item );
			}
		}
	}

	/**
	 * @param LinkList $links
	 */
	public function setLinks( LinkList $links ) {
		$this->links = $links;
	}
}