<?php
require "form.class.php";
/*
@author : site-waide.fr
@license : MPL http://www.mozilla.org/MPL/
@created: 27/06/2012 00:20
all the params with * are obligatory
*/

/*
@ex 1 : Form with default value and one input
@ex 2 : form with default value and two input
@ex 3 : login form
*/

//Example n°1
echo $form->create('default'); // ADD <form id="defaultForm" method="post" action="default.php" /> TO THE DOM
echo $form->input('test'); // ADD <input name="test" type="text" id="test"  /> TO THE DOM
echo $form->validate('Finish'); /* ADD <input type="submit"  value="Finish"/>
										</form> TO THE DOM */


//Example n°2
echo $form->create('default'); // ADD <form id="defaultForm" method="post" action="default.php" /> TO THE DOM
echo $form->input('test1'); // ADD <input name="test1" type="text" id="test1" /> TO THE DOM
echo $form->input('test2'); // ADD <input name="test2" type="text" id="test2" /> TO THE DOM
echo $form->validate('Finish');/* ADD <input type="submit"  value="Finish"/>
										</form> TO THE DOM */

//Example n°3
echo $form->create('login', array("action" => "connect.php")); // ADD <form id="loginForm" method="post" action="connect.php" /> TO THE DOM
echo $form->input('pseudo', array("id" => "pseudoForm", "placeholder" => "Your pseudo")); /* ADD <input name="Pseudo" type="text" 
id="pseudoForm" placeholder="Your pseudo" /> TO THE DOM */
echo $form->input('pass', array("type" => "password", "id" => "passForm", "placeholder" => "Your password")); /* ADD <input name="pass" 
type="password" id="passForm" placeholder="Your password" /> TO THE DOM */
echo $form->validate('Login !', "loginSubmit"); /* ADD <input type="submit" id="loginSubmit" value="Login !"/>
														</form> TO THE DOM */


?>
