<?php
/**
 * Exception for 414 Request-URI Too Large responses
 *
 * @package Requests
 */

namespace Requests\Exception\Http;

use Requests\Exception\Http;

/**
 * Exception for 414 Request-URI Too Large responses
 *
 * @package Requests
 */
class Status414 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 414;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Request-URI Too Large';
}
