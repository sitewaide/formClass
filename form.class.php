<?php
class Form{

	public function create($name, $param = array("method" => "post", "action" => '')){
		//On initialise les variables
		$id = $name.'Form';

		if(empty($param['method'])){
			$method = 'post';
		}else{
			$method = $param['method'];
		}

		if(empty($param['action']) OR $param['action'] == ''){
			$action = $name.".php";
		}else{
			$action = $param['action'];
		}

		//On créer la balise
		$form = '<form ';
		$form .= 'id='.$id;
		$form .= ' method='.$method;
		$form .= ' action='.$action;
		$form .= ' />';
		return $form;
	}

	public function input($name, $param = array("type" => "text", "id" => '', "placeholder" => "")){
		//On initialise les variables
		if(empty($param['type']) OR $param['type'] == 'text'){
			$type = "text";
		}else{
			$type = $param['type'];
		}

		if(empty($param['id']) OR $param['id'] == ''){
			$id = $name;
		}else{
			$id = $param['id'];
		}

		if(empty($param['placeholder']) OR $param['placeholder'] == ""){
			$placeholder = "";
		}else{
			$placeholder = "placeholder=".$param['placeholder'];
		}

		//On créer la balise
		$input = '<input ';
		$input .= 'name='.$name;
		$input .=' type='.$type;
		$input .= ' id='.$id;
		$input .= ' '.$placeholder;
		$input .= ' />';
		return $input;

	}

	public function validate($value, $id = null){
		if($id != null){
			$id = "id=".$id;
		}
		else{
			$id = "";
		}

		$validate = '<input type="submit" ';
		$validate .= $id; 
		$validate .= ' value='.$value;
		$validate .= "/></form>";
		return $validate;
	}
}
$form = new Form;