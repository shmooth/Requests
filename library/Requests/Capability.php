<?php
/**
 * Capability interface declaring the known capabilities
 *
 * @package Requests
 * @subpackage Capability
 */

/**
 * Capability interface declaring the known capabilities
 *
 * This is used as discovery to figure out which capabilities can be queried.
 *
 * @package Requests
 * @subpackage Capability
 */
class Requests_Capability {

	/**
	 * Support for SSL.
	 *
	 * @var string
	 */
	const SSL = 'ssl';

	/**
	 * Collection of all known capabilities.
	 *
	 * @var array<string>
	 */
	const ALL = array(
		self::SSL,
	);
}
