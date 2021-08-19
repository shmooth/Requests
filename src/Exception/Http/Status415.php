<?php
/**
 * Exception for 415 Unsupported Media Type responses
 *
 * @package Requests
 */

namespace Requests\Exception\Http;

use Requests\Exception\Http;

/**
 * Exception for 415 Unsupported Media Type responses
 *
 * @package Requests
 */
class Status415 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 415;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Unsupported Media Type';
}
