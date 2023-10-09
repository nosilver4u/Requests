<?php
/**
 * Exception for 411 Length Required responses
 *
 * @package Requests\Exceptions
 */

namespace WpOrg\Requests\Exception\Http;

use WpOrg\Requests\Exception\Http;
use WpOrg\Requests\Utility\HttpStatus;

/**
 * Exception for 411 Length Required responses
 *
 * @package Requests\Exceptions
 */
final class Status411 extends Http {
	/**
	 * HTTP status code
	 *
	 * @var int
	 */
	protected $code = 411;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = HttpStatus::TEXT_411;
}
