<?php


class SquareCommand implements OperatorInterface
{
    public function run($number, $result)
    {
        return pow($result, $number);
    }
}