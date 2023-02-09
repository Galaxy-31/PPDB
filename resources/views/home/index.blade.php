<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SMK WIKRAMA 1 GARUT</title>
        
<!-- Sentra Template https://templatemo.com/tm-518-sentra-->
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../assets/css/fontAwesome.css">
        <link rel="stylesheet" href="../assets/css/light-box.css">
        <link rel="stylesheet" href="../assets/css/owl-carousel.css">
        <link rel="stylesheet" href="../assets/css/templatemo-style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="../assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>



        <header class="nav-down responsive-nav hidden-lg hidden-md">
            <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!--/.navbar-header-->
            <div id="main-nav" class="collapse navbar-collapse">
                <nav>
                    <ul class="nav navbar-nav">
                        <li><a href="#top">Home</a></li>
                        <li><a href="#featured">Jurusan</a></li>
                        <li><a href="#content">Sejarah</a></li>
                        <li><a href="#projects">Galeri</a></li>
                        <li><a href="#video">Presentasi</a></li>
                        <li><a href="#blog">Berita</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <div class="sidebar-navigation hidde-sm hidden-xs">
            <div class="logo">
                  <img src="../assets/img/wisaga.png"  background-image class align="left" style="color:white;"width="80px" heigh="60px">
                  <style>
                  </style>
                  <h1 align="left" style="color: #fff" ><strong>&emsp;SMK</strong><br>&emsp;WIKRAMA 1<br> &emsp;GARUT</h1>
                
            </div>
            <nav>
                <ul>
                    @auth
                    <li class="dropdown open">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">Hello, {{Auth()->user()->name}} </span></a>
                        <ul class="dropdown-menu">
                            <form action="/data" method="get">
                                <li><button type="submit" style="border:none;padding-left:20px;padding-right:50px;font-size:15px;background:transparent" class="text-black">Pembayaran</button></li>
                            </form>
                        <!-- <li class="divider"></li> -->
                        <form action="/logout" method="post">
                            @csrf
                            <li><Button type="submit" style="border:none;padding-left:20px;padding-right:50px;font-size:15px;background:transparent">Logout</Button></li>
                        </form>
                        </ul>
                    </li><br><br>
                        @else
                    <li>
                        <form action="{{route ('login')}}" method="get">
                            @csrf
                            <span class="rect"></span>
                            <span class="circle"></span>
                            <button type="submit" class="text-white" style="border:none;background:transparent;font-size:15px;">
                                Login
                            </button>
                        </form>
                    </li><br><br>
                    @endauth
                    <li>
                        <a href="#top">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#featured">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Jurusan
                        </a>
                    </li>
                    <li>
                        <a href="#content">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Sejarah
                        </a>
                    </li>
                    <li>
                        <a href="#projects">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Galeri
                        </a>
                    </li>
                    <li>
                        <a href="#video">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Presentasi
                        </a>
                    </li>
                    <li>
                        <a href="#blog">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Berita
                        </a>
                    </li>
                    <li>
                        <a href="#contact">
                            <span class="rect"></span>
                            <span class="circle"></span>
                            Kontak
                        </a>
                    </li>
                </ul>
            </nav>
            <ul class="social-icons">
                <li><a href="https://id-id.facebook.com/smkwikrama1garut/"><i class="fa fa-facebook"></i></a></li>
                {{-- <li><a href="#"><i class="fa fa-twitter"></i></a></li> --}}
                <li><a href="https://www.instagram.com/smkwikrama1garut/?hl=en"><i class="fa fa-instagram"></i></a></li>                
                <li><a href="https://smkwikrama1garut.sch.id/#"><i class="fa fa-globe"></i></a></li> 
            </ul>
        </div>

        <div class="slider">
            <div class="Modern-Slider content-section" id="top">
                <!-- Item -->
                <div class="item item-1">
                    <div class="img-fill">
                    <div class="image"></div>
                    <div class="info">
                        <div>
                          <h1>Sekolah Menengah Kejuaruan<br> SMK WIKRAMA 1 GARUT</h1>
                          <h2 style="color:white;">Islamic Boarding School</h2>
                          <p class="content">Sekolah kejuruan berprestasi tingkat nasional &amp; internasional dengan  <br>
                            <span class="tebal-judul">Program Unggulan Tahfizh Qur’an.</span></p>
                          <div class="white-button button">
                              <a href="{{ route('dataSiswas.create') }}">-->Pendaftraan PPDB<--</a>
                          </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- // Item -->
                <!-- Item -->
                <div class="item item-2">
                    <div class="img-fill">
                        <div class="image"></div>
                        <div class="info">
                        <div>
                            <h1>Sekolah Menengah Kejuaruan<br> SMK WIKRAMA 1 GARUT</h1>
                            <h2 style="color:white;">Islamic Boarding School</h2>
                            <p class="content">Sekolah kejuruan berprestasi tingkat nasional &amp; internasional dengan<br> 
                                <span class="tebal-judul">Program Unggulan Tahfizh Qur’an.</span></p>
                          
                          <div class="white-button button">
                              <a href="form.html">-->Pendaftraan PPDB<--</a>
                          </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- // Item -->
                <!-- Item -->
                <div class="item item-3">
                    <div class="img-fill">
                        <div class="image"></div>
                        <div class="info">
                        <div>
                            <h1>Sekolah Menengah Kejuaruan<br> SMK WIKRAMA 1 GARUT</h1>
                            <h2 style="color:white;">Islamic Boarding School</h2>
                            <p class="content">Sekolah kejuruan berprestasi tingkat nasional &amp; internasional dengan<br>
                                 <span class="tebal-judul">Program Unggulan Tahfizh Qur’an.</span></p>
                          
                          <div class="white-button button">
                              <a href="form.html">-->Pendaftraan PPDB<--</a>
                          </div>
                        </div>
                        </div>
                    </div>
                </div>
                
                <!-- // Item -->
            </div>
        </div>
        <div class="page-content">
            <section id="featured" class="content-section">
                <div class="section-heading">
                    <h1>jurusan <br><em>SMK WIKRAMA 1 GARUT</em></h1>
                </div>
                <div class="section-content">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="image">
                                <img src="../assets/img/pplg.jpg" alt="">
                                <div class="featured-button button">
                                    
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>PPLG</h4>
                                <span>Pengembangan Perangakat Lunak Dan Gim</span>
                                <p>Keunggulan: Desktop Programming, Web Programming, Mobile Programming, Bussiness Analyst, Database Administration.</p>
                            </div>
                        </div>
                        {{-- <div class="item">
                            <div class="image">
                                <img src="../assets/img/mplb.jpg" alt="">
                                <div class="featured-button button">
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>MPLB</h4>
                                <span>Manajemen Perkantoran Lembaga Bisnis</span>
                                <P>Keunggulan: Program keahlian Manajemen Perkantoran dan Layanan Bisnis memiliki keunggulan dibidang prestasi peserta didik seperti juara II lomba keterampilan siswa bidang lomba sekretaris tingkat provinsi tahun 2016 dan juara I lomba olimpiade sekretaris tingkat nasional tahun 2017</P>
                            </div>
                        </div> --}}
                        <div class="item">
                            <div class="image">
                                <img src="../assets/img/tkj.jpg" alt="">
                                <div class="featured-button button">
                                    
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>TJKT</h4>
                                <span>Teknik Jaringan Komputer Dan Telekominasi</span>
                                <p>Keunggulan: Program keahlian Teknik Jaringan Komputer dan Telekomunikasi sudah memiliki sertifikasi internasional seperti CNAP (Cisco Networking Academy Program) dan MCNA (Mikrotik Certified Network Associate).</p>
                                <p><strong>Kompetensi Lulusan</strong></p>
                                
                            </div>
                        </div>
                        {{-- <div class="item">
                            <div class="image">
                                <img src="../assets/img/dkv.jpg" alt="">
                                <div class="featured-button button">
                                    
                                </div>
                            </div> --}}
                            {{-- <div class="text-content">
                                <h4>DKV</h4>
                                <span>Desain Komukasi Visual</span>
                                <p>Keunggulan: Lulusan dapat memiliki kesempatan kerja yang luas dibidang periklanan, production house, radio & televisi, studio foto, percetakan grafis, corporate brand identity, penerbit majalan/Koran, dll.</p>
                            </div>
                        </div> --}}
                        <div class="item">
                            <div class="image">
                                <img src="../assets/img/bdp.jpg" alt="">
                                <div class="featured-button button">
                                    
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>BDP</h4>
                                <span>Bisnis Daring Dan Pemasaran</span>
                                <p>Keunggulan: Program  keahlian Pemasaran memiliki kompetensi yang mirip dengan program Multimedia dan Perkantoran. Lulusan program ini diharuskan mampu membuat foto produk, desain, copy writing, dll.</p>
                            </div>
                        </div>
                        {{-- <div class="item">
                            <div class="image">
                                <img src="../assets/img/tbg.jpg" alt="">
                                <div class="featured-button button">
                                    
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>TBG</h4>
                                <span>Tataboga</span>
                                <p>Keunggulan: Siswa jurusan Kuliner mampu bekerja diberbagai bidang jasa boga seperti restoran, hotel, rumah sakit, katering sesuai dengan minat dan bakat yang telah dipelajari.</p>
                            </div>
                        </div> --}}
                        <div class="item">
                            <div class="image">
                                <img src="../assets/img/hotel.jpg" alt="">
                                <div class="featured-button button">
                                    
                                </div>
                            </div>
                            <div class="text-content">
                                <h4>HTL</h4>
                                <span>Hotel</span>
                                <p>Keunggulan: Siswa Perhotelan akan mampu bekerja di departemen yang ada di hotel dengan kompetensi yang mereka pelajari.</p>
                            </div>
                    </div>
                </div>
            </section>

<!--sejarah-->

<div id="content" class="site-content">

            
    <div class="breadcrumb-area bg-black bg-relative">
        <div class="banner-bg-img"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="breadcrumb-inner text-center">
                    </div>
                </div>
            </div>
        </div>
    </div><div id="primary" class="content-area itechie-blog-details">
<main id="main" class="site-main">
<div class="blog-area pd-top-120 pd-bottom-120">
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="blog-details-page-content">
                <article id="post-2725" class="post-2725 page type-page status-publish hentry">

<div class="single-blog-inner ">


<div class="details">
                    <div data-elementor-type="wp-page" data-elementor-id="sejarah" class="elementor elementor-2725">
                        <section class="elementor-section elementor-top-section elementor-element elementor-element-b423841 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b423841" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-da28a57" data-id="da28a57" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-7dbd6ab elementor-widget elementor-widget-heading" data-id="7dbd6ab" data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">
<style>/*! elementor - v3.8.1 - 13-11-2022 */
.elementor-heading-title{padding:0;margin:0;line-height:1}.elementor-widget-heading .elementor-heading-title[class*=elementor-size-]>'
a{color:inherit;font-size:inherit;line-height:inherit}.elementor-widget-heading .elementor-heading-title.elementor-size-small{font-size:15px}.elementor-widget-heading .elementor-heading-title.elementor-size-medium{font-size:40px}.elementor-widget-heading .elementor-heading-title.elementor-size-large{font-size:35px}.elementor-widget-heading .elementor-heading-title.elementor-size-xl{font-size:39px}.elementor-widget-heading .elementor-heading-title.elementor-size-xxl{font-size:59px}</style><h1 class="elementor-heading-title elementor-size-default"> Sejarah SMK Wikrama Indonesia</h1>		
</div>
    </div>
    <div class="elementor-element elementor-element-fec3b08 elementor-widget elementor-widget-text-editor" data-id="fec3b08" data-element_type="widget" data-widget_type="text-editor.default">
    <div class="elementor-widget-container">
<style>/*! elementor - v3.8.1 - 13-11-2022 */
.elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap{background-color:#818a91;color:#fff}.elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap{color:#818a91;border:3px solid;background-color:transparent}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap{margin-top:8px}.elementor-widget-text-editor:not(.elementor-drop-cap-view-default) .elementor-drop-cap-letter{width:1em;height:1em}.elementor-widget-text-editor .elementor-drop-cap{float:left;text-align:center;line-height:1;font-size:50px}.elementor-widget-text-editor .elementor-drop-cap-letter{display:inline-block}</style>				
&emsp;
<h3>Awal berdiri</h3>
&emsp;
<h4> Wikrama Indonesia pertama kali didirikan di Kota Bogor dengan nama SMK Wikrama Bogor oleh Ir. Itasia Dina Sulvianti dan Dr.H.RP Agus Lelana dibawah naungan Yayasan Prawitama pada tahun 1996 di bekas gudang KUD. Kompetensi keahlian yang pertama dibuka pada saat itu adalah sekretaris dengan jumlah hanya 34 siswa.

Seiring berjalannya waktu, jumlah siswa SMK Wikrama Bogor setiap tahunnya terus bertambah. Sehingga pada tahun 2001, secara bertahap SMK Wikrama Bogor menempati gedung yang lebih luas diatas tanah ± 5000m<sup>2</sup>, berlokasi di Jalan Raya Wangun Kelurahan Sindangsari Kota Bogor. Hingga saat ini, SMK Wikrama Bogor  memiliki 1596 siswa dengan 51 guru pendidik.

Kompetensi keahlian di SMK Wikrama Bogor pun terus berkembang. SMK Wikrama Bogor membuka 7 kompetensi keahlian, diantaranya (1) Otomatisasi dan Tata Kelola Perkantoran; (2) Teknik Komputer dan Jaringan; (3) Rekayasa Perangkat Lunak; (4) Multimedia; (5) Bisnis Daring dan Pemasaran; (6) Tata Boga; dan (7) Perhotelan.

Kesuksesan SMK Wikrama Bogor saat ini tentunya tidak lepas dari sejarah SMK Wikrama Bogor  mulai dari membentuk visi dan misi, kerja keras hingga diakui dunia internasional hingga prestasi dan pengharagaan yang didapatkan SMK Wikrama Bogor sejak awal didirikan. Berikut sejarah yang dilalui SMK Wikrama Bogor berdasarkan urutan tahun.</h4>
&emsp;
<table class="Table">
<tbody>
<tr>
<td>
<ul>
<li><strong><h3>1996</h3></strong>
<ul>
<li><h5> sekretaris didirikan dibekas gudang KUD dengan siswa 34 orang dan motto Ilmu yang Amaliah, Amal yang Ilmiah, Akhlakul Karimah.</h5></li>
</ul>
</li>
<li><strong style="font-family: inherit; font-size: inherit;"><h3>1997</h3></strong>
<ul>
<li>
    <h5>
    Merancang keunikan sekolah: berakhlak mulia, berbasis bahasa Inggris dan komputer.
</h5>
</li>
</ul>
</li>
<li><strong style="font-family: inherit; font-size: inherit;"><h3>1998</h3></strong>
<ul>
<li><h5>Siswa baru meningkat 120 orang, terpaksa menyewa Villa Andhika dan memanfaatkan garasi sebagai kelas.</h5></li>
</ul>
</li>
<li><strong style="font-family: inherit; font-size: inherit;"><h3>1999</h3></strong>
<ul>
    <h5>
<li>Nem lulusan angkatan-I: peringkat ke-1 SMK Swasta Bogor, dan ke-33 se-jabar</li>
<li>Menerapkan moving class</li>
</h5>
</ul>
</li>
<li><strong style="font-family: inherit; font-size: inherit;"><h3>2000</h3></strong>
<ul>
    <h5>
<li>Nem jurusan angkatan II: peringkat ke-1 se-SMK Swasta Bogor dan ke-29 se-jabar, NEM Matematika = 9.</li>
</h5>
</ul>
</li>
<h3>
<li><strong style="font-family: inherit; font-size: inherit;">2001</strong></li>
</h3>
</ul>
<ul>
<li style="list-style-type: none;">
<ul>
    <h5>
<li>Nem lulusan angkatan ke-III: peringkat ke-1  se-SMK Swasta Bogor, ke-13 se-jabar</li>
<li>Secara bertahap pindah ke gedung sekolah baru</li>
<li>Mengembangkan sistem informasi sekolah berbasiskan komputer</li>
</h5>
</ul>
</li>
<h3>
<li><strong style="font-family: inherit; font-size: inherit;">2002</strong>
</h3>
    <ul><h5>
        <li>Akreditasi sekolah loncat dari status “terdaftar” langsung “disamakan”</li>
    </h5>
    </ul>
</li>
</ul>
<ul>
    <li style="list-style-type: none;">
        <ul>
        <h5>
            <li>Untuk mewujudkan visi PK Sekretaris berstandar nasional 2005, sekolah mengembangkan ayonisasi siswa berbasiskan tempat tinggal.</li>
        </h5>
        </ul>
</li>
<h3>
    <li><strong style="font-family: inherit; font-size: inherit;">2003</strong>
    </h3>
<ul>
    <h5>

        <li>Membuka program keahlian Teknik Informatika dan Komunikasi</li>
        <li>Menerapkan kurikulum berbasis kompetensi</li>
        <li>Mengembangkan kerjasama dengan dunia usaha dan Ikatan Sekretaris Indonesia</li>
    </h5>
</ul>
</li>
<h3>

    <li><strong style="font-family: inherit; font-size: inherit;">2004</strong>
    </h3>
    <ul>
            <h5>
            <li>Menerapkan budaya sekolah yang beorientasi kecakapan hidup</li>
            <li>Dipercaya sebagai sekolah model bidang kecakapan hidup</li>
            <li>Bursa kerja khusus dipercaya kemenaker RI</li>
               </h5> 
        </ul>
</li>
<h3>

    <li><strong style="font-family: inherit; font-size: inherit;">2005</strong>
    </h3>
    <ul>
    <h5>
    <li>Angkatan VII lulus 100%, NEM matematika 92% nilai lebih besar sama dengan 60</li>
    <li>Mewujudkan SMK berstandar nasional</li>
    <li>Tempat uji kompetensi LSP-APSI</li>
    <li>Juara Go Green School Competition</li>
    <li>Juara II LKS debate bahasa Inggris tingkat nasional</li>
</h5>
</ul>
</li>
<h3>

    <li><strong style="font-family: inherit; font-size: inherit;">2006</strong>
    </h3>
<ul>
    <h5>
<li>Angkatan VII lulus 100%, 11% mendapat NEM Matematika 10, dan 56% &gt; 9</li>
<li>Sekolah percontohan untuk (a) Komputerisasi SIM sekolah, (b) Metode pembelanjaran yang menyenangkan, (c) Kepemimpinan yang efektif, (d) Lingkungan hidup</li>
<li>Mata pelajaran produktif dinilai setara dengan STMIK, sehingga mempercepat kelulusan alumni Wikrama yang kuliah di PT tersebut.</li>
<li>Kewirausahaan sekolah berbasis potensi sumber daya sekolah</li>
</h5>
</ul>
</li>
<h3>

    <li><strong style="font-family: inherit; font-size: inherit;">2007</strong>
    </h3>
<ul>
    <h5>

        <li>Sekolah Kawasan Tanpa Rokok (KTR) terbaik tingkat Kota Bogor</li>
        <li>Sekolah terbaik lomba Usaha Kesehatan Sekolah (UKS) tingkat SLTA</li>
    </h5>
    </ul>
</li>
<h3>

    <li><strong style="font-family: inherit; font-size: inherit;">2008</strong>
    </h3>
        <ul>
            <h5>

                <li>Juara I lomba E-Learning Award Nasional</li>
                <li>Juara provinsi sekolah berbudaya lingkungan</li>
                <li>Sekolah terbaik  UKS tingkat Kota Bogor</li>
                <li>Kerjasama dengan Dinas Kesehatan Kota Bogor dalam penyelenggaraan RAKERDA UKS tingkat Kota Bogor</li>
                <li>Juara lomba P3K Kota Bogor</li>
            </h5>
</ul>
</li>
<h3>

    <li><strong style="font-family: inherit; font-size: inherit;">2009</strong>
    </h3>
<ul>
    <h5>

        <li>Penghargaan sebagai calon sekolah Adiwiyata tingkat nasional</li>
        <li>Juara LKS Sekretaris, juara II tingkat nasional</li>
        <li>Juara LKS Web Design, juara II tingkat nasional</li>
        <li>Juara ke-I Nasional Olimpiade Sains Terapan Nasional bidang lomba Matematika</li>
    </h5>
</ul>
</li>
<h3>

    <li><strong style="font-family: inherit; font-size: inherit;">2010</strong>
    </h3>
<ul>
    <h5>

        <li>Penghargaan sebagai sekolah Adiwiyata tahun ke-I, sekolah peduli dan berbudaya lingkungan tingkat nasional.</li>
        <li>Pengembangan jejaring kerjasama di bidang lingkungan dan kesehatan</li>
        <li>Penghargaan sebagai Sekolah Berwawasan Kebangsaan Kota Bogor.</li>
    </h5>
</ul>
</li>
<h3>

    <li><strong style="font-family: inherit; font-size: inherit;">2011</strong>
    </h3>
<ul>
    <h5>

        <li>Mendapatkan penghargaan sebagai sekolah Adiwiyata tahun kedua sekolah peduli dan berbudaya lingkungan tingkat nasional.</li>
        <li>Membuka program keahlian Multimedia</li>
        <li>Membuka SMK Wikrama 1 Jepara, SMK Wikrama 1 Garut</li>
        <li>Lulus 100% Ujian Nasional dengan nilai rata-rata 8,2</li>
    </h5>
</ul>
</li><h3>

    <li><strong style="font-family: inherit; font-size: inherit;">2012</strong>
    </h3>
<ul>
    <h5>

        <li>Membuka SMK Wikrama 1 kab. Semarang</li>
        <li>Angkatan-XII lulus UN 100%; nilai rata-rata 8.32; 6 siswa nilai Matematika 10.</li>
        <li>Penghargaan Sekolah Adiwiyata Mandiri, diserahkan oleh presiden RI, Dr, Susilo Bambang Yudhoyono</li>
        <li>Penghargaan Indomesia Green Awards</li>
        <li>Dr. Itasia Dina Sulvianti, M. Si juara kepala sekolah berwawasan lingkungan hidup tingkat nasional.</li>
    </h5>
</ul>
</li>
<h3>

    <li><strong style="font-family: inherit; font-size: inherit;">2013</strong>
    </h3>
        <ul>
            <h5>

                <li>Membuka SMK Wikrama 1 Bekasi</li>
                <li>Kerjasama dengan GIZ Foundation (Jerman) pengembangan sekolah lingkungan hidup</li>
                <li>Menjadi SMK berprestasi tingkat nasional</li>
                <li>Sebagai sekolah model penyelenggaraan pendidikan untuk pembangunan berkelanjutan (ESD)</li>
                <li>Sekolah rujukan bagi guru lingkungan se-Asia Tenggara (SEAMEO QITEP)</li>
            </h5>
            </ul>
</li>
<h3>

    <li><strong style="font-family: inherit; font-size: inherit;">2014</strong>
    </h3>
<ul>
    <h5>
<li><span style="font-family: inherit; font-size: inherit;">Membuka SMK Wikrama 1 Banjarmasin</span></li>
<li><span style="font-family: inherit; font-size: inherit;">Penghargaan Indonesia Green Awards</span></li>
<li>Juara LKS Sekretaris Juara Harapan I Tingkat Nasional</li>
<li>Juara lomba OSTN Matematika Non Tehnik, Juara I tingkat Jawa Barat</li>
<li>Pioneer Sekolah IMS (Integrated Management System)</li>
</h5>
</ul>
</li>
<h3>

    <li><strong style="font-family: inherit; font-size: inherit;">2015</strong>
    </h3>
<ul>
    <h5>

        <li>Juara I lomba Tradisional Angklung Category se-Asia Tenggara yang diselenggarakan oleh SEAMEOLEC</li>
        <li>SMK Wikrama Bogor menjadi anggota ASPNet yaitu sosialisasi sekolah-sekolah se-dunia yang menjadi pilot project di bidang Hak Asasi Manusia, Demokrasi, Budaya dan Isu Lingkungan di bawah UNESCO</li>
        <li>SMK Wikrama Bogor mengikuti Climate Change Forum di Paris Perancis</li>
        <li>SMK Wikrama mendapatkan Sertifikat Lisensi untuk menjadi Lembaga Sertifikasi Profesi pada paket keahlian Multimedia</li>
        <li>Juara III Kepala Sekolah berprestasi untuk kategori SMK tingkat provinsi Jawa Barat</li>
        <li>Pemegang Cyberpreneur Competition Kategori Desain Website Statis tingkat nasional</li>
    </h5>
</ul>
</li>
<h3>

    <li><strong>2016</strong>
    </h3>
<ul>
    <h5>

        <li>Mengikuti Internasional Workshop of ESD Food Project di Jepang</li>
        <li>Menerima kunjungan guru dan siswa dari Korea Selatan dalam diskusi mengenai isu lingkungan</li>
        <li>Penghargaan Indonesia Green Awards</li>
        <li>Juara I Hackathon Google Developer tingkat umum se-Jabotabek paket keahlian RPL</li>
        <li>Juara I Kesatuan Bogor Olympic Festival Fungo Satay STIE Kesatuan tingkat nasional</li>
        <li>Juara 2 Clevino Coder Camp tingkat SMA/SMK se-Jabotabek 2016</li>
        <li>Juara 2 Film pendek tingkat provinsi 2016.</li>
    </h5>
</ul>
</li>
<h3>

    <li><strong>2017</strong>
    </h3>
<ul>
    <h5>

        <li>SMK Wikrama Bogor menjadi tuan rumah dalam acara peringatan Hari BUMI Internasional yang dihadiri oleh Prof. Ractmat Witoelar (Utusan Khusus Presiden untuk Pengendalian Perubahan Iklim) dan Walikota Bogor.</li>
        <li>SMK Wikrama Bogor mengikuti Program Jenesys SMK 4 tahun permodelan KOSEN di Tokyo Jepang tahun 2017.</li>
        <li>SMK Wikrama Bogor kembali meraih juara 1 Lomba Film Pendek FLS2N, tingkat Provinsi Jawa Barat. Lomba ini diikuti oleh siswa/siswi Multimedia, M. Diya Mustofa dan M. Saifullah, dengan judul Film Pendek “Integrasi dalam Prestasi”.</li>
        <li>Juara 1 Lomba Film Pendek pada ajang Olimpiade Tingkat Nasional (2017), diwakili oleh Shantika Dwi dan Andhika Navira Dillah Putra dari jurusan Multimedia</li>
        <li>Juara 2 Lomba Desain Web pada ajang Olimpiade Tingkat Nasional (2017) yang diwakili oleh Daffa Prayoga dan Rizki Wahyudi dari jurusan RPL (rekayasa Perangkat Lunak)</li>
        <li>Juara 2 Lomba Persentasi pada ajang Olimpiade Tingkat Nasional (2017, yang diwakili oleh Galih bagas P dari jurusan Pemasaran</li>
        <li>Juara Umum II Olimpiade Tingkat Nasional 2017</li>
        <li>SMK Wikrama Bogor yang diwakili oleh tim dari jurusan Rekayasa Perangkat Lunak dan Multimedia, yaitu Aldan Rizky S dan Oki Oktora, meraih juara II di ajang Lomba Cipta Games pada Festival Habibie 2017, di Jiexpo, Kemayoran Jakarta.</li>
        <li>SMK Wikrama Bogor yang diwakili oleh Arief Dhiemas, meraih juara I Laboran Berprestasi tingkat Nasional</li>
        <li>SMK Wikrama Bogor, yang diwakili oleh Anis Humanisa jurusan RPL XI meraih juara 3 O2SN Lomba Atletik Putri tingkat Jawa Barat</li>
        <li>SMK Wikrama Bogor yang diwakili oleh Tim Voli Putra meraih juara 3 di kejuaraan voli tingkat Bogor di Sekolah Kesatuan Bogor.</li>
    </h5>
    </ul>
</li>
</ul>
</td>
</tr>
</tbody>
</table>
<ul>
<li style="list-style-type: none;"></li>
</ul>						</div>
    </div>
        </div>
</div>
                </div>
</section>
                </div>

<footer class="entry-footer">
                </footer><!-- .entry-footer -->


</div>
</div>

</article>						</div>
        </div>
    <!--sejarah-->




            <section id="projects" class="content-section">
                <div class="section-heading">
                    <h1>Galeri<br><em>SMK WIKRAMA 1 GARUT</em></h1>
                    
                </div>
                {{-- <div class="section-content">
                    <div class="masonry">
                        <div class="row">
                            <div class="item">
                                <div class="col-md-8">
                                    <a href="../assets/img/portfolio_big_1.jpg" data-lightbox="image"><img src="../assets/img/portfolio_1.jpg" alt="image 1"></a>
                                </div>
                            </div>
                            <div class="item second-item">
                                <div class="col-md-4">
                                    <a href="../assets/img/portfolio_big_2.jpg" data-lightbox="image"><img src="../assets/img/portfolio_2.jpg" alt="image 2"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="../assets/img/portfolio_big_3.jpg" data-lightbox="image"><img src="../assets/img/portfolio_3.jpg" alt="image 3"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-4">
                                    <a href="../assets/img/portfolio_big_4.jpg" data-lightbox="image"><img src="../assets/img/portfolio_4.jpg" alt="image 4"></a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-8">
                                    <a href="../assets/img/portfolio_big_5.jpg" data-lightbox="image"><img src="../assets/img/portfolio_5.jpg" alt="image 5"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>             --}}
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active" data-bs-interval="10000">
                        <a href="../assets/img/portfolio_big_1.jpg" data-lightbox="image"><img src="../assets/img/portfolio_1.jpg" alt="image 1" width="750 px" height="350 px"></a>
                      </div>
                      {{-- <div class="carousel-item" data-bs-interval="2000">
                        <a href="../assets/img/portfolio_big_2.jpg" data-lightbox="image"><img src="../assets/img/portfolio_2.jpg" alt="image 2" width="750 px" height="350 px"></a>
                      </div> --}}
                      <div class="carousel-item">
                          <a href="../assets/img/portfolio_big_4.jpg" data-lightbox="image"><img src="../assets/img/portfolio_4.jpg" alt="image 4" width="750 px" height="350 px"></a>
                        </div>
                        <div class="carousel-item">
                            <a href="../assets/img/portfolio_big_5.jpg" data-lightbox="image"><img src="../assets/img/portfolio_5.jpg" alt="image 5" width="750 px" height="350 px"></a>
                        </div>
                        {{-- <div class="carousel-item">
                          <a href="../assets/img/portfolio_big_3.jpg" data-lightbox="image"><img src="../assets/img/portfolio_3.jpg" alt="image 3" width="750 px" height="350 px"></a>
                        </div> --}}
                      <div class="carousel-item">
                        <a href="../assets/img/portfolio_big_6.jpg" data-lightbox="image"><img src="../assets/img/portfolio_6.jpg" alt="image 6" width="750 px" height="350 px"></a>
                      </div>
                      <div class="carousel-item">
                        <a href="../assets/img/portfolio_big_7.jpg" data-lightbox="image"><img src="../assets/img/portfolio_7.jpg" alt="image 7" width="750 px" height="350 px"></a>
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </section>
            <section id="video" class="content-section">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h1>Presentasi <em>SMK WIKRAMA 1 GARUT</em></h1>
                        
                    </div>
                    <div class="col-md-12">
                        <div class="box-video">
                            <div class="bg-video" style="background-image: url(https://www.youtube.com/watch?v=Nf0c7u1Ywec);">
                                <div class="bt-play">Play</div>
                            </div>
                            <div class="video-container">
                                <iframe width="100%" height="520" src= "https://www.youtube.com/embed/Nf0c7u1Ywec" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"   allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="blog" class="content-section">
                <div class="section-heading">
                    <h1>Berita Terbaru<br><em>SMK WIKRAMA 1 GARUT</em></h1>
                </div>
                <div class="section-content">
                    <div class="tabs-content">
                        <div class="wrapper">
                            {{-- <ul class="tabs clearfix" data-tabgroup="first-tab-group">
                              <li><a href="#tab1" class="active">September 2022</a></li>
                              <li><a href="#tab2">Oktober  2022</a></li>
                              <li><a href="#tab3">November 2022</a></li>
                              <li><a href="#tab4">Desember 2022</a></li>
                            </ul> --}}
                            {{-- <h3 class="sub-title double-line">---Blog---</h3>
                                   <h1 class="title">Berita Terbaru</h1>
                            <p class="content">Selalu update kabar tentang kami</p> --}}
                            <section id="first-tab-group" class="tabgroup">
                                <div id="tab1">
                                    <ul>
                                        <li>
                                            <div class="item">
                                                <img src="../assets/img/sani.jpg"  width="230 px" height="240 px">
                                                <div class="text-content">
                                                    <h4>Sany Lutfia Hijriya Meraih Juara 1 Lomba Essay SMA/SMK Se- Kabupaten Garut</h4>
                                                    <span> 24 September 2022</span>
                                                    <p>Sany Lutfia – Juara 1 Lomba Essay SMA/SMK se-Kabupaten Garut
                                                        
                                                        Dihadiri langsung oleh Kak dr. H. Helmi Budiman, M.M (Wakil Bupati Garut)</p>
                                                        
                                                        <div class="accent-button button">
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <img src="../assets/img/juara1.jpg"  width="230 px" height="240 px">
                                                    <div class="text-content">
                                                        <h4>Siswa Pemasaran Meraih Juara 3 – Lomba Ekonomi Kreatif</h4>
                                                        <span>5 September 2022</span>
                                                        <p>TIM BDP (Haikal,Reza Dan Yazid)- BDP X
                                                            Berhasil Meraih Juara Ke-3  
                                                        Lomba Creative Economy Competition SMA/SMK Se- Kabupaten Garut Pada Acara "76 Festival Tahun 2020" Di MA Persis Taroggong - Kab.Garut </p>
                                                            
                                                            <span>Yang diselenggarakan oleh MA Persis Taroggong.</span> </p>
                                                        
                                                        <div class="accent-button button">
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item">
                                                    <img src="../assets/img/tamu.jpg"  width="230 px" height="240 px">
                                                <div class="text-content">
                                                    <h4>Kunjungan Guru SMP dan SMK Garnesia Pacet Cianjur</h4>
                                                    {{-- <span>16 September 2022</span> --}}
                                                    <p>SMK Wikrama 1 Garut menerima kunjungan dari SMP dan SMK Garnesia Pacet Cianjur sejumlah 35 orang terdiri dari Ketua Yayasan, Kepala SMP, Kepala SMK, guru, staf dan 10 orang pengurus OSIS. Semoga menambah keberkahan</p>
                                                    
                                                    <div class="accent-button button">
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div id="tab2">
                                    <ul>
                                        <li>
                                            <div class="item">
                                                <img src="../assets/img/pmr.jpg" alt="">
                                                <div class="text-content">
                                                    <h4>Gerakan Nasional Aksi Bergizi di SMK Wikrama</h4>
                                                    <span>10 Oktober 2022</span>
                                                    <p>Gerakan Nasional Aksi Bergizi
                                                        Terima kasih atas kepercayaaan yang diberikan kepada SMK WIKRAMA 1 GARUT untuk menjadi penyelenggara Gerakan Nasional Aksi Bergizi di Kota Bogor
                                                        Gerakan ini dilaksanakan sebagai implementasi Pembudayaan Germas di Tatanan sekolah dengan kegiatan berupa Senam Bersama, Sarapan Bersama dan Minum Tablet Tambah Darah (TTD) bagi Remaja Putri.
                                                        Kegiatan ini dilakukan secara serentak di seluruh Indonesia pada tanggal 26 Oktober 2022 jam 08.00 WIB.                                                      

                                                    <div class="accent-button button">
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <img src="../assets/img/goes to japan.jpg" alt="">
                                                <div class="text-content">
                                                    <h4>WIKRAMA GOES TO JAPAN</h4>
                                                    <span>26 Oktober 2022</span>
                                                    <p>Qeyla Raiq Alva saat ini sudah berada di Jepang untuk mengikuti rangkaian program Sakura Science High School Program (SSHP) Tahun 2022 di Tokyo.

                                                        Qeyla mewakili Indonesia bersama 2 pelajar lain dalam program ini.
                                                        
                                                        SSHP 2022 diselenggarakan atas kerjasama @direktoratsmk @kemdikbud.ri, International Test Center (ITC), dan JST (Japan Science and Technology Agency).
                                                        
                                                        Program bertujuan memperluas wawasan para pelajar SMK dalam bidang sains dan teknologi.
                                                        
                                                        Good Luck, Qeyla!
                                                        </p>
                                                    
                                                    <div class="accent-button button">
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <img src="../assets/img/futsal.jpg" alt="">
                                                <div class="text-content">
                                                    <h4>Tim Futsal Wikrama Raih Juara 3 Sport Competitions 2022!</h4>
                                                    <span>31 Oktober 2018</span>
                                                    <p>Tim Futsal SMK WIKRAMA 1 GARUT raih Juara 3 dalam SPEAK XII CONSTELLATION, SPORT COMPETITIONS 2022!
                                                        Yang diselenggarakan oleh SMA Kesatuan (3-8 Oktober 2022)                                                        
                                                        <span>Selamat untuk Tim "Garuda Wikrama"</span> 
                                                        </p>
                                                    
                                                    <div class="accent-button button">
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div id="tab3">
                                    <ul>
                                        <li>
                                            <div class="item">
                                                <img src="../assets/img/chelsea.jpg " alt="">
                                                <div class="text-content">
                                                    <h4>Chelsea Masuk 10 Besar FLS2N Tingkat Nasional 2022!</h4>
                                                    <span>14 November 2022</span>
                                                    <p>Tiada Hari Tanpa Prestasi Selamat atas prestasi yang diraih oleh peserta didik SMK WIKRAMA 1 GARUT, Aprilla Chelsea Herlambang yang masuk nominasi 10 besar nasional dalam FLS2N Tahun 2022, bidang lomba Menyanyi Solo.</p>
                                                    
                                                    <div class="accent-button button">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <img src="../assets/img/juara3.jpg" alt="">
                                                <div class="text-content">
                                                    <h4>Prestasi Kembali diraih SMK WIKRAMA 1 GARUT ????</h4>
                                                    <span>30 November 2022</span>
                                                    <p>SMK Wikrama raih juara 3 dalam Bogor Innovation Award (BIA) tahun 2022 bidang Inovasi Kategori Perguruan Tinggi, Lembaga/Pelaku Usaha yang diselenggarakan oleh BAPPEDA Kota Bogor (31/11/2022).

                                                        Lomba diikuti oleh Guru jurusan Pemasaran SMK Wikrama, Rina Finanti, Shinta Oktavia, M. Rizky Rhamadan dan Noor Muhammad Reksy yang membawakan tema:
                                                        
                                                        "Peran Pembelajaran Praktik Berbasis Kelas Industri pada Siswa Pemasaran untuk Peningkatan Hard Skill dan Sofskill".
                                                        
                                                        Selamat!!!</p>
                                                    
                                                    <div class="accent-button button">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <img src="../assets/img/smk pk.jpg" alt="">
                                                <div class="text-content">
                                                    <h4>SMK WIKRAMA 1 GARUT terpilih sebagai SMK PK terbaik program Cybersecurity Training & Certification Mastercard Academy 2.0</h4>
                                                    <span>31 November 2022</span>
                                                    <p>
                                                        Penghargaan diberikan secara langsung oleh Director Public Policy Mastercard Indonesia, Mr. Wilson Siahaan, serta sebagai Pembina InfraDigital Foundation, Mr. Ian McKenna kepada Kepala SMK WIKRAMA 1 GARUT, Iin Mulyani di Jakarta pada Selasa, 29 November 2022.
                                                        
                                                        SMK WIKRAMA 1 GARUT dinilai telah menunjukkan komitmennya demi mendukung upaya pemerintah Indonesia dalam melahirkan talenta digital.
                                                  </p>
                                                    
                                                    <div class="accent-button button">
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div id="tab4">
                                    <ul>
                                        <li>
                                            <div class="item">
                                                <img src="../assets/img/blog_1.jpg" alt="">
                                                <div class="text-content">
                                                    <h4>Lorem ipsum dolor sit</h4>
                                                    <span>26 April 2018</span>
                                                    <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>
                                                    
                                                    <div class="accent-button button">
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </li>                                
                                        <li>
                                            <div class="item">
                                                <img src="../assets/img/blog_3.jpg" alt="">
                                                <div class="text-content">
                                                    <h4>Integer ultrices augue eu</h4>
                                                    <span>24 April 2018</span>
                                                    <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>
                                                    
                                                    <div class="accent-button button">
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="item">
                                                <img src="../assets/img/blog_2.jpg" alt="">
                                                <div class="text-content">
                                                    <h4>Cras commodo odio ut</h4>
                                                    <span>20 April 2018</span>
                                                    <p>Nam vel egestas nisi. Nullam lobortis magna at enim venenatis luctus. Nam finibus, mauris eu dictum iaculis, dolor tortor cursus quam, in volutpat augue lectus sed magna. Integer mollis lorem quis ipsum maximus finibus.</p>
                                                    
                                                    <div class="accent-button button">
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </section> 
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact" class="content-section">
                <div id="map">
                
                	<!-- How to change your own map point
                           1. Go to Google Maps
                           2. Click on your location point
                           3. Click "Share" and choose "Embed map" tab
                           4. Copy only URL and paste it within the src="" field below
                    -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.6035095215498!2d107.89034314987859!3d-7.171747272339981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68b0c3cbcb1f29%3A0xc96607822a7646b0!2sSMK%20Wikrama%201%20Garut!5e0!3m2!1sid!2sid!4v1675743988549!5m2!1sid!2sid" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div id="contact-content">
                    <div class="section-heading">
                        <h1>Kontak<br><em>SMK WIKRAMA 1 GARUT</em></h1>        
                        
                    </div>
                    <div class="section-content">
                        <form id="contact" action="#" method="post">
                            <div class="row">
                                <div class="col-md-4">
                                  <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-4">
                                  <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your email..." required="">
                                  </fieldset>
                                </div>
                                 <div class="col-md-4">
                                  <fieldset>
                                    <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject..." required="">
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..." required=""></textarea>
                                  </fieldset>
                                </div>
                                <div class="col-md-12">
                                  <fieldset>
                                    <button type="submit" id="form-submit" class="btn">Send Message Now</button>
                                  </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            <section class="footer">
                <p>Morning Group; 2023
            </section>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="../assets/js/vendor/bootstrap.min.js"></script>
    
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>

    <script>
        // Hide Header on on scroll down
        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = $('header').outerHeight();

        $(window).scroll(function(event){
            didScroll = true;
        });

        setInterval(function() {
            if (didScroll) {
                hasScrolled();
                didScroll = false;
            }
        }, 250);

        function hasScrolled() {
            var st = $(this).scrollTop();
            
            // Make sure they scroll more than delta
            if(Math.abs(lastScrollTop - st) <= delta)
                return;
            
            // If they scrolled down and are past the navbar, add class .nav-up.
            // This is necessary so you never see what is "behind" the navbar.
            if (st > lastScrollTop && st > navbarHeight){
                // Scroll Down
                $('header').removeClass('nav-down').addClass('nav-up');
            } else {
                // Scroll Up
                if(st + $(window).height() < $(document).height()) {
                    $('header').removeClass('nav-up').addClass('nav-down');
                }
            }
            
            lastScrollTop = st;
        }
    </script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>

</body>
</html>