<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include('../classes/class_symbols.php');
$obj = new class_symbols();
$data[0] = array();
$key_array = array();
$cipher_text_indexes = array();

//input by user
$plain_text = $_POST['plain_text'];
$a = $_POST['a_value'];
$b = $_POST['b_value'];
$x[0] = $_POST['x_value'];
$start_from = $_POST['start_from'];
//***********


//determine letters length if(just capital and no-symbols)
$letters = $obj->capital_letters($start_from);
$m = count($letters);



$n_plain = strlen($plain_text);
$plain_text_indexes = $obj->text_to_indexes($letters, $plain_text);

//get key => ((a * x[i-1] + b mod m))
for($i=1;$i<=$n_plain;$i++){
    $operation_1 = (($a * $x[$i-1])+$b);
    $operation_2 = fmod($operation_1, $m);// $m = 26
    $x[$i] = $operation_2;
    $key_array[$i-1] = $operation_2;
}


//********* <Encryption> *********
//cipher = (plain + key) mod m
for($i=0;$i<$n_plain;$i++){
    $sum = $plain_text_indexes[$i] + $key_array[$i];
    $sum = fmod($sum, $m);
    $cipher_text_indexes[$i] = $sum;
}
$cipher_text = $obj->indexes_to_text($letters, $cipher_text_indexes);
$n_cipher = count($cipher_text);
//********* </Encryption> *********

//output
$cipher_text = implode($cipher_text);
$plain_text_indexes = implode(', ', $plain_text_indexes);
$cipher_text_indexes = implode(', ', $cipher_text_indexes);
$key = implode(', ', $key_array);
$data[0]['plain_text'] = $plain_text;
$data[0]['plain_text_indexes'] = $plain_text_indexes;
$data[0]['key'] = $key;
$data[0]['cipher_text_indexes'] = $cipher_text_indexes;
$data[0]['cipher_text'] = $cipher_text;
$out = array_values($data);
$json_encode = json_encode($out, JSON_UNESCAPED_UNICODE);
echo $json_encode;
?>