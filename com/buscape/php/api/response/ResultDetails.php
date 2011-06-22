<?php
/**
 * @brief	Resposta das operações
 * @details	Classes que representam ou convertem o retorno das operações das
 * 			APIs do Grupo BuscaPé em entidades.
 * @package com.buscape.php.api.response
 */

/**
 * @brief	Representação dos detalhes do resultado de uma operação.
 */
class ResultDetails {
	/**
	 * @var	string
	 */
	private $applicationId;

	/**
	 * @var	string
	 */
	private $applicationPath;

	/**
	 * @var	string
	 */
	private $applicationVersion;

	/**
	 * @var	integer
	 */
	private $code;

	/**
	 * @var	integer
	 */
	private $date;

	/**
	 * @var	integer
	 */
	private $elapsedTime;

	/**
	 * @var	string
	 */
	private $message;

	/**
	 * @var	string
	 */
	private $status;

	/**
	 * Recupera o valor de $applicationId
	 * @return	string
	 */
	public function getApplicationId() {
		return $this->applicationId;
	}

	/**
	 * Recupera o valor de $applicationPath
	 * @return	string
	 */
	public function getApplicationPath() {
		return $this->applicationPath;
	}

	/**
	 * Recupera o valor de $applicationVersion
	 * @return	string
	 */
	public function getApplicationVersion() {
		return $this->applicationVersion;
	}

	/**
	 * Recupera o valor de $code
	 * @return	integer
	 */
	public function getCode() {
		return $this->code;
	}

	/**
	 * Recupera o valor de $date
	 * @return	integer
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * Recupera o valor de $elapsedTime
	 * @return	integer
	 */
	public function getElapsedTime() {
		return $this->elapsedTime;
	}

	/**
	 * Recupera o valor de $message
	 * @return	string
	 */
	public function getMessage() {
		return $this->message;
	}

	/**
	 * Recupera o valor de $status
	 * @return	string
	 */
	public function getStatus() {
		return $this->status;
	}

	/**
	 * @param string $applicationId
	 */
	public function setApplicationId( $applicationId ) {
		$this->applicationId = $applicationId;
	}

	/**
	 * @param string $applicationPath
	 */
	public function setApplicationPath( $applicationPath ) {
		$this->applicationPath = $applicationPath;
	}

	/**
	 * @param string $applicationVersion
	 */
	public function setApplicationVersion( $applicationVersion ) {
		$this->applicationVersion = $applicationVersion;
	}

	/**
	 * @param integer $code
	 */
	public function setCode( $code ) {
		$this->code = $code;
	}

	/**
	 * @param integer $date
	 */
	public function setDate( $date ) {
		$this->date = $date;
	}

	/**
	 * @param integer $elapsedTime
	 */
	public function setElapsedTime( $elapsedTime ) {
		$this->elapsedTime = $elapsedTime;
	}

	/**
	 * @param string $message
	 */
	public function setMessage( $message ) {
		$this->message = $message;
	}

	/**
	 * @param string $status
	 */
	public function setStatus( $status ) {
		$this->status = $status;
	}
}