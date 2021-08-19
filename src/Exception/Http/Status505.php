<?php
/**
 * Exception for 505 HTTP Version Not Supported responses
 *
 * @package Requests
 */

namespace Requests\Exception\Http;

use Requests\Exception\Http;

/**
 * Exception for 505 HTTP Version Not Supported responses
 *
 * @package Requests
 */
class Status505 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 505;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'HTTP Version Not Supported';
}
