<?php
/*
 * This file is part of the Harmony package.
 *
 * (c) 2013-2015 David Negrier <david@mouf-php.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
namespace Harmony\Validator;

/**
 * Classes implementing this interface represent a result returned by a validator.
 *
 * @author David Negrier
 */
interface ValidatorResultInterface {
	/**
	 * Returns the status of the validation. One of ValidatorResult::SUCCESS, ValidatorResult::WARN or ValidatorResult::ERROR
	 * @return string
	 */
	public function getCode();

	/**
	 * The validation message (in HTML)
	 * @return string
	 */
	public function getHtmlMessage();

	/**
	 * The validation message (in text, for the CLI version)
	 * @return string
	 */
	public function getTextMessage();
}
