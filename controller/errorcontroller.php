<?php
	/**
	 * 
	 */
	class ErrorController extends Controller
	{
		function __construct()
		{
			echo 'Error al cargar el recurso';
			parent::__construct();
			$this->view->render('errorcontroller/index');
		}
	}
?>