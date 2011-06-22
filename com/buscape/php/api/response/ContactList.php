<?php
/**
 * @brief	Resposta das operações
 * @details	Classes que representam ou convertem o retorno das operações das
 * 			APIs do Grupo BuscaPé em entidades.
 * @package com.buscape.php.api.response
 */

/**
 * @brief	Representação de uma lista de contatos.
 */
class ContactList {
	/**
	 * @var	array
	 */
	private $contact = array();

	/**
	 * Adiciona um contato à lista de contatos
	 * @param	Contact $contact
	 */
	public function addContact( Contact $contact ) {
		$this->contact[] = $contact;
	}

	/**
	 * Recupera o valor de $contact
	 * @return	array
	 */
	public function getContact() {
		return $this->contact;
	}

	/**
	 * @param array $contact
	 */
	public function setContact( $contact ) {
		$this->contact = $contact;
	}
}