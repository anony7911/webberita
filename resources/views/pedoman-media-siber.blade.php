<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pedoman Media Siber | Kolaka Update</title>
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
                            <h3 class="m-0 text-light">Pedoman Media Siber</h3>
                        </div>
                        <div class="text-justify align-items-start justify-content-between bg-light py-2 px-4 mb-3" >
                            <p class="mt-2">Kemerdekaan berpendapat, kemerdekaan berekspresi, dan kemerdekaan pers adalah hak asasi manusia yang dilindungi Pancasila, Undang-Undang Dasar 1945, dan Deklarasi Universal Hak Asasi Manusia PBB. Keberadaan media siber di Indonesia juga merupakan bagian dari kemerdekaan berpendapat, kemerdekaan berekspresi, dan kemerdekaan pers.</p>

                            <p>Media siber memiliki karakter khusus sehingga memerlukan pedoman agar pengelolaannya dapat dilaksanakan secara profesional, memenuhi fungsi, hak, dan kewajibannya sesuai Undang-Undang Nomor 40 Tahun 1999 tentang Pers dan Kode Etik Jurnalistik. Untuk itu Dewan Pers bersama organisasi pers, pengelola media siber, dan masyarakat menyusun Pedoman Pemberitaan Media Siber sebagai berikut:</p>

                            <p class="mb-4">Maka dari itu hadirnya media ini, kami berkeyakinan apa yang menjadi kebutuhan berita dan informasi
                                masyarakat akan tersajikan secara profesional dan beretika, karena media ini dikelola
                                jurnalis muda yang berpengalaman dalam bidang jurnalistik.</p>

                            <p><b>A. Ruang Lingkup</b>
                            <br>1. Media Siber adalah segala bentuk media yang menggunakan wahana internet dan melaksanakan kegiatan jurnalistik, serta memenuhi persyaratan Undang-Undang Pers dan Standar Perusahaan Pers yang ditetapkan Dewan Pers.
                            <br>2. Isi Buatan Pengguna (User Generated Content) adalah segala isi yang dibuat dan atau dipublikasikan oleh pengguna media siber, antara lain, artikel, gambar, komentar, suara, video dan berbagai bentuk unggahan yang melekat pada media siber, seperti blog, forum, komentar pembaca atau pemirsa, dan bentuk lain.
                            </p>

                            <p><b>B. Verifikasi dan keberimbangan berita</b>
                                <br>1. Pada prinsipnya setiap berita harus melalui verifikasi.
                                <br>2. Berita yang dapat merugikan pihak lain memerlukan verifikasi pada berita yang sama untuk memenuhi prinsip akurasi dan keberimbangan.
                                <br>3. Ketentuan dalam butir (a) di atas dikecualikan, dengan syarat:
                                <br>a. Pada prinsipnya setiap berita harus melalui verifikasi.
                                <br>b. Sumber berita yang pertama adalah sumber yang jelas disebutkan identitasnya, kredibel dan kompeten,
                                <br>c. Subyek berita yang harus dikonfirmasi tidak diketahui keberadaannya dan atau tidak dapat diwawancarai
                                <br>d. Media memberikan penjelasan kepada pembaca bahwa berita tersebut masih memerlukan verifikasi lebih lanjut yang diupayakan dalam waktu secepatnya. Penjelasan dimuat pada bagian akhir dari berita yang sama, di dalam kurung dan menggunakan huruf miring.
                                <br>4. Setelah memuat berita sesuai dengan butir (c), media wajib meneruskan upaya verifikasi, dan setelah verifikasi didapatkan, hasil verifikasi dicantumkan pada berita pemutakhiran (update) dengan tautan pada berita yang belum terverifikasi.
                            </p>
                            <p><b>C. Isi Buatan Pengguna (User Generated Content)</b>
                            <br>1. Media siber wajib mencantumkan syarat dan ketentuan mengenai Isi Buatan Pengguna yang tidak bertentangan dengan Undang-Undang No. 40 tahun 1999 tentang Pers dan Kode Etik Jurnalistik, yang ditempatkan secara terang dan jelas.
                            <br>2. Media siber mewajibkan setiap pengguna untuk melakukan registrasi keanggotaan dan melakukan proses log-in terlebih dahulu untuk dapat mempublikasikan semua bentuk Isi Buatan Pengguna. Ketentuan mengenai log-in akan diatur lebih lanjut.
                            <br>3. Dalam registrasi tersebut, media siber mewajibkan pengguna memberi persetujuan tertulis bahwa Isi Buatan Pengguna yang dipublikasikan:
                            <br>a. Tidak memuat isi bohong, fitnah, sadis dan cabul;
                            <br>b. Tidak memuat isi yang mengandung unsur pornografi, pornografi, pornografis, dan pornografi seksual;
                            <br>c. Tidak memuat isi yang mengandung prasangka dan kebencian terkait dengan suku, agama, ras, dan antargolongan (SARA), serta menganjurkan tindakan kekerasan;
                            <br>d. Tidak memuat isi diskriminatif atas dasar perbedaan jenis kelamin dan bahasa, serta tidak merendahkan martabat orang lemah, miskin, sakit, cacat jiwa, atau cacat jasmani.
                            <br>e. Media siber memiliki kewenangan mutlak untuk mengedit atau menghapus Isi Buatan Pengguna yang bertentangan dengan butir (c).
                            <br>f. Media siber wajib menyediakan mekanisme pengaduan Isi Buatan Pengguna yang dinilai melanggar ketentuan pada butir (c). Mekanisme tersebut harus disediakan di tempat yang dengan mudah dapat diakses pengguna.
                            <br>g. Media siber wajib menyunting, menghapus, dan melakukan tindakan koreksi setiap Isi Buatan Pengguna yang dilaporkan dan melanggar ketentuan butir (c), sesegera mungkin secara proporsional selambat-lambatnya 2 x 24 jam setelah pengaduan diterima.
                            <br>h. Media siber yang telah memenuhi ketentuan pada butir (a), (b), (c), dan (f) tidak dibebani tanggung jawab atas masalah yang ditimbulkan akibat pemuatan isi yang melanggar ketentuan pada butir (c).
                            <br>i. Media siber bertanggung jawab atas Isi Buatan Pengguna yang dilaporkan bila tidak mengambil tindakan koreksi setelah batas waktu sebagaimana tersebut pada butir (f).

                        </p>
                        <p><b>D. Ralat, Koreksi dan Hak Jawab</b>
                            <br>1. Ralat, koreksi, dan hak jawab mengacu pada Undang-Undang Pers, Kode Etik Jurnalistik, dan Pedoman Hak Jawab yang ditetapkan Dewan Pers.
                            <br>2. Ralat, koreksi dan atau hak jawab wajib ditautkan pada berita yang diralat, dikoreksi atau yang diberi hak jawab.
                            <br>3. Disetiap berita ralat, koreksi, dan hak jawab wajib dicantumkan waktu pemuatan ralat, koreksi, dan atau hak jawab tersebut.
                            <br>4. Bila suatu berita media siber tertentu disebarluaskan media siber lain, maka:
                            <br>a. Tanggung jawab media siber pembuat berita terbatas pada berita yang dipublikasikan di media siber tersebut atau media siber yang berada di bawah otoritas teknisnya;
                            <br>b. Koreksi berita yang dilakukan oleh sebuah media siber, juga harus dilakukan oleh media siber lain yang mengutip berita dari media siber yang dikoreksi itu;
                            <br>c. Media yang menyebarluaskan berita dari sebuah media siber dan tidak melakukan koreksi atas berita sesuai yang dilakukan oleh media siber pemilik dan atau pembuat berita tersebut, bertanggung jawab penuh atas semua akibat hukum dari berita yang tidak dikoreksinya itu.
                            <br>5. Sesuai dengan Undang-Undang Pers, media siber yang tidak melayani hak jawab dapat dijatuhi sanksi hukum pidana denda paling banyak Rp500.000.000 (Lima ratus juta rupiah).
                        </p>
                        <p><b>E. Pencabutan Berita</b>
                            <br>1. Berita yang sudah dipublikasikan tidak dapat dicabut karena alasan penyensoran dari pihak luar redaksi, kecuali terkait masalah SARA, kesusilaan, masa depan anak, pengalaman traumatik korban atau berdasarkan pertimbangan khusus lain yang ditetapkan Dewan Pers.
                            <br>2. Media siber lain wajib mengikuti pencabutan kutipan berita dari media asal yang telah dicabut.
                            <br>3. Pencabutan berita wajib disertai dengan alasan pencabutan dan diumumkan kepada publik.
                        </p>
                        <p><b>E. Iklan</b>
                            <br>1. Media siber wajib membedakan dengan tegas antara produk berita dan iklan.
                            <br>2. Setiap berita/artikel/isi yang merupakan iklan dan atau isi berbayar wajib mencantumkan keterangan .advertorial., .iklan., .ads., .sponsored., atau kata lain yang menjelaskan bahwa berita/artikel/isi tersebut adalah iklan.
                        </p>
                        <p><b>F. Hak Cipta</b>
                            <br>Media siber wajib menghormati hak cipta sebagaimana diatur dalam peraturan perundang-undangan yang berlaku.
                        </p>
                        <p><b>G. Pencantuman Pedoman</b>
                        <br>Media siber wajib mencantumkan Pedoman Pemberitaan Media Siber ini di medianya secara terang dan jelas.
                        </p>
                        <p><b>I. Sengketa</b>
                        <br>Penilaian akhir atas sengketa mengenai pelaksanaan Pedoman Pemberitaan Media Siber ini diselesaikan oleh Dewan Pers.
                        </p>
                        <p><b>Jakarta, 3 Februari 2012</b>
                            <br><b>(Pedoman ini ditandatangani oleh Dewan Pers dan komunitas pers di Jakarta, 3 Februari 2012).</b>
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
