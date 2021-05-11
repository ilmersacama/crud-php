<?php
	include ('/core/Conectar.php');
	class Model {
	private $db;
	//private $query;
	public function __construct(){
		$this->db = new Conectar();
	}
	public function getlogin()
	{
		if(isset($_REQUEST['username']) && isset($_REQUEST['password']))
		{
			$user = $_REQUEST['username'];
			$password = md5($_REQUEST['password']);
			$query = "SELECT * FROM usuarios WHERE username = '".$user."';";
			$querys=$this->db->open_connection()->query($query);
			//if($querys->rowCount() >0)
			while($fila = $querys->fetch())
			{
				if($user == $fila['username'] && $password == $fila['password'])
				{
					/*$_SESSION['login'] = "yes";
					header("Location: includes/form_posts.php");*/
					$_SESSION['usuariotemporal'] = $fila['username'];
					
					
					return TRUE;
				}
				else
				{
				/*$_SESSION['login'] = "no";
				header("Location: blog.php");
				*/
					return FALSE;
				}
			}
		}
	}
}
?>