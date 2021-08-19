<?php
/**
 * Exception for 305 Use Proxy responses
 *
 * @package Requests
 */

namespace Requests\Exception\Http;

use Requests\Exception\Http;

/**
 * Exception for 305 Use Proxy responses
 *
 * @package Requests
 */
class Status305 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 305;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Use Proxy';
}
