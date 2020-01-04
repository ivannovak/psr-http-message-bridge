<?php
/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Symfony\Bridge\PsrHttpMessage\Tests\Factory;
use Symfony\Bridge\PsrHttpMessage\Factory\LaminasDiactorosFactory;
/**
 * @author Kévin Dunglas <dunglas@gmail.com>
 * @author Antonio J. García Lagar <aj@garcialagar.es>
 */
class LaminasDiactorosFactoryTest extends AbstractHttpMessageFactoryTest
{
    protected function buildHttpMessageFactory()
    {
        if (!class_exists('Laminas\Diactoros\ServerRequestFactory')) {
            $this->markTestSkipped('Laminas Diactoros is not installed.');
        }
        return new LaminasDiactorosFactory();
    }
}
