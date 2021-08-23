Upgrading to Requests 2.0
=========================

Autoloading the Requests library
--------------------------------

In Requests 1.x, both a custom autoloader native to Requests, as well as autoloading via the Composer `vendor/autoload.php` file was supported.

The same applies to Requests 2.x, though the way to initiate the Requests native custom autoloader has changed.

If you were autoloading the Requests library via the Composer autoload file, no changes are needed.

```php
// OLD: Using the custom autoloader in Requests 1.x.
require_once 'path/to/Requests/library/Requests.php';
Requests::register_autoloader();

// NEW: Using the custom autoloader in Requests 2.x.
require_once 'path/to/Requests/src/Autoload.php';
Requests\Autoload::register();
```

For backward compatibility reasons, the Requests 1.x manner to call the autoloader will still be supported for the time being, but it is recommended to update your code to use the new autoloader.


New namespaced names
--------------------

As of Requests 2.0.0, all code in the Requests library is namespaced and class/interface names have been been normalized to CamelCaps.

We recommend for all users to upgrade their code to use the new namespaced class names.

| Type      | Request 1.x name                             | Requests >= 2.0 name                                              |
|-----------|----------------------------------------------|-------------------------------------------------------------------|
| class     | `Requests`                                   | `Requests\Requests` <strong><sup>1</sup></strong>                 |
| interface | `Requests_Auth`                              | `Requests\Auth`                                                   |
| interface | `Requests_Hooker`                            | `Requests\Hooker`                                                 |
| interface | `Requests_Transport`                         | `Requests\Transport`                                              |
| interface | `Requests_Proxy`                             | `Requests\Proxy`                                                  |
| class     | `Requests_Cookie`                            | `Requests\Cookie`                                                 |
| class     | `Requests_Exception`                         | `Requests\Exception`                                              |
| class     | `Requests_Hooks`                             | `Requests\Hooks`                                                  |
| class     | `Requests_IDNAEncoder`                       | `Requests\IdnaEncoder`                                            |
| class     | `Requests_IPv6`                              | `Requests\Ipv6`                                                   |
| class     | `Requests_IRI`                               | `Requests\Iri`                                                    |
| class     | `Requests_Response`                          | `Requests\Response`                                               |
| class     | `Requests_Session`                           | `Requests\Session`                                                |
| class     | `Requests_SSL`                               | `Requests\Ssl`                                                    |
| class     | `Requests_Auth_Basic`                        | `Requests\Auth\Basic`                                             |
| class     | `Requests_Cookie_Jar`                        | `Requests\Cookie\Jar`                                             |
| class     | `Requests_Proxy_HTTP`                        | `Requests\Proxy\Http`                                             |
| class     | `Requests_Response_Headers`                  | `Requests\Response\Headers`                                       |
| class     | `Requests_Transport_cURL`                    | `Requests\Transport\Curl`                                         |
| class     | `Requests_Transport_fsockopen`               | `Requests\Transport\Fsockopen`                                    |
| class     | `Requests_Utility_CaseInsensitiveDictionary` | `Requests\Utility\CaseInsensitiveDictionary`                      |
| class     | `Requests_Utility_FilteredIterator`          | `Requests\Utility\FilteredIterator`                               |
| class     | `Requests_Exception_HTTP`                    | `Requests\Exception\Http`                                         |
| class     | `Requests_Exception_Transport`               | `Requests\Exception\Transport`                                    |
| class     | `Requests_Exception_Transport_cURL`          | `Requests\Exception\Transport\Curl`                               |
| class     | `Requests_Exception_HTTP_###`                | `Requests\Exception\Http\Status###` <strong><sup>2</sup></strong> |
| class     | `Requests_Exception_HTTP_Unknown`            | `Requests\Exception\Http\StatusUnknown`                           |

> **Notes**:
> <sup>1</sup> The original `Requests` class has been split into two classes:
>     * `Requests\Requests` contains the actual functionality;
>     * `Requests\Autoload` contains the custom autoloader.
>     * The original non-namespaced `Requests` class remains for backward-compatibility reasons and extends `Requests\Requests` and uses `Requests\Autoload` in the old autoload functions, `Requests::autoloader()` and `Requests::register_autoloader()`.
> <sup>2</sup> The `###` in the HTTP Exception classes represents a three character, numeric HTTP status code.
>     Exception classes are available for HTTP status 304 - 306, 400 - 418, 428, 429, 431, 500 - 505 and 511.


Backward compatibility layer
----------------------------

If for some reason, you can not yet upgrade or have to support both Requests 1.x as well as Requests >= 2.0, a backward compatibility layer is provided.
This backward ccompatibility layer will work with both the Requests native custom autoloader, as well as when using the Composer `vendor/autoload.php` file.

Using the old PSR-0 names will still work, but a deprecation notice will be thrown the first time during a page load when a PSR-0 class name is referenced.

For the lifetime of Requests 2.x, the deprecation notices can be disabled by defining a global `REQUESTS_SILENCE_PSR0_DEPRECATIONS` constant and setting the value of this constant to `true`.
The constant needs to be defined before the first PSR-0 class name is requested.

As of Requests 3.0, support for the constant will be removed and the deprecation notice will always be thrown.
As of Requests 4.0, the backward compatibility layer will be removed.
