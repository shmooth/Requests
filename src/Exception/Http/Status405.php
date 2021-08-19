<?php
/**
 * Exception for 405 Method Not Allowed responses
 *
 * @package Requests
 */

namespace Requests\Exception\Http;

use Requests\Exception\Http;

/**
 * Exception for 405 Method Not Allowed responses
 *
 * @package Requests
 */
class Status405 extends Http {
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
