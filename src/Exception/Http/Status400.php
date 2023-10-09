<?php
/**
 * Exception for 400 Bad Request responses
 *
 * @package Requests\Exceptions
 */

namespace WpOrg\Requests\Exception\Http;

use WpOrg\Requests\Exception\Http;
use WpOrg\Requests\Utility\HttpStatus;

/**
 * Exception for 400 Bad Request responses
 *
 * @package Requests\Exceptions
 */
final class Status400 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var int
	 */
	protected $code = 400;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = HttpStatus::TEXT_400;
}
