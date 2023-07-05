<?php 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Biaya Uktb | Unsiyah</title>        
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
                            <h1 class="brand-heading font-montserrat color-black" data-in-effect="fadeInDown"><strong>Besaran Biaya Uktb</strong></h1>                           
                            <h4 class="brand-heading font-montserrat color-black alpha8" data-in-effect="fadeInDown">Sub Judul</h4>                           
                        </div>
                    </div>
                </div>
            </div>
        </header>
    
        
        <!-- FAQ 1 Area
        ===================================== -->
        <!-- penanda -->
        <!-- <hr> 
        <div class="pt10 pb75">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <p class="lead color-black text-justify" style="line-height: 30px;">
                            Laporan ini menggambarkan penjabaran capaian kinerja tahunan yang tertuang dalam perencanaan strategi meliputi pengukuran, evaluasi, pencapaian kinerja, akuntabilitas keuangan serta analisis tindak lanjut atas hasilhasil yang telah dicapai sekaligus sebagai bahan evaluasi untuk rencanan kinerja tahun 2019 guna penyusunan program dan kegiatan dalam mewujudkan sasaran yang ditetapkan sesuai dengan rencana strategis Universitas Syiah Kuala Tahun 2015-2019. Selain merupakan laporan pertanggungjawaban kinerja kepada Pemerintah, juga menjadi dokumen penting dalam Siklus Perencanaan, Pemantauan, dan Umpan Balik untuk tahun pelaksanaan kegiatan operasional dan pembangunan pendidikan pada tahun berikutnya.
                        </p>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Form and File PDF -->
        <div id="contact" class="pb100">
            <div class="container">

                <div class="row mt30">
                    <form name="contactform" id="contactForm" method="post" action="" class="positioned">
                        <div class="col-md-1"></div>
                        <div class="col-md-10 pt25 pr10 pl10 container" style="border: 2px solid #e0e0e0;">
                        <!-- fullname start -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <input type="text" name="senderName" id="senderName" class="input-md input-rounded form-control" placeholder="Search Keyword..." maxlength="100" required="">
                            </div>
                        </div>
                        <!-- fullname end -->

                        <!-- email start -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <select class="form-control input-md input-rounded" id="sel1">
                                    <option disabled="disabled">Order By:</option>
                                    <option>Publish Date</option>
                                    <option>Title</option>
                                    <option>Updated Date</option>
                                    <option>Downloads</option>
                                    <option>Views</option>
                                </select>
                            </div>
                        </div>
                        <!-- email end -->

                        <!-- website start -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <select class="form-control input-md input-rounded" id="sel1">
                                    <option disabled="disabled">Order By:</option>
                                    <option>Descending</option>
                                    <option>Ascending</option>
                                </select>
                            </div>
                        </div>
                        <!-- website end -->

                        <!-- security start -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="form-group">
                                <button class="button-o button-md button-block button-square button-info hover-sweep-to-right" style="margin-top: 0px !important;">Apply Filter</button>
                            </div>
                        </div>
                        <!-- security end -->
                        </div>
                        <div class="col-md-1"></div>
                    </form>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 mt25 pt15 pb15 bg-gray container">
                        <div class="col-md-10 col-sm-6 col-xs-8">
                            <div class="content-box content-box-left-icon">                        
                                <i class="fa fa-file-pdf-o fa-4x color-red" style="font-size: 4em !important;"></i>
                                <h5 class="ml20"><strong>Nama File</strong></h5>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-4" style="align-content: middle;">
                            <div class="form-group pt15">
                                <button class="btn btn-warning button-rounded hover-ripple-in">Unduh</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 mt25 pt15 pb15 bg-gray container">
                        <div class="col-md-10 col-sm-6 col-xs-8">
                            <div class="content-box content-box-left-icon">                        
                                <i class="fa fa-file-pdf-o fa-4x color-red" style="font-size: 4em !important;"></i>
                                <h5 class="ml20"><strong>Nama File</strong></h5>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-4" style="align-content: middle;">
                            <div class="form-group pt15">
                                <button class="btn btn-warning button-rounded hover-ripple-in">Unduh</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>

                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 mt25 pt15 pb15 bg-gray container">
                        <div class="col-md-10 col-sm-6 col-xs-8">
                            <div class="content-box content-box-left-icon">                        
                                <i class="fa fa-file-pdf-o fa-4x color-red" style="font-size: 4em !important;"></i>
                                <h5 class="ml20"><strong>Nama File</strong></h5>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 col-xs-4" style="align-content: middle;">
                            <div class="form-group pt15">
                                <button class="btn btn-warning button-rounded hover-ripple-in">Unduh</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>

            </div>
        </div>
            
            
        <!-- penanda -->
        <hr> 
        <!-- Footer Area
        =====================================-->
        <?php require_once 'require/footer.php'; ?>
        

        <!-- JQuery Core
        =====================================-->
        <?php require_once 'require/jquery.php'; ?>
        
    </body>
</html>