<?php
/**
 * @brief	Classes relacionadas com a API BuscaPé
 * @package	com.buscape.php.api.buscape
 */

require_once 'com/buscape/php/api/APIOperation.php';

/**
 * @brief	Produtos populares
 * @details	Essa classe representa a operação topProducts da
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
