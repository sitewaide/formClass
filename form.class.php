<?php
class Form{
/*
@author : site-waide.fr
@license : MPL http://www.mozilla.org/MPL/
@created: 27/06/2012 00:20
all the params with * are obligatory
*/

/*
@function create : create the <form> tag with his attributes 
@function input : Create an input tag
@function validate : Create the submit button and close the <form> tag
*/

/*
@function create : create the <form> tag with several attributes
@param name* : Used for the ID's form and to determined the action attributes
@param param : array
	@param method : Allow you to choose a specific method, default value is "post"
	@param action : Allow you to choose a specific treatment page, default value is $name.php  
*/
	public function create($name, $param = array("method" => "post", "action" => '')){
		//We initialized the variables
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
		//We create the tag
		$form = '<form ';
		$form .= 'id="'.$id.'"';
		$form .= ' method="'.$method.'"';
		$form .= ' action="'.$action.'"';
		$form .= ' />
		';
		//We return the tag
		return $form;
	}

/*@function input : Create the <input> tag with several attributes
@param name* : used for the name's attributes of the tag and the ID
@param param : array
	@param type : Allow you to choose a specific type of input, default value is "text"
	@param id : Allow you to choose a specific ID, default value is $name
	@param placeholder : Allow you to show a placeholder's text, default value is ""(null)
*/
	public function input($name, $param = array("type" => "text", "id" => '', "placeholder" => "")){
		//We initialized variables
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
			$placeholder = 'placeholder="'.$param['placeholder'].'"';
		}
		//We create the tag
		$input = '<input ';
		$input .= 'name="'.$name.'"';
		$input .=' type="'.$type.'"';
		$input .= ' id="'.$id.'"';
		$input .= ' '.$placeholder;
		$input .= ' />
		';
		//We return the tag
		return $input;
	}

/*
@function validate : Create the submit button and close the <form> tag
@param value* : Used for the text of the value's tag
@param id : used for put an optional id on the submit input tag
*/
	public function validate($value, $id = null){
		if($id != null){
			$id = 'id="'.$id.'"';
		}
		else{
			$id = "";
		}

		$validate = '<input type="submit" ';
		$validate .= $id; 
		$validate .= ' value="'.$value.'"';
		$validate .= "/>
		</form>";
		return $validate;
	}
}
/*
	Initialisation of the clas
*/
$form = new Form;