<?php

interface OperatorInterface
{
    /**
     * @param $number
     * @param $result
     * @return mixed
     */
    public function  run ($number, $result);

}