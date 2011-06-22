<?php
/**
 * @brief	Resposta das operações
 * @details	Classes que representam ou convertem o retorno das operações das
 * 			APIs do Grupo BuscaPé em entidades.
 * @package com.buscape.php.api.response
 */

/**
 * @brief	Representação de uma avaliação
 */
class Rating {
	/**
	 * @var	EBitRating
	 */
	private $eBitRating;

	/**
	 * @var	UserAverageRating
	 */
	private $userAverageRating;

	/**
	 * Recupera o valor de $eBitRating
	 * @return	EBitRating
	 */
	public function getEBitRating() {
		return $this->eBitRating;
	}

	/**
	 * Recupera o valor de $userAverageRating
	 * @return	UserAverageRating
	 */
	public function getUserAverageRating() {
		return $this->userAverageRating;
	}

	/**
	 * @param EBitRating $eBitRating
	 */
	public function setEBitRating( EBitRating $eBitRating ) {
		$this->eBitRating = $eBitRating;
	}

	/**
	 * @param UserAverageRating $userAverageRating
	 */
	public function setUserAverageRating( UserAverageRating $userAverageRating ) {
		$this->userAverageRating = $userAverageRating;
	}
}