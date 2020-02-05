<?php
	require_once 'controller/errorcontroller.php';
	class App {

		function __construct() {
			echo "<p>Nueva App</app>";

			$url = $_GET['url'];
			$url = rtrim($url, '/');
			$url = explode('/', $url);
			
			$archivoController = 'controller/' . $url[0] . '.php';

			if(file_exists($archivoController)) {
				require_once $archivoController;
				$controller = new $url[0];

				if(isset($url[1])) {
					$controller->{$url[1]}();
				}


			} else {
				$controller = new ErrorController();
			}


		}
	}

?>