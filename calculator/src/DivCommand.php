<?php

class DivCommand implements OperatorInterface
{
    /**
     * @param $number
     * @param $result
     * @return Exception|float|int|mixed
     */
    public function run($number, $result)
    {
        if ($number === 0) {
            return new Exception('Division by zero');
        }
        return $result / $number;
    }
}