<?php 
# Importar modelo de abstracción de base de datos 

class usuario {
############################### PROPIEDADES ################################ 
public $nombre;
public $apellidos;
public $username;
public $email;
private $password;
protected $id;
//public $rows;
################################# MÉTODOS ################################## 
public function __construct() {
    $conf = require_once('core/conectar.php');
   
    }
    public function login (){

    }
    public function get_all(){

    $query=$this->db->query("SELECT * FROM usuarios ORDER BY id ASC");

        //Devolvemos el resultset en forma de array de objetos
        while ($row = $query->fetch_object())
        {
            $resultSet[]=$row;
        }
        return $resultSet;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }
    public function setUsuario($username) {
        $this->username = $username;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    //Insertar nuevo usuario
    public function add_user()
    {
        $query=$this->db->query("
            INSERT INTO usuarios
            (id,nombre,apellidos,username,password,email)
            VALUES
            (null,
                '".$this->nombre."',
                '".$this->apellidos."',
                '".$this->username."',
                '".$this->password."',
                '".$this->email."'
                )
            ");
        return $query;
    }
    # Traer datos de un usuario
    public function get($user_email='')
    {
        if($user_email = '') {
        $this->query = " 
                SELECT      id, nombre, apellidos, username, email 
                FROM        usuarios 
                
            ";
        $this->get_query();
        }
        if(count($this->rows) == 1)
         {
            foreach ($this->rows[0] as $propiedad=>$valor) {
            $this->$propiedad = $valor;
            }
        $this->mensaje = 'Usuario encontrado';
        } else {
            $this->mensaje = 'Usuario no encontrado';
        }
    }
    # Crear un nuevo usuario 
    public function set($user_data=array()) {
    if(array_key_exists('email', $user_data)) {
    $this->get($user_data['email']);
    if($user_data['email'] != $this->email) {
    foreach ($user_data as $campo=>$valor) {
    $$campo = $valor;
    }
    $this->query = " 
                            INSERT INTO     usuarios 
                            (nombre, apellido, email, clave) 
                            VALUES 
                            ('$nombre', '$apellido', '$email', '$clave') 
                    ";
    $this->execute_single_query();
    $this->mensaje = 'Usuario agregado exitosamente';
    } else {
    $this->mensaje = 'El usuario ya existe';
    }
    } else {
    $this->mensaje = 'No se ha agregado al usuario';
    }
    }
    # Modificar un usuario 
    public function edit($user_data=array()) {
    foreach ($user_data as $campo=>$valor) {
    $$campo = $valor;
    }
    $this->query = " 
                    UPDATE      usuarios 
                    SET         nombre='$nombre', 
                                apellido='$apellido' 
                    WHERE       email = '$email' 
            ";
    $this->execute_single_query();
    $this->mensaje = 'Usuario modificado';
    }
    # Eliminar un usuario 
    public function deleteById($id){
        $query=$this->db->query("DELETE FROM usuarios WHERE id=$id"); 
        return $query;
    }

    # Método destructor del objeto 
    function __destruct() {
    unset($this);
    }
}
?>