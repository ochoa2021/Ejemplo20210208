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
                    <h2 style="color: #3C5BFA" class="title">Carga de documento de Agenda Telefonica</h2>
                </div>
                <div class="card-body">
                    <form id="myForm" name="myForm"  method="POST" enctype="multipart/form-data">
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
                    <button class="btn btn--radius-2 btn--blue-2" type="button" id="btnsubmit" name="btnsubmit" onclick="grabar();">Grabar</button>
                    <button class="btn btn--radius-2 btn--red" type="button" onclick="history.back();">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>


    <script type="text/javascript">

    // Grabar
     function grabar() {

       document.getElementById("btnsubmit").style.display = "none";

       // Insert de cabecera
       var parA           = document.getElementById("nombre").value;
       var parB           = document.getElementById("numero").value;
       var parC	          = document.getElementById("direccion").value;
       var parD           = "";
       var parE           = "";
       var parF           = "";
       var parG           = "";
       var parH           = "";
       var parI           = "";
       var parJ           = "";
       var parK           = "";
       var parL           = "";
       var parM           = "";
       var parN           = "";
       var parO           = "";
       var parP           = "";
       var parQ           = "";
       var parR           = "";
       var parS           = "";
       var parT           = "";
       var parU           = "";
       var parV           = "";
       var parW           = "";
       var parY           = "";
       var parZ           = "";

       var dataString ="ID=Nuevo&Parametro_A="+parA+"&Parametro_B="+parB
                          +"&Parametro_C="+parC+"&Parametro_D="+parD
                          +"&Parametro_E="+parE+"&Parametro_F="+parF
                          +"&Parametro_G="+parG+"&Parametro_H="+parH
                          +"&Parametro_I="+parI+"&Parametro_J="+parJ
                          +"&Parametro_K="+parK+"&Parametro_L="+parL
                          +"&Parametro_M="+parM+"&Parametro_N="+parN
                          +"&Parametro_O="+parO+"&Parametro_P="+parP
                          +"&Parametro_Q="+parQ+"&Parametro_R="+parR
                          +"&Parametro_S="+parS+"&Parametro_T="+parT
                          +"&Parametro_U="+parU+"&Parametro_V="+parV
                          +"&Parametro_W="+parW+"&Parametro_Y="+parY
                          +"&Parametro_Z="+parZ;


          $.ajax({
                type:'POST',
                data:dataString,
            dataType: "json",
               cache:false,
                 url:'app/INSERT_Agenda.php',
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



     }

    </script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
