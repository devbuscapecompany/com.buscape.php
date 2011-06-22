<?php
/**
 * @brief	Resposta das operações
 * @details	Classes que representam ou convertem o retorno das operações das
 * 			APIs do Grupo BuscaPé em entidades.
 * @package com.buscape.php.api.response
 */

/**
 * @brief	Representação de uma categoria.
 */
class Category {
	/**
	 * @var	FilterList
	 */
	private $filters;

	/**
	 * @var	boolean
	 */
	private $hasOffer;

	/**
	 * @var	integer
	 */
	private $id;

	/**
	 * @var	boolean
	 */
	private $isFinal;

	/**
	 * @var	LinkList
	 */
	private $links;

	/**
	 * @var	string
	 */
	private $name;

	/**
	 * @var	integer
	 */
	private $parentCategoryId;

	/**
	 * @var	Thumbnail
	 */
	private $thumbnail;

	/**
	 * Adiciona um filtro.
	 * @param	Filter $filter
	 */
	public function addFilter( Filter $filter ) {
		$this->filters[] = $filter;
	}

	/**
	 * Recupera os filtros
	 * @return	FilterList
	 */
	public function getFilters() {
		return $this->filters;
	}

	/**
	 * Recupera o valor de $id
	 * @return	integer
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Recupera os links
	 * @return	LinkList
	 */
	public function getLinks() {
		return $this->links;
	}

	/**
	 * Recupera o valor de $name
	 * @return	string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Recupera o valor de $parentCategoryId
	 * @return	integer
	 */
	public function getParentCategoryId() {
		return $this->parentCategoryId;
	}

	/**
	 * Recupera o valor de $thumbnail
	 * @return	Thumbnail
	 */
	public function getThumbnail() {
		return $this->thumbnail;
	}

	/**
	 * Verifica se a categoria possui ofertas
	 * @return	boolean
	 */
	public function hasOffer() {
		return $this->hasOffer;
	}

	/**
	 * Verifica se a categoria é final
	 * @return	boolean
	 */
	public function isFinal() {
		return $this->isFinal;
	}

	/**
	 * @param FilterList $filters
	 */
	public function setFilters( FilterList $filters ) {
		$this->filters = $filters;
	}

	/**
	 * @param boolean $hasOffer
	 */
	public function setHasOffer( $hasOffer ) {
		$this->hasOffer = !!$hasOffer;
	}

	/**
	 * @param integer $id
	 */
	public function setId( $id ) {
		$this->id = $id;
	}

	/**
	 * @param boolean $isFinal
	 */
	public function setIsFinal( $isFinal ) {
		$this->isFinal = !!$isFinal;
	}

	/**
	 * @param LinkList $links
	 */
	public function setLinks( LinkList $links ) {
		$this->links = $links;
	}

	/**
	 * @param string $name
	 */
	public function setName( $name ) {
		$this->name = $name;
	}

	/**
	 * @param integer $parentCategoryId
	 */
	public function setParentCategoryId( $parentCategoryId ) {
		$this->parentCategoryId = $parentCategoryId;
	}

	/**
	 * @param Thumbnail $thumbnail
	 */
	public function setThumbnail( Thumbnail $thumbnail ) {
		$this->thumbnail = $thumbnail;
	}
}