<?php
/**
 * Holds a class for sample porpuse
 *
 * PHP Version 5
 *
 * @created 06/23/2016
 * @updated 06/28/2016
 *
 * @category   Money
 * @package    Money
 * @author     Geovanni Escalante <gescalante@arkho.tech>
 * @license    http://lic.org/lic.php  HCC
 * @version    $Revision$
 * @link       /src/Money.php Class Money
 */
namespace Simple;

class Money
{
    private $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function negate()
    {
        return new Money(-1 * $this->amount);
    }
}
