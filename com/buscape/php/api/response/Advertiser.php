<?php
/**
 * @brief	Resposta das operações
 * @details	Classes que representam ou convertem o retorno das operações das
 * 			APIs do Grupo BuscaPé em entidades.
 * @package com.buscape.php.api.response
 */

/**
 * @brief	Representação de uma lista de anunciantes
 */
class Advertiser {
	/**
	 * @var	integer
	 */
	private $id;

	/**
	 * @var	string
	 */
	private $name;

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
}