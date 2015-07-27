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
 * All instances implementing this interface will generate validators on the Harmony front page.
 * For a result to be displayed, an instance (or many instances) of this class must be declared
 * in the DI container of your application and Harmony must be connected to your app's container
 * using the 'modules.php' file.
 *
 * There can be one or many validators per instance depending on the return type of the
 * `validateClass` method.
 *
 * @author David Negrier
 */
interface ValidatorInterface
{

    /**
     * Runs the validation of the instance.
     * Returns a ValidatorResult object explaining the result, or an array
     * of ValidatorResult objects.
     *
     * @param string $identifier The identifier of the instance in the container
     * @return ValidatorResultInterface|ValidatorResultInterface[]
     */
    public function validateInstance($identifier);
}
