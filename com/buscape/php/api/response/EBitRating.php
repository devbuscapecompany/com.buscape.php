<?php
/**
 * @brief	Resposta das operações
 * @details	Classes que representam ou convertem o retorno das operações das
 * 			APIs do Grupo BuscaPé em entidades.
 * @package com.buscape.php.api.response
 */

/**
 * @brief	Representação de uma avaliação de usuários no eBit
 */
class EBitRating {
	/**
	 * @var	integer
	 */
	private $numComments;

	/**
	 * @var	float
	 */
	private $rating;

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
}