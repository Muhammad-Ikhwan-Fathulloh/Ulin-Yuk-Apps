@extends('landingpage::layouts.master')
@section('content')
<!-- Destinasi Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Destinasi Wisata Bandung</h4>

        </div>
        <h1 class="display-5 mb-4">Wisata Alam </h1>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('img')}}/destinasi/caringin tilu.png" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Caringin Tilu</h3>
                        <p class="mb-4 teks">Nama Caringin Tilu sendiri berasal dari bahasa Sunda yang artinya tiga beringin. Hal ini karena dulunya terdapat tiga pohon beringin yang tumbuh di daerah ini. Namun, seiring berjalannya waktu, hanya tersisa satu pohon beringin yang bertahan.</p>
                        <br />
                        <p class ="mb-4 teks">Tempat favorit wisatawan di kawasan wisata ini yaitu Bukit Moko. Dimana di sana tersedia banyak kafe dan tempat makan yang siap menemani libur santai wisatawan. Siang hari, sajian pemandangan alam indah sedangkan malam hari saatnya berganti pemandangan lampu kota.</p>
                        <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('img')}}/destinasi/curug cilengkrang.png" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Curug Cilengkrang</h3>
                        <p class="mb-4 teks">Curug Cilengkrang adalah salah satu objek wisata alam yang ada di Bandung. Curug (bahasa sunda) artinya air terjun, sedangkan Cilengkrang di ambil dari bentuk batu dimana air terjun ini berasal. Bila diperkotaan Anda jarang menemukan pepohonan yang sejuk untuk berteduh dari panasnya sengatan matahari, di kawasan wisata ini Anda akan menemukan keindahan alam luar biasa dari Curug Cilengkrang.</p>
                        <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('img')}}/destinasi/air terjun cipanji.png" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Air Terjun Cipanji</h3>
                        <p class="mb-4 teks">Curug atau Air Terjun Cipanji terletak di kaki gunung, merupakan bagian dari tujuh air terjun yang ada di Gunung Cipanji. Keunikan Curug Cipanji adalah air terjunnya yang bertingkat-tingkat dengan ketinggian paling atas yaitu sekitar 25 meter. Di tingkat terdasar ada curug yang tingginya 6 meter dengan kemiringan sekitar 45 derajat. Pada tingkatan paling akhir Curug Cipanji, dinding air terjunnya lebih menyerupai lintasan miring dengan permukaan yang cukup rata sehingga lebih menyerupai perosotan dibandingkan dinding air terjun yang berbentuk vertikal pada umumnya.</p>
                        <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>

            <h1 class="display-5 mb-4">Wisata Budaya </h1>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('img')}}/destinasi/candi bojongemas.png" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Candi Bojongemas</h3>
                        <p class="mb-4 teks">Candi Bojongemas yang berada di Kampung Bojongemas, Desa Bojongemas, Kecamatan Solokanjeruk, Kabupaten Bandung, belum pernah dilakukan penelitian maksimal, sehingga tidak ada data mengenai kapan pertama kali candi tersebut dibangun. Lokasi candi yang berada di sekitar Daerah Aliran Sungai (DAS) Citarum ini, di dalamnya terdapat tumpukan batu berbagai ukuran, mulai dari berbentuk bundar, kubus, hingga berbentuk balok. </p>
                        <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('img')}}/destinasi/rumah adat cikondang.png" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Rumah Adat Cikondang</h3>
                        <p class="mb-4 teks">Rumah adat Cikondang merupakan rumah adat yang dimiliki oleh Bapak Anom Samsa, berada di area seluas 3 hektar. Menurut tradisi, rumah adat Cikondang asal muasalnya dari Desa Lamajang dan diperkirakan telah berusai 200 tahun. Sebuah peristiwa kebakaran besar yang terjadi sekitar tahun 1942 telah menghancurkan perkampungan adat Cikondang dan hanya menyisakan satu rumah yang sekarang dijadikan sebagai rumah adat penduduk sekitar.</p>
                        <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('img')}}/destinasi/pemakaman boscha.png" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Pemakaman Boscha</h3>
                        <p class="mb-4 teks">Tempat peristirahatan terakhir Karel Albert Rudolf Bosscha atau yang sering dikenal dengan Tuan Bosscha berada tepat di tengah-tengah perkebunan Malabar, tak jauh dari Mess Bosscha, dan Gunung Nini. Hal ini sesuai dengan pesan terakhir Bosscha yang ingin dimakamkan di tengah-tengah perkebunan. Bosscha yang lahir pada 15 Mei 1865 di Den Haag, wafat di Malabar, 26 November 1928.</p>
                        <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>

            <h1 class="display-5 mb-4">Wisata Buatan/Rekreasi </h1>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('img')}}/destinasi/cimanggu.png" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Cimanggu</h3>
                        <p class="mb-4 teks">Air Panas Cimanggu menjadi salah satu objek wisata di Bandung yang menawarkan berbagai macam daya tarik yang dijamin mengagumkan. Tempat wisata yang satu ini juga dikenal dengan nama Cimanggu Natural Hot Spring. Destinasi wisata ini bisa menjadi salah satu rekomendasi tempat liburan bersama keluarga saat ke Bandung. Selain menenangkan tubuh dan pikiran, Anda pun bisa membuat pengalaman liburan kali ini semakin menyenangkan dan berkesan.</p>
                        <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('img')}}/destinasi/bandung indah waterpark.png" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Bandung Indah Waterpark</h3>
                        <p class="mb-4 teks">Sebagai objek wisata kolam renang, Bandung Indah Waterpark menyajikan berbagai fasilitas menarik untuk digunakan. Salah satunya adalah pipa melingkar dengan air, kolam renang sedalam 1,2 hingga 1,7 meter, serta Lazy River dimana kamu bisa berenang di bawah jembatan penyeberangan. </p>
                        <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('img')}}/destinasi/valley resort.png" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Valley Resort</h3>
                        <p class="mb-4 teks">Buat Anda yang sedang mencari hotel terbaik, The Valley Resort Hotel bisa jadi pilihan yang tepat. Hotel ini menjadi tempat yang sangat tepat bagi Anda untuk menikmati indahnya pemandangan alam yang masih hijau dan asri. Tak hanya itu, bahkan udaranya juga sangat segar dan sejuk. Lokasinya yang strategis dan memiliki akses yang mudah untuk menuju berbagai macam objek wisata terbaik, membuat The Valley Resort Hotel ini sangat direkomendasikan bagi Anda yang ingin menghabiskan waktu liburan bersama dengan keluarga di kota Kembang.</p>
                        <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>

            <h1 class="display-5 mb-4">Wisata Religi </h1>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('img')}}/destinasi/daarut tauhid.png" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Daarut Tauhid</h3>
                        <p class="mb-4 teks">Daarut Tauhiid (sering juga ditulis Daarut Tauhid) merupakan salah satu pondok pesantren yang sangat populer di Indonesia. Pondok pesantren yang didirikan pada tanggal 4 September 1990 ini merupakan pesantren yang berada di bawah pimpinan kiai kondang KH Abdullah Gymnastiar, atau akrab disapa dengan AA Gym.</p>
                        <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('img')}}/destinasi/masjid raya bandung.png" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Masjid Raya Alun-alun</h3>
                        <p class="mb-4 teks">Masjid Raya Bandung Jawa Barat sebelumnya bernama Masjid Agung didirikan pertama kali pada tahun 1812. Masjid Agung Bandung dibangun bersamaan dengan dipindahkannya pusat kota Bandung dari Krapyak, sekitar sepuluh kilometer selatan kota Bandung ke pusat kota sekarang. Masjid ini pada awalnya dibangun dengan bentuk bangunan panggung tradisional yang sederhana, bertiang kayu, berdinding anyaman bambu, beratap rumbia dan dilengkapi sebuah kolam besar sebagai tempat mengambil air wudhlu. Air kolam ini berfungsi juga sebagai sumber air untuk memadamkan kebakaran yang terjadi di daerah Alun-Alun Bandung pada tahun 1825.</p>
                        <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item d-flex position-relative text-center h-100">
                    <img class="bg-img" src="{{asset('img')}}/destinasi/gereja katedral.png" alt="">
                    <div class="service-text p-5">
                        <img class="mb-4" src="{{asset('img')}}/icons/icon-7.png" alt="Icon">
                        <h3 class="mb-3">Gereja Katedral</h3>
                        <p class="mb-4 teks">Gereja Katedral Bandung, atau Katedral Santo Petrus, adalah sebuah gereja yang terletak di Jalan Merdeka, Babakanciamis, Sumurbandung, Bandung, Indonesia. Bangunan ini dirancang oleh Charles Prosper Wolff Schoemaker dan bergaya arsitektur neo-Gothic akhir. Dilihat dari atas, bentuknya menyerupai salib yang simetris.</p>
                        <a class="btn" href="/detail-page.html"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!-- Destinasi End -->
@endsection
