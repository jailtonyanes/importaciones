<?php
 Class Connection
{
	public $server;
	public $user;
	public $password;
	public $database;
	public $connection;
	public $port;

	public function __construct($server1,$port1,$dbname1,$user1,$password1)
	{
      $this->server = $server1;
      $this->port = $port1;
      $this->dbname = $dbname1;
      $this->user = $user1;
      $this->password = $password1;
	}

  /* $cadenaConexion = "host=$host port=$port dbname=$dbname user=$user password=$password";
$conexion = pg_connect($cadenaConexion) or die("Error en la ConexiÃ³n:".pg_last_error());
echo "<h3>Conexion Exitosa PHP - PostgreSQL</h3><hr><br>";*/


    public function conectar()
    {
     

       $this->connection = pg_connect("host=$this->server port=$this->port dbname=$this->dbname user=$this->user password=$this->password") or die ("Error en la ConexiÃ³n:".pg_last_error());
      	// echo "<h3>Conexion Exitosa PHP - PostgreSQL</h3><hr><br>";
    }

	public function desconectar()
	{
		
		pg_close($this->connection);
	} 

	public function getConnection()
	{
		return $this->connection;
	} 
}



 
?>