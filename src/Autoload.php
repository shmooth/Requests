<?php
/**
 * Autoloader for Requests for PHP.
 *
 * Include this file if you'd like to avoid having to create your own autoloader.
 *
 * @package Requests
 * @since   2.0.0
 *
 * @codeCoverageIgnore
 */

namespace Requests;

/*
 * Ensure the autoloader is only declared once.
 * This safeguard is in place as this is the typical entry point for this library
 * and this file being required unconditionally could easily cause
 * fatal "Class already declared" errors.
 */
if (class_exists('Requests\Autoload') === false) {

	/**
	 * Autoloader for Requests for PHP.
	 *
	 * @package Requests
	 */
	class Autoload {

		/**
		 * List of the old PSR-0 class names in lowercase as keys with their PSR-4 case-sensitive name as a value.
		 *
		 * @var array
		 */
		private static $deprecated_classes = array(
			// Interfaces.
			'requests_auth'                              => '\Requests\Auth',
			'requests_hooker'                            => '\Requests\Hooker',
			'requests_proxy'                             => '\Requests\Proxy',
			'requests_transport'                         => '\Requests\Transport',

			// Classes.
			'requests_cookie'                            => '\Requests\Cookie',
			'requests_exception'                         => '\Requests\Exception',
			'requests_hooks'                             => '\Requests\Hooks',
			'requests_idnaencoder'                       => '\Requests\IdnaEncoder',
			'requests_ipv6'                              => '\Requests\Ipv6',
			'requests_iri'                               => '\Requests\Iri',
			'requests_response'                          => '\Requests\Response',
			'requests_session'                           => '\Requests\Session',
			'requests_ssl'                               => '\Requests\Ssl',
			'requests_auth_basic'                        => '\Requests\Auth\Basic',
			'requests_cookie_jar'                        => '\Requests\Cookie\Jar',
			'requests_proxy_http'                        => '\Requests\Proxy\Http',
			'requests_response_headers'                  => '\Requests\Response\Headers',
			'requests_transport_curl'                    => '\Requests\Transport\Curl',
			'requests_transport_fsockopen'               => '\Requests\Transport\Fsockopen',
			'requests_utility_caseinsensitivedictionary' => '\Requests\Utility\CaseInsensitiveDictionary',
			'requests_utility_filterediterator'          => '\Requests\Utility\FilteredIterator',
			'requests_exception_http'                    => '\Requests\Exception\Http',
			'requests_exception_transport'               => '\Requests\Exception\Transport',
			'requests_exception_transport_curl'          => '\Requests\Exception\Transport\Curl',
			'requests_exception_http_304'                => '\Requests\Exception\Http\Status304',
			'requests_exception_http_305'                => '\Requests\Exception\Http\Status305',
			'requests_exception_http_306'                => '\Requests\Exception\Http\Status306',
			'requests_exception_http_400'                => '\Requests\Exception\Http\Status400',
			'requests_exception_http_401'                => '\Requests\Exception\Http\Status401',
			'requests_exception_http_402'                => '\Requests\Exception\Http\Status402',
			'requests_exception_http_403'                => '\Requests\Exception\Http\Status403',
			'requests_exception_http_404'                => '\Requests\Exception\Http\Status404',
			'requests_exception_http_405'                => '\Requests\Exception\Http\Status405',
			'requests_exception_http_406'                => '\Requests\Exception\Http\Status406',
			'requests_exception_http_407'                => '\Requests\Exception\Http\Status407',
			'requests_exception_http_408'                => '\Requests\Exception\Http\Status408',
			'requests_exception_http_409'                => '\Requests\Exception\Http\Status409',
			'requests_exception_http_410'                => '\Requests\Exception\Http\Status410',
			'requests_exception_http_411'                => '\Requests\Exception\Http\Status411',
			'requests_exception_http_412'                => '\Requests\Exception\Http\Status412',
			'requests_exception_http_413'                => '\Requests\Exception\Http\Status413',
			'requests_exception_http_414'                => '\Requests\Exception\Http\Status414',
			'requests_exception_http_415'                => '\Requests\Exception\Http\Status415',
			'requests_exception_http_416'                => '\Requests\Exception\Http\Status416',
			'requests_exception_http_417'                => '\Requests\Exception\Http\Status417',
			'requests_exception_http_418'                => '\Requests\Exception\Http\Status418',
			'requests_exception_http_428'                => '\Requests\Exception\Http\Status428',
			'requests_exception_http_429'                => '\Requests\Exception\Http\Status429',
			'requests_exception_http_431'                => '\Requests\Exception\Http\Status431',
			'requests_exception_http_500'                => '\Requests\Exception\Http\Status500',
			'requests_exception_http_501'                => '\Requests\Exception\Http\Status501',
			'requests_exception_http_502'                => '\Requests\Exception\Http\Status502',
			'requests_exception_http_503'                => '\Requests\Exception\Http\Status503',
			'requests_exception_http_504'                => '\Requests\Exception\Http\Status504',
			'requests_exception_http_505'                => '\Requests\Exception\Http\Status505',
			'requests_exception_http_511'                => '\Requests\Exception\Http\Status511',
			'requests_exception_http_unknown'            => '\Requests\Exception\Http\StatusUnknown',
		);

		/**
		 * Whether or not a deprecation notice has been thrown for calling a deprecated class.
		 *
		 * @var bool
		 */
		private static $deprecation_thrown = false;

		/**
		 * Whether or not a deprecation notice should be thrown for calling a deprecated class.
		 *
		 * @var bool
		 */
		private static $throw_notice = true;

		/**
		 * Register the autoloader.
		 *
		 * Note: the autoloader is *prepended* in the autoload queue.
		 * This is done to ensure that the Requests 2.0 autoloader takes precedence
		 * over a potentially (dependency-registered) Requests 1.x autoloader.
		 *
		 * @internal This method contains a safeguard against the autoloader being
		 * registered multiple times. This safeguard uses a global constant to
		 * (hopefully/in most cases) still function correctly, even if the
		 * class would be renamed.
		 *
		 * @return void
		 */
		public static function register() {
			if (defined('REQUESTS_AUTOLOAD_REGISTERED') === false) {
				spl_autoload_register(array(self::class, 'load'), true);
				define('REQUESTS_AUTOLOAD_REGISTERED', true);
			}
		}

		/**
		 * Autoloader.
		 *
		 * @param string $class_name Name of the class name to load.
		 *
		 * @return bool Whether a class was loaded or not.
		 */
		public static function load($class_name) {
			// Check that the class starts with "Requests".
			if (stripos($class_name, 'Requests') !== 0) {
				return false;
			}

			if ($class_name === 'Requests') {
				/*
				 * Reference to the original PSR-0 Requests class.
				 * Loading this class will always generate a deprecation notice.
				 */
				$file                     = dirname(__DIR__) . '/library/Requests.php';
				self::$deprecation_thrown = true;
			} elseif ($class_name[8] === '\\') {
				// PSR-4 classname.
				$file = __DIR__ . '/' . strtr(substr($class_name, 9), '\\', '/') . '.php';
			}

			if (isset($file) && file_exists($file)) {
				include $file;
				return true;
			}

			/*
			 * Okay, so the class starts with "Requests", but we couldn't find the file.
			 * If this is one of the deprecated/renamed PSR-0 classes being requested,
			 * let's alias it to the new name and throw a deprecation notice.
			 */
			$class_lower = strtolower($class_name);

			if (isset(self::$deprecated_classes[$class_lower])) {
				if (self::$throw_notice === true) {
					/*
					 * Integrators who cannot yet upgrade to the PSR-4 class names can silence deprecations
					 * by defining a `REQUESTS_SILENCE_PSR0_DEPRECATIONS` constant and setting it to `true`.
					 * The constant needs to be defined before the first deprecated class is requested
					 * via this autoloader.
					 */
					if (defined('REQUESTS_SILENCE_PSR0_DEPRECATIONS') && REQUESTS_SILENCE_PSR0_DEPRECATIONS === true) {
						self::$throw_notice = false;
					}

					if (self::$throw_notice === true && self::$deprecation_thrown === false) {
						// phpcs:ignore WordPress.PHP.DevelopmentFunctions.error_log_trigger_error
						trigger_error(
							'The PSR-0 `Requests_...` class names in the Request library are deprecated.'
							. ' Switch to the PSR-4 `Requests\...` classnames at your earliest convenience.',
							E_USER_DEPRECATED
						);
						self::$deprecation_thrown = true;
					}
				}

				// Create an alias and let the autoloader recursively kick in to load the PSR-4 class.
				return class_alias(self::$deprecated_classes[$class_lower], $class_name, true);
			}

			return false;
		}
	}
}
