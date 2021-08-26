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
		private static $deprecated_classes = array();

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
				// Original PSR-0 Requests class.
				$file = dirname(__DIR__) . '/library/Requests.php';
			} elseif ($class_name[8] === '_') {
				// PSR-0 classname.
				$file = dirname(__DIR__) . '/library/' . str_replace('_', '/', $class_name) . '.php';
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