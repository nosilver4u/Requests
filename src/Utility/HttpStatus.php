<?php
/**
 * Helper class for dealing with HTTP status codes.
 *
 * @package Requests\Utilities
 */

namespace WpOrg\Requests\Utility;

use WpOrg\Requests\Exception\InvalidArgument;

/**
 * HTTP status codes helper class.
 *
 * @package Requests\Utilities
 */
final class HttpStatus {

	const TEXT_100 = 'Continue';
	const TEXT_101 = 'Switching Protocols';
	const TEXT_200 = 'OK';
	const TEXT_201 = 'Created';
	const TEXT_202 = 'Accepted';
	const TEXT_203 = 'Non-Authoritative Information';
	const TEXT_204 = 'No Content';
	const TEXT_205 = 'Reset Content';
	const TEXT_206 = 'Partial Content';
	const TEXT_300 = 'Multiple Choices';
	const TEXT_301 = 'Moved Permanently';
	const TEXT_302 = 'Found';
	const TEXT_303 = 'See Other';
	const TEXT_304 = 'Not Modified';
	const TEXT_305 = 'Use Proxy';
	const TEXT_306 = '(Unused)';
	const TEXT_307 = 'Temporary Redirect';
	const TEXT_400 = 'Bad Request';
	const TEXT_401 = 'Unauthorized';
	const TEXT_402 = 'Payment Required';
	const TEXT_403 = 'Forbidden';
	const TEXT_404 = 'Not Found';
	const TEXT_405 = 'Method Not Allowed';
	const TEXT_406 = 'Not Acceptable';
	const TEXT_407 = 'Proxy Authentication Required';
	const TEXT_408 = 'Request Timeout';
	const TEXT_409 = 'Conflict';
	const TEXT_410 = 'Gone';
	const TEXT_411 = 'Length Required';
	const TEXT_412 = 'Precondition Failed';
	const TEXT_413 = 'Request Entity Too Large';
	const TEXT_414 = 'Request-URI Too Long';
	const TEXT_415 = 'Unsupported Media Type';
	const TEXT_416 = 'Requested Range Not Satisfiable';
	const TEXT_417 = 'Expectation Failed';
	const TEXT_418 = 'I\'m a teapot';
	const TEXT_428 = 'Precondition Required';
	const TEXT_429 = 'Too Many Requests';
	const TEXT_431 = 'Request Header Fields Too Large';
	const TEXT_500 = 'Internal Server Error';
	const TEXT_501 = 'Not Implemented';
	const TEXT_502 = 'Bad Gateway';
	const TEXT_503 = 'Service Unavailable';
	const TEXT_504 = 'Gateway Timeout';
	const TEXT_505 = 'HTTP Version Not Supported';
	const TEXT_511 = 'Network Authentication Required';

	/**
	 * Map of status codes to their text.
	 *
	 * @var array<string>
	 */
	const MAP = [
		100 => self::TEXT_100,
		101 => self::TEXT_101,
		200 => self::TEXT_200,
		201 => self::TEXT_201,
		202 => self::TEXT_202,
		203 => self::TEXT_203,
		204 => self::TEXT_204,
		205 => self::TEXT_205,
		206 => self::TEXT_206,
		300 => self::TEXT_300,
		301 => self::TEXT_301,
		302 => self::TEXT_302,
		303 => self::TEXT_303,
		304 => self::TEXT_304,
		305 => self::TEXT_305,
		306 => self::TEXT_306,
		307 => self::TEXT_307,
		400 => self::TEXT_400,
		401 => self::TEXT_401,
		402 => self::TEXT_402,
		403 => self::TEXT_403,
		404 => self::TEXT_404,
		405 => self::TEXT_405,
		406 => self::TEXT_406,
		407 => self::TEXT_407,
		408 => self::TEXT_408,
		409 => self::TEXT_409,
		410 => self::TEXT_410,
		411 => self::TEXT_411,
		412 => self::TEXT_412,
		413 => self::TEXT_413,
		414 => self::TEXT_414,
		415 => self::TEXT_415,
		416 => self::TEXT_416,
		417 => self::TEXT_417,
		418 => self::TEXT_418,
		428 => self::TEXT_428,
		429 => self::TEXT_429,
		431 => self::TEXT_431,
		500 => self::TEXT_500,
		501 => self::TEXT_501,
		502 => self::TEXT_502,
		503 => self::TEXT_503,
		504 => self::TEXT_504,
		505 => self::TEXT_505,
		511 => self::TEXT_511,
	];

	/**
	 * Get the status message from a status code.
	 *
	 * @param int|string $code Status code.
	 * @return string Status message.
	 */
	public static function get_text($code) {
		if (self::is_valid_code($code) === false) {
			// When the type is correct, add the value to the error message to help debugging.
			$type = gettype($code) . ((is_int($code) || is_string($code)) ? " ($code)" : '');

			throw InvalidArgument::create(1, '$code', 'a valid HTTP status code as an int or numeric string', $type);
		}

		return self::MAP[$code];
	}

	/**
	 * Verify whether a status code is valid.
	 *
	 * @param int|string $code Status code to check.
	 * @return bool Whether the status code is valid.
	 */
	public static function is_valid_code($code) {
		if (!is_int($code) && !is_string($code)) {
			return false;
		}

		return array_key_exists($code, self::MAP);
	}
}
