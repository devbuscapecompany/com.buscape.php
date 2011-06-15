<?php
/**
 *
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