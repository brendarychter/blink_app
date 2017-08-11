<?php
    require_once("../connection.php");
    $connection = new connection;

    $query = "select * from contactos";
    $response = mysqli_query($connection->connected, $query);

    while($obj = mysqli_fetch_object($response)){
        $matriz[] = array('id_contact' => $obj->id_contact, 'message' => $obj->message, 'mail' => $obj->mail, 'name' => $obj->name, 'phone' => $obj->phone, 'date_time' => $obj->date_time);
    }
    $datos = json_encode($matriz);
    echo $datos;

?>