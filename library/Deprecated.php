<?php
/**
 * Backwards compatibility layer for Requests.
 *
 * Allows for Composer to autoload the old PSR-0 class names based on a classmap.
 *
 * All classes in this file are deprecated.
 * Please see the Changelog for the 2.0.0 release for upgrade notes.
 *
 * @package Requests
 *
 * @deprecated 2.0.0 Use the PSR-4 class names instead.
 */

/*
 * Integrators who cannot yet upgrade to the PSR-4 class names can silence deprecations
 * by defining a `REQUESTS_SILENCE_PSR0_DEPRECATIONS` constant and setting it to `true`.
 * The constant needs to be defined before the first deprecated class is requested
 * via this Composer autoload file.
 */
if (!defined('REQUESTS_SILENCE_PSR0_DEPRECATIONS') || REQUESTS_SILENCE_PSR0_DEPRECATIONS !== true) {
	// phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_trigger_error
	trigger_error(
		'The PSR-0 `Requests_...` class names in the Request library are deprecated.'
		. ' Switch to the PSR-4 `Requests\...` classnames at your earliest convenience.',
		E_USER_DEPRECATED
	);
}

if (interface_exists('Requests_Auth') === false) {
	interface Requests_Auth extends Requests\Auth {}
}
if (interface_exists('Requests_Hooker') === false) {
	interface Requests_Hooker extends Requests\Hooker {}
}
if (interface_exists('Requests_Proxy') === false) {
	interface Requests_Proxy extends Requests\Proxy {}
}
if (interface_exists('Requests_Transport') === false) {
	interface Requests_Transport extends Requests\Transport {}
}

if (class_exists('Requests_Cookie') === false) {
	class Requests_Cookie extends Requests\Cookie {}
}
if (class_exists('Requests_Exception') === false) {
	class Requests_Exception extends Requests\Exception {}
}
if (class_exists('Requests_Hooks') === false) {
	class Requests_Hooks extends Requests\Hooks {}
}
if (class_exists('Requests_IDNAEncoder') === false) {
	class Requests_IDNAEncoder extends Requests\IdnaEncoder {}
}
if (class_exists('Requests_IPv6') === false) {
	class Requests_IPv6 extends Requests\Ipv6 {}
}
if (class_exists('Requests_IRI') === false) {
	class Requests_IRI extends Requests\Iri {}
}
if (class_exists('Requests_Response') === false) {
	class Requests_Response extends Requests\Response {}
}
if (class_exists('Requests_Session') === false) {
	class Requests_Session extends Requests\Session {}
}
if (class_exists('Requests_SSL') === false) {
	class Requests_SSL extends Requests\Ssl {}
}

if (class_exists('Requests_Auth_Basic') === false) {
	class Requests_Auth_Basic extends Requests\Auth\Basic {}
}
if (class_exists('Requests_Cookie_Jar') === false) {
	class Requests_Cookie_Jar extends Requests\Cookie\Jar {}
}
if (class_exists('Requests_Proxy_HTTP') === false) {
	class Requests_Proxy_HTTP extends Requests\Proxy\Http {}
}
if (class_exists('Requests_Response_Headers') === false) {
	class Requests_Response_Headers extends Requests\Response\Headers {}
}
if (class_exists('Requests_Transport_cURL') === false) {
	class Requests_Transport_cURL extends Requests\Transport\Curl {}
}
if (class_exists('Requests_Transport_fsockopen') === false) {
	class Requests_Transport_fsockopen extends Requests\Transport\Fsockopen {}
}
if (class_exists('Requests_Utility_CaseInsensitiveDictionary') === false) {
	class Requests_Utility_CaseInsensitiveDictionary extends Requests\Utility\CaseInsensitiveDictionary {}
}
if (class_exists('Requests_Utility_FilteredIterator') === false) {
	class Requests_Utility_FilteredIterator extends Requests\Utility\FilteredIterator {}
}

if (class_exists('Requests_Exception_HTTP') === false) {
	class Requests_Exception_HTTP extends Requests\Exception\Http {}
}
if (class_exists('Requests_Exception_Transport') === false) {
	class Requests_Exception_Transport extends Requests\Exception\Transport {}
}
if (class_exists('Requests_Exception_Transport_cURL') === false) {
	class Requests_Exception_Transport_cURL extends Requests\Exception\Transport\Curl {}
}
if (class_exists('Requests_Exception_HTTP_304') === false) {
	class Requests_Exception_HTTP_304 extends Requests\Exception\Http\Status304 {}
}
if (class_exists('Requests_Exception_HTTP_305') === false) {
	class Requests_Exception_HTTP_305 extends Requests\Exception\Http\Status305 {}
}
if (class_exists('Requests_Exception_HTTP_306') === false) {
	class Requests_Exception_HTTP_306 extends Requests\Exception\Http\Status306 {}
}
if (class_exists('Requests_Exception_HTTP_400') === false) {
	class Requests_Exception_HTTP_400 extends Requests\Exception\Http\Status400 {}
}
if (class_exists('Requests_Exception_HTTP_401') === false) {
	class Requests_Exception_HTTP_401 extends Requests\Exception\Http\Status401 {}
}
if (class_exists('Requests_Exception_HTTP_402') === false) {
	class Requests_Exception_HTTP_402 extends Requests\Exception\Http\Status402 {}
}
if (class_exists('Requests_Exception_HTTP_403') === false) {
	class Requests_Exception_HTTP_403 extends Requests\Exception\Http\Status403 {}
}
if (class_exists('Requests_Exception_HTTP_404') === false) {
	class Requests_Exception_HTTP_404 extends Requests\Exception\Http\Status404 {}
}
if (class_exists('Requests_Exception_HTTP_405') === false) {
	class Requests_Exception_HTTP_405 extends Requests\Exception\Http\Status405 {}
}
if (class_exists('Requests_Exception_HTTP_406') === false) {
	class Requests_Exception_HTTP_406 extends Requests\Exception\Http\Status406 {}
}
if (class_exists('Requests_Exception_HTTP_407') === false) {
	class Requests_Exception_HTTP_407 extends Requests\Exception\Http\Status407 {}
}
if (class_exists('Requests_Exception_HTTP_408') === false) {
	class Requests_Exception_HTTP_408 extends Requests\Exception\Http\Status408 {}
}
if (class_exists('Requests_Exception_HTTP_409') === false) {
	class Requests_Exception_HTTP_409 extends Requests\Exception\Http\Status409 {}
}
if (class_exists('Requests_Exception_HTTP_410') === false) {
	class Requests_Exception_HTTP_410 extends Requests\Exception\Http\Status410 {}
}
if (class_exists('Requests_Exception_HTTP_411') === false) {
	class Requests_Exception_HTTP_411 extends Requests\Exception\Http\Status411 {}
}
if (class_exists('Requests_Exception_HTTP_412') === false) {
	class Requests_Exception_HTTP_412 extends Requests\Exception\Http\Status412 {}
}
if (class_exists('Requests_Exception_HTTP_413') === false) {
	class Requests_Exception_HTTP_413 extends Requests\Exception\Http\Status413 {}
}
if (class_exists('Requests_Exception_HTTP_414') === false) {
	class Requests_Exception_HTTP_414 extends Requests\Exception\Http\Status414 {}
}
if (class_exists('Requests_Exception_HTTP_415') === false) {
	class Requests_Exception_HTTP_415 extends Requests\Exception\Http\Status415 {}
}
if (class_exists('Requests_Exception_HTTP_416') === false) {
	class Requests_Exception_HTTP_416 extends Requests\Exception\Http\Status416 {}
}
if (class_exists('Requests_Exception_HTTP_417') === false) {
	class Requests_Exception_HTTP_417 extends Requests\Exception\Http\Status417 {}
}
if (class_exists('Requests_Exception_HTTP_418') === false) {
	class Requests_Exception_HTTP_418 extends Requests\Exception\Http\Status418 {}
}
if (class_exists('Requests_Exception_HTTP_428') === false) {
	class Requests_Exception_HTTP_428 extends Requests\Exception\Http\Status428 {}
}
if (class_exists('Requests_Exception_HTTP_429') === false) {
	class Requests_Exception_HTTP_429 extends Requests\Exception\Http\Status429 {}
}
if (class_exists('Requests_Exception_HTTP_431') === false) {
	class Requests_Exception_HTTP_431 extends Requests\Exception\Http\Status431 {}
}
if (class_exists('Requests_Exception_HTTP_500') === false) {
	class Requests_Exception_HTTP_500 extends Requests\Exception\Http\Status500 {}
}
if (class_exists('Requests_Exception_HTTP_501') === false) {
	class Requests_Exception_HTTP_501 extends Requests\Exception\Http\Status501 {}
}
if (class_exists('Requests_Exception_HTTP_502') === false) {
	class Requests_Exception_HTTP_502 extends Requests\Exception\Http\Status502 {}
}
if (class_exists('Requests_Exception_HTTP_503') === false) {
	class Requests_Exception_HTTP_503 extends Requests\Exception\Http\Status503 {}
}
if (class_exists('Requests_Exception_HTTP_504') === false) {
	class Requests_Exception_HTTP_504 extends Requests\Exception\Http\Status504 {}
}
if (class_exists('Requests_Exception_HTTP_505') === false) {
	class Requests_Exception_HTTP_505 extends Requests\Exception\Http\Status505 {}
}
if (class_exists('Requests_Exception_HTTP_511') === false) {
	class Requests_Exception_HTTP_511 extends Requests\Exception\Http\Status511 {}
}
if (class_exists('Requests_Exception_HTTP_Unknown') === false) {
	class Requests_Exception_HTTP_Unknown extends Requests\Exception\Http\StatusUnknown {}
}
