<?php
require_once "./logicalOperation.php";
$evaluate = array(
    array(0,0,0,0,0),
    array(1,0,0,0,0),
    array(0,0,0,0,1),
    array(1,1,1,1,1),
);
header("Content-Type: text/plain");
echo "AND -----------------------------------------\r\n";
foreach($evaluate as $eval) {
    echo "evaluate at [" . join(", ", $eval) . "] AND is " . (logicalOperation::AND_($eval) ? "１" : "０") . "\r\n";
}
echo "----------------------------------------------\r\n\r\n";

echo "OR -------------------------------------------\r\n";
foreach($evaluate as $eval) {
    echo "evaluate at [" . join(", ", $eval) . "] OR is " . (logicalOperation::OR_($eval) ? "１" : "０")  . "\r\n";
}
echo "----------------------------------------------\r\n\r\n";

echo "NAND ----------------------------------------\r\n";
foreach($evaluate as $eval) {
    echo "evaluate at [" . join(", ", $eval) . "] NAND is " . (logicalOperation::NAND_($eval) ? "１" : "０")  . "\r\n";
}
echo "---------------------------------------------\r\n\r\n";

echo "NOR -----------------------------------------\r\n";
foreach($evaluate as $eval) {
    echo "evaluate at [" . join(", ", $eval) . "] NOR is " . (logicalOperation::NOR_($eval) ? "１" : "０")  . "\r\n";
}
echo "----------------------------------------------\r\n\r\n";

echo "XOR -----------------------------------------\r\n";
foreach($evaluate as $eval) {
    echo "evaluate at [" . join(", ", $eval) . "] XOR is " . (logicalOperation::XOR_($eval) ? "１" : "０")  . "\r\n";
}
echo "----------------------------------------------\r\n\r\n";

echo "XNOR -----------------------------------------\r\n";
foreach($evaluate as $eval) {
    echo "evaluate at [" . join(", ", $eval) . "] XNOR is " . (logicalOperation::XNOR_($eval) ? "１" : "０")  . "\r\n";
}
echo "----------------------------------------------\r\n\r\n";
