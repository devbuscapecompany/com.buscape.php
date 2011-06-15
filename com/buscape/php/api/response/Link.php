<?php
/**
 *
 */
class Link {
	/**
	 * @var	string
	 */
	private $type;

	/**
	 * @var	string
	 */
	private $url;

	/**
	 * Recupera o valor de $type
	 * @return	string
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Recupera o valor de $url
	 * @return	string
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * @param string $type
	 */
	public function setType( $type ) {
		switch ( $type ) {
			case 'category' :
			case 'coupon' :
			case 'product' :
			case 'offer' :
			case 'seller' :
			case 'specification' :
			case 'video' :
			case 'xml' :
				$this->type = $type;
				break;
			default:
				throw new InvalidArgumentException( 'Tipo do link inválido' );
		}
	}

	/**
	 * @param string $url
	 */
	public function setUrl( $url ) {
		$this->url = $url;
	}
}