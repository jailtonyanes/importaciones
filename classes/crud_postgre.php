<?php
 class Crud
 {
   protected $registros;
   protected $consulta;
   protected $ultimo_id;
   protected $num_rows;
   protected $mensaje;
   //fijar la consulta
   public function setConsulta($consulta1)
    {
        $this->consulta = $consulta1;
    }

 //seleccionar
 public function seleccionar($conexion)
    {
      $query=$this->consulta;
      $result=pg_query($conexion,$query);
      if($result)
       {
         $this->num_rows=pg_num_rows($result);
           if($this->num_rows>0)
            { 
               while( $row= pg_fetch_assoc($result))
               {
                $this->registros[] = $row;
               }
            }
            else
            {
              $this->mensaje ='No hay registros asociados a la consulta.';
            }
       } 
       else
        {
              $this->mensaje =  pg_last_error();
        }
   
     return  $this->registros;
  }

//insertar en la tabla
//recuerde ponerle a cada campo del fomrmulario, el nombre del campo en la tabla
     public function insertar($valores,$campos,$tabla,$conexion,$mensaje_exito,$retorno)
      {
        
      
         $query= "insert into $tabla ($campos) values ('$valores') RETURNING  $retorno";     
           $result= pg_query($conexion,$query);
           if($result)
             {
               echo $mensaje_exito;
               $row= pg_fetch_array($result);
               $this->ultimo_id = $row[$retorno];
             }
             else
               {
                echo pg_last_error();
               }
            
      
      }

       public function insertar2($valores,$campos,$tabla,$conexion,$mensaje_exito)
      {
             $query= "insert into $tabla ($campos) values $valores";     
           $result= pg_query($conexion,$query);
           if($result)
             {
               echo $mensaje_exito;
               //$this->ultimo_id = mysql_insert_id();
             }
             else
               {
                echo pg_last_error();
               }
      } 
      //actualizar
      public function update($consulta,$mensaje,$conexion)
      {
          
        $query =$consulta;
         $result= pg_query($conexion,$query);
         if($result)
         {
          echo $mensaje;
         }
         else
         {
           echo pg_last_error();
         }

      } 
     
  
  //eliminar
      public function eliminar($tabla,$conexion,$condicion,$mensaje)
       {
         if($condicion != '')
           {
             $where = 'where';
           }
           else
             {
              $where = '';
             }
         $query = "delete from $tabla $where $condicion ";
         $result= pg_query($conexion,$query);
         if($result)
          {
            echo $mensaje;
          }  
          else
             {
              echo pg_last_error();
             }

       }
//sacar ultimo id
    public function getLastid()
    {
      return $this->ultimo_id;
    }
    
    //cantidad de tuplas
    public function getTuplas()
    {
      return $this->num_rows;
    }

    public function getMensaje()
    {
      return $this->mensaje;
    }


 }



?>