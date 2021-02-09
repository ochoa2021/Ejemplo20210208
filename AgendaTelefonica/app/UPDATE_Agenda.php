<?php

          session_start();

          $time = time();

          $date = date("Y-m-d H:i:s", $time);

          include('database_connection.php');

          $connect->set_charset("utf8");

          $gravado = "";
          $error = "";
          $warning1 = "";
          $warning2 = "";
          $warning3 = "";
          $warning4 = "";

          $id = $_POST['ID'];
          $parametro_a = $_POST['Parametro_A'];
          $parametro_b = $_POST['Parametro_B'];
          $parametro_c = $_POST['Parametro_C'];
          $parametro_d = $_POST['Parametro_D'];
          $parametro_e = $_POST['Parametro_E'];
          $parametro_f = $_POST['Parametro_F'];
          $parametro_g = $_POST['Parametro_G'];
          $parametro_h = $_POST['Parametro_H'];
          $parametro_i = $_POST['Parametro_I'];
          $parametro_j = $_POST['Parametro_J'];
          $parametro_k = $_POST['Parametro_K'];
          $parametro_l = $_POST['Parametro_L'];
          $parametro_m = $_POST['Parametro_M'];
          $parametro_n = $_POST['Parametro_N'];
          $parametro_o = $_POST['Parametro_O'];
          $parametro_p = $_POST['Parametro_P'];
          $parametro_q = $_POST['Parametro_Q'];
          $parametro_r = $_POST['Parametro_R'];
          $parametro_s = $_POST['Parametro_S'];
          $parametro_t = $_POST['Parametro_T'];
          $parametro_u = $_POST['Parametro_U'];
          $parametro_v = $_POST['Parametro_V'];
          $parametro_w = $_POST['Parametro_W'];
          $parametro_y = $_POST['Parametro_Y'];
          $parametro_z = $_POST['Parametro_Z'];


          $nombre         = $parametro_a;
          $numero         = $parametro_b;
          $direccion	    = $parametro_c;


          $sql= "UPDATE agenda
                   SET nombre = '$nombre',
                          numero = '$numero',
                          direccion = '$direccion'
          		       WHERE id = '$id'";

          if ($connect->query($sql) === TRUE) {
             if($connect->affected_rows == 1) {
                      $gravado = "Foi modificado con sucesso!";
             } else {
                       $error = "ID # ".$id." - "."Não foi modificado! - ". $connect->errno;
          	 }

          } else {

                       $error = "ID # ".$id." - "."Não foi modificado! - ". $connect->errno;
          }


          $data[] = array("grabado" => $gravado,
                            "error" => $error,
                            "warning1" => $warning1,
                            "warning2" => $warning2,
                            "warning3" => $warning3);

          $output = array("get_retornar"    => $data);

          echo json_encode($output);

          mysqli_close($connect);

?>
