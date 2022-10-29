<?php
class class_symbols{
	public function __construct(){
		
	}
	public function capital_letters($start_from){
        $data = array();
        $n = $start_from;
        foreach (range('A', 'Z') as $column){
            $data[$n] = $column;
            $n++;
        }
        return $data;
	}
    public function text_to_indexes($array, $text){
        $data = array();
        $n_plain = strlen($text);
        for($i=0;$i<$n_plain;$i++){
            $this_letter = $text[$i];
            $index_letter = array_search($this_letter, $array);
            $data[$i] = $index_letter;
        }
        return $data;
    }
    public function indexes_to_text($array, $indexes){
        $data = array();
        $n_cipher = count($indexes);
        for($i=0;$i<$n_cipher;$i++){
            $data[$i] = $array[$indexes[$i]];
        }
        return $data;
    }
}

?>