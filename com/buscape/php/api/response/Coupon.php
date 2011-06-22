<?php
/**
 * @brief	Resposta das operações
 * @details	Classes que representam ou convertem o retorno das operações das
 * 			APIs do Grupo BuscaPé em entidades.
 * @package com.buscape.php.api.response
 */

/**
 * @brief	Representação de um cupom.
 */
class Coupon {
	/**
	 * @var	integer
	 */
	private $id;

	/**
	 * @var	Link
	 */
	private $link;

	/**
	 * @var	string
	 */
	private $description;

	/**
	 * @var	string
	 */
	private $type;

	/**
	 * Recupera o valor de $id
	 * @return	integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Recupera o valor de $link
	 * @return	Link
	 */
	public function getLink() {
		return $this->link;
	}

	/**
	 * Recupera o valor de $description
	 * @return	string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Recupera o valor de $type
	 * @return	string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * @param integer $id
	 */
	public function setId( $id ) {
		$this->id = $id;
	}

	/**
	 * @param Link $link
	 */
	public function setLink( Link $link ) {
		$this->link = $link;
	}

	/**
	 * @param string $description
	 */
	public function setDescription( $description ) {
		$this->description = $description;
	}

	/**
	 * @param string $type
	 */
	public function setType( $type ) {
		$this->type = $type;
	}
}