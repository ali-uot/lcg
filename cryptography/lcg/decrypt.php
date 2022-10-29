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

//input by user
$cipher_text = $_POST['cipher_text'];
$a = $_POST['a_value'];
$b = $_POST['b_value'];
$x[0] = $_POST['x_value'];
$start_from = $_POST['start_from'];
$key = $_POST['key'];
//***********

$n_cipher = strlen($cipher_text);
$key = str_replace(' ', '', $key); //remove spaces from key
$key_array = explode (",", $key); // convert key to array
$n_key = count($key_array);

//determine letters length if(just capital and no-symbols)
$letters = $obj->capital_letters($start_from);
$m = count($letters);


$cipher_text_indexes = $obj->text_to_indexes($letters, $cipher_text);


//********* <Decryption> *********
//plain = (cipher - key) mod m
for($i=0;$i<$n_cipher&& $i<$n_key;$i++){
    if($cipher_text_indexes[$i]<$key_array[$i]){
        $temp = $m + $cipher_text_indexes[$i];
        $res = $temp - $key_array[$i];
    }else{
        $sub = $cipher_text_indexes[$i] - $key_array[$i];
        $res = fmod($sub, $m);
    }
    $plain_text_indexes[$i] = $res;
}
//********* </Decryption> *********


$plain_text = $obj->indexes_to_text($letters, $plain_text_indexes);
$n_plain = count($plain_text);
$plain_text = implode($plain_text);

$data[0]['plain_text'] = $plain_text;
$data[0]['plain_text_indexes'] = $plain_text_indexes;
$data[0]['key'] = $key;
$data[0]['cipher_text_indexes'] = $cipher_text_indexes;
$data[0]['cipher_text'] = $cipher_text;
$out = array_values($data);
$json_encode = json_encode($out, JSON_UNESCAPED_UNICODE);
echo $json_encode;
?>