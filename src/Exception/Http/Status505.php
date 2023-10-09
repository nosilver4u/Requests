<?php
/**
 * Exception for 505 HTTP Version Not Supported responses
 *
 * @package Requests\Exceptions
 */

namespace WpOrg\Requests\Exception\Http;

use WpOrg\Requests\Exception\Http;
use WpOrg\Requests\Utility\HttpStatus;

/**
 * Exception for 505 HTTP Version Not Supported responses
 *
 * @package Requests\Exceptions
 */
final class Status505 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var int
	 */
	protected $code = 505;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = HttpStatus::TEXT_505;
}
