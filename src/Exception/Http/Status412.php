<?php
/**
 * Exception for 412 Precondition Failed responses
 *
 * @package Requests
 */

namespace Requests\Exception\Http;

use Requests\Exception\Http;

/**
 * Exception for 412 Precondition Failed responses
 *
 * @package Requests
 */
class Status412 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 412;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Precondition Failed';
}
