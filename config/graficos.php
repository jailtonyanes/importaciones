<?php


$functionName = filter_input(INPUT_GET, 'action');

if ($functionName == "personas") {
    personas();
}



function personas()
{
  include('mysqli_connect.php');

    //$query="SELECT codigo, antecedentes_familiares.enfermedad AS enfermedad FROM antecedentes_familiares order by enfermedad";



    $query="select count( case when sexo='m'
                   then 1 end ) as hombres
     , count( case when sexo='f'
                   then 1 end ) as mujeres,
    count(numero_documento) as registros
  from saludocupacional.persona ";
    $result = mysqli_query($dbc, $query) or trigger_error("Query: $query\n<br />MySQL Error: " . mysqli_error($dbc));
    //$aux = mysqli_fetch_array($result, MYSQLI_ASSOC);
while($obj = mysqli_fetch_object($result)) {
$var[] = $obj;
}
echo json_encode($var);


    //echo json_encode($aux);
}
?>