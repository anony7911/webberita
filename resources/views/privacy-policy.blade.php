<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Privacy & Policy | Kolaka Update</title>
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
                            <h3 class="m-0 text-light">Privacy & Policy</h3>
                        </div>
                        <div class="text-justify align-items-start justify-content-between bg-light py-2 px-4 mb-3">
                            <p class="mt-2">Kebijakan privasi merupakan segala sesuatu yang terkait dengan data-data
                                Anda yang kami kumpulkan saat mengunjungi situs (web) ini. Privasi pengunjung sangatlah
                                penting bagi kami. Berikut ini adalah informasi mengenai tipe informasi seperti apa yang
                                kami terima dan kami kumpulkan melalui blog www.kolakaupdate.com, serta bagaimana kami
                                melindungi informasi tersebut. Kami tidak akan pernah menjual informasi pribadi anda
                                kepada pihak ketiga manapun.
                                Dalam situs (web) kami terdapat berbagai link yang mengarah kepada situs lain dan atas
                                hal tersebut kami tidak bertanggung jawab terhadap kebijakan penanganan informasi
                                pribadi di situs-situs tersebut. Kami sangat menganjurkan bagi Anda untuk selalu melihat
                                dan mempelajari kebijakan penanganan informasi pribadi di situs-situs tersebut sebelum
                                memberikan informasi pribadi.</p>

                            <p><b>Informasi yang Kami Kumpulkan</b>
                                <br>Kami mengumpulkan Data Pribadi Anda yang diberikan kepada kami dan yang terekam
                                secara otomatis saat menggunakan layanan kami. Data Pribadi tersebut termasuk namun
                                tidak terbatas pada nama pengguna; identifikasi pengguna; interaksi pengguna terhadap
                                layanan dan iklan; transaksi yang berhubungan dengan informasi; seperti ketika Anda
                                menerima penawaran; mengunduh (download); atau memakai aplikasi dari kami.

                                Data Anda yang kami simpan juga termasuk Informasi yang Anda berikan ketika mengubungi
                                kami untuk bantuan atau feedback, Informasi yang Anda masukkan ke dalam sistem ketika
                                menggunakan layanan, seperti informasi kontak /kredensial login; alamat; nomor telepon;
                                alamat e-mail serta kartu kredit.

                                Kami dan pihak ketiga lainnya mungkin juga memproses data tentang perangkat komputer
                                Anda, misalnya alamat IP; tipe browser; Unique Device Identifier (bagi pengguna yang
                                mengakses layanan kami melalui ponsel); sistem operasi; versi aplikasi; dan garis
                                lintang/bujur lokasi Anda (koordinat).

                                Data ini biasanya bersifat anonim, tapi tetap saja dianggap data pribadi, baik secara
                                tersendiri ataupun jika bersama-sama dikombinasikan.

                                Dalam penyediaan layanan ini bisa saja terdapat link yang memungkinkan Anda untuk
                                mengakses dan mengirimkan informasi Anda kepada aplikasi atau situs pihak ketiga, maka
                                setiap informasi yang Anda berikan kepada aplikasi atau situs lain tersebut secara
                                otomatis Anda sudah dianggap setuju, memahami dan mengikuti Kebijakan Privasi pihak
                                ketiga tersebut.</p>
                            <p><b>Bagaimana Kami Menggunakan Informasi Anda</b>
                                <br>Kami dapat dan berhak menggunakan Informasi yang Anda berikan tentang diri Anda
                                untuk memenuhi permintaan Anda atas produk, program, layanan kami, dan untuk menanggapi
                                pertanyaan Anda tentang penawaran kami, dalam menawarkan produk-produk lain, program
                                atau layanan yang kami percaya mungkin menarik bagi Anda.

                                Informasi yang kami kumpulkan sehubungan dengan forum online dan komunitas adalah
                                digunakan untuk sarana komunikasi dan pengalaman interaktif. Kami menggunakan informasi
                                ini untuk berpartisipasi dalam ini forum online dan komunitas dan dari waktu ke waktu,
                                untuk menawarkan produk, program, layanan atau pengalaman lain yang akan dibuat kemudian
                                hari.

                                Jika Anda mengirimkan konten untuk dipublikasikan (misalnya, informasi bernilai berita
                                kepada editor kami, komentar terhadap konten berita, sebuah posting ke blog atau forum,
                                foto dan video), kita dapat mempublikasikan nama Anda dan informasi lainnya yang Anda
                                berikan untuk kami.

                                Kami dapat dan berhak menggabungkan informasi tersebut yang telah kami kumpulkan melalui
                                layanan kami dengan informasi yang kami kumpulkan dari sumber lain. Jika Anda mendaftar
                                dan membuat profil dalam Situs kami, maka identitas Anda serta konten lainnya yang Anda
                                kirimkan ke profil Anda (misalnya foto, komentar, video, artikel) akan ditampilkan untuk
                                umum pada Situs dan dapat digunakan kembali dan didistribusikan oleh kami sesuai
                                kebijaksanaan kami.

                                Kami, pihak lainnya, pengiklan, jaringan iklan dan penyedia platform, agency, atau mitra
                                kami dapat menggunakan informasi Anda (user experience) yang dikumpulkan untuk
                                memperbaiki desain dan isi dari Situs kami, untuk menyampaikan pesan pemasaran yang
                                lebih relevan dan iklan, untuk memungkinkan kita dalam mempersonalisasi pengalaman
                                berinternet Anda dengan tujuan untuk melakukan analisis sesuai dengan kebijakan kami.

                                Kami juga dapat dan berhak menggunakan informasi ini untuk menganalisis penggunaan Situs
                                atau konten kami, serta untuk menawarkan produk, program, atau layanan lainnya
                                dikemudian hari.

                                Kami juga dapat dan berhak menggunakan Data Pribadi Anda dan informasi lainnya yang
                                dikumpulkan untuk pemasaran Media Sosial, untuk tujuan pemasaran digital dan
                                konvensional seperti mengirimkan Anda surat elektronik langsung dan memberitahukan
                                tentang produk baru, penawaran khusus atau informasi lain yang menurut kami akan menarik
                                bagi Anda.

                                Harap dicatat bahwa Anda dapat memilih untuk keluar dari setiap materi pemasaran yang
                                mungkin kami kirimkan kepada Anda. Kami mengharapkan Anda untuk mengikuti instruksi
                                untuk berhenti berlangganan yang diatur di dalam materi pemasaran kami jika Anda memilih
                                untuk keluar dari setiap materi pemasaran, dan kami akan menghormati keinginan Anda.

                                Semua konten dan informasi yang Anda publikasikan ke dalam Situs adalah milik Anda,
                                namun dengan menggunakan Situs kami Anda memberikan izin non-ekslusif, transferable,
                                sub-licensable, free-royalty, worldwide kepada Pengembang Situs untuk menggunakan setiap
                                properti seperti konten foto dan video yang anda publikasikan saat berhubungan dengan
                                Pengembang Aplikasi/Situs (web) atau organisasi yang terkait.</p>
                            <p><b>Berbagi dan Mentransfer Data Pribadi Anda</b>
                                <br>Kami dapat dan Berhak membagikan Data Pribadi Anda kepada perusahaan afiliasi Kami,
                                serta Kami (dan/atau perusahaan afiliasinya) juga dapat mengungkapkan Data Pribadi Anda
                                kepada pihak ketiga yang bekerjasama dengan kami, pihak kepolisian, pengadilan,
                                institusi hukum terkait, perusahaan iklan, agency dan jaringan iklan.</p>
                            <p><b>Persetujuan</b>
                                <br>Sebagaimana dinyatakan di atas, dengan menjelajah dan menggunakan Situs, atau dengan
                                menikmati layanan dari Kami, atau dengan mendaftarkan untuk atau menggunakan layanan di
                                Situs, atau dengan mengeklik tombol “Konfirmasi” atau setara ketika Anda membuat akun
                                baru pada situs, maka Anda:

                                Menyetujui segala bentuk layanan dan aturan Kami baik dalam segala hal namun tidaak
                                terbatas juga untuk kegunaan pihak ketiga lainnya dalam mengumpulkan, menggunakan,
                                memanfaatkan dan/atau mengolah data pribadi yang disebutkan di atas untuk tujuan seperti
                                yang dijelaskan di atas; dan

                                Menyetujui Kami dan/atau perusahaan afiliasinya baik yang sudah tergabung maupun yang
                                akan tergabung dalam masa mendatang untuk mentransfer data pribadi Anda keluar dari
                                wilayah Indonesia ke lokasi mitra (partner) Kami lainnya sesuai dengan lokasi dari mitra
                                (partner), dan pihak-pihak lain untuk tujuan seperti dijelaskan di atas.

                                Memberikan persetujuan kepada kami untuk mengolah informasi yang Anda berikan
                                sebagaimana diatur dalam Kebijakan Privasi saat ini atau perubahan yang ada. Pengolahan
                                yang dimaksud adalah menggunakan informasi dengan beragam cara, termasuk namun tidak
                                terbatas, mengumpulkan, menyimpan, menghapus, menggunakan, menggabungkan, dan
                                mengungkapkan informasi namun tidak terbatas sesbgaimana yang dijelaskan dalam ketentuan
                                ini.</p>
                            <p><b>Penarikan Persetujuan</b>
                                <br>Anda dapat menarik persetujuan terhadap pengumpulan, penggunaan atau pengungkapan
                                atas data pribadi Anda setiap saat, dengan menyampaikan alasannya kepada kami dan
                                dikrimkan sesuai dengan kontak kami.

                                Dengan hal itu, Kami akan berhenti mengumpulkan, menggunakan atau mengungkap data
                                pribadi Anda setelah pemberitahuan, kecuali diwajibkan oleh hukum atau jika kami
                                memiliki alas an dan pertimbangan yang sah atau dengan alasan tujuan hukum.

                                Harap diperhatikan bahwa dengan menarik persetujuan Anda terhadap pengumpulan,
                                penggunaan atau pengungkapan atas data pribadi Anda, kami mungkin tidak dapat terus
                                memberikan layanan kami kepada Anda, dan jika Anda menarik dan mengakhiri atas hal ini
                                maka, Anda dianggap telah menyetujui dan memahami bahwa kami tidak akan bertanggung
                                jawab kepada Anda atas setiap kerugian atau kerusakan yang timbul dari atau terkait
                                penghentian layanan tersebut.</p>
                            <p><b>Kebijakan Cookie</b>
                                <br>Seperti situs web lainnya, kolakaupdate.com menggunakan "cookie". Cookie
                                digunakan untuk menyimpan informasi seperti preferensi pengunjung dan halaman yang
                                diakses atau dikunjungi pengunjung pada situs web ini. Informasi tersebut kami gunakan
                                untuk mengoptimalkan pengalaman pengguna dengan menyesuaikan konten halaman web kami.
                            </p>
                            <p><b> IP Addresses</b>
                                <br>Kami menyimpan IP (Internet Protocol) address, atau lokasi komputer Anda di
                                Internet, untuk keperluan administrasi sistem dan troubleshooting. Kami menggunakan IP
                                address Anda secara keseluruhan (agregat) untuk mengetahui lokasi-lokasi yang mengakses
                                situs kami.</p>
                            <p><b> Log Files</b>
                                <br>Log Files, atau Data Log hanya digunakan dalam bentuk agregat (keseluruhan) untuk
                                menganalisa penggunaan web kami.</p>
                            <p><b> Akses ke atau Perbaikan Data Pribadi Anda</b>
                                <br>Ketika Anda memberikan Data Pribadi Anda kepada Kami, mohon Anda pastikan datanya
                                akurat dan lengkap. Jika ada kesalahan pada data yang Anda berikan kepada kami,
                                diharapkan Anda login ke akun milik Anda pada Situs Kami dan segera memperbaiki
                                informasi yang dianggap salah. Selain itu, harap perbaharui Data Pribadi Anda jika
                                terdapat perubahan.
                                Jika Anda gagal dalam memperbaiki kesalahan atau melakukan segala bentuk perubahan pada
                                Data Pribadi yang telah berikan melalui Situs (web) kami, Anda dapat mengingirimkan
                                permintaan Anda kepada kami sesuia dengan kontak yang tertera pada halaman ini, namun
                                Kami mungkin membebani Anda biaya yang wajar untuk untuk biaya tambahan dalam menanggapi
                                permintaan tersebut. Untuk melindungi privasi dan keamanan Anda, kami akan memverifikasi
                                identitas Anda sebelum memberikan akses atau melakukan perubahan pada Data Pribadi Anda.
                                Kami akan berusaha menjawab permintaan untuk akses atau perbaikan Data Pribadi Anda
                                sesegera mungkin, kecuali berlaku pengecualian.</p>
                            <p><b>Melindungi Data Pribadi Anda</b>
                                <br>Kami melindungi Data Pribadi Anda di bawah kepemilikan atau kendali kami dengan
                                mempertahankan pengaturan keamanan yang wajar, termasuk prosedur fisik, teknis dan
                                organisasi, untuk mencegah akses, pengumpulan, penggunaan, pengungkapan, penyalinan,
                                modifikasi, penghapusan yang tidak sah atau risiko yang sama atau berhubungan.</p>
                            <p><b>Tautan ke Situs Lain</b>
                                <br>Situs (web) kami dapat berisi tautan ke situs-situs lain yang, namun setelah Anda
                                menggunakan tautan tersebut untuk meninggalkan situs kami, Anda harus mengetahui bahwa
                                kami tidak memiliki kendali atas situs (web) lain tersebut. Harap diketahui bahwa kami
                                tidak bertanggung jawab atas praktik privasi situs (web) lain. Oleh karena itu, Kami
                                menyarankan Anda untuk membaca pernyataan privasi dari masing-masing situs (web) yang
                                Anda kunjungi yang mengumpulkan informasi pribadi.</p>
                            <p><b>Pendaftaran dan Keanggotaan</b>
                                <br>Situs ini memungkinkan Anda untuk membuat satu akun pengguna dengan mendaftar
                                keanggotaan, sesuai dengan data yang Anda berikan. Dengan memberikan data, mendaftar,
                                dan membuat akun, Anda menjamin bahwa:

                                Informasi tentang Anda adalah benar dan akurat, terkini dan lengkap sebagaimana
                                diperlukan dalam formulir pendaftaran di Situs (web) (“Data Pendaftaran”);

                                Anda akan memperbarui Data Pendaftaran ini agar selalu benar, akurat dan lengkap;

                                Selanjutnya, Anda setuju bahwa Kami tidak bertanggung jawab atas kehilangan atau
                                kerusakan yang mungkin diderita oleh Kami, Anda atau pihak ketiga manapun, yang
                                mengalami kerugian atau kerusakan tersebut disebabkan oleh ketidakakuratan dan/atau
                                tidak lengkapnya informasi yang diberikan oleh Anda.

                                Setelah mendaftar, Anda akan menerima kata sandi dan identifikasi pengguna (“Nama
                                pengguna”). Anda bertanggung jawab untuk menjaga kerahasiaan kata sandi dan Nama
                                pengguna sesuai dengan yang Anda berikan, dan Anda bertanggung jawab penuh atas semua
                                kegiatan terkait termasuk atas kepada Nama pengguna dan/atau kata sandi.

                                Anda hanya dapat menggunakan satu nama pengguna dan kata sandi pada satu waktu dan tidak
                                diperbolehkan untuk menggunakan lebih dari satu nama pengguna. Kata sandi Anda hanya
                                untuk Anda gunakan sendiri, dan Anda setuju dan memahami untuk benar-benar merahasiakan
                                kata sandi Anda.

                                Anda setuju untuk segera memberitahukan Kami tentang penggunaan kata sandi atau akun
                                yang tidak sah atau pelanggaran keamanan lainnya.

                                Untuk keamanan yang lebih bagus, harap pastikan bahwa Anda logout atau keluar dari akun
                                setelah setiap kali selesai menggunakan Situs (web) ini.

                                Anda setuju bahwa Kami tidak akan bertanggung jawab atas setiap kerugian atau kerusakan
                                yang diderita oleh kami, Anda atau pihak ketiga yang timbul akibat kegagalan Anda untuk
                                mematuhi ketentuan ini.</p>
                                <p><b> Persetujuan Perubahan Kebijakan Privasi</b>
                                <br>Dengan menggunakan Situs (web) atau layanan yang kami sediakan, Anda setuju dengan pengumpulan, penggunaan, pengunkapan dan pengolahan Data Pribadi Anda sebagaimana diatur dalam Kebijakan Privasi ini.

                                Jika Anda menggunakan layanan kami Lebih lanjut, kami berhak mengumpulkan, menggunakan, mengungkap dan memproses Data Pribadi Anda sesuai dengan Kebijakan Privasi ini.

                                Kami juga berhak dari waktu ke waktu dan tidak terbatas untuk mengubah isi kandungan sebagian atau secara keseluruhan dalam Kebijakan Privasi ini baik termasuk pada Situs ini, dan kami tidak wajib untuk memberitahukan kepada Anda.</p>
                                <p><b>Urutan Prioritas</b>
                                <br>Jika Anda telah menyetujui seluruh Persyaratan Situs (web) Kami, dan apabila dalam terdapat perbedaan antara Persyaratan Situs (web) dan Kebijakan Privasi ini, maka Persyaratan Situs Web yang akan berlaku.</p>
                                <p><b>Kepatuhan pada Proses Hukum</b>
                                <br>Kami dapat menyampaikan informasi pribadi jika diperintahkan oleh hukum dan/atau untuk (1) untuk kepentingan hukum atau proses pengadilan; (2) melindungi dan mempertahankan hak cipta, hak milik kami dan hak-hak lainnya; (3) melindungi terhadap penyalahgunaan atau penggunaan tanpa ijin dari situs (web) kami; atau (4) melindungi keamanan pribadi atau properti atas pengguna kami atau publik (di antara hal lainnya, hal ini berarti jika Anda memberikan informasi palsu atau berpura-pura menjadi orang lain, informasi mengenai diri Anda dapat kami sampaikan sebagai bagian dari penyelidikan atas tindakan Anda).</p>
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
