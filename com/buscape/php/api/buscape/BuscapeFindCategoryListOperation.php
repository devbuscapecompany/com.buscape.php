<?php
/**
 * @brief	Classes relacionadas com a API BuscaPé
 * @package	com.buscape.php.api.buscape
 */

require_once 'com/buscape/php/api/APIOperation.php';

/**
 * @brief	Lista de categorias
 * @details	Essa classe representa a operação findCategoryList
 * da API do BuscaPé.
 *
 * O serviço de procura de categorias permite que sejam
 * exibidas informações relativas às categorias. É possível
 * obter categorias, produtos ou ofertas informando apenas
 * um ID de categoria.
 *
 * Existem três tipos de categorias:
 *
 * @li	Categoria raiz - É o primeiro nível da árvore. Através
 * dela obtemos as subcategorias.
 * @li	Subcategoria - É o segundo nível da árvore, em que podemos
 * obter outras subcategorias ou categorias finais.
 * @li	Categoria final - É o último nível da árvore, estando relacionado
 * a uma lista de produtos, ofertas ou serviços.
 */
class BuscapeFindCategoryListOperation extends APIOperation {
	/**
	 * @var	integer
	 */
	private $categoryId;

	/**
	 * @var	string
	 */
	private $keyword;

	/**
	 * @brief	Recupera o ID da categoria.
	 * @return	integer
	 */
	public function getCategoryId() {
		return $this->categoryId;
	}

	/**
	 * @brief	Recupera a palavra chave.
	 * @return	string
	 */
	public function getKeyword() {
		return $this->keyword;
	}

	/**
	 * @return	string
	 * @see		APIOperation::getOperationPath()
	 */
	protected function getOperationPath() {
		return '/service/findCategoryList/';
	}

	/**
	 * @brief	Define o ID da categoria.
	 * @param	integer $categoryId
	 * @throws	InvalidArgumentException Se o ID da categoria não for
	 * um inteiro
	 */
	public function setCategoryId( $categoryId ) {
		if ( is_int( $categoryId ) ) {
			$this->categoryId = $categoryId;
			$this->apiInterface->getHTTPConnection()->setParam( 'categoryId' , $categoryId );
		} else {
			throw new InvalidArgumentException( 'O ID da categoria precisa ser um inteiro' );
		}
	}

	/**
	 * @brief	Define a palavra chave.
	 * @details	O parâmetro keyword sempre retornará uma lista de
	 * subcategorias por exemplo, fazendo uma pesquisa por keyword=LG,
	 * teremos apenas a lista de subcategorias, sendo que as primeiras
	 * são as mais relevantes.
	 * @param	string $keyword
	 * @throws	InvalidArgumentException Se a palavra chave definida
	 * não for uma string ou um valor scalar.
	 */
	public function setKeyword( $keyword ) {
		if ( is_scalar( $keyword ) ) {
			$this->keyword = (string) $keyword;
			$this->apiInterface->getHTTPConnection()->setParam( 'keyword' , $keyword );
		} else {
			throw new InvalidArgumentException( 'A palavra chave é inválida' );
		}
	}
}