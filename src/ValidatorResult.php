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
 * This class represents a result returned by a validator.
 *
 * @author David Negrier
 */
class ValidatorResult extends \Exception {

	const SUCCESS = "ok";
	const WARN = "warn";
	const ERROR = "error";

	private $code;
	private $htmlMessage;
	private $textMessage;

	/**
	 * Constructs a validator message.
	 *
	 * @param string $code The status of the validation. Must be one of ValidatorResult::SUCCESS, ValidatorResult::WARN or ValidatorResult::ERROR
	 * @param string $htmlMessage The validation message (in HTML)
	 * @param string $textMessage (optional) The validation message (in text, for the CLI version)
	 */
	public function __construct($code, $htmlMessage, $textMessage = null) {
		if ($code != self::SUCCESS && $code != self::WARN && $code != self::ERROR) {
			throw new ValidatorException('Code for a validator must be one of ValidatorResult::SUCCESS, ValidatorResult::WARN or ValidatorResult::ERROR.');
		}
		$this->code = $code;
		$this->htmlMessage = $htmlMessage;
		if ($textMessage) {
			$this->textMessage = $textMessage;
		} else {
			$this->textMessage = stripslashes($htmlMessage);
		}
	}

	public function jsonSerialize() {
		return array(
			"code"=>$this->code,
			"htmlMessage"=>$this->htmlMessage,
			"textMessage"=>$this->textMessage,
			);
	}
}
