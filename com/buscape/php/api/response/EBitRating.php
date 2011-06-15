<?php
/**
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