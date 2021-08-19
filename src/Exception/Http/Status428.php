<?php
/**
 * Exception for 428 Precondition Required responses
 *
 * @see https://tools.ietf.org/html/rfc6585
 * @package Requests
 */

namespace Requests\Exception\Http;

use Requests\Exception\Http;

/**
 * Exception for 428 Precondition Required responses
 *
 * @see https://tools.ietf.org/html/rfc6585
 * @package Requests
 */
class Status428 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 428;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Precondition Required';
}
