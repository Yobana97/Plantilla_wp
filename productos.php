<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title> Online</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="MyraStudio" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">
            <div class="header-border"></div>
        
            <?php
            include("include/menu.php");
            ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Inicio</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pígina</a></li>
                                            <li class="breadcrumb-item active">Arrancadora</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                    </div> <!-- container-fluid -->
                     <div>
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                        <div class="container-fluid row">
                            <?php for ($i=0; $i < 4; $i++){
                                ?>
                               
                        <div class="card col-lg-2 col-md-3 col-sm-6" style="width: 18rem;">
                            <img src="img/abrigos.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                             <center><p class="card-text">Abrigos</p></center>
                            </div>
                        
                          </div>
                          <?php } ?>
                         
                </div>
                </div>
                <!-- End Page-content -->
<?php 
include("include/pie_pagina.php");
?>
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Overlay-->
        <div class="menu-overlay"></div>


        <!-- jQuery  -->
        <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
        <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
        <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
        <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
        <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

        <!-- App js -->
        <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>

    </body>

</html>