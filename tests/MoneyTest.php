<?php
/**
 * Holds a class for performing general unit tests
 *
 * PHP Version 5
 *
 * @created 06/23/2016
 * @updated 06/28/2016
 *
 * @category   UnitTests
 * @package    UnitTests
 * @author     Geovanni Escalante <gescalante@arkho.tech>
 * @license    http://lic.org/lic.php  HCC
 * @version    $Revision$
 * @link       /tests/MoneyTest.php MoneyTest Test
 */

/**
 * Include the PHPUnit Framwork so we can extend the TestCase class
 */
use Simple\Money as Money;

class MoneyTest extends PHPUnit_Framework_TestCase
{
    public function testCanBeNegated()
    {        
        require_once __DIR__.'/../src/Simple/Money.php';
        
        $a = new Money(1);
        $b = $a->negate();
        $this->assertEquals(-1, $b->getAmount());
    }
}