<?php

namespace WpOrg\Requests\Tests\Utility\HttpStatus;

use WpOrg\Requests\Exception;
use WpOrg\Requests\Exception\InvalidArgument;
use WpOrg\Requests\Tests\TestCase;
use WpOrg\Requests\Tests\TypeProviderHelper;
use WpOrg\Requests\Utility\HttpStatus;

/**
 * @coversDefaultClass \WpOrg\Requests\Utility\HttpStatus
 */
class IsValidCodeTest extends TestCase {
	/**
	 * Data provider.
	 *
	 * @return array
	 */
	public static function dataAccessValidEntry() {
		return [
			'integer key' => [404],
			'string key'  => ['502'],
		];
	}

	/**
	 * Test a valid status code.
	 *
	 * @dataProvider dataAccessValidEntry
	 *
	 * @covers ::is_valid_code
	 *
	 * @param mixed $code Status code value to test.
	 *
	 * @return void
	 */
	public function testAccessValidEntry($code) {
		$this->assertTrue(HttpStatus::is_valid_code($code));
	}

	/**
	 * Data provider.
	 *
	 * @return array
	 */
	public static function dataAccessInvalidType() {
		return TypeProviderHelper::getAllExcept(TypeProviderHelper::GROUP_INT, TypeProviderHelper::GROUP_STRING);
	}

	/**
	 * Test retrieving a status code with an invalid type.
	 *
	 * @dataProvider dataAccessInvalidType
	 *
	 * @covers ::is_valid_code
	 *
	 * @param mixed $code Status code value to test.
	 *
	 * @return void
	 */
	public function testAccessInvalidType($code) {
		$this->assertFalse(HttpStatus::is_valid_code($code));
	}

	/**
	 * Data provider.
	 *
	 * @return array
	 */
	public static function dataAccessInvalidCode() {
		return [
			'negative integer' => [-1],
			'zero integer'     => [0],
			'too low integer'  => [42],
			'too high integer' => [1000],
			'negative string'  => ['-1'],
			'zero string'      => ['0'],
			'too low string'   => ['42'],
			'too high string'  => ['1000'],
		];
	}

	/**
	 * Test retrieving a status code with a matching type but an invalid code.
	 *
	 * @dataProvider dataAccessInvalidCode
	 *
	 * @covers ::is_valid_code
	 *
	 * @param mixed $code Status code value to test.
	 *
	 * @return void
	 */
	public function testAccessInvalidCode($code) {
		$this->assertFalse(HttpStatus::is_valid_code($code));
	}
}
