<?php
/**
 *
 */
class Map {
	/**
	 * @var	float
	 */
	private $latitude;

	/**
	 * @var	float
	 */
	private $longitude;

	/**
	 * Recupera o valor de $latitude
	 * @return	float
	 */
	public function getLatitude() {
		return $this->latitude;
	}

	/**
	 * Recupera o valor de $longitude
	 * @return	float
	 */
	public function getLongitude() {
		return $this->longitude;
	}

	/**
	 * @param float $latitude
	 */
	public function setLatitude( $latitude ) {
		$this->latitude = $latitude;
	}

	/**
	 * @param float $longitude
	 */
	public function setLongitude( $longitude ) {
		$this->longitude = $longitude;
	}
}