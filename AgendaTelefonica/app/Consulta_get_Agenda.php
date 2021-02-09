<?php

        session_start();

        include('database_connection.php');

        $connect->set_charset("utf8");

        $codigo = $_POST['codigo'];

        $sql = "SELECT id, nombre, numero, direccion FROM agenda where id = '$codigo' limit 1";

        $result = $connect->query($sql);


        if (!empty($result) && $result->num_rows > 0) {

              while ($row = $result->fetch_assoc()) {

                 $data[] = $row;

            }

        }


        $output = array("modificacion"    => $data);

        echo json_encode($output);

        mysqli_close($connect);

?>
