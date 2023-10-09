<?php
/**
 * Exception for 504 Gateway Timeout responses
 *
 * @package Requests\Exceptions
 */

namespace WpOrg\Requests\Exception\Http;

use WpOrg\Requests\Exception\Http;
use WpOrg\Requests\Utility\HttpStatus;

/**
 * Exception for 504 Gateway Timeout responses
 *
 * @package Requests\Exceptions
 */
final class Status504 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var int
	 */
	protected $code = 504;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = HttpStatus::TEXT_504;
}
