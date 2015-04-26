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
 * All classes implementing this interface will generate validators on the Harmony front page.
 *
 * There can be one or many validators per class depending on the return type of the
 * `validateClass` method.
 *
 * @author David Negrier
 */
interface StaticValidatorInterface
{

    /**
     * Runs the validation of the class.
     * Returns a ValidatorResult object explaining the result, or an array
     * of ValidatorResult objects.
     *
     * @return ValidatorResultInterface|ValidatorResultInterface[]
     */
    public static function validateClass();
}
