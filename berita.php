<?php 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Berita | Unsiyah</title>        
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
                        <div class="col-md-12 pt50 pb25">
                            <h1 class="brand-heading font-montserrat color-black" data-in-effect="fadeInDown"><strong>Berita</strong></h1>                        
                        </div>
                    </div>
                </div>
            </div>
        </header>
    
        
        <!-- FAQ 1 Area
        ===================================== -->
        <div id="blog" class="pt10 pb75">
            <div class="container">
                <div class="row">
                    
                    <div class="container col-md-4 col-sm-6 col-xs-12 mb50 pb10 bg-gray" style="height: 600px; max-height: 600px">
                        <div class="blog-three">
                            <h4 class="blog-title text-center" style="height: 77px; max-height: 77px"><a href="#">USK Bentuk Senat Akademik Universitas</a></h4>
                            <img src="assets/img/blog/img-blog-1.jpg" class="img-responsive" alt="image blog">
                            <p class="mt25" style="height: 168px; max-height: 168px">
                                Universitas Syiah Kuala melalui Rapat Senat membentuk salah satu organ pimpinan kampus ini yaitu Senat Akademik Universitas (SAU) untuk masa bakti 2023 – 2028 di Gedung AAC Dayan Dawood.                            
                            </p>
                            <a href="#" class="button button-gray button-xs">Lihat Selengkapnya <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="container col-md-4 col-sm-6 col-xs-12 mb50 pb10" style="height: 600px; max-height: 600px">
                        <div class="blog-three">
                            <h4 class="blog-title text-center" style="height: 77px; max-height: 77px"><a href="#">Rektor Beri Apresiasi Kinerja Pegawai Dalam Anugrah USK</a></h4>
                            <img src="assets/img/blog/img-blog-1.jpg" class="img-responsive" alt="image blog">
                            <p class="mt25" style="height: 168px; max-height: 168px">
                                Rektor Universitas Syiah Kuala Prof. Dr. Ir. Marwan memberikan apresiasi atas kinerja sejumlah pegawai di lingkungan kampus ini. penghargaan tersebut diberikan langsung oleh Rektor pada malam Anugrah USK yang berlangsung di Gedung AAC Dayan Dawood.                            
                            </p>
                            <a href="#" class="button button-gray button-xs">Lihat Selengkapnya <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="container col-md-4 col-sm-6 col-xs-12 mb50 pb10 bg-gray" style="height: 600px; max-height: 600px">
                        <div class="blog-three">
                            <h4 class="blog-title text-center" style="height: 77px; max-height: 77px"><a href="#">USK juara II bussiness Plan TIngkat Nasional</a></h4>
                            <img src="assets/img/blog/img-blog-1.jpg" class="img-responsive" alt="image blog">
                            <p class="mt25" style="height: 168px; max-height: 168px">
                                Mahasiswa Universitas Syiah Kuala (USK) berhasil meraih Juara II pada Kompetisi Bisnis Plan tingkat nasional, bertajuk “SetSail BizAccel President University National Business Plan Competition”. Kompetisi ini diselenggarakan oleh President University.         
                            </p>
                            <a href="#" class="button button-gray button-xs">Lihat Selengkapnya <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="container col-md-4 col-sm-6 col-xs-12 mb50 pb10" style="height: 600px; max-height: 600px">
                        <div class="blog-three">
                            <h4 class="blog-title text-center" style="height: 77px; max-height: 77px"><a href="#">USK raih Enam Penghargaan DIskrikriktek</a></h4>
                            <img src="assets/img/blog/img-blog-1.jpg" class="img-responsive" alt="image blog">
                            <p class="mt25" style="height: 168px; max-height: 168px">
                                Universitas Syiah Kuala berhasil meraih enam penghargaan pada ajang Anugerah Diktiristek 2022. Penghargaan tersebut diterima oleh Wakil Rektor IV USK, Dr. Ir. Taufiq Saidi, M.Eng pada malam penganugerahan Diktiristek 2022 yang digelar pada kamis malam di The Sultan Hotel & Residence.                          
                            </p>
                            <a href="#" class="button button-gray button-xs">Lihat Selengkapnya <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="container col-md-4 col-sm-6 col-xs-12 mb50 pb10 bg-gray" style="height: 600px; max-height: 600px">
                        <div class="blog-three">
                            <h4 class="blog-title text-center" style="height: 77px; max-height: 77px"><a href="#">Rektor USK Dukung Hutan Adat Mukim Segera Diakui</a></h4>
                            <img src="assets/img/blog/img-blog-1.jpg" class="img-responsive" alt="image blog">
                            <p class="mt25" style="height: 168px; max-height: 168px">
                                Rektor Universitas Syiah Kuala Prof. Dr. Ir. Marwan mendukung penuh agar Hutan Adat Mukim yang diusulkan segera diakui pemerintah. Hal tersebut disampaikan Rektor dalam sambutannya pada kegiatan Diskusi Hasil Penelitian bertajuk: Hutan Adat Mukim sebagai Model Pengelolaan Hutan di Aceh                          
                            </p>
                            <a href="#" class="button button-gray button-xs">Lihat Selengkapnya <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="container col-md-4 col-sm-6 col-xs-12 mb50 pb10" style="height: 600px; max-height: 600px">
                        <div class="blog-three">
                            <h4 class="blog-title text-center" style="height: 77px; max-height: 77px"><a href="#">Kembangkan Irigasi Tetes Berbasis Internet Of Things, USK Sabet Juara II Kompetisi PLN ICE</a></h4>
                            <img src="assets/img/blog/img-blog-1.jpg" class="img-responsive" alt="image blog">
                            <p class="mt25" style="height: 168px; max-height: 168px">
                                Tim Chilee IoT Universitas Syiah Kuala (USK) berhasil meraih Juara II kompetisi PLN ICE (Innovation and Competition in Electricity) tahun 2022 kategori Electrifying Agriculture dengan sub kategori pengembangan program bisnis.                          
                            </p>
                            <a href="#" class="button button-gray button-xs">Lihat Selengkapnya <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="container col-md-4 col-sm-6 col-xs-12 mb50 pb10 bg-gray" style="height: 600px; max-height: 600px">
                        <div class="blog-three">
                            <h4 class="blog-title text-center" style="height: 77px; max-height: 77px"><a href="#">USK Bentuk Senat Akademik Universitas</a></h4>
                            <img src="assets/img/blog/img-blog-1.jpg" class="img-responsive" alt="image blog">
                            <p class="mt25" style="height: 168px; max-height: 168px">
                                Universitas Syiah Kuala melalui Rapat Senat membentuk salah satu organ pimpinan kampus ini yaitu Senat Akademik Universitas (SAU) untuk masa bakti 2023 – 2028 di Gedung AAC Dayan Dawood.                          
                            </p>
                            <a href="#" class="button button-gray button-xs">Lihat Selengkapnya <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="container col-md-4 col-sm-6 col-xs-12 mb50 pb10" style="height: 600px; max-height: 600px">
                        <div class="blog-three">
                            <h4 class="blog-title text-center" style="height: 77px; max-height: 77px"><a href="#">Rektor Beri Apresiasi Kinerja Pegawai Dalam Anugrah USK</a></h4>
                            <img src="assets/img/blog/img-blog-1.jpg" class="img-responsive" alt="image blog">
                            <p class="mt25" style="height: 168px; max-height: 168px">
                                Rektor Universitas Syiah Kuala Prof. Dr. Ir. Marwan memberikan apresiasi atas kinerja sejumlah pegawai di lingkungan kampus ini. penghargaan tersebut diberikan langsung oleh Rektor pada malam Anugrah USK yang berlangsung di Gedung AAC Dayan Dawood.                          
                            </p>
                            <a href="#" class="button button-gray button-xs">Lihat Selengkapnya <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="container col-md-4 col-sm-6 col-xs-12 mb50 pb10 bg-gray" style="height: 600px; max-height: 600px">
                        <div class="blog-three">
                            <h4 class="blog-title text-center" style="height: 77px; max-height: 77px"><a href="#">USK juara II bussiness Plan TIngkat Nasional</a></h4>
                            <img src="assets/img/blog/img-blog-1.jpg" class="img-responsive" alt="image blog">
                            <p class="mt25" style="height: 168px; max-height: 168px">
                                Mahasiswa Universitas Syiah Kuala (USK) berhasil meraih Juara II pada Kompetisi Bisnis Plan tingkat nasional, bertajuk “SetSail BizAccel President University National Business Plan Competition”. Kompetisi ini diselenggarakan oleh President University.                          
                            </p>
                            <a href="#" class="button button-gray button-xs">Lihat Selengkapnya <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="container col-md-4 col-sm-6 col-xs-12 mb50 pb10" style="height: 600px; max-height: 600px">
                        <div class="blog-three">
                            <h4 class="blog-title text-center" style="height: 77px; max-height: 77px"><a href="#">USK raih Enam Penghargaan DIskrikriktek</a></h4>
                            <img src="assets/img/blog/img-blog-1.jpg" class="img-responsive" alt="image blog">
                            <p class="mt25" style="height: 168px; max-height: 168px">
                                Universitas Syiah Kuala berhasil meraih enam penghargaan pada ajang Anugerah Diktiristek 2022. Penghargaan tersebut diterima oleh Wakil Rektor IV USK, Dr. Ir. Taufiq Saidi, M.Eng pada malam penganugerahan Diktiristek 2022 yang digelar pada kamis malam di The Sultan Hotel & Residence.                          
                            </p>
                            <a href="#" class="button button-gray button-xs">Lihat Selengkapnya <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="container col-md-4 col-sm-6 col-xs-12 mb50 pb10 bg-gray" style="height: 600px; max-height: 600px">
                        <div class="blog-three">
                            <h4 class="blog-title text-center" style="height: 77px; max-height: 77px"><a href="#">Rektor USK Dukung Hutan Adat Mukim Segera Diakui</a></h4>
                            <img src="assets/img/blog/img-blog-1.jpg" class="img-responsive" alt="image blog">
                            <p class="mt25" style="height: 168px; max-height: 168px">
                                Rektor Universitas Syiah Kuala Prof. Dr. Ir. Marwan mendukung penuh agar Hutan Adat Mukim yang diusulkan segera diakui pemerintah. Hal tersebut disampaikan Rektor dalam sambutannya pada kegiatan Diskusi Hasil Penelitian bertajuk: Hutan Adat Mukim sebagai Model Pengelolaan Hutan di Aceh                          
                            </p>
                            <a href="#" class="button button-gray button-xs">Lihat Selengkapnya <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="container col-md-4 col-sm-6 col-xs-12 mb50 pb10" style="height: 600px; max-height: 600px">
                        <div class="blog-three">
                            <h4 class="blog-title text-center" style="height: 77px; max-height: 77px"><a href="#">Kembangkan Irigasi Tetes Berbasis Internet Of Things, USK Sabet Juara II Kompetisi PLN ICE</a></h4>
                            <img src="assets/img/blog/img-blog-1.jpg" class="img-responsive" alt="image blog">
                            <p class="mt25" style="height: 168px; max-height: 168px">
                                Tim Chilee IoT Universitas Syiah Kuala (USK) berhasil meraih Juara II kompetisi PLN ICE (Innovation and Competition in Electricity) tahun 2022 kategori Electrifying Agriculture dengan sub kategori pengembangan program bisnis.                          
                            </p>
                            <a href="#" class="button button-gray button-xs">Lihat Selengkapnya <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="text-center">
                        <button class="button-o button-warning hover-ripple-out">Load More <i class="fa fa-spinner"></i></button>
                    </div>
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