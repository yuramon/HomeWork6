<?php

class SquareCommand implements OperatorInterface
{
    /**
     * @param $number
     * @param $result
     * @return float|int|mixed
     */
    public function run($number, $result)
    {
        return pow($result, $number);
    }
}