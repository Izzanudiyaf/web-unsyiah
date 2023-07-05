<?php 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Guru Besar | Unsiyah</title>        
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta charset="utf-8">
        <meta name="author" content="Harry Boo">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        
        <!-- Head-CSS -->
        <?php require_once 'require/head-css.php'; ?>
        <!-- Head-CSS -->
        
    </head>
    <body  id="topPage" data-spy="scroll" data-target=".navbar" data-offset="100">
        
        <!-- Page Loader
        ===================================== -->
        <?php require_once 'require/loader-top.php'; ?>
        
        
        <!-- Navigation Area
        ===================================== -->
        <?php require_once 'require/nav.php'; ?>
               
        
        <!-- Search Modal Dialog Box
        ===================================== -->
        <div id="searchModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header bg-gray">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title text-center"><i class="fa fa-search fa-fw"></i> Search here</h5>
                    </div>
                    <div class="modal-body">                        
                        <form action="#" class="inline-form">
                            <input type="text" class="modal-search-input" autofocus>
                        </form>
                    </div>
                    <div class="modal-footer bg-gray">
                        <span class="text-center"><a href="#" class="color-dark">Advanced Search</a></span>
                    </div>
                </div>

            </div>
        </div>        
        
        
        <!-- Intro Area
        ===================================== -->
        <header class="pt100 pb10">
            <div class="intro-body text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 pt50">
                            <h1 class="brand-heading font-montserrat color-black" data-in-effect="fadeInDown"><strong>Guru Besar</strong></h1>                        
                        </div>
                    </div>
                </div>
            </div>
        </header>
    
        
        <!-- FAQ 1 Area
        ===================================== -->
        <div class="pt10 pb75">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <p class="lead color-black text-justify" style="line-height: 30px;">
                            <img src="assets/img/guru-besar.png" width="100%">
                        </p>
                    </div>
                </div>
            </div>
        </div>
            
        <!-- Footer Area
        =====================================-->
        <?php require_once 'require/footer.php'; ?>
        

        <!-- JQuery Core
        =====================================-->
        <?php require_once 'require/jquery.php'; ?>
        
    </body>
</html>