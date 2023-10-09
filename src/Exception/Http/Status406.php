<?php
/**
 * Exception for 406 Not Acceptable responses
 *
 * @package Requests\Exceptions
 */

namespace WpOrg\Requests\Exception\Http;

use WpOrg\Requests\Exception\Http;
use WpOrg\Requests\Utility\HttpStatus;

/**
 * Exception for 406 Not Acceptable responses
 *
 * @package Requests\Exceptions
 */
final class Status406 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var int
	 */
	protected $code = 406;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = HttpStatus::TEXT_406;
}
