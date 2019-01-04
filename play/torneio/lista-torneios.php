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
                        <div class="col-12">
                            <i class="fas fa-trophy h5 mr-md-2"></i><span class="h5"> Torneios</span>
                        </div>
                        <div class="col-12 mt-4 font-weight-bold">
                            FILTROS DE BUSCA:
                        </div>
                        <div class="col-6">
                            Jogo
                            <select class="form-control">
                                <option>Lista dos Jogos</option>
                            </select>
                        </div>
                        <div class="col-6">
                        
                        </div>
                        <div class="col-12">
                            Status
                        </div>
                        <div class="col-6">
                            <input type="button" class="btn btn-laranja2 form-control" value="EM ANDAMENTO">
                        </div>
                        <div class="col-6">
                            <input type="button" class="btn btn-cinza form-control" value="PASSADOS">
                        </div>
                        <div class="col-12 mt-4">
                            <table class="table table-sm table-striped mt-3 text-center">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Início</th>
                                        <th scope="col">Equipes</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <img src="<?php echo $img; ?>logo-torneio.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="75" class="mr-2">
                                        </th>
                                        <td class="h5 align-middle">
                                            <img src="<?php echo $img; ?>icones/hs.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="20" class="mr-2 mb-2">
                                            <span class="font-weight-bold">
                                                Nome do Torneio
                                            </span><br>
                                            <span class="statusTorneioLista">
                                                status atual do torneio com cor
                                            </span>                                            
                                        </td>
                                        <td class="h6 align-middle">
                                            xx/mm/aaaa<br>
                                            00h
                                        </td>
                                        <td class="h5 font-weight-bold align-middle">x/64</td>
                                        <td class="text-right align-middle"><a href="play/torneio/123/"><input type="button" value="VER TORNEIO" class="btn btn-azul2"></a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <img src="<?php echo $img; ?>logo-torneio.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="75" class="mr-2">
                                        </th>
                                        <td class="h5 align-middle">
                                            <img src="<?php echo $img; ?>icones/hs.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="20" class="mr-2 mb-2">
                                            <span class="font-weight-bold">
                                                Nome do Torneio
                                            </span><br>
                                            <span class="statusTorneioLista">
                                                status atual do torneio com cor
                                            </span>                                            
                                        </td>
                                        <td class="h6 align-middle">
                                            xx/mm/aaaa<br>
                                            00h
                                        </td>
                                        <td class="h5 font-weight-bold align-middle">x/64</td>
                                        <td class="text-right align-middle"><input type="button" value="VER TORNEIO" class="btn btn-azul2"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <img src="<?php echo $img; ?>logo-torneio.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="75" class="mr-2">
                                        </th>
                                        <td class="h5 align-middle">
                                            <img src="<?php echo $img; ?>icones/hs.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="20" class="mr-2 mb-2">
                                            <span class="font-weight-bold">
                                                Nome do Torneio
                                            </span><br>
                                            <span class="statusTorneioLista">
                                                status atual do torneio com cor
                                            </span>                                            
                                        </td>
                                        <td class="h6 align-middle">
                                            xx/mm/aaaa<br>
                                            00h
                                        </td>
                                        <td class="h5 font-weight-bold align-middle">x/64</td>
                                        <td class="text-right align-middle"><input type="button" value="VER TORNEIO" class="btn btn-azul2"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <img src="<?php echo $img; ?>logo-torneio.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="75" class="mr-2">
                                        </th>
                                        <td class="h5 align-middle">
                                            <img src="<?php echo $img; ?>icones/hs.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="20" class="mr-2 mb-2">
                                            <span class="font-weight-bold">
                                                Nome do Torneio
                                            </span><br>
                                            <span class="statusTorneioLista">
                                                status atual do torneio com cor
                                            </span>                                            
                                        </td>
                                        <td class="h6 align-middle">
                                            xx/mm/aaaa<br>
                                            00h
                                        </td>
                                        <td class="h5 font-weight-bold align-middle">x/64</td>
                                        <td class="text-right align-middle"><input type="button" value="VER TORNEIO" class="btn btn-azul2"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <img src="<?php echo $img; ?>logo-torneio.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="75" class="mr-2">
                                        </th>
                                        <td class="h5 align-middle">
                                            <img src="<?php echo $img; ?>icones/hs.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="20" class="mr-2 mb-2">
                                            <span class="font-weight-bold">
                                                Nome do Torneio
                                            </span><br>
                                            <span class="statusTorneioLista">
                                                status atual do torneio com cor
                                            </span>                                            
                                        </td>
                                        <td class="h6 align-middle">
                                            xx/mm/aaaa<br>
                                            00h
                                        </td>
                                        <td class="h5 font-weight-bold align-middle">x/64</td>
                                        <td class="text-right align-middle"><input type="button" value="VER TORNEIO" class="btn btn-azul2"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <img src="<?php echo $img; ?>logo-torneio.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="75" class="mr-2">
                                        </th>
                                        <td class="h5 align-middle">
                                            <img src="<?php echo $img; ?>icones/hs.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="20" class="mr-2 mb-2">
                                            <span class="font-weight-bold">
                                                Nome do Torneio
                                            </span><br>
                                            <span class="statusTorneioLista">
                                                status atual do torneio com cor
                                            </span>                                            
                                        </td>
                                        <td class="h6 align-middle">
                                            xx/mm/aaaa<br>
                                            00h
                                        </td>
                                        <td class="h5 font-weight-bold align-middle">x/64</td>
                                        <td class="text-right align-middle"><input type="button" value="VER TORNEIO" class="btn btn-azul2"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <img src="<?php echo $img; ?>logo-torneio.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="75" class="mr-2">
                                        </th>
                                        <td class="h5 align-middle">
                                            <img src="<?php echo $img; ?>icones/hs.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="20" class="mr-2 mb-2">
                                            <span class="font-weight-bold">
                                                Nome do Torneio
                                            </span><br>
                                            <span class="statusTorneioLista">
                                                status atual do torneio com cor
                                            </span>                                            
                                        </td>
                                        <td class="h6 align-middle">
                                            xx/mm/aaaa<br>
                                            00h
                                        </td>
                                        <td class="h5 font-weight-bold align-middle">x/64</td>
                                        <td class="text-right align-middle"><input type="button" value="VER TORNEIO" class="btn btn-azul2"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <img src="<?php echo $img; ?>logo-torneio.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="75" class="mr-2">
                                        </th>
                                        <td class="h5 align-middle">
                                            <img src="<?php echo $img; ?>icones/hs.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="20" class="mr-2 mb-2">
                                            <span class="font-weight-bold">
                                                Nome do Torneio
                                            </span><br>
                                            <span class="statusTorneioLista">
                                                status atual do torneio com cor
                                            </span>                                            
                                        </td>
                                        <td class="h6 align-middle">
                                            xx/mm/aaaa<br>
                                            00h
                                        </td>
                                        <td class="h5 font-weight-bold align-middle">x/64</td>
                                        <td class="text-right align-middle"><input type="button" value="VER TORNEIO" class="btn btn-azul2"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <img src="<?php echo $img; ?>logo-torneio.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="75" class="mr-2">
                                        </th>
                                        <td class="h5 align-middle">
                                            <img src="<?php echo $img; ?>icones/hs.png" alt="e-Sports Cups, sua plataforma de e-Sports." title="Logo e-Sports Cups" height="20" class="mr-2 mb-2">
                                            <span class="font-weight-bold">
                                                Nome do Torneio
                                            </span><br>
                                            <span class="statusTorneioLista">
                                                status atual do torneio com cor
                                            </span>                                            
                                        </td>
                                        <td class="h6 align-middle">
                                            xx/mm/aaaa<br>
                                            00h
                                        </td>
                                        <td class="h5 font-weight-bold align-middle">x/64</td>
                                        <td class="text-right align-middle"><input type="button" value="VER TORNEIO" class="btn btn-azul2"></td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <nav aria-label="Navegação de página exemplo">
                                <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Anterior</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Próximo</a>
                                    </li>
                                </ul>
                            </nav>
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
