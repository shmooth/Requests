<?php
/**
 * Exception for 402 Payment Required responses
 *
 * @package Requests
 */

namespace Requests\Exception\Http;

use Requests\Exception\Http;

/**
 * Exception for 402 Payment Required responses
 *
 * @package Requests
 */
class Status402 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 402;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Payment Required';
}
