<?php 
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache"); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home | Unsiyah</title>        
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
        <header class="pt100 pb50">
            <div class="intro-body text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 pt50">
                            <img src="assets/img/home.png" width="100%">                      
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="blog" class="pt50 pb75 mt30">
            <div class="container">
                <div class="row">
                    <div class="text-center mb50">
                        <h2><b>Berita Terkini</b></h2>
                    </div>
                    
                    <div class="container col-md-4 col-sm-6 col-xs-12 mb50 pb10 bg-gray" style="height: 600px; max-height: 600px">
                        <div class="blog-three">
                            <h4 class="blog-title text-center" style="height: 77px; max-height: 77px"><a href="#">USK Bentuk Senat Akademik Universitas</a></h4>
                            <img src="assets/img/blog/img-blog-1.jpg" class="img-responsive" alt="image blog">
                            <p class="mt25" style="height: 168px; max-height: 168px">
                                Universitas Syiah Kuala melalui Rapat Senat membentuk salah satu organ pimpinan kampus ini yaitu Senat Akademik Universitas (SAU) untuk masa bakti 2023 – 2028 di Gedung AAC Dayan Dawood.                            
                            </p>
                            <a href="berita-expand.php" class="button button-cyan button-xs">Lihat Selengkapnya <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="container col-md-4 col-sm-6 col-xs-12 mb50 pb10" style="height: 600px; max-height: 600px">
                        <div class="blog-three">
                            <h4 class="blog-title text-center" style="height: 77px; max-height: 77px"><a href="#">Rektor Beri Apresiasi Kinerja Pegawai Dalam Anugrah USK</a></h4>
                            <img src="assets/img/blog/img-blog-1.jpg" class="img-responsive" alt="image blog">
                            <p class="mt25" style="height: 168px; max-height: 168px">
                                Rektor Universitas Syiah Kuala Prof. Dr. Ir. Marwan memberikan apresiasi atas kinerja sejumlah pegawai di lingkungan kampus ini. penghargaan tersebut diberikan langsung oleh Rektor pada malam Anugrah USK yang berlangsung di Gedung AAC Dayan Dawood.                            
                            </p>
                            <a href="berita-expand.php" class="button button-cyan button-xs">Lihat Selengkapnya <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="container col-md-4 col-sm-6 col-xs-12 mb50 pb10 bg-gray" style="height: 600px; max-height: 600px">
                        <div class="blog-three">
                            <h4 class="blog-title text-center" style="height: 77px; max-height: 77px"><a href="#">USK juara II bussiness Plan TIngkat Nasional</a></h4>
                            <img src="assets/img/blog/img-blog-1.jpg" class="img-responsive" alt="image blog">
                            <p class="mt25" style="height: 168px; max-height: 168px">
                                Mahasiswa Universitas Syiah Kuala (USK) berhasil meraih Juara II pada Kompetisi Bisnis Plan tingkat nasional, bertajuk “SetSail BizAccel President University National Business Plan Competition”. Kompetisi ini diselenggarakan oleh President University.         
                            </p>
                            <a href="berita-expand.php" class="button button-cyan button-xs">Lihat Selengkapnya <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="container col-md-4 col-sm-6 col-xs-12 mb50 pb10" style="height: 600px; max-height: 600px">
                        <div class="blog-three">
                            <h4 class="blog-title text-center" style="height: 77px; max-height: 77px"><a href="#">USK raih Enam Penghargaan DIskrikriktek</a></h4>
                            <img src="assets/img/blog/img-blog-1.jpg" class="img-responsive" alt="image blog">
                            <p class="mt25" style="height: 168px; max-height: 168px">
                                Universitas Syiah Kuala berhasil meraih enam penghargaan pada ajang Anugerah Diktiristek 2022. Penghargaan tersebut diterima oleh Wakil Rektor IV USK, Dr. Ir. Taufiq Saidi, M.Eng pada malam penganugerahan Diktiristek 2022 yang digelar pada kamis malam di The Sultan Hotel & Residence.                          
                            </p>
                            <a href="berita-expand.php" class="button button-cyan button-xs">Lihat Selengkapnya <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="container col-md-4 col-sm-6 col-xs-12 mb50 pb10 bg-gray" style="height: 600px; max-height: 600px">
                        <div class="blog-three">
                            <h4 class="blog-title text-center" style="height: 77px; max-height: 77px"><a href="#">Rektor USK Dukung Hutan Adat Mukim Segera Diakui</a></h4>
                            <img src="assets/img/blog/img-blog-1.jpg" class="img-responsive" alt="image blog">
                            <p class="mt25" style="height: 168px; max-height: 168px">
                                Rektor Universitas Syiah Kuala Prof. Dr. Ir. Marwan mendukung penuh agar Hutan Adat Mukim yang diusulkan segera diakui pemerintah. Hal tersebut disampaikan Rektor dalam sambutannya pada kegiatan Diskusi Hasil Penelitian bertajuk: Hutan Adat Mukim sebagai Model Pengelolaan Hutan di Aceh                          
                            </p>
                            <a href="berita-expand.php" class="button button-cyan button-xs">Lihat Selengkapnya <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>

                    <div class="container col-md-4 col-sm-6 col-xs-12 mb50 pb10" style="height: 600px; max-height: 600px">
                        <div class="blog-three">
                            <h4 class="blog-title text-center" style="height: 77px; max-height: 77px"><a href="#">Kembangkan Irigasi Tetes Berbasis Internet Of Things, USK Sabet Juara II Kompetisi PLN ICE</a></h4>
                            <img src="assets/img/blog/img-blog-1.jpg" class="img-responsive" alt="image blog">
                            <p class="mt25" style="height: 168px; max-height: 168px">
                                Tim Chilee IoT Universitas Syiah Kuala (USK) berhasil meraih Juara II kompetisi PLN ICE (Innovation and Competition in Electricity) tahun 2022 kategori Electrifying Agriculture dengan sub kategori pengembangan program bisnis.                          
                            </p>
                            <a href="berita-expand.php" class="button button-cyan button-xs">Lihat Selengkapnya <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>


                    <div class="text-center">
                        <button class="button button-warning hover-ripple-out">LIHAT SEMUA <i class="fa fa-spinner"></i></button>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <div class="pt10 pb50 bg-cyan">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="">
                            <br><br>
                            <p class="lead color-white text-center" style="line-height: 30px; font-size: 24px">
                                Pengumuman
                            </p>
                            <br><br>
                            <table class="table">
                                <tr>
                                    <td class="lead color-white" style="border: none !important">1.</td>
                                    <td class="lead color-white" style="border: none !important">Penerimaan Calon Peserta Program Studi Magister Administrasi Pendidikan (MAP) Kelas Kerjasama Dengan Pemkab Aceh Barat Daya Semester Genap Tahun Akademik 2022/2023 Universitas Syiah Kuala.</td>
                                </tr>
                                <tr>
                                    <td class="lead color-white" style="border: none !important">2.</td>
                                    <td class="lead color-white" style="border: none !important">Seleksi Penerimaan Pegawai Pemerintahan Dengan Perjanjian Kerja (PPPK) Kebutuhan Tenaga Teknis.</td>
                                </tr>
                                <tr>
                                    <td class="lead color-white" style="border: none !important">3.</td>
                                    <td class="lead color-white" style="border: none !important">Penerimaan Calon Peserta Program Studi Magister Administrasi Pendidikan (MAP) Kelas Kerjasama Dengan Pemkab Aceh Barat Daya Semester Genap Tahun Akademik 2022/2023 Universitas Syiah Kuala.</td>
                                </tr>
                            </table>
                        </div>
                        <div class="text-center">
                        <button class="button button-warning hover-ripple-out">LIHAT SEMUA </button>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt75">
            <div class="container" style="height: 500px !important">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4 col-xs-12">
                        <iframe width="100%" height="50%" src="https://www.youtube.com/embed/9kjz2bmAl8w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>

                    <div class="col-md-4">
                        <p class="lead color-black text-justify mb50 pb10" style="line-height: 30px; text-decoration: underline; font-weight: bold; font-size: 24px; text-decoration-color: #EEBB51;">
                            Sejarah USK
                        </p>
                        <p class="lead color-black text-justify pb10" style="line-height: 30px;">
                            Universitas Syiah Kuala (Unsyiah) adalah perguruan tinggi negeri tertua di Aceh. Berdiri pada tanggal 2 September 1961 dengan Surat Keputusan Menteri Pendidikan Tinggi dan Ilmu Pengetahuan Nomor 11 tahun 1961, tanggal 21 Juli 1961.
                        </p>
                        <button class="button button-warning pb10">LIHAT SEMUA</button>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>

        <div class="pb75 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 mb50 pb10">
                        <p class="lead text-center" style="line-height: 30px;font-size: 24px;font-weight: bold; color: #38796B">
                            Agenda
                        </p>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-md-1"></div>
                    <div class="col-md-5 col-sm-6 col-xs-12 mb10 pb10 mr20" style="height: 75px; line-height: 70px;">
                        <div class="row" style="border-radius: 10px; background: rgba(56, 121, 107, 0.17);">

                            <div class="col-md-4 col-sm-4 col-xs-4" style="background: radial-gradient(91.18% 91.18% at 49.78% 8.82%, #38796B 0%, #FFF4DE 100%);border-bottom-right-radius: 100px; color: white; font-size: 12px">22 Desember</div>
                            <div class="col-md-8 col-sm-8 col-xs-8" style="border-left: 5px solid transparent; font-size: 12px">Pembayaran Biaya SPP semua jenjang</div>

                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-12 mb10 pb10 mr20" style="height: 75px; line-height: 70px;">
                        <div class="row" style="border-radius: 10px; background: rgba(56, 121, 107, 0.17);">

                            <div class="col-md-4 col-sm-4 col-xs-4" style="background: radial-gradient(91.18% 91.18% at 49.78% 8.82%, #38796B 0%, #FFF4DE 100%);border-bottom-right-radius: 100px; color: white; font-size: 12px">24 Desember</div>
                            <div class="col-md-8 col-sm-8 col-xs-8" style="border-left: 5px solid transparent; font-size: 12px">Pembayaran Biaya SPP semua jenjang</div>

                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-5 col-sm-6 col-xs-12 mb10 pb10 mr20" style="height: 75px; line-height: 70px;">
                        <div class="row" style="border-radius: 10px; background: rgba(56, 121, 107, 0.17);">

                            <div class="col-md-4 col-sm-4 col-xs-4" style="background: radial-gradient(91.18% 91.18% at 49.78% 8.82%, #38796B 0%, #FFF4DE 100%);border-bottom-right-radius: 100px; color: white; font-size: 12px">24 Desember</div>
                            <div class="col-md-8 col-sm-8 col-xs-8" style="border-left: 5px solid transparent; font-size: 12px">pengisian KRS online USK</div>

                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-12 mb10 pb10 mr20" style="height: 75px; line-height: 70px;">
                        <div class="row" style="border-radius: 10px; background: rgba(56, 121, 107, 0.17);">

                            <div class="col-md-4 col-sm-4 col-xs-4" style="background: radial-gradient(91.18% 91.18% at 49.78% 8.82%, #38796B 0%, #FFF4DE 100%);border-bottom-right-radius: 100px; color: white; font-size: 12px">22 Desember</div>
                            <div class="col-md-8 col-sm-8 col-xs-8" style="border-left: 5px solid transparent; font-size: 12px">Pembayaran Biaya SPP semua jenjang</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt10 pb75 mt50 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="lead text-center" style="line-height: 30px; color:#04454DDE; font-size: 24px">
                            Sistem Informasi
                        </p>
                    </div>
                </div>

                <div class="row mt50 mb50 container-team">
                    
                    <a href="https://krsonline.usk.ac.id/auth">
                    <div class="col-md-2 col-sm-4 col-xs-6 animated flipInX visible" data-animation="flipInX" data-animation-delay="100">
                        <div class="team-seven mb25">
                            <div class="team-seven-content text-center pt25 bg-grad-mojito">
                                <i class="fa fa-4x fa-desktop color-light"></i>
                                <h5>
                                    KRS Online
                                </h5>
                            </div>                  
                        </div>
                    </div>
                    </a>
                    
                    <a href="https://elearning.usk.ac.id">
                    <div class="col-md-2 col-sm-4 col-xs-6 animated flipInX visible" data-animation="flipInX" data-animation-delay="150">
                        <div class="team-seven mb25">
                            <div class="team-seven-content text-center pt25 bg-grad-mojito">
                                <i class="fa fa-4x fa-television color-light"></i>
                                <h5>
                                    e-learning
                                </h5>
                            </div>                   
                        </div>
                    </div>
                    </a>
                    
                    <a href="https://simkuliah.unsyiah.ac.id">
                    <div class="col-md-2 col-sm-4 col-xs-6 animated flipInX visible" data-animation="flipInX" data-animation-delay="200">
                        <div class="team-seven mb25">
                            <div class="team-seven-content text-center pt25 bg-grad-mojito">
                                <i class="fa fa-4x fa-mobile-phone color-light"></i>
                                <h5>
                                    SIM Kuliah
                                </h5>
                            </div>
                        </div>
                    </div>
                    </a>
                    
                    <a href="https://simpeg.usk.ac.id">
                    <div class="col-md-2 col-sm-4 col-xs-6 animated flipInX visible" data-animation="flipInX" data-animation-delay="250">
                        <div class="team-seven mb25">
                            <div class="team-seven-content text-center pt25 bg-grad-mojito">
                                <i class="fa fa-4x fa-server color-light"></i>
                                <h5>
                                    SIMPEG
                                </h5>
                            </div>     
                        </div>
                    </div>
                    </a>
                    
                    <a href="https://sikrek.unsyiah.ac.id/login">
                    <div class="col-md-2 col-sm-4 col-xs-6 animated flipInX visible" data-animation="flipInX" data-animation-delay="300">
                        <div class="team-seven mb25">
                            <div class="team-seven-content text-center pt25 bg-grad-mojito">
                                <i class="fa fa-4x fa-line-chart color-light"></i>
                                <h5>
                                    SIKREK
                                </h5>
                            </div>             
                        </div>
                    </div>
                    </a>
                    
                    <a href="http://siremun.unsyiah.ac.id">
                    <div class="col-md-2 col-sm-4 col-xs-6 animated flipInX visible" data-animation="flipInX" data-animation-delay="350">
                        <div class="team-seven mb25">
                            <div class="team-seven-content text-center pt25 bg-grad-mojito">
                                <i class="fa fa-4x fa-qrcode color-light"></i>
                                <h5>
                                    SIREMUN
                                </h5>
                            </div>               
                        </div>
                    </div>
                    </a>

                    <a href="https://voting.usk.ac.id">
                    <div class="col-md-2 col-sm-4 col-xs-6 animated flipInX visible" data-animation="flipInX" data-animation-delay="100">
                        <div class="team-seven mb25">
                            <div class="team-seven-content text-center pt25 bg-grad-stellar">
                                <i class="fa fa-4x fa-sitemap color-light"></i>
                                <h5>
                                    E-voting
                                </h5>
                            </div>                
                        </div>
                    </div>
                    </a>
                    
                    <a href="https://mbkmunggul.usk.ac.id">
                    <div class="col-md-2 col-sm-4 col-xs-6 animated flipInX visible" data-animation="flipInX" data-animation-delay="150">
                        <div class="team-seven mb25">
                            <div class="team-seven-content text-center pt25 bg-grad-stellar">
                                <i class="fa fa-4x fa-exchange color-light"></i>
                                <h5>
                                    PMM
                                </h5>
                            </div>                  
                        </div>
                    </div>
                    </a>
                    
                    <a href="https://sirekan.unsyiah.ac.id">
                    <div class="col-md-2 col-sm-4 col-xs-6 animated flipInX visible" data-animation="flipInX" data-animation-delay="200">
                        <div class="team-seven mb25">
                            <div class="team-seven-content text-center pt25 bg-grad-stellar">
                                <i class="fa fa-4x fa-line-chart color-light"></i>
                                <h5>
                                    SIREKAN USK
                                </h5>
                            </div>               
                        </div>
                    </div>
                    </a>
                    
                    <a href="https://tte.usk.ac.id/auth">
                    <div class="col-md-2 col-sm-4 col-xs-6 animated flipInX visible" data-animation="flipInX" data-animation-delay="250">
                        <div class="team-seven mb25">
                            <div class="team-seven-content text-center pt25 bg-grad-stellar">
                                <i class="fa fa-4x fa-pencil-square-o color-light"></i>
                                <h5>
                                    TTE
                                </h5>
                            </div>                  
                        </div>
                    </div>
                    </a>
                    
                    <a href="https://perwalian.usk.ac.id">
                    <div class="col-md-2 col-sm-4 col-xs-6 animated flipInX visible" data-animation="flipInX" data-animation-delay="300">
                        <div class="team-seven mb25">
                            <div class="team-seven-content text-center pt25 bg-grad-stellar">
                                <i class="fa fa-4x fa-street-view color-light"></i>
                                <h5>
                                    Perwalian
                                </h5>
                            </div>                    
                        </div>
                    </div>
                    </a>
                    
                    <a href="https://simppm.usk.ac.id">
                    <div class="col-md-2 col-sm-4 col-xs-6 animated flipInX visible" data-animation="flipInX" data-animation-delay="350">
                        <div class="team-seven mb25">
                            <div class="team-seven-content text-center pt25 bg-grad-stellar">
                                <i class="fa fa-4x fa-graduation-cap color-light"></i>
                                <h5>
                                    SIMPPM
                                </h5>
                            </div>                    
                        </div>
                    </div>
                    </a>
                    
                </div>
            </div>
        </div>

        <div class="pt10 pb45 mt50 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-2 col-sm-3 col-xs-2 mt30 animated zoomIn visible" data-animation="zoomIn" data-animation-delay="100">
                            <img src="assets/img/brand/rectangle 19.png" alt="clients" class="img-responsive">
                            </div>

                            <div class="col-md-2 col-sm-3 col-xs-2 mt30 animated zoomIn visible" data-animation="zoomIn" data-animation-delay="100">
                                <img src="assets/img/brand/rectangle 20.png" alt="clients" class="img-responsive">
                            </div>

                            <div class="col-md-2 col-sm-3 col-xs-2 mt30 animated zoomIn visible" data-animation="zoomIn" data-animation-delay="100">
                                <img src="assets/img/brand/rectangle 21.png" alt="clients" class="img-responsive">
                            </div>

                            <div class="col-md-2 col-sm-3 col-xs-2 mt30 animated zoomIn visible" data-animation="zoomIn" data-animation-delay="100">
                                <img src="assets/img/brand/rectangle 22.png" alt="clients" class="img-responsive">
                            </div>

                            <div class="col-md-2 col-sm-3 col-xs-2 mt30 animated zoomIn visible" data-animation="zoomIn" data-animation-delay="100">
                                <img src="assets/img/brand/rectangle 23.png" alt="clients" class="img-responsive">
                            </div>

                            <div class="col-md-2 col-sm-3 col-xs-2 mt30 animated zoomIn visible" data-animation="zoomIn" data-animation-delay="100">
                                <img src="assets/img/brand/rectangle 24.png" alt="clients" class="img-responsive">
                            </div>

                            <!-- Baris kedua -->
                            <div class="col-md-2 col-sm-3 col-xs-2 mt30 animated zoomIn visible" data-animation="zoomIn" data-animation-delay="100">
                                <img src="assets/img/brand/rectangle 25.png" alt="clients" class="img-responsive">
                            </div>

                            <div class="col-md-2 col-sm-3 col-xs-2 mt30 animated zoomIn visible" data-animation="zoomIn" data-animation-delay="100">
                                <img src="assets/img/brand/rectangle 26.png" alt="clients" class="img-responsive">
                            </div>

                            <div class="col-md-2 col-sm-3 col-xs-2 mt30 animated zoomIn visible" data-animation="zoomIn" data-animation-delay="100">
                                <img src="assets/img/brand/rectangle 27.png" alt="clients" class="img-responsive">
                            </div>

                            <div class="col-md-2 col-sm-3 col-xs-2 mt30 animated zoomIn visible" data-animation="zoomIn" data-animation-delay="100">
                                <img src="assets/img/brand/rectangle 28.png" alt="clients" class="img-responsive">
                            </div>

                            <div class="col-md-2 col-sm-3 col-xs-2 mt30 animated zoomIn visible" data-animation="zoomIn" data-animation-delay="100">
                                <img src="assets/img/brand/rectangle 29.png" alt="clients" class="img-responsive">
                            </div>

                            <div class="col-md-2 col-sm-3 col-xs-2 mt30 animated zoomIn visible" data-animation="zoomIn" data-animation-delay="100">
                                <img src="assets/img/brand/rectangle 30.png" alt="clients" class="img-responsive">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>

        <div class="pt10 pb75 mt30">
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10 col-sm-12 col-xs-12">
                                <blockquote class="blockquote-pasific-has-photo">
                                    <img src="assets/img/soekarno.png" class="img-circle" alt="blockquote photo" style="width: 65px !important">
                                    <p>Tekad bulat melahirkan perbuatan yang nyata, Darussalam menuju kepada pelaksanaan cita-cita.</p>
                                    <footer>Ir. Soekarno ( Presiden Pertama Republik Indonesia ketika meresmikan Unsyiah tahun 1959 )</footer>
                                </blockquote>
                            </div>
                            <div class="col-md-1"></div>
                        </div>   
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>

        <div class="pt10 pb75">
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="row">
                            <p class="lead text-center pt20 pb20" style="line-height: 30px; color:#04454DDE; font-size: 24px">
                                Bisnis dan Investasi
                            </p>
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content-box content-box-center content-box-icon-o-circle">
                                    <i class="fa  fa-graduation-cap color-cyan border-pasific"></i>
                                    <h5>Unit Bisnis Akademis</h5>               
                                    <p>Bisnis yang dikelola langsung oleh pihak Unsyiah</p>
                                </div>
                                <p class="text-center">Lihat Selengkapnya <i class="fa fa-long-arrow-right"></i></p>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content-box content-box-center content-box-icon-o-circle">
                                    <i class="fa fa-balance-scale color-cyan border-pasific"></i>
                                    <h5>Unit Bisnis Non akademis</h5>               
                                    <p>Bisnis yang dikelola secara tidak langsung oleh pihak Unsyiah tetapi berkaitan erat dengan Unsyiah</p>
                                </div>
                                <p class="text-center">Lihat Selengkapnya <i class="fa fa-long-arrow-right"></i></p>
                            </div>

                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="content-box content-box-center content-box-icon-o-circle">
                                    <i class="fa fa-phone color-cyan border-pasific"></i>
                                    <h5>Kontak pengelola</h5>               
                                    <p>(021) 123 4567</p>
                                </div>
                                <p class="text-center">Lihat Selengkapnya <i class="fa fa-long-arrow-right"></i></p>
                            </div>
                        </div>
                        <div class="text-center mt20">
                            <a class="button button-md button-warning">LIHAT SEMUA</a>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>

        <div class="pt10 pb75 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-8 pt30">
                                <div class="row">
                                    <p style="color:#04454DDE; font-size: 15px">
                                        Fakultas dan Program
                                    </p>
                                    <div class="col-md-6">
                                        <ul class="icon-list">
                                            <li><i class="fa fa-university"></i>Fakultas Ekonomi</li>
                                            <li><i class="fa fa-university"></i>Fakultas Hukum</li>
                                            <li><i class="fa fa-university"></i>Fakultas Keguruan dan Ilmu Pendidikan</li> 
                                            <li><i class="fa fa-university"></i>Fakultas Pertanian</li>
                                            <li><i class="fa fa-university"></i>Fakultas Ilmu Sosial dan Ilmu Politik</li>
                                            <li><i class="fa fa-university"></i>Fakultas Kedokteran Gigi</li> 
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="icon-list">
                                            <li><i class="fa fa-university"></i>Fakultas Kedokteran Hewan</li>
                                            <li><i class="fa fa-university"></i>Fakultas Matematika dan Ilmu Pengetahuan Alam</li>
                                            <li><i class="fa fa-university"></i>Fakultas Kedokteran</li> 
                                            <li><i class="fa fa-university"></i>Fakultas Kelautan dan Perikanan</li>
                                            <li><i class="fa fa-university"></i>Fakultas Keperawatan</li>
                                            <li><i class="fa fa-university"></i>Program Pasca Sarjana </li> 
                                        </ul>
                                    </div>
                                </div>
                            </div>  
                            
                            <div class="col-md-4 pt30">
                                <p style="color:#04454DDE; font-size: 15px">
                                    Peta Kampus
                                </p>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15883.917587066366!2d95.3697285!3d5.5700635!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304037b6c624991b%3A0x2815d3171e96a794!2sUniversitas%20Syiah%20Kuala!5e0!3m2!1sid!2sid!4v1686763205036!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </div>

        <div class="pt10 pb75">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row" style="margin: auto;">
                            <div class="col-md-3 col-sm-3 col-xs-3 mt30 animated zoomIn visible" data-animation="zoomIn" data-animation-delay="100">
                                <div class="text-center">
                            <img src="assets/img/brand/image 13.png" alt="clients" class="img-responsive">
                            </div></div>

                            <div class="col-md-3 col-sm-3 col-xs-3 mt30 animated zoomIn visible" data-animation="zoomIn" data-animation-delay="100">
                                <img src="assets/img/brand/image 14.png" alt="clients" class="img-responsive">
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-3 mt30 animated zoomIn visible" data-animation="zoomIn" data-animation-delay="100">
                                <img src="assets/img/brand/image 15.png" alt="clients" class="img-responsive">
                            </div>

                            <div class="col-md-3 col-sm-3 col-xs-3 mt30 animated zoomIn visible" data-animation="zoomIn" data-animation-delay="100">
                                <img src="assets/img/brand/image 16.png" alt="clients" class="img-responsive">
                            </div>
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