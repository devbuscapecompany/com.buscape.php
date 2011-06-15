<?php
/**
 *
 */
class FilterList implements IteratorAggregate {
	/**
	 * @var	array
	 */
	private $filters = array();

	/**
	 * Adiciona um filtro.
	 * @param	Filter $filter
	 */
	public function addFilter( Filter $filter ) {
		$this->filters[] = $filter;
	}

	/**
	 * Recupera o valor de $filters
	 * @return	array
	 */
	public function getFilters() {
		return $this->filters;
	}

	/**
	 * @return	Iterator
	 * @see		IteratorAggregate::getIterator()
	 */
	public function getIterator() {
		return new ArrayIterator( $this->filters );
	}

	/**
	 * @param array $filters
	 */
	public function setFilters( array $filters ) {
		foreach ( $filters as $filter ) {
			if ( $filter instanceof Filter ) {
				$this->addFilter( $filter );
			}
		}
	}
}