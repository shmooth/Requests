<?php
/**
 * Exception for 503 Service Unavailable responses
 *
 * @package Requests
 */

namespace Requests\Exception\Http;

use Requests\Exception\Http;

/**
 * Exception for 503 Service Unavailable responses
 *
 * @package Requests
 */
class Status503 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 503;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Service Unavailable';
}
