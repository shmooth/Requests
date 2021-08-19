<?php
/**
 * Exception for 304 Not Modified responses
 *
 * @package Requests
 */

namespace Requests\Exception\Http;

use Requests\Exception\Http;

/**
 * Exception for 304 Not Modified responses
 *
 * @package Requests
 */
class Status304 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 304;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Not Modified';
}
