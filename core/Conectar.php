<?php
class Conectar {
    private $driver, $host, $user, $pass, $database, $charset;
    protected $conn;
    //protected $query;  
    public function __construct() {
        $conf = require_once '/config/database.php';
        $this->driver=$conf["driver"];
        $this->host=$conf["host"];
        $this->user=$conf["user"];
        $this->pass=$conf["pass"];
        $this->database=$conf["database"];
        $this->charset=$conf["charset"];
    }
    
    public function open_connection()
    {
        try{
            if($this->driver=="mysql" || $this->driver==null)
            {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //$this->conn=new mysqli($this->host, $this->user, $this->pass, $this->database);
            //$conn->exec("SET NAMES '".$this->charset."'");
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
            }
            return $this->conn;
        }
        catch( PDOException $e )
        {
            echo "Error de conexion: " . $e‐>getMessage();
            return "Error";
        }
    }

    private function close_connection()
    {
        $this->conn=null;
        //$this->conn->close();
    }
    # Método destructor del objeto 
    function __destruct() {
    unset($this);
    }
}
?>
