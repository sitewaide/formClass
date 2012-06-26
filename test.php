<?php
require "form.class.php";
echo $form->create('users', array("method" => "get", "action" => "compte.php"));
echo $form->input('test', array("id" => "bwa", "type" => "password", "placeholder" => "hihi"));
echo $form->validate("Valider !", 'ouhou');
?>
<!--<input type="text" name="test" id="/" placeholder=""/>