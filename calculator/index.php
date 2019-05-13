<?php
require_once 'class/OperatorInterface.php';
require_once 'class/Calculator.php';
require_once 'class/SumCommand.php';
require_once 'class/SubCommand.php';
require_once 'class/MultCommand.php';
require_once 'class/DivCommand.php';
require_once 'class/SquareCommand.php';

$calc = new Calculator();
$calc->addCommand('+',new SumCommand());
$calc->addCommand('-', new SubCommand());
$calc->addCommand('^', new SquareCommand());
$calc->init(1);
$calc->compute('+', 5);
$calc->compute('-', 3);
$calc->compute('^',2);

echo $calc->getResult();

