<?
class mydb
	{
		var $host;
		var $user;
		var $pass;
		var $db_name;
		var $connection;
		var $sel_db;
		var $db_selected;
		var $result;
		var $num_rows;
		var $row_object;
		var $id_gen;
		var $error_code = 0;

  	function db_open($conn_host, $conn_user, $conn_pass, $conn_db)

	{

		$this->host = $conn_host;

		$this->user = $conn_user;

		$this->pass = $conn_pass;

		$this->sel_db = $conn_db;

		$conected = mysql_connect($this->host, $this->user, $this->pass);

		$this->connection = $conected;

		mysql_select_db($this->sel_db, $this->connection);

		return $this->connection;
	}

  	function db_close()
	{
		mysql_close($this->connection);
	}

	function db_query($sql)
	{
		$this->result = mysql_query($sql, $this->connection);

		if($this->result)

			$this->num_rows = mysql_num_rows($this->result);

		else

			$this->num_rows = 0;
	}

	function db_next()
	{
		return $this->row_object = mysql_fetch_object($this->result);
	}

	function db_result()
	{
		$get_result = array();

		while($row = mysql_fetch_row($this->result))

		array_push($get_result, $row);

	  	return $get_result;
	}
 
	function db_insert($isql)
	{
		$sql_result = mysql_query($isql);

		if($sql_result)
		{
			$this->id_gen = mysql_insert_id();

			return 1;
		}
		else
			return 0;
	}
	
	function db_modify($sql)
	{
		$this->result = mysql_query($sql, $this->connection);
	}
	
	function db_free_result()
	{
		mysql_free_result($this->result);

	}
}

?>