<?php
/**
 * Exception for 406 Not Acceptable responses
 *
 * @package Requests
 */

namespace Requests\Exception\Http;

use Requests\Exception\Http;

/**
 * Exception for 406 Not Acceptable responses
 *
 * @package Requests
 */
class Status406 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 406;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Not Acceptable';
}
