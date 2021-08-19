<?php
/**
 * Exception for 401 Unauthorized responses
 *
 * @package Requests
 */

namespace Requests\Exception\Http;

use Requests\Exception\Http;

/**
 * Exception for 401 Unauthorized responses
 *
 * @package Requests
 */
class Status401 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 401;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Unauthorized';
}
