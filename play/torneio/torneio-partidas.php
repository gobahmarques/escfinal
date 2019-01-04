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
                            <?php include "header.php"; ?>
                            <div class="row">
                                <div class="col-12">                                    
                                    <div class="border p-3">
                                        Conteúdo aqui
                                    </div>
                                </div>
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
            $(document).ready(function(){
                $(".partidas").addClass("btn-dark");                
            })
        </script>                
    </body>

</html>
