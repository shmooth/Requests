<?php
/**
 * Exception for 504 Gateway Timeout responses
 *
 * @package Requests
 */

use Requests\Exception\Http;

/**
 * Exception for 504 Gateway Timeout responses
 *
 * @package Requests
 */
class Requests_Exception_HTTP_504 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 504;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Gateway Timeout';
}
