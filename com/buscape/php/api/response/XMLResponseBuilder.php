<?php
require_once 'com/buscape/php/api/response/ResponseBuilder.php';

/**
 * Constroi o objeto de resultado de uma resposta no formato
 * XML.
 */
class XMLResponseBuilder extends ResponseBuilder {
	/**
	 * @param	string $content
	 * @return	ResponseBuilder
	 * @see		ResponseBuilder::parse()
	 */
	public function parse( $content ) {

		return $this;
	}
}