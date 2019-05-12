<?php


class MultCommand implements OperatorInterface
{
    public function run($number, $result)
    {
        return $result * $number;
    }

}