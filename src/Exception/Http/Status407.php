<?php
/**
 * Exception for 407 Proxy Authentication Required responses
 *
 * @package Requests\Exceptions
 */

namespace WpOrg\Requests\Exception\Http;

use WpOrg\Requests\Exception\Http;
use WpOrg\Requests\Utility\HttpStatus;

/**
 * Exception for 407 Proxy Authentication Required responses
 *
 * @package Requests\Exceptions
 */
final class Status407 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var int
	 */
	protected $code = 407;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = HttpStatus::TEXT_407;
}
