<?php
	include_once('/model/Model.php');
	class Controller{
		public $model;
		public function __construct() {
			$this ->model = new Model();
		}

	public function menu()
	{
		
		include ('views/cabecera.inc');
		include 'views/principal.inc';
		include ('views/contenido_lateral.inc');
		include ('views/footer.inc');

	}	
	public function invoke() {
		//llamada a l modelo
		$result = $this->model->getlogin();
		if($result == TRUE)
		{
			$_SESSION['login'] = 'yes';
			include '/views/Afterlogin.php';
		}
		else
		{
			$_SESSION['login'] = 'no';
			include '/views/login.php';
		}
	}	
	}

?>