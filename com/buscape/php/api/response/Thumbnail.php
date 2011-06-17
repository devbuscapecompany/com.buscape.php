<?php
/**
 * Classes que representam ou convertem o retorno das operações das
 * APIs do Grupo BuscaPé em entidades.
 * @package com.buscape.php.api.response
 */

/**
 * Representação de uma imagem ilustrativa de produto, oferta, etc..
 * @package com.buscape.php.api.response
 */
class Thumbnail {
	/**
	 * @var	string
	 */
	private $height;

	/**
	 * @var	string
	 */
	private $url;

	/**
	 * @var	string
	 */
	private $width;

	/**
	 * Recupera o valor de $height
	 * @return	string
	 */
	public function getHeight() {
		return $this->height;
	}

	/**
	 * Recupera o valor de $url
	 * @return	string
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * Recupera o valor de $width
	 * @return	string
	 */
	public function getWidth() {
		return $this->width;
	}

	/**
	 * @param string $height
	 */
	public function setHeight( $height ) {
		$this->height = $height;
	}

	/**
	 * @param string $url
	 */
	public function setUrl( $url ) {
		$this->url = $url;
	}

	/**
	 * @param string $width
	 */
	public function setWidth( $width ) {
		$this->width = $width;
	}
}