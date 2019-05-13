<?php
require_once 'src/OperatorInterface.php';
require_once 'src/Calculator.php';
require_once 'src/SumCommand.php';
require_once 'src/SubCommand.php';
require_once 'src/MultCommand.php';
require_once 'src/DivCommand.php';
require_once 'src/SquareCommand.php';

$calc = new Calculator();
$calc->addCommand('+',new SumCommand());
$calc->addCommand('-', new SubCommand());
$calc->addCommand('^', new SquareCommand());
$calc->addCommand('\\', new DivCommand());
$calc->init(1);
$calc->compute('+', 5);
$calc->compute('-', 3);
$calc->compute('^',2);
$calc->compute('\\', 3);

echo $calc->getResult();

