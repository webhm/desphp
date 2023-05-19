<?php

$dsn="(DESCRIPTION=( ADDRESS_LIST= (ADDRESS= (PROTOCOL=TCP) (HOST=172.16.3.247) (PORT=1521)))( CONNECT_DATA= (SID=conclina) ))";
$user="mchang";
$password="1501508480";
  
 //storing connection id in $conn
$conn=odbc_connect($dsn,$user, $password);

//Checking connection id or reference
if (!$conn)
 {
 echo (die(odbc_error()));
 }
 else
{
    echo "Connection Successful !";
}
//Resource releasing
odbc_close($conn);


?>