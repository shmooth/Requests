<?php
/**
 * Exception for 404 Not Found responses
 *
 * @package Requests
 */

namespace Requests\Exception\Http;

use Requests\Exception\Http;

/**
 * Exception for 404 Not Found responses
 *
 * @package Requests
 */
class Status404 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 404;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Not Found';
}
