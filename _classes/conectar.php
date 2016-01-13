

<?php
 class Coneccion
 {
   protected $server;
   protected $user;
   protected $password;
   protected $database;
   protected $connection;

   public function conectar()
    {
      $this->connection= mysql_connect($this->server, $this->user,$this->password);
	  mysql_select_db($this->database);
	  mysql_query("SET NAMES 'utf8'");
	}
	
	public function desconectar()
	 {
	   mysql_close($this->connection);
	 }
   
   public function __construct($server1,$user1,$password1,$database1)
   {
     $this->server=$server1;
	 $this->user=$user1;
	 $this->password=$password1;
	 $this->database=$database1;
   }
   
	 public function getConection()
	  {
	    return $this->connection;
	  }
    

 }
?>