<?php
/**
 * Classes que representam ou convertem o retorno das operações das
 * APIs do Grupo BuscaPé em entidades.
 * @package com.buscape.php.api.response
 */

/**
 * Representação de uma lista de links.
 * @package com.buscape.php.api.response
 */
class LinkList implements IteratorAggregate {
	/**
	 * @var	array
	 */
	private $links = array();

	/**
	 * Adiciona um link.
	 * @param	Link $link
	 */
	public function addLink( Link $link ) {
		$this->links[] = $link;
	}

	/**
	 * @return	Iterator
	 * @see		IteratorAggregate::getIterator()
	 */
	public function getIterator() {
		return new ArrayIterator( $this->links );
	}

	/**
	 * Recupera o valor de $links
	 * @return	array
	 */
	public function getLinks() {
		return $this->links;
	}

	/**
	 * @param array $links
	 */
	public function setLinks( array $links ) {
		foreach ( $links as $link ) {
			$this->addLink( $link );
		}
	}
}