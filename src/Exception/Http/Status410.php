<?php
/**
 * Exception for 410 Gone responses
 *
 * @package Requests
 */

namespace Requests\Exception\Http;

use Requests\Exception\Http;

/**
 * Exception for 410 Gone responses
 *
 * @package Requests
 */
class Status410 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 410;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Gone';
}
