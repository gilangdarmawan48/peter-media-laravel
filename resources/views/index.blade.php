@extends('layouts.master')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@section('title', 'Halaman Utama')</title>
</head>
<body>
    @section('navbar')
    <div class="row">
        <div class="leftcolumn">
            @section('content_left')
            @foreach($news as $n)

                <div class="card">
                    <h2>{{ $n->judul }}</h2>
                    <h5>Upload, {{ $n->created_at }} | {{ $n->nama_kategori }}</h5>
                    <img src="img/berita-dikuasai-pemodal-besar.jpg" alt="" style="border-radius: 20px;">
                    <hr>
                    <p>{{ $n->isi }}</p>
                </div>
            @endforeach
                {{-- <div class="card">
                    <h2>Sengkarut Perunggasan, DPR Minta Pemerintah Perhatikan Nasib Peternak Rakyat</h2>
                    <h5>Andina Librianty, 06 Mei 2021</h5>
                    <img src="img/berita-sengkarut-perunggasan.jpg" alt="" style="border-radius: 20px;">
                    <hr>
                    <p>Anggota Komisi IV DPR RI dari Fraksi PKS, Johan Rosihan, mengaku prihatin atas carut-marutnya persoalan unggas di Tanah Air. Padahal seharusnya persoalan perunggasan nasional dapat dikelola dengan baik karena kebutuhan produksi daging ayam sebagai salah satu sumber protein terus meningkat.

                    Johan mengatakan ternyata daya saing unggas di Indonesia sangat rendah akibat biaya pakan yang sangat mahal.
                    
                    “Atas situasi ini saya mendesak Kementan (Kementerian Pertanian) agar memiliki kebijakan yang lebih berpihak kepada peternak rakyat, dan lebih memperhatikan nasib peternak rakyat yang semakin terpuruk akibat kebijakan pemerintah saat ini,” kata Johan dikutip dari keterangannya pada Kami (6/5/2021).
                    
                    Ia pun mengimbau Kementan khususnya dari Ditjen Peternakan dan Kesehatan Hewan (PKH) agar membantu peternak rakyat, supaya tidak mengalami kerugian yang sangat besar akibat harga sarana produksi peternakan sangat tinggi serta harga jual yang cenderung murah.
                    
                    “Saya tekankan agar pemerintah jangan selalu berpihak pada perusahaan besar, namun perhatikanlah kondisi peternak rakyat yang semakin tertekan akibat kebijakan yang salah, seperti pemusnahan unggas dan ketergantungan impor pakan,” tutur Johan.
                    
                    Kementan pun didesak segera membuat kebijakan yang memberikan perlindungan kepada peternak rakyat, dan memiliki model pemberdayaan peternak sehingga memiliki daya saing dalam tata niaga perunggasan nasional.
                    
                    Johan mendesak agar pemerintah menyiapkan strategi untuk menurunkan biaya pakan dengan potensi lokal yang kita miliki. “Perlu terobosan agar kita tidak selalu tergantung dengan bahan baku impor untuk urusan pakan ini,” lanjut Johan.</p>
                    <p>Ia melihat kebijakan pemerintah saat ini mengakibatkan kondisi peternakan di Indonesia semakin terpuruk.

                    “Hal ini ditandai dengan semakin menurunnya jumlah peternak mandiri, lemahnya akses peternak terhadap sumberdaya peternakan serta banyaknya usaha peternak rakyat yang bangkrut dan usahanya mati. Hal ini sangat memprihatinkan karena kurangnya keberpihakan pemerintah terhadap usaha peternakan rakyat,” tutur Johan.
                    
                    Pemerintah pun diharapkan memiliki kontrol kuat terhadap perusahaan unggas yang terintegrasi besar, memiliki usaha dari hulu sampai hilir, dan yang kekuatan produksinya dipasarkan di berbagai pasar tradisional sehingga mematikan usaha peternak kecil mandiri.
                    
                    “Harus ada keadilan dan perlindungan pemerintah terhadap usaha peternak mandiri demi daya saing perunggasan nasional yang lebih baik. Saya mengusulkan agar peternak rakyat dijadikan sebagai basis ekonomi usaha ternak agar kesejahteraan masyarakat peternak semakin meningkat”, ungkap Johan.</p>
                </div>
                <div class="card">
                    <h2>Perkenalkan Apartemen Ayam 4.0, Konsep Peternakan Berbasis Teknologi</h2>
                    <h5>Huyogo Simbolon, 08 Maret 2021</h5>
                    <img src="img/berita-perkenalkan-apartemen.jpg" alt="" style="border-radius: 20px;">
                    <hr>
                    <p>Gubernur Jawa Barat Ridwan Kamil meninjau peternakan ayam yang memanfaatkan teknologi 4.0 di Desa Cibodas, Kutawaringin, Kabupaten Bandung, Minggu (7/3/2021). Emil, sapaan akrabnya menyebut peternakan tersebut dengan apartemen ayam karena konsep yang ditawarkan berbeda dari peternakan pada umumnya.

                    Diungkapkannya, apartemen ayam ini memiliki lima lantai dengan struktur yang kokoh seluas total 40 meter persegi.
                    
                    "Saya melihat sebuah terobosan visi bertani atau beternak dengan teknologi 4.0 ini sebuah struktur 40 meter persegi berlantai lima," katanya.
                    
                    Apartemen ayam ini dapat menampung hingga lima ribu ayam. Peternakan yang dikembangkan oleh warga ini terlihat bersih dan tidak menimbulkan bau.
                    
                    "Persepsi bahwa peternakan ayam itu harus satu lantai, jorok, bau, sekarang hilang oleh teknologi karena semuanya dengan 4.0," ujarnya.
                    
                    Untuk menaburkan makanan dan minum untuk ayam pun diatur oleh sebuah alat yang dapat dikendalikan dari jarak jauh. Tak hanya itu, kotoran ayam juga langsung difermentasi sehingga menghasilkan nilai ekonomi.
                    
                    "Meneteskan minuman dan kasih makanan ayam pakai 4.0, kotorannya juga ditarik oleh sebuah motor yang diatur oleh 4.0. Nanti kotorannya difermentasi jadi nilai ekonomi juga," tutur Emil.</p>
                    <p>Emil mengatakan, teknologi apartemen ayam ini rencananya akan diaplikasikan pada program petani milenial. Nantinya, peternakan ayam akan digarap oleh para pemuda dan hasil panennya sudah dipastikan akan dibeli.

                    "Jadi program petani milenial ini tidak usah cari pembeli tapi dimulai dari pembelinya sanggup berapa," tuturnya.
                    
                    Emil mengatakan, pihaknya sudah menjalin kesepakatan dengan salah satu offtaker (pembeli) yang siap membeli hasil panen sekitar dua juta ekor ayam per bulan.
                    
                    "Pemda Provinsi Jabar sudah deal dengan salah satu offtaker sejumlah hampir 2 juta ayam per bulan," ucapnya.
                    
                    Untuk penyediaan dua juta ekor ayam tersebut dibutuhkan 400 apartemen ayam yang akan disebar di berbagai titik dengan harga setiap apartemen ayam sekitar Rp150 juta.
                    
                    "Kurang lebih membutuhkan 400-an titik seperti ini dengan modal Rp150 jutaan," kata Emil.
                    
                    Emil optimistis program petani milenial dapat mengurangi pengangguran, mewujudkan kemandirian ekonomi, dan menjaga ketahanan pangan.
                    
                    "Insya Allah, setelahnya bisa hidup mandiri, tidak usah selalu jadi karyawan, kita kembali ke desa untuk berbisnis pertanian peternakan," ucapnya.</p>
                </div>
                <div class="card">
                    <h2>Rumah Potong Siap Beroperasi, WMU Bakal Produksi 12 Ribu Ekor Ayam per Jam</h2>
                    <h5>Liputan6.com, 22 Februari 2021 </h5>
                    <img src="img/berita-rumah-potong.jpg" alt="" style="border-radius: 20px;">
                    <hr>
                    <p>Telah rampung, Rumah Potong Ayam (RPA) PT Widodo Makmur Unggas Tbk (WMUU) siap produksi 12.000 ekor ayam per jam. Selain tingkatkan kapasitas produksi, beroperasinya RPA ini sejalan dengan strategi usaha Perseroan yang fokus pada segmentasi bisnis RPA.

                    Direktur Utama Widodo Makmur Unggas, Ali Mas'adi, mengatakan RPA baru WMU ini akan memproduksi ayam 10x lebih banyak daripada RPA WMU terdahulu.
                    
                    Diketahui, RPA WMU terdahulu berada di Jambakan Jawa Tengah memiliki kapasitas produksi 1.500 ekor ayam per jam atau setara 6.500 ton ayam per tahun. Sementara RPA baru WMU yang terletak di Wonogiri ini diproyeksikan mampu memotong 50,4 juta ekor per tahunnya. Pemfokusan strategi usaha pada segmentasi RPA sendiri salah satunya didukung oleh baiknya kinerja karkas yang menjadi sumber tertinggi laba perusahaan.
                    
                    Per 30 Juni 2020 lalu (audited), produk Carcass atau Karkas menjadi produk dengan penjualan tertinggi Perseroan, dengan total penjualan sekitar Rp446 miliar atau sekitar 87,7 persen dari seluruh total penjualan Perseroan, yaitu sekitar Rp508 miliar. Adapun Per 30 Juni 2020, Perseroan mampu memproduksi Karkas hingga 16 ribu ton.
                    
                    "Beroperasinya RPA baru WMU ini siap dorong total produksi RPA WMU hingga 110.740 ton di tahun 2021," kata Ali di Jakarta, Senin (22/2/2021).
                    
                    WMU optimis untuk terus torehkan kinerja yang positif di tahun 2021 sebagaimana perusahaan berhasil mempertahankan kinerja positif di tahun 2020.
                    
                    Tercatat di desember tahun 2020, perusahaan berhasil catatkan pendapatan Rp 1,1 triliun (unaudited). Jumlah ini meningkat tajam dari capaian pendapatan perusahaan di tahun 2019 senilai Rp 576,72 miliar.</p>
                    <p>Seperti diketahui, pembangunan teranyar ini diprediksi akan menjadi RPA terbesar di Indonesia ini, WMU didukung oleh sesama lini bisnis yang ada di dalam Widodo Makmur Perkasa Group. Adapun untuk pembangunan RPA ini WMU gelontorkan Rp 600 Miliar.

                    Untuk capai proyeksi produksi, WMU gunakan sistem GMP dan menggunakan peralatan pemotongan tercanggih, sehingga proses pemotongan ayam berjalan dengan lancar, produktif, efisien dan terjamin higienitasnya sehingga kualitas Karkas yang sampai ke tangan konsumen tetap terjaga.
                    
                    Perusahaan optimis pemfokusan bisnis di sektor RPA memiliki prospek yang baik didorong oleh belum terpenuhinya permintaan pelanggan atau offtaker yang sampai dengan saat ini masih belum sepenuhnya terealisasi. Oleh karena itu, Perseroan memiliki potensi pertumbuhan yang besar di dalam segmentasi bisnis ini dikarenakan tingkat pemenuhan atas permintaan pelanggan masih belum mencapai seratus persen.
                    
                    RPA WMU sendiri memproduksi setidaknya 7 jenis hasil olahan, diantaranya; Karkas (Carcass), Potongan (Parting), Daging Ayam tanpa Tulang (Boneless), Daging Giling/Bubur Daging Ayam (Mechanically Deboned Meat) , Kulit (Skin) dan Produk Samping (Ceker, Kepala, Ati Ampela, Usus, Bulu Ayam, etc).</p>
                </div>
                <div class="card">
                    <h2>Korea Selatan Lockdown Seluruh Peternakan Ayam Akibat Flu Burung</h2>
                    <h5>Tommy Kurnia, 27 Desember 2020</h5>
                    <img src="img/berita-korea-selatan.jpg" alt="" style="border-radius: 20px;">
                    <hr>
                    <p>Pemerintah Korea Selatan mengeluarkan perintah penghentian gerakan di peternakan ayam selama 24 jam akibat kasus flu burung. Ini adalah perintah lockdown kedua bagi peternakan pada Desember 2020.

                    Efek dari kebijakan ini adalah semua gerakan kendaraan dan personel dari peternakan unggas akan dihentikan. Pihak berwenang akan melakukan disinfeksi selama pelarangan gerak berlangsung.
                    
                    Menurut laporan Yonhap, Minggu (27/12/2020), orang yang berani melanggar dapat dihukum penjara hingga satu tahun atau denda 10 juta won (Rp 128,2 juta).
                    
                    Pekan lalu, Korea Selatan mencatat tambahan tiga kasus flu burung yang sangat menular di peternakan. Total kasus sejauh ini mencapai 22 dan menimbulkan kekhawatiran penyebaran skala nasional.
                    
                    Kementerian Pertanian, Makanan, dan Pedesaan berkata menemukan flu burung strain H5N8 di peternakan unggas di Yongin, Provinsi Gyeonggi. Lokasinya berada di sebelah selatan kota Seoul. Sejak November, Korsel telah memusnahkan 6,3 juta unggas akibat laporan infeksi H585 di peternakan.</p>
                    <p>Di tengah pandemi Virus Corona COVID-19, wabah flu burung A/H5N6 atau A H5N6 dilaporkan terdeteksi di Provinsi Quang Ninh, Vietnam utara. Menyebabkan hampir 1.000 unggas terpaksa dimusnahkan, demikian dilaporkan Kantor Berita Vietnam pada Rabu 23 Desember 2020.

                    Laporan Xinhua News, Kamis 24 Desember 2020, dijelaskan bahwa wabah flu burung itu terdeteksi pada pertengahan Desember di Komune Song Khoai. 
                    
                    Menurut Departemen Kesehatan Hewan dan Ternak provinsi tersebut, wabah itu merupakan wabah flu burung keempat yang dilaporkan di Provinsi Quang Ninh tahun ini.
                    
                    Wabah tersebut merebak saat para peternak lokal gagal mengendalikan risiko penularan dan tidak mendaftarkan ternak baru mereka, demikian dilansir kantor berita Vietnam itu.</p>
                </div>
                <div class="card">
                    <div class="center">
                    <div class="pagination">
                    <a href="#">&laquo;</a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">&raquo;</a>
                    </div>
                    </div>
                </div> --}}
                
            @endsection
        </div>
        <div class="rightcolumn">
            @section('content_right')
                <div class="card">
                    <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    </div>
                </div>
                <div class="card">
                    <h3>Hot News</h3>
                    <div class="card-sidebar">
                    <p>Bisnis</p>
                    <p><a href="">BLT Minyak Goreng Habiskan Rp6,9 Triliun</a></p>
                    </div>
                    <div class="card-sidebar">
                    <p>Ekonomi</p>
                    <p><a href="">Demo 11 April Digeser ke DPR Mal di Senayan Beroperasi</a></p>
                    </div>
                    <div class="card-sidebar">
                    <p>Ekonomi</p>
                    <p><a href="">Terkuak Sosok Lord Rangga Sunda Empire, Ternyata Mantan Ketua Dewan Bawang</a></p>
                    </div>
                    <div class="card-sidebar">
                    <p>Bisnis</p>
                    <p><a href="">Sederet Fakta Demo Hari ini 11 April 2022</a></p>
                    </div>
                    <div class="card-sidebar">
                    <p>Ekonomi</p>
                    <p><a href="">Lebaran 2022 Bisa Dongkrak Ekonomi Daerah 25 Persen</a></p>
                    </div>
                    <div class="card-sidebar">
                    <p>Ekonomi</p>
                    <p><a href="">BPKN Tagih Mendag Bikin Manuver Turunkan Harga Pangan</a></p>
                    </div>
                    <div class="card-sidebar">
                    <p>Bisnis</p>
                    <p><a href="">Bali Jadi Rumah Kedua Turis Australia</a></p>
                    </div>
                    <div class="card-sidebar">
                    <p>Bisnis</p>
                    <p><a href="">Orang Terkaya Dunia Elon Musk Sebut Manusia Bisa Hidup Selamanya Begini...</a></p>
                    </div>
                    <div class="card-sidebar">
                    <p>Bisnis</p>
                    <p><a href="">6 Posisi Lowongan Kerja Honda Prospect Motor, Minat Tidak?</a></p>
                    </div>
                    <div class="card-sidebar">
                    <p>Bisnis</p>
                    <p><a href="">KAI Pastikan Keandalan LRT Jabodetabek Jelang Soft Launching...</a></p>
                    </div>
                </div>
            
            @endsection
        </div>
    </div>
    
    @section('footer')
    
</body>
</html>
