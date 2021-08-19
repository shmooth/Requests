<?php
/**
 * Exception for 418 I'm A Teapot responses
 *
 * @see https://tools.ietf.org/html/rfc2324
 * @package Requests
 */

namespace Requests\Exception\Http;

use Requests\Exception\Http;

/**
 * Exception for 418 I'm A Teapot responses
 *
 * @see https://tools.ietf.org/html/rfc2324
 * @package Requests
 */
class Status418 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 418;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = "I'm A Teapot";
}
