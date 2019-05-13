<?php

class Calculator
{
    protected $result;
    protected $operation;
    protected $initOperation = [];

    /**
     * @param $operationChar
     * @param OperatorInterface $operation
     */
    public function addCommand($operationChar, OperatorInterface $operation)
    {
        $this->operation = $operation;
        $newArr = [$operationChar => $operation];
        $this->initOperation = array_merge($this->initOperation, $newArr);
    }

    /**
     * @return Exception|string|void
     */
    public function compute()
    {
        $args = func_get_args();
        $operatorChar = $args[0];
        array_shift($args);

       foreach ($args as $number) {
           if (array_key_exists($operatorChar, $this->initOperation) === false){
               return $this->result = new Exception("There is no such operation");
           }
           return $this->result = $this->initOperation[$operatorChar]->run($number, $this->result);
       }
    }

    /**
     * @param $result
     * @return mixed
     */
    public function init($result)
    {
        return $this->result = $result;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }
}