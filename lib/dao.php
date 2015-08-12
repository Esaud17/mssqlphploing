<?php
$server = '192.168.1.100\\SQLEXPRESS';
@$conn= mssql_connect($server, 'test', 'test');

if (!$conn){
    die('Something went wrong while connecting to MSSQL');
}else{
        @$selected = mssql_select_db('ToDoAndWork', $conn) 
        or die('Couldn’t open database databasename');
     }

function obtenerRegistros($query){
    $dataset = array();
   if( $cursor = mssql_query($query) )
    {
        while($row = mssql_fetch_array($cursor)){
            $dataset[] = $row;
        }
    }
    return $dataset;
}
?>