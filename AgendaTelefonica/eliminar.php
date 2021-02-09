<?php

       if (isset($_GET['Agenda_modificar'])) {

            $_SESSION['Agenda_modificar'] = $_GET['Agenda_modificar'];

        } else {

            $_SESSION['Agenda_modificar'] = "Nuevo";

        }


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">



    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>
<body>
    <div class="card-heading">
         <img style="margin-Left: 40px;" src="img/bg_2.jpg" alt="Image" class="img-fluid">
    </div>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 style="color: #3C5BFA" class="title">Modificacion de documento de Agenda Telefonica</h2>
                </div>
                <div class="card-body">
                    <form id="myForm" name="myForm"  method="POST" enctype="multipart/form-data">
                        <div class="form-row">
                              <div class="name">#ID</div>
                              <div class="value">
                                  <input style="background-color: #E0E6EB;" class="input--style-6" type="text" name="id" id="id"  value="<?php echo $_SESSION['Agenda_modificar']; ?>" disabled>
                              </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Nombre Completo</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nombre" id="nombre">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Numero de Telefono</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="numero" id="numero">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Direccion</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="direccion" id="direccion">
                            </div>
                        </div>
                     </form>
                </div>
                <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="button" id="btnsubmit" name="btnsubmit" onclick="grabar();">Eliminar</button>
                    <button class="btn btn--radius-2 btn--red" type="button" onclick="history.back();">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <script type="text/javascript">

    // consulta
    $(function() {

             var w_codigo="<?php echo $_SESSION['Agenda_modificar']; ?>";

             console.log(w_codigo);

             if (w_codigo !== "Nuevo") {

                      var dataString ="codigo="+w_codigo;

                      $.ajax({
                      type:'POST',
                      data:dataString,
                      dataType: "json",
                      cache:false,
                      url:'app/Consulta_get_Agenda.php',
                      success:function(retorno) {
                              console.log(retorno);

                              $('#nombre').val(retorno.modificacion[0]['nombre']);
                              $('#numero').val(retorno.modificacion[0]['numero']);
                              $('#direccion').val(retorno.modificacion[0]['direccion']);

                         }
                      });
                  }

       })

    // Grabar
     function grabar() {

       var mensaje;
       var opcion = confirm("Esta seguro que desea eliminar?");
       if (opcion == true) {

             var w_codigo="<?php echo $_SESSION['Agenda_modificar']; ?>";

             console.log(w_codigo);

             document.getElementById("btnsubmit").style.display = "none";


              var dataString ="ID="+w_codigo;

                              //console.log(dataString);

              $.ajax({
                    type:'POST',
                    data:dataString,
                dataType: "json",
                   cache:false,
                     url:'app/ELIMINAR_Agenda.php',
                     success:function(retorno) {
                            console.log(retorno);

                               var grabado = retorno.get_retornar[0]['grabado'];
                               var error = retorno.get_retornar[0]['error'];
                               var warning1 = retorno.get_retornar[0]['warning1'];
                               var warning2 = retorno.get_retornar[0]['warning2'];
                               var warning3 = retorno.get_retornar[0]['warning3'];

                               if (grabado !== "") {

                                  alert(grabado);

                              }

                              if (error !== "") {

                                 alert(error);

                             }
                       }

                 });

               } else {
             	    mensaje = "Eliminacion Cancelada";
             	}
     }
    </script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
