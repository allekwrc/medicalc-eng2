<?php

$calcio = $_POST["calcio"];
$ph     = $_POST["ph"];

    if ($ph < 7.4)
        $resultado = $calcio;
    else
        $resultado =  $calcio+( 0.12*( ($ph-7.4)/0.1 ) );

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MedCalc - Calculadora da Saúde</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">MedCalc</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">

                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i>Sair</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.html"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-medkit fa-fw"></i> Endocrinologia<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="fa fa-eyedropper fa-fw"></i> Cálcio<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="calcio_correcao.html"><i class="fa fa-flask fa-fw"></i> Correção de Cálcio</a>
                                        </li>
                                        <li>
                                            <a href="albumina_correcao.html"><i class="fa fa-flask fa-fw"></i> Correção de Albumina</a>
                                        </li>
                                        <li>
                                            <a href="globulina_correcao.html"><i class="fa fa-flask fa-fw"></i> Correção de Globulina</a>
                                        </li>
                                        <li>
                                            <a href="ph_correcao.html"><i class="fa fa-flask fa-fw"></i> Correção de pH</a>
                                        </li>
                                        <li>
                                            <a href="proteina_limite.html"><i class="fa fa-flask fa-fw"></i> Limites de Proteína</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 style = "text-align:center" class="page-header">Resultado do Cálculo de Correção de pH</h1>
                </div>
            </div>

          <ul class="list-group list-group-flush">
                <br><br>

                <li class="list-group-item list-group-item-secondary text-center text-secondary" style = "font-weight:bolder; background-color:#efefef">DADOS DO CÁLCULO</li>

               <?php

                if($resultado < 8.5 || $resultado > 10.5){
                    $classresult = 'text-danger font-weight-bold';

                } elseif($resultado >= 8.5 && $resultado <= 10.5){
                    $classresult = 'text-success font-weight-bold';
                }


                ?>

                <li class="list-group-item" style="background-color:#dae8fc;">
                    <div style = "font-weight:bolder">Valor do Cálcio: <spam style = "font-weight:normal"><?php echo $calcio; ?> mg/dL</spam></div><br>
                    <div style = "font-weight:bolder">Valor da ph: <spam style = "font-weight:normal"><?php echo $ph; ?> pH untis</spam></div>

                    <br>
                    <div style = "font-weight:bolder">RESULTADO: <spam class="<?php echo $classresult; ?>"><?php echo $resultado; ?> mg/dL</spam></div>
                </li>


                <br><br>

                <li class="list-group-item list-group-item-secondary text-center text-secondary" style = "font-weight:bolder; background-color:#efefef">TABELA PARA COMPARAÇÃO</li>


                <style type="text/css" >
                    .tg  {border-collapse:collapse;border-spacing:0;}
                    .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                    .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                    .tg .tg-v0hj{font-weight:bold;background-color:#efefef;border-color:inherit;text-align:center;vertical-align:top}
                    .tg .tg-4j1h{background-color:#dae8fc;border-color:inherit;vertical-align:top}
                    .tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
                    .tg .tg-us36{border-color:inherit;vertical-align:top}
                    .tg .tg-3idu{background-color:#dae8fc;border-color:inherit;vertical-align:top}
                    .tg .tg-ey81{border-color:inherit;vertical-align:top}
                </style>
              <li class="list-group-item" style="text-align: center;">
                  <center><table class="tg" style="text-align: center;">
                    <tr>
                        <th class="tg-v0hj" colspan="10">Parâmetros para Equação - Correção de Cálcio</th>
                    </tr>
                    <tr>
                        <td class="tg-3idu"><span style="font-weight:bold">Parâmetro</span></td>
                          <td class="tg-4j1h"><span style="font-weight:bold">Abreviatura</span></td>
                          <td class="tg-3idu"><span style="font-weight:bold">spcmn</span></td>
                          <td class="tg-4j1h"><span style="font-weight:bold">Normal Baixo</span><br></td>
                          <td class="tg-3idu"><span style="font-weight:bold">Normal Alto</span></td>
                          <td class="tg-4j1h"><span style="font-weight:bold">Limite Baixo</span></td>
                          <td class="tg-3idu"><span style="font-weight:bold">Limite Alto</span></td>
                          <td class="tg-4j1h"><span style="font-weight:bold">Unidade C</span><br></td>
                          <td class="tg-3idu"><span style="font-weight:bold">CF</span><br></td>
                          <td class="tg-4j1h"><span style="font-weight:bold">SI UNITS</span><br></td>
                    </tr>
                    <tr>
                        <td class="tg-c3ow" colspan="10"><span style="font-weight:bold">Entrada</span></td>
                    </tr>
                    <tr>
                      <td class="tg-us36"><span style="font-weight:bold">Cálcio</span></td>
                      <td class="tg-ey81">Ca++<br></td>
                      <td class="tg-us36">S</td>
                      <td class="tg-ey81">8.5</td>
                      <td class="tg-us36">10.5</td>
                      <td class="tg-ey81">0</td>
                      <td class="tg-us36">20</td>
                      <td class="tg-ey81">mg/dL<br></td>
                      <td class="tg-us36">0.2495</td>
                      <td class="tg-ey81">mmol/L<br></td>
                   </tr>
                   <tr>
                      <td class="tg-us36"><span style="font-weight:bold">pH</span></td>
                      <td class="tg-ey81"></td>
                      <td class="tg-us36">B<br></td>
                      <td class="tg-ey81">7.36</td>
                      <td class="tg-us36">7.44</td>
                      <td class="tg-ey81">0</td>
                      <td class="tg-us36">20</td>
                      <td class="tg-ey81">pH unidade<br></td>
                      <td class="tg-us36"></td>
                      <td class="tg-ey81"><br></td>
                   </tr>
                   <tr>
                      <td class="tg-c3ow" colspan="10"><span style="font-weight:bold">Saída</span></td>
                   </tr>
                   <tr>
                      <td class="tg-us36"><span style="font-weight:bold">Cálcio - Correção do pH</span></td>
                      <td class="tg-ey81">CapH_c<br></td>
                      <td class="tg-us36">S</td>
                      <td class="tg-ey81">8.5</td>
                      <td class="tg-us36">10.5</td>
                      <td class="tg-ey81">0</td>
                      <td class="tg-us36">20</td>
                      <td class="tg-ey81">mg/dL<br></td>
                      <td class="tg-us36">0.2495</td>
                      <td class="tg-ey81">mmol/L<br></td>
                   </tr>
                  </table></center>
                  <div><br>
                    Sobre os Parâmetros: Valores normais (e limites) são expressos em Unidades (C). Spcmn = amostra.
                    CF = fator de conversão.
                    <br>Unidades (C) x CF = Unidades (SI) (a menos que especificado de outra forma).
                  </div>
              </li>
              <br>
            </ul>
        </div>
    </div>



    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
