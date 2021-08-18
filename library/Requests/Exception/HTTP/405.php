<?php
/**
 * Exception for 405 Method Not Allowed responses
 *
 * @package Requests
 */

use Requests\Exception\Http;

/**
 * Exception for 405 Method Not Allowed responses
 *
 * @package Requests
 */
class Requests_Exception_HTTP_405 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 405;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Method Not Allowed';
}
