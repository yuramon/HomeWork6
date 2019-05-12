<?php


class SubCommand implements OperatorInterface
{
    public function run($number, $result)
    {
        return $result - $number;
    }

}