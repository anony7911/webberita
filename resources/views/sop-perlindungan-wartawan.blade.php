<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>SOP Perlindungan Wartawan | Kolaka Update</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Kolaka Update" name="Kolaka, Update, Berita, Terkini">
    <meta content="Kolaka Update" name="Berita terkini kolaka dan sekitarnya.">

    <!-- Favicon -->
    <link href="{{ url('/') }}/logo-pendek-kolakaupdate1.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="{{ url('/') }}/asset/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ url('/') }}/asset/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ url('/') }}/asset/css/style.css" rel="stylesheet">

    @livewireStyles
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center bg-light px-lg-5">
            <div class="col-12 col-md-8">
                <div class="d-flex justify-content-between">
                </div>
            </div>
            <div class="col-md-4 text-right d-none d-md-block">
                {{ \Carbon\Carbon::now()->formatLocalized("%A, %d %B %Y"); }}
            </div>
        </div>
        <div class="row align-items-center py-2 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <img src="{{ url('/') }}/logo-panjang-kolakaupdate1.png" alt="" width="200px">
                    {{-- <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">Kolaka</span>Update</h1> --}}
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <img class="img-fluid" src="{{ url('/') }}/asset/img/ads-700x70.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0 mb-3">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <img src="{{ url('/') }}/logo-panjang-kolakaupdate1.png" alt="" width="130px">
                {{-- <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">Kolaka </span>Update</h1> --}}
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0 text-center align-items-center">
                    <a href="{{ url('/') }}"
                        class="nav-item nav-link {{ Request::url() == url('/') ? 'active' : '' }} align-items-center font-weight-bold">Home</a>
                    @foreach ($kategoris as $kategori)
                    <a href="{{ url('/kategori/'.$kategori->slug_kategori) }}"
                        class="nav-item nav-link align-items-center font-wight-bold {{ Request::url() == url('/kategori/'.$kategori->slug_kategori) ? 'active' : '' }}">{{ ucfirst($kategori->nama_kategori) }}</a>
                    @endforeach
                </div>
                <div class="input-group ml-auto" style="width: 100%; max-width: 300px;">
                    <form action="/artikel/search" method="get">
                        <div class="input-group-append">
                            <input name="search" type="text" class="form-control" id="search" placeholder="Keyword" value="{{ old('search') }}">
                            <button type="submit" class="input-group-text text-secondary"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Top News Slider Start -->
    <div class="container-fluid py-0">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12 col-sm-12 order-0 order-sm-first text-center align-items-center">
                    @foreach ($bannerheads as $bannerhead)
                    <img class="img-fluid mb-3" src="{{ Storage::url($bannerhead->gambar_bannerhead) }}" alt=""
                        height="100px" width="1200px">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Top News Slider End -->


    <!-- Main News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                {{-- content --}}
                <div class="col-lg-9 col-sm-12  order-first order-sm-0">
                    <div>
                        <div class="d-flex align-items-center justify-content-between bg-primary py-2 px-4 mb-3">
                            <h3 class="m-0 text-light">SOP Perlindungan Wartawan</h3>
                        </div>
                        <div class="text-justify align-items-start justify-content-between bg-light py-2 px-4 mb-3">
                            <p class="mt-2"><b><u>Standar Operasional Prosedur (SOP) Perlindungan Profesi Wartawan kolalaupdate.com</u></b></p>
                            <p><br>Wartawan kolakaupdate.com yang bertugas mencari berita di lapangan juga
                                mendapat perlindungan sebagaimana yang tertuang dalam Peraturan Dewan Pers Nomor:
                                5/Peraturan-DP/IV/2008 Tentang Standar Perlindungan Profesi Wartawan sebagai berikut:</p>

                            <p>Kemerdekaan menyatakan pikiran dan pendapat merupakan hak asasi manusia yang tidak dapat dihilangkan dan harus dihormati. Rakyat Indonesia telah memilih dan berketetapan hati melindungi kemerdekaan menyatakan pikiran dan pendapat itu dalam Undang-Undang Dasar 1945. Kemerdekaan pers adalah salah satu wujud kedaulatan rakyat dan bagian penting dari kemerdekaan menyatakan pikiran dan pendapat.</p>

                            <p>Wartawan adalah pilar utama kemerdekaan pers. Oleh karena itu dalam menjalankan tugas profesinya wartawan mutlak mendapat perlindungan hukum dari negara, masyarakat, dan perusahaan pers. Untuk itu Standar Perlindungan Profesi Wartawan ini dibuat:</p>

                            <p>
                                <br>1. Perlindungan yang diatur dalam standar ini adalah perlindungan hukum untuk wartawan yang menaati kode etik jurnalistik dalam melaksanakan tugas jurnalistiknya memenuhi hak masyarakat memperoleh informasi;
                                <br>2. Dalam melaksanakan tugas jurnalistik, wartawan memperoleh perlindungan hukum dari negara, masyarakat, dan perusahaan pers. Tugas jurnalistik meliputi mencari, memperoleh, memiliki, menyimpan, mengolah, dan menyampaikan informasi melalui media massa;
                                <br>3. Dalam menjalankan tugas jurnalistik, wartawan dilindungi dari tindak kekerasan, pengambilan, penyitaan dan atau perampasan alat-alat kerja, serta tidak boleh dihambat atau diintimidasi oleh pihak manapun;
                                <br>4. Karya jurnalistik wartawan dilindungi dari segala bentuk penyensoran;
                                <br>5. Wartawan yang ditugaskan khusus di wilayah berbahaya dan atau konflik wajib dilengkapi surat penugasan, peralatan keselamatan yang memenuhi syarat, asuransi, serta pengetahuan, keterampilan dari perusahaan pers yang berkaitan dengan kepentingan penugasannya;
                                <br>6. Dalam penugasan jurnalistik di wilayah konflik bersenjata, wartawan yang telah menunjukkan identitas sebagai wartawan dan tidak menggunakan identitas pihak yang bertikai, wajib diperlakukan sebagai pihak yang netral dan diberikan perlindungan hukum sehingga dilarang diintimidasi, disandera, disiksa, dianiaya, apalagi dibunuh;
                                <br>7. Dalam perkara yang menyangkut karya jurnalistik, perusahaan pers diwakili oleh penanggungjawabnya;
                                <br>8. Dalam kesaksian perkara yang menyangkut karya jurnalistik, penanggungjawabnya hanya dapat ditanya mengenai berita yang telah dipublikasikan. Wartawan dapat menggunakan hak tolak untuk melindungi sumber informasi;
                                <br>9. Pemilik atau manajemen perusahaan pers dilarang memaksa wartawan untuk membuat berita yang melanggar Kode Etik Jurnalistik dan atau hukum yang berlaku.
                            </p>
                            <p>
                                Standar Operasional Prosedur (SOP) Perlindungan Wartawan ini dibuat untuk dijadikan pedoman dalam melindungi tugas-tugas wartawan dalam menjalankan profesinya.
                            </p>
                        </div>
                    </div>
                </div>
                {{-- end-content --}}
                <div class="col-lg-3 col-sm-12 order-1 order-sm-1">
                    <div class="d-flex align-items-center justify-content-between bg-primary py-2 px-4 mb-3">
                        <h3 class="m-0 text-light">Ikuti Kami</h3>
                    </div>

                    <div class="d-flex mb-3">
                        <a target="_blank" href="{{ $fbs->link_sosmed }}"
                            class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2"
                            style="background: #39569E;">
                            <small class="fab fa-facebook-f mr-2"></small><small>Facebook</small>
                        </a>
                        <a target="_blank" href="{{ $igs->link_sosmed }}"
                            class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2"
                            style="background: #F1186B;">
                            <small class="fab fa-instagram mr-2"></small><small>Instagram</small>
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <a target="_blank" href="{{ $tks->link_sosmed }}"
                            class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2"
                            style="background: #121618;">
                            <small class="fab fa-tiktok mr-2"></small><small>Tiktok</small>
                        </a>
                        <a target="_blank" href="{{ $was->link_sosmed }}"
                            class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2"
                            style="background: #27CF17;">
                            <small class="fab fa-whatsapp mr-2"></small><small>Whatsapp</small>
                        </a>
                    </div>

                    {{-- Popular News --}}
                    <div class="d-flex align-items-center justify-content-between bg-primary py-2 px-4 mb-3">
                        <h3 class="m-0 text-light">Populer</h3>
                    </div>
                    <?php $no = 1; ?>
                    <div class="d-flex mb-3 flex-column">
                        @foreach ($populars as $popular)
                        <div class="d-flex  justify-content-center bg-light px-3" style="height:60px">
                            <div class="mb-0">
                                <span class="px-1 py-1 font-weight-bold text-center text-dark"
                                    style="font-size: 24px">{{ $no++ }}.</span>
                            </div>
                            <a class="h6 m-0 mt-1 px-1 py-1" href="{{url('/')}}/{{$popular->slug_artikel}}"
                                style="font-size: 14px">{{Str::words(ucfirst($popular->judul), 10)  }}</a>
                        </div>
                        @endforeach
                    </div>
                    {{-- End Popular News --}}

                    {{-- Latest News --}}
                    <div class="d-flex align-items-center justify-content-between bg-primary py-2 px-4 mb-3">
                        <h3 class="m-0 text-light">Terbaru</h3>
                    </div>
                    @foreach ($artikels as $artikel)
                    <div class="d-flex mb-2">
                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3"
                            style="height: 100px;">
                            <div class="mb-1" style="font-size: 13px;">
                                @foreach ($artikel->kategoris->take(1) as $kategori)
                                <a href="">{{ Str::ucfirst($kategori->nama_kategori)}}</a>
                                <span class="px-1">/</span>
                                <span>{{ $artikel->created_at->isoFormat('D MMM Y'); }}</span>
                                @endforeach
                            </div>
                            <a class="h6 m-0" href="{{url('/')}}/{{$artikel->slug_artikel}}">{{Str::words(ucfirst($artikel->judul), 9)  }}</a>
                        </div>
                    </div>
                    @endforeach
                    {{-- End Latest News --}}

                    {{-- Tags --}}
                    <div class="d-flex align-items-center justify-content-between bg-primary py-2 px-4 mb-3">
                        <h3 class="m-0 text-light">Tags</h3>
                    </div>
                    <div class="d-flex flex-wrap m-n1 mb-3">
                        @foreach ($tags as $tag)
                        <a href="{{ url('/'."tags/".$tag->slug_tag) }}"
                            class="btn btn-sm btn-light btn-outline-secondary m-1">{{ ucfirst($tag->nama_tag) }}</a>
                        @endforeach
                    </div>
                    {{-- End Tags --}}

                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-light pt-5 px-sm-3 px-md-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="https://kolakaupdate.com" class="navbar-brand">
                    <h1 class="mb-2 mt-n2 display-5 text-uppercase"><span class="text-primary"><img
                                src="{{ url('/') }}/logo-panjang-kolakaupdate1.png" alt="" width="250px"></h1>
                </a>
                <p>Menyediakan Berita Terkini Untuk Wilayah Kolaka Dan Sekitarnya.</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-secondary btn-light text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" target="_blank" href="{{ $fbs->link_sosmed }}"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary btn-light text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" target="_blank" href="{{ $igs->link_sosmed }}"><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-secondary btn-light text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" target="_blank" href="{{ $tks->link_sosmed }}"><i
                            class="fab fa-tiktok"></i></a>
                    <a class="btn btn-outline-secondary btn-light text-center mr-2 px-0"
                        style="width: 38px; height: 38px;" target="_blank" href="{{ $was->link_sosmed }}"><i
                            class="fab fa-whatsapp"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-4">Categories</h4>
                <div class="d-flex flex-wrap m-n1">
                    @foreach ($kategoris as $kategori)
                    <a href="{{ '/kategori/'.$kategori->slug_kategori }}"
                        class="btn btn-sm btn-outline-secondary m-1">{{ ucfirst($kategori->nama_kategori) }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-4">Tags</h4>
                <div class="d-flex flex-wrap m-n1">
                    @foreach ($tags as $tag)
                    <a href="{{ url('/'."tags/".$tag->slug_tag) }}" class="btn btn-sm btn-outline-secondary m-1">{{ ucfirst($tag->nama_tag) }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="/tentang-kami"><i
                            class="fa fa-angle-right text-dark mr-2"></i>Tentang Kami</a>
                    <a class="text-secondary mb-2" href="/info-iklan"><i
                            class="fa fa-angle-right text-dark mr-2"></i>Info Iklan</a>
                    <a class="text-secondary mb-1" href="/redaksi"><i
                            class="fa fa-angle-right text-dark mr-2"></i>Redaksi</a>
                    <a class="text-secondary mb-1" href="/pedoman-media-siber"><i
                            class="fa fa-angle-right text-dark mr-2"></i>Pedoman Media Siber</a>
                    <a class="text-secondary mb-1" href="/sop-perlindungan-wartawan"><i
                            class="fa fa-angle-right text-dark mr-2"></i>SOP Perlindungan Wartawan</a>
                    <a class="text-secondary mb-1" href="/kode-etik-internal"><i
                            class="fa fa-angle-right text-dark mr-2"></i>Kode Etik Internal</a>
                    <a class="text-secondary mb-1" href="/privacy-policy"><i
                            class="fa fa-angle-right text-dark mr-2"></i>Privacy &
                        policy</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center">
            &copy; {{ date("Y"); }} | <a class="font-weight-bold" href="https://kolakaupdate.com">Kolaka Update</a>. All
            Rights Reserved.
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/asset/lib/easing/easing.min.js"></script>
    <script src="{{ url('/') }}/asset/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('/') }}/asset/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="{{ url('/') }}/asset/mail/jqBootstrapValidation.min.js"></script>
    <script src="{{ url('/') }}/asset/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="{{ url('/') }}/asset/js/main.js"></script>
    @livewireScripts
</body>

</html>
