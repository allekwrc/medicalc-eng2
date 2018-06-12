<?php

$calcio = $_POST["calcio"];
$albumina = $_POST["albumina"];


$result = $calcio + (0.8*(4.0 - $albumina));

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
                                    <a href="#"><i class="fa fa-check fa-fw"></i> Cálcio<span class="fa arrow"></span></a>
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
                    <h1 class="page-header">Home</h1>
                </div>
            </div>

          <ul class="list-group list-group-flush">
                <br><br>
                <h5>INFORMAÇÕES DE RISCO DE TIMI</h5>
                <li class="list-group-item list-group-item-secondary text-center text-secondary">INFORMAÇÕES DO PACIENTE</li>
                <li class="list-group-item">
                    <div>Idade do paciênte</div>
                    <div><?php echo $age; ?></div>
                </li>

                <li class="list-group-item list-group-item-secondary text-center text-secondary">INFORMAÇÕES MÉDICAS DO PACIENTE</li>

                <li class="list-group-item">
                    <div>Frequência Cardíaca</div>
                    <div><?php echo $hr; ?></div>
                </li>

                <li class="list-group-item">
                    <div>Pressão Arterial Sistólica</div>
                    <div><?php echo $sbp; ?></div>
                </li>

                <?php

                if($result < 4){
                    $classresult = 'text-danger font-weight-bold';
                } elseif($result > 5 && $result <= 28){
                    $classresult = 'text-success font-weight-bold';
                }
                elseif($result > 28){
                    $classresult = 'text-warning font-weight-bold';
                }

                ?>

                <li class="list-group-item <?php echo $classresult; ?>">
                    <div>RESULTADO FINAL</div>
                    <div><?php echo $result; ?></div>
                </li>


                <br><br>
                <h5>TABELA PARA COMPARAÇÃO</h5>
                <table class="table table-hover">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Parâmetro</th>
                        <th scope="col">Normal baixo</th>
                        <th scope="col">Normal alto</th>
                        <th scope="col">Limite inferior</th>
                        <th scope="col">Limite superior</th>
                        <th scope="col">Unidades C</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">IDADE</th>
                        <td>0</td>
                        <td>90</td>
                        <td>0</td>
                        <td>110</td>
                        <td>anos</td>
                    </tr>
                    <tr>
                        <th scope="row">FREQUÊNCIA CARDÍACA</th>
                        <td>60</td>
                        <td>90</td>
                        <td>0</td>
                        <td>500</td>
                        <td>bpm</td>
                    </tr>
                    <tr>
                        <th scope="row">Pressão arterial sistólica</th>
                        <td>100</td>
                        <td>140</td>
                        <td>0</td>
                        <td>300</td>
                        <td>mmHg</td>
                    </tr>
                    </tbody>
                </table>

                <a href="index.html" class="btn btn-success">VOLTAR PARA PÁGINA INICIAL</a>

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
