<?php
/**
 * Exception for 409 Conflict responses
 *
 * @package Requests
 */

namespace Requests\Exception\Http;

use Requests\Exception\Http;

/**
 * Exception for 409 Conflict responses
 *
 * @package Requests
 */
class Status409 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 409;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Conflict';
}
