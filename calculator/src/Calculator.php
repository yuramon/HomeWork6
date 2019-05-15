<?php

class Calculator
{
    protected $result;
    protected $operation;
    protected $initOperation = [];

    /**
     * @param $operationChar
     * @param OperatorInterface $operation
     * @return Calculator
     */
    public function addCommand($operationChar, OperatorInterface $operation)
    {
        $this->operation = $operation;
        $newArr = [$operationChar => $operation];
        $this->initOperation = array_merge($this->initOperation, $newArr);

        return $this;
    }

    /**
     * @return Exception|string|void
     * @throws Exception
     */
    public function compute()
    {
        $args = func_get_args();
        $operatorChar = $args[0];
        array_shift($args);
        foreach ($args as $number) {
            if (array_key_exists($operatorChar, $this->initOperation) === false) {
                throw new Exception("There is no such operation");
            }

            $this->result = $this->initOperation[$operatorChar]->run($number, $this->result);

            return $this;
        }
    }

    /**
     * @param $result
     * @return mixed
     */
    public function init($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }
}