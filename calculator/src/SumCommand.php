<?php

class SumCommand implements OperatorInterface
{
    /**
     * @param $number
     * @param $result
     * @return mixed
     */
    public function run($number, $result)
    {
        return $result + $number;
    }

}