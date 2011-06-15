<?php
require_once 'com/buscape/php/api/APIOperation.php';

/**
 * Essa classe representa a operação topProducts da
 * API do BuscaPé.
 */
class BuscapeTopProductsOperation extends APIOperation {
	/**
	 * @return	string
	 * @see		APIOperation::getOperationPath()
	 */
	protected function getOperationPath() {
		return '/service/topProducts/';
	}
}
