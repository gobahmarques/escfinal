<?php
    include "../enderecos.php";
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Jogue Dota 2, Hearthstone, Clash Royale e muito mais... | e-Sports Cups Play</title>
        <link href="<?php echo $sidebar; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $sidebar; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $sidebar; ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
        <link href="<?php echo $sidebar; ?>css/sb-admin.css" rel="stylesheet">
        <link href="<?php echo $css; ?>esportscups.css" rel="stylesheet">
    </head>

    <body id="page-top">
        
        <?php include "header.php"; ?>

        <div id="wrapper">

            <?php include "menu-wrapper.php"; ?>

            <div id="content-wrapper">

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <i class="fas fa-home h5 mr-md-2"></i><span class="h5"> Página Inicial</span>
                        </div>
                        <div class="col-12 mt-4">
                            <div class="bg-cinza p-3 border border-dark">
                                <div class="row">
                                    <div class="col-3 col-md-1">
                                        <img src="<?php echo $img; ?>usuario-padrao.jpg" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" width="100%">
                                    </div>                                    
                                    <div class="col-7 col-md-10">
                                        <div class="row">
                                            <div class="col-12 text-left">
                                                <span class="h3 font-weight-bold">Nick Usuário</span>
                                            </div>
                                            <div class="col-12 text-center">
                                                Level X<br>
                                                <div class="progress">
                                                    <div class="progress-bar bg-preto text-white" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">560 XP</div>
                                                </div>                                                
                                            </div>
                                            <div class="col-6 h6">
                                                0
                                            </div>
                                            <div class="col-6 h6 text-right">
                                                800
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2 col-md-1">
                                        <div class="row">
                                            <div class="col-12 text-center mb-1">
                                                <span class="h4 font-weight-bold">127</span><br>
                                                <span class="h6">Partidas</span>
                                            </div>
                                            <div class="col-12 text-center">
                                                <span class="h4 font-weight-bold">58%</span><br>
                                                <span class="h6">Winrate</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-6 mt-4">
                            <div class="bg-cinza p-3 border border-dark">
                                <i class="fas fa-exclamation h3 mr-1"></i><span class="h3"> Missões</span>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <div class=" bg-cinza2 p-2">
                                            <span class="font-weight-bold h5">Que tal ser o anfitrião?</span><br>
                                            Crie uma Sala Personalizada e jogue-a, não importe sua colocação final.<br><br>
                                            <strong>Recompensa</strong><br>
                                            e$ 100 / 100XP
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <div class=" bg-cinza2 p-2">
                                            <span class="font-weight-bold h5">Nem sempre a gente ganha!</span><br>
                                            Fique no mínimo em Terceiro colocado em qualquer Torneio.<br><br>
                                            <strong>Recompensa</strong><br>
                                            e$ 150 / 100XP
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-cinza p-3 border border-dark mt-4">
                                <i class="fas fa-list-ol h3 mr-1"></i><span class="h3"> Rank Ladder</span>
                                <table class="table table-sm mt-3">
                                    <thead>
                                        <tr>
                                            <th scope="col">Rank</th>
                                            <th scope="col">Jogador</th>
                                            <th scope="col">Level</th>
                                            <th scope="col" class="text-right">%</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                1
                                            </th>
                                            <td class="font-weight-bold">Nick Jogador</td>
                                            <td>9</td>
                                            <td class="text-right">62</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                2
                                            </th>
                                            <td class="font-weight-bold">Nick Jogador</td>
                                            <td>9</td>
                                            <td class="text-right">62</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                3
                                            </th>
                                            <td class="font-weight-bold">Nick Jogador</td>
                                            <td>8</td>
                                            <td class="text-right">62</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                4
                                            </th>
                                            <td class="font-weight-bold">Nick Jogador</td>
                                            <td>8</td>
                                            <td class="text-right">62</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                5
                                            </th>
                                            <td class="font-weight-bold">Nick Jogador</td>
                                            <td>7</td>
                                            <td class="text-right">62</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                6
                                            </th>
                                            <td class="font-weight-bold">Nick Jogador</td>
                                            <td>6</td>
                                            <td class="text-right">62</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                7
                                            </th>
                                            <td class="font-weight-bold">Nick Jogador</td>
                                            <td>4</td>
                                            <td class="text-right">62</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                8
                                            </th>
                                            <td class="font-weight-bold">Nick Jogador</td>
                                            <td>4</td>
                                            <td class="text-right">62</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                9
                                            </th>
                                            <td class="font-weight-bold">Nick Jogador</td>
                                            <td>3</td>
                                            <td class="text-right">62</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                10
                                            </th>
                                            <td class="font-weight-bold">Nick Jogador</td>
                                            <td>2</td>
                                            <td class="text-right">62</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        <div class="col-12 col-md-12 col-lg-6 mt-4">
                            <div class="bg-cinza p-3 border border-dark">
                                <i class="fas fa-trophy h3 mr-1"></i><span class="h3"> Torneios</span><span> Ver Todos</span>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <div class=" bg-cinza2 p-2">
                                            <div class="row">
                                                <div class="col-3 col-md-2 align-self-center">
                                                    <img src="<?php echo $img; ?>logo-torneio.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" width="100%">
                                                </div>
                                                <div class="col-9 align-self-center">
                                                    <img src="<?php echo $img; ?>icones/hs.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="20" class="mr-2"><br>
                                                    <span class="h4 font-weight-bold">
                                                        Nome do Torneio
                                                    </span><br>
                                                    dd/mm/yyyy - 00h - Fuso Horário - Pais
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-6 align-self-center">
                                                    Premiação: <br>
                                                    e$ 12.000 | R$ 0
                                                </div>
                                                <div class="col-6 text-right align-self-center">
                                                    <input type="button" value="Realizar Inscrição" class="btn btn-azul2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <div class=" bg-cinza2 p-2">
                                            <div class="row">
                                                <div class="col-3 col-md-2 align-self-center">
                                                    <img src="<?php echo $img; ?>logo-torneio.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" width="100%">
                                                </div>
                                                <div class="col-9 align-self-center">
                                                    <img src="<?php echo $img; ?>icones/hs.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="20" class="mr-2"><br>
                                                    <span class="h4 font-weight-bold">
                                                        Nome do Torneio
                                                    </span><br>
                                                    dd/mm/yyyy - 00h - Fuso Horário - Pais
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-6 align-self-center">
                                                    Premiação: <br>
                                                    e$ 12.000 | R$ 0
                                                </div>
                                                <div class="col-6 text-right align-self-center">
                                                    <input type="button" value="Realizar Inscrição" class="btn btn-azul2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-cinza p-3 border border-dark mt-4">
                                <i class="fas fa-cogs h3 mr-1"></i><span class="h3"> Salas Personalizadas</span> Ver Todos
                                <table class="table mt-3">
                                    <thead>
                                        <tr>
                                            <th scope="col">Jogo</th>
                                            <th scope="col">Recompensa</th>
                                            <th scope="col">Tipo</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <img src="<?php echo $img; ?>icones/hs.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="30" class="mr-2">
                                            </th>
                                            <td class="font-weight-bold h5">e$ 200</td>
                                            <td class="h5">MD 3</td>
                                            <td class="text-right"><input type="button" value="Entrar" class="btn btn-azul2"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <img src="<?php echo $img; ?>icones/lol.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="30" class="mr-2">
                                            </th>
                                            <td class="font-weight-bold h5">e$ 200</td>
                                            <td class="h5">MD 3</td>
                                            <td class="text-right"><input type="button" value="Entrar" class="btn btn-azul2"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <img src="<?php echo $img; ?>icones/overwatch.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="30" class="mr-2">
                                            </th>
                                            <td class="font-weight-bold h5">e$ 200</td>
                                            <td class="h5">MD 3</td>
                                            <td class="text-right"><input type="button" value="Entrar" class="btn btn-azul2"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <img src="<?php echo $img; ?>icones/gwent.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="30" class="mr-2">
                                            </th>
                                            <td class="font-weight-bold h5">e$ 200</td>
                                            <td class="h5">MD 3</td>
                                            <td class="text-right"><input type="button" value="Entrar" class="btn btn-azul2"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <img src="<?php echo $img; ?>icones/dota2.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="30" class="mr-2">
                                            </th>
                                            <td class="font-weight-bold h5">e$ 200</td>
                                            <td class="h5">MD 3</td>
                                            <td class="text-right"><input type="button" value="Entrar" class="btn btn-azul2"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>  
                </div>
                <!-- /.container-fluid -->

                <?php // include "footer-wrapper.php"; ?>

            </div>
            <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
          <i class="fas fa-angle-up"></i>
        </a>

        <!-- Bootstrap core JavaScript-->
        <script src="<?php echo $sidebar; ?>vendor/jquery/jquery.min.js"></script>
        <script src="<?php echo $sidebar; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="<?php echo $sidebar; ?>vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Page level plugin JavaScript-->
        <script src="<?php echo $sidebar; ?>vendor/chart.js/Chart.min.js"></script>
        <script src="<?php echo $sidebar; ?>vendor/datatables/jquery.dataTables.js"></script>
        <script src="<?php echo $sidebar; ?>vendor/datatables/dataTables.bootstrap4.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?php echo $sidebar; ?>js/sb-admin.min.js"></script>

        <!-- Demo scripts for this page-->
        <script src="<?php echo $sidebar; ?>js/demo/datatables-demo.js"></script>
        <script src="<?php echo $sidebar; ?>js/demo/chart-area-demo.js"></script>

    </body>

</html>
