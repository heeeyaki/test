<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CI_Prompt{
	
	public function show_result($data){
		echo "<pre>";
		print_r(@$data);
		echo "</pre>";
	}

	public function show_response($isSuccess=false,$details){
		$respType = ($isSuccess)?"success":"error";
		header("Content-Type: application/json");
        echo json_encode(array($respType=>$details));
        die;
	}

	public function hasKey($data, $target = array()){
		foreach($target as $v){
			if(!isset($data[$v])) $this->show_response(false,"no ".$v." inside the data");
		}
	}

	public function hasValueInKey($data, $target = array()){
		foreach($target as $v){
			if(strlen(trim(@$data[$v])) == 0) $this->show_response(false,"no value inside the ".$v);
		}
	}

	public function randomChar($length){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}