<?php
    include "../../enderecos.php";
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
        
        <?php include "../header.php"; ?>

        <div id="wrapper">

            <?php include "../menu-wrapper.php"; ?>

            <div id="content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                            <i class="fas fa-cogs h5 mr-md-2"></i><span class="h5"> Sala Personalizada - Cod: 123</span>
                        </div>
                    </div>  
                    <div class="row mt-3 text-center">
                        <div class="col-2">
                            <div class="bg-cinza p-2">
                                ID <br>
                                <span class="h4 font-weight-bold">123</span>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="bg-cinza p-2">
                                <div class="row">
                                    <div class="col-2">
                                        <img src="<?php echo $img; ?>icones/hs.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" width="100%" class="mr-2 ml-2 mt-1 mb-2">
                                    </div>
                                    <div class="col-9 text-left">
                                        Nome da Sala <br>
                                        <span class="h4 font-weight-bold">123</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="bg-cinza p-2">
                                Vagas <br>
                                <span class="h4 font-weight-bold">1/6</span>
                            </div>
                        </div>
                        <div class="col-5 mt-3">
                            <div class="bg-cinza p-2">
                                Pote <br>
                                <span class="h4 font-weight-bold">e$ 12.000</span>
                            </div>
                        </div>
                        <div class="col-7 mt-3">
                            <div class="bg-cinza p-2">
                                Status <br>
                                <span class="h4 font-weight-bold">Aguardando Jogadores...</span>                                
                                <!--
                                    0 - Aguardando Jogadores
                                    1 - Em Andamento
                                    2 - Finalizado
                                -->
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
<!-- MODELO DE TIME
                        <div class="col-6 mb-3">
                            <div class="b-cinza p-2">
                                <span class="h4 font-weight-bold">Equipe 1</span>
                                <table class="table mt-3">
                                    <tr> 
                                        <td>Foto</td>
                                        <td>Nick Jogador</td>
                                        <td class="text-right">Ação</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
-->
                        <div class="col-6 mb-3">
                            <div class="b-cinza p-2">
                                <span class="h4 font-weight-bold">Equipe 1</span>
                                <table class="table mt-3">
                                    <tr> 
                                        <td>Foto</td>
                                        <td>Nick Jogador</td>
                                        <td class="text-right">Ação</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="b-cinza p-2">
                                <span class="h4 font-weight-bold">Equipe 1</span>
                                <table class="table mt-3">
                                    <tr> 
                                        <td>Foto</td>
                                        <td>Nick Jogador</td>
                                        <td class="text-right">Ação</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="b-cinza p-2">
                                <span class="h4 font-weight-bold">Equipe 1</span>
                                <table class="table mt-3">
                                    <tr> 
                                        <td>Foto</td>
                                        <td>Nick Jogador</td>
                                        <td class="text-right">Ação</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="b-cinza p-2">
                                <span class="h4 font-weight-bold">Equipe 1</span>
                                <table class="table mt-3">
                                    <tr> 
                                        <td>Foto</td>
                                        <td>Nick Jogador</td>
                                        <td class="text-right">Ação</td>
                                    </tr>
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
        <script>
            function novoLobby(){
                $(".modal-title").html("");
                $(".modal-body").load("play/salas-personalizadas/novo-lobby-form.php");
//                $(".modal-body").html("<h2>+ Novo Lobby</h2><br>Jogue partidas personalizadas com seus amigos e acumule recursos com isto.<br><br><strong>Informações Gerais:</strong><br><div class='row'><div class='col-6'>Jogo<br></div><div class='col-6'>Nome da Sala<br></div></div>");
                $(".modal").modal();
            }
        </script>
    </body>

</html>
