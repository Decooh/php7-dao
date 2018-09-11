<?php

spl_autoload_register(function($classe) {

	$filename = "clasS" .DIRECTORY_SEPARATOR. $classe.".php";

	if (file_exists(($filename))) {
		require_once($filename);
	}

});

?>