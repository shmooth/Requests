<?php
/**
 * Exception for 417 Expectation Failed responses
 *
 * @package Requests
 */

namespace Requests\Exception\Http;

use Requests\Exception\Http;

/**
 * Exception for 417 Expectation Failed responses
 *
 * @package Requests
 */
class Status417 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 417;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Expectation Failed';
}
