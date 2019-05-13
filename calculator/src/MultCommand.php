<?php

class MultCommand implements OperatorInterface
{
    /**
     * @param $number
     * @param $result
     * @return float|int
     */
    public function run($number, $result)
    {
        return $result * $number;
    }

}