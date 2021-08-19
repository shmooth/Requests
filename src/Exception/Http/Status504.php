<?php
/**
 * Exception for 504 Gateway Timeout responses
 *
 * @package Requests
 */

namespace Requests\Exception\Http;

use Requests\Exception\Http;

/**
 * Exception for 504 Gateway Timeout responses
 *
 * @package Requests
 */
class Status504 extends Http {
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
