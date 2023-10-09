<?php
/**
 * Exception for 503 Service Unavailable responses
 *
 * @package Requests\Exceptions
 */

namespace WpOrg\Requests\Exception\Http;

use WpOrg\Requests\Exception\Http;
use WpOrg\Requests\Utility\HttpStatus;

/**
 * Exception for 503 Service Unavailable responses
 *
 * @package Requests\Exceptions
 */
final class Status503 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var int
	 */
	protected $code = 503;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = HttpStatus::TEXT_503;
}
