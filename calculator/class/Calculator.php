<?php

class Calculator
{
    protected $result;

    protected $operation;

    protected $initOperation = [];


    public function addCommand($operationChar, OperatorInterface $operation)
    {

        $this->operation = $operation;
        $newArr = [$operationChar => $operation];
        $this->initOperation = array_merge($this->initOperation, $newArr);
    }

    public function compute()
    {
        $args = func_get_args();
        $operatorChar = $args[0];
        array_shift($args);

       foreach ($args as $number) {
           $this -> result = $this->initOperation[$operatorChar]->run($number, $this->result);
       }
    }
    public function init($result)
    {
        $this->result = $result;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }


}