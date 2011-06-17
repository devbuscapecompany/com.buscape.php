<?php
/**
 * Classes relacionadas com a API Lomadee
 * @package	com.buscape.php.api.lomadee
 */

require_once 'com/buscape/php/api/APIOperation.php';

/**
 * Essa classe representa a operação findOfferList da
 * API do Lomadee.
 *
 * Listagem das ofertas disponíveis apenas na Lomadee,
 * por exemplo, notebooks da Dell / Saraiva, livros da
 * Saraiva, etc.
 *
 * Toda a documentação do serviço findOfferList da API
 * BuscaPé se aplica ao serviço findOfferList da API
 * Lomadee. Possui os mesmos filtros, os mesmos resultados,
 * etc, porém os links são CPA. Na API BuscaPé o mesmo serviço
 * de ofertas, os links são CPC, sendo a única diferença entre
 * os serviços.
 * @package	com.buscape.php.api.lomadee
 */
class LomadeeFindOfferListOperation extends APIOperation {
	/**
	 * @var	string
	 */
	private $barcode;

	/**
	 * @var	integer
	 */
	private $categoryId;

	/**
	 * @var	string
	 */
	private $keyword;

	/**
	 * @var	integer
	 */
	private $productId;

	/**
	 * Recupera o código de barras.
	 * @return	string
	 */
	public function getBarCode() {
		return $this->barcode;
	}

	/**
	 * Recupera o ID da categoria.
	 * @return	integer
	 */
	public function getCategoryId() {
		return $this->categoryId;
	}

	/**
	 * Recupera a palavra chave.
	 * @return	string
	 */
	public function getKeyword() {
		return $this->keyword;
	}

	/**
	 * Recupera o ID do produto.
	 * @return	integer
	 */
	public function getProductId() {
		return $this->productId;
	}

	/**
	 * @return	string
	 * @see		APIOperation::getOperationPath()
	 */
	protected function getOperationPath() {
		return '/service/findOfferList/lomadee/';
	}

	/**
	 * Define o código de barras.
	 * @param	string $barcode
	 */
	public function setBarCode( $barcode ) {
		$this->barcode = $barcode;
	}

	/**
	 * Define o ID da categoria.
	 * O parâmetro categoryId deve ser sempre o ID de uma categoria final.
	 * Algumas categorias finais não possuem produtos, apenas ofertas.
	 * Neste caso a resposta do XML terá sua lista de produtos vazia.
	 * Para não perder o vínculo da consulta, o serviço disponibilizará a
	 * URL pronta para consulta das ofertas, informando o mesmo ID da categoria.
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
	 * Define a palavra chave.
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

	/**
	 * Define o ID do produto.
	 * @param	integer $productId
	 * @throws	InvalidArgumentException Se o ID do produto não for um
	 * inteiro.
	 */
	public function setProductId( $productId ) {
		if ( is_int( $productId ) ) {
			$this->productId = $productId;
			$this->apiInterface->getHTTPConnection()->setParam( 'productId' , $productId );
		} else {
			throw new InvalidArgumentException( 'O ID do produto precisa ser um inteiro' );
		}
	}
}