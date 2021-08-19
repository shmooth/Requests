<?php
/**
 * Exception for 500 Internal Server Error responses
 *
 * @package Requests
 */

namespace Requests\Exception\Http;

use Requests\Exception\Http;

/**
 * Exception for 500 Internal Server Error responses
 *
 * @package Requests
 */
class Status500 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 500;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Internal Server Error';
}
