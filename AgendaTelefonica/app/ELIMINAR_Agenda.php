<?php



          session_start();

          include('database_connection.php');

          $connect->set_charset("utf8");

          $gravado = "";
          $error = "";
          $warning1 = "";
          $warning2 = "";
          $warning3 = "";
          $warning4 = "";

          $id = $_POST['ID'];

          $sql= "DELETE FROM agenda
                  WHERE id = '$id'";

          if ($connect->query($sql) === TRUE) {

               $gravado = "Eliminado con sucesso!";

            } else {

               $error = "No fue Eliminado la linea! - ". $connect->errno;

            }


            $data[] = array("grabado" => $gravado,
                            "error" => $error,
                            "id" => $id,
                            "warning1" => $warning1,
                            "warning2" => $warning2,
                            "warning3" => $warning3);

            $output = array("get_retornar"    => $data);

            echo json_encode($output);

            mysqli_close($connect);

?>
