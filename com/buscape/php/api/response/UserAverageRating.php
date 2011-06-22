<?php
/**
 * @brief	Resposta das operações
 * @details	Classes que representam ou convertem o retorno das operações das
 * 			APIs do Grupo BuscaPé em entidades.
 * @package com.buscape.php.api.response
 */

/**
 * @brief	Representação da avaliação média dos usuários
 */
class UserAverageRating {
	/**
	 * @var	LinkList
	 */
	private $links;
	/**
	 * @var	integer
	 */
	private $numComments;

	/**
	 * @var	float
	 */
	private $rating;

	/**
	 * @var	Specifiation
	 */
	private $specification;

	/**
	 * Adiciona um link.
	 * @param	Link $link
	 */
	public function addLink( Link $link ) {
		$this->links[] = $link;
	}

	/**
	 * Recupera o valor de $links
	 * @return	LinkList
	 */
	public function getLinks() {
		return $this->links;
	}

	/**
	 * Recupera o valor de $numComments
	 * @return	integer
	 */
	public function getNumComments() {
		return $this->numComments;
	}

	/**
	 * Recupera o valor de $rating
	 * @return	float
	 */
	public function getRating() {
		return $this->rating;
	}

	/**
	 * Recupera o valor de $specification
	 * @return	Specifiation
	 */
	public function getSpecification() {
		return $this->specification;
	}

	/**
	 * @param LinkList $links
	 */
	public function setLinks( LinkList $links ) {
		$this->links = $links;
	}

	/**
	 * @param integer $numComments
	 */
	public function setNumComments( $numComments ) {
		$this->numComments = $numComments;
	}

	/**
	 * @param float $rating
	 */
	public function setRating( $rating ) {
		$this->rating = $rating;
	}

	/**
	 * @param Specifiation $specification
	 */
	public function setSpecification( Specification $specification ) {
		$this->specification = $specification;
	}
}