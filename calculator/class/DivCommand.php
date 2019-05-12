<?php


class DivCommand implements OperatorInterface
{


    public function run($number, $result)
    {
        if ($number === 0 ) {
            return 'WRONG INPUT! DIVISION BY ZERO!';
        }
        return $result / $number;

    }
}