<?php
$tns = "
(DESCRIPTION =
    (ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.3.247)(PORT = 1521)) )
    (CONNECT_DATA = (SERVICE_NAME = conclina) )
)";

//user :: Ex -> hr
//pass:: Ex ->  12345

try {
    $conn = new PDO("oci:dbname=" . $tns, 'mchang', '1501508480');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'connect Successfull';
} catch (PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}

?>