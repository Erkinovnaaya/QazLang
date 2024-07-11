<?php
require "libs/rb.php";

R::setup('mysql:host=localhost; qzlng=cwa', 'root', 'root');

function showError($errors){
	return array_shift($errors);
}

?>
