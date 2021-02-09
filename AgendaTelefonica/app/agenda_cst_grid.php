<?php

        session_start();
        include('database_connection.php');
        $connect->set_charset("utf8");
        $param_1 = $_POST['param_1'];


        $sql = "SELECT id, nombre, numero, direccion FROM agenda
                        where ((id LIKE '%".$param_1."%')
                            OR (nombre LIKE '%".$param_1."%')
                            OR (numero LIKE '%".$param_1."%')
        									  OR (direccion LIKE '%".$param_1."%'))".
                            "ORDER BY 1";


                     $result = $connect->query($sql);
                     $data = "<tbody id='bodytable' name='bodytable'>";
                     if (!empty($result) && $result->num_rows > 0) {
                           while ($row = $result->fetch_assoc()) {
                                            $data = $data. "<tr>";


                                           $data = $data."<td>".
                                                         "<input name='group1' class='checkmark' type='radio' id='test".$row['id']."' "."value='".$row['id']."'/>".
                                                         "<label class='labeloption' for='test".$row['id']."'>".$row['id']."</label></td>";
                                            $data = $data. "<td>";
                                            $data = $data. $row["nombre"];
                                            $data = $data. "</td>";
                                            $data = $data. "<td>";
                                            $data = $data. $row["numero"];
                                            $data = $data. "</td>";
                                            $data = $data. "<td>";
                                            $data = $data. $row["direccion"];
                                            $data = $data. "</td>";


                                       }

                                      } else {
                                            $data = $data. "<tr>";
                                               $data = $data. "<td>";
                                               $data = $data. "No se encontro registro...".$param_1. $connect->errno; ;
                                               $data = $data. "</td>";
                                           $data = $data. "</tr>";
                                      }
                                      $data = $data. "</tbody>";

                              $output = array("relatorio_grid"    => $data);
                              echo json_encode($output);
                              mysqli_close($connect);
                      ?>
